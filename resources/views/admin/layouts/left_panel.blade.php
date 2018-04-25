<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(\App\Helpers\Access::hasRouteAccess('admin.dashboard.index'))
                    <li class="active">
                        <a href="{{route('admin.dashboard.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard
                        </a>
                    </li>
                @endif
                <h3 class="menu-title">Basic</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="menu-icon fa fa-laptop"></i>Content</a>
                    <ul class="sub-menu children dropdown-menu">
                        @if(\App\Helpers\Access::hasRouteAccess('admin.category.view.index'))
                            <li><i class="fa fa-th-list"></i><a
                                        href="{{route('admin.category.view.index')}}">Categories</a></li>
                        @endif
                        @if(\App\Helpers\Access::hasRouteAccess('admin.news.index'))
                            <li><i class="fa fa-th-list"></i><a href="{{route('admin.news.index')}}">News articles</a></li>
                        @endif
                    </ul>
                </li>

                <h3 class="menu-title">Users and roles</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="menu-icon fa fa-laptop"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            @if(\App\Helpers\Access::hasRouteAccess('admin.users.index'))
                                <li><i class="fa fa-th-list"></i><a
                                            href="{{route('admin.users.index')}}">Users</a></li>
                            @endif
                        </ul>
                    </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->