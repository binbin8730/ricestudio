<header id="header" class="header">
    <div class="container">
        <h1 class="logo pull-left">
            <a href="index.html">
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
                    <li class="nav-item"><button type="button" class="login-trigger btn btn-link" data-toggle="modal" data-target="#login-modal">登录</button></li>
                    <li class="nav-item nav-item-cta last">
                        <button type="button" class="btn btn-cta btn-cta-primary" data-toggle="modal" data-target="#signup-modal">注册</button>
                    </li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header>
