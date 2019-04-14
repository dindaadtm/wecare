
<nav class="navbar navbar-expand-sm fixed-top navbar-dark" style="background-color: rgba(0, 0, 0, 0.9)">
    <div class="container">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end"></ul>
            <ul class="navbar-nav w-100 justify-content-center">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="/">{{__('Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">{{__('About')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">{{__('Contact')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto w-100 justify-content-end">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
