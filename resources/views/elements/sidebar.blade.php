<div class="left-side-menu">

    <div class="slimscroll-menu">

        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>
                @php
                    $activeClass = '';
                    $systemsetArr =['home'];
                    if(in_array(Route::currentRouteName(), $systemsetArr)){
                        $activeClass = 'active';
                    }
                @endphp

                <li>
                    <a href="{{ route('home') }}" class="nav-link {{ $activeClass }} ">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span>
                    </a>
                </li>
                @php
                    $activeClass = '';
                    $systemsetArr =['gallery-card'];
                    if(in_array(Route::currentRouteName(), $systemsetArr)){
                        $activeClass = 'active';
                    }
                @endphp
                <li>
                    <a href="{{ route('gallery-card') }}" class="nav-link {{ $activeClass }} ">
                       <i class="far fa-images"></i>
                        <span> Gallery</span>
                    </a>
                </li>

            </ul>

        </div>
        <div class="clearfix"></div>

    </div>


</div>
