<div>
    <nav class="navbar navbar-fixed-top navbar-expand-sm navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="assets/img/logo_black.png" alt="" width="120px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold border-bottom mr-3" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="listDropdown" class="nav-link dropdown-toggle border-bottom font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                List Product
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="listDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('product') }}">Semua Product</a></li>
                            </ul>
                        </li>
                        @if (auth()->user()->role == "admin")
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold border-bottom mr-3" href="{{ url('/admin') }}">Halaman Admin</a>
                            </li>  
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item border-bottom">
                                    <a class="nav-link font-weight-bold" href="login">Login / Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</div>
