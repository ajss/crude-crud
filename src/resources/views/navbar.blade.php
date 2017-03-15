<?php
    $groupTrans = config('crude_navbar.groupTrans');
    $routeTrans = config('crude_navbar.routeTrans');

    $left = config('crude_navbar.left');
    $right = config('crude_navbar.right');

    $homeRoute = config('crude_navbar.homeRoute');

    $loginLogout = config('crude_navbar.loginLogout');

    $currentRouteName = Route::getCurrentRoute()->getName();
?>

<nav class="navbar navbar-default navbar-static-top crude-navbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route($homeRoute) }}">
                <div class="fa fa-home"></div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-nav">
                @foreach($left as $group)
                    @include('CrudeCRUD::navbar.group')
                @endforeach
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @foreach($right as $group)
                    @include('CrudeCRUD::navbar.group')
                @endforeach

                @if ($loginLogout)
                    @include('CrudeCRUD::navbar.login')
                @endif
            </ul>
        </div>
    </div>

    <div class="container hidden-xs m-t m-b">
        <div class="text-left">
            @foreach($left as $group)
                @include('CrudeCRUD::navbar.selected-group')
            @endforeach
        </div>

        <div class="text-right">
            @foreach($right as $group)
                @include('CrudeCRUD::navbar.selected-group')
            @endforeach
        </div>
    </div>
</nav>
