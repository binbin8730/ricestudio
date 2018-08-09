<header id="header" class="header">
    <div class="container">
        <h1 class="logo pull-left">
            <a href="{{ url('/') }}">
                <span class="logo-title">水稻</span>
            </a>
        </h1><!--//logo-->
        <nav id="main-nav" class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a href="{{ url('/') }}">首页</a></li>
                    <li class="nav-item"><a href="tour.html">浏览</a></li>
                    <li class="nav-item"><a href="pricing.html">价格</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="blog.html">博客 <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Home</a></li>
                            <li><a href="blog-single.html">Single Blog Post</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="email-templates/tempo-email-color-1.html">Email Template (10 Colour Options)</a></li>
                        </ul>
                    </li><!--//dropdown-->
                    <li class="nav-item"><a href="contact.html">联系我们</a></li>
                    @guest
                        <li class="nav-item">
                            <button type="button" class="login-trigger btn btn-link" data-toggle="modal" data-target="#login-modal"><a href="{{ route('login') }}">登录</a></button>
                        </li>
                        <li class="nav-item nav-item-cta last">
                            <button type="button" class="btn btn-cta btn-cta-primary" data-toggle="modal" data-target="#signup-modal"><a href="{{ route('register') }}">注册</a></button>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                               <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('users.edit', Auth::id())}}">
                                        编辑资料
                                    </a>
                                </li>
                                <li>
                                   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                       退出登录
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                   </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header>
