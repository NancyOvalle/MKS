<nav class="col-12 navbar navbar-expand-lg navbar-light" style="background-color: #FFCACA;">
  <img src="/assets/img/Logo.png" alt="Logo" height="45">


  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <div class="col-10" style="display: flex !important; justify-content: center;">
      <ul class="navbar-nav mr-center">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">{{ __('INICIO') }} <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COLECCION
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="">{{ __('HOMBRE') }}</a>
            <a class="dropdown-item" href="#">{{ __('MUJER') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">{{ __('NIÑOS') }}</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">{{ __('CONTACTO') }}</a>
        </li>
      </ul>
    </div>

    <div class="col-2" style="display: flex !important; justify-content: end;">
      <ul class="navbar-nav mr-right" style="display: flex !important; align-items: center !important;">
        <a>
          <i class="fa fa-shopping-cart"></i>
        </a>
        <li class="nav-item active">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
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
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </li>
      </ul>
    </div>
    </form>
  </div>
</nav>