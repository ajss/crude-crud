<?php

namespace JanDolata\CrudeCRUD\Http\Requests;

use App\Http\Requests\Request;
use JanDolata\CrudeCRUD\Engine\CrudeInstance;

class ApiDeleteRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $crude = CrudeInstance::get($this->crudeName);

        if ($crude == null)
            return false;

        if ($crude->cannotView())
            return false;

        $model = $crude->getById($this->id);

        return $crude->canDelete($model);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}

