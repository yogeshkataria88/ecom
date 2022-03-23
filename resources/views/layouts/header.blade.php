<nav class="navbar navbar-default navbar-fixed-top be-top-header">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{url('/dashboard')}}" class="navbar-brand"></a><a href="javascript:void(0);" class="be-toggle-left-sidebar"><span
                        class="icon mdi mdi-menu"></span></a></div>
        <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img
                                src="{{url('img/avatar.png')}}" alt="Avatar"><span class="user-name">Admin</span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li>
                            <div class="user-info">
                                <div class="user-name">{{ Auth::user()->name }}</div>
                                <div class="user-position online">{{trans('app.available')}}</div>
                            </div>
                        </li>
                        <li><a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span
                                        class="icon mdi mdi-power"></span> {{trans('app.logout')}}</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>