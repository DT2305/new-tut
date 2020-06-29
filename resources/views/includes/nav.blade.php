<header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand absolute" href="/"><img src="/img/ctut_logo.png" alt=""
                                                                                       style="width: 80px; height: 80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="courses.html">HTML</a>
                            <a class="dropdown-item" href="courses.html">WordPress</a>
                            <a class="dropdown-item" href="courses.html">Laravel</a>
                            <a class="dropdown-item" href="courses.html">JavaScript</a>
                            <a class="dropdown-item" href="courses.html">Python</a>
                        </div>

                    </li>

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="dropdown05">--}}
{{--                            <a class="dropdown-item" href="#">HTML</a>--}}
{{--                            <a class="dropdown-item" href="#">WordPress</a>--}}
{{--                            <a class="dropdown-item" href="#">Laravel</a>--}}
{{--                            <a class="dropdown-item" href="#">JavaScript</a>--}}
{{--                            <a class="dropdown-item" href="#">Python</a>--}}
{{--                        </div>--}}

{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="blog.html">Blog</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav absolute-right">
                    @if(!Auth::check())
                        <li>
                            <a href="{{ route('login') }}">Đăng nhập</a> / <a href="{{ route('register') }}">Đăng ký</a>
                        </li>
                    @else
                        <li>
                            {{ Auth::user()->name }} / <a href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Đăng xuất</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- END header -->
