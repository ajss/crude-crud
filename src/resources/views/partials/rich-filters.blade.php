<div class="form-inline">

    <button type="button" id="useRichFilters" class="btn btn-default btn-sm pull-right m-xs-t">
        <i class="fa fa-search"></i>
    </button>

    <%
    var setupRichFilters = setup.get('richFilters');
    for(var i in setupRichFilters) {
        var setupRichFilter = setupRichFilters[i];
    %>
        <div class="input-group m-xs-b m-xs-t">
            <span class="input-group-addon">
                <%- setupRichFilter.label %>
            </span>

            <input
                id="richFilterValue<%- setupRichFilter.name %>"
                class="form-control input-sm richFilterValue"
                value="<%- richFilters[setupRichFilter.name] %>"
                type="<%- setupRichFilter.type %>"
                placeholder="<%- setupRichFilter.label %>"
                data-name="<%- setupRichFilter.name %>"
                />

            <div class="input-group-btn">
                <button type="button" class="clearRichFilter btn btn-default btn-sm" data-name="<%- setupRichFilter.name %>">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    <% } %>

</div>