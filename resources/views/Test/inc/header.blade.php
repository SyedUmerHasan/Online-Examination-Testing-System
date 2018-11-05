
<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <a href="#" class="standard-logo" data-dark-logo="/images/logo-dark.png"><img src="/images/logo.png"
                        alt="Canvas Logo"></a>
                <a href="#" class="retina-logo" data-dark-logo="/images/logo-dark@2x.png"><img src="/images/logo@2x.png"
                        alt="Canvas Logo"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li>
                        <a href="{{ url('tests') }}">
                            <div>All Tests</div>
                        </a>
                    </li>
                    @auth
                    <li> <a nohref>Welcome {{auth()->user()->name}}</a>
                        <ul>
                            <li>
                                <a href="
                                    {{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="ft-power"></i> 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endauth

                </ul>

                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>
