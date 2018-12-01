      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            
            <a class="navbar-brand" href="{{ url('/') }}">
              <i class="fab fa-centercode"></i> Blog 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fas fa-question-circle"></i> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services"><i class="fas fa-eye"></i> Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts"><i class="fab fa-blogger-b"></i> Blog</a>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> &nbsp {{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> &nbsp{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                               
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <i class="fas fa-user-tag"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                   <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>
                                <a id="navbarDropdown" class="dropdown-item" href="/dashboard"><i class="fas fa-clipboard-list"></i> Dashboard</a>

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
