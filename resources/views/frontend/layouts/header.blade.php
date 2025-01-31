<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <div class="d-flex gap-1">
            <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-books-logo-image_79985.jpg" style="height:38px; width:81px;">
<a class="navbar-brand" href="#">NCMT Online Library Management System</a>
        </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('front.index')}}">HOME</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              COURSES
            </a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="{{route('csit')}}">CSIT</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('bca')}}">BCA</a></li>
              <li><hr class="dropdown-divider"></li>

            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('feedback')}}">FEEDBACK</a>
          </li>


          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> <!-- Add an icon for user -->
                <span>{{ Auth::user()->name }}👋</span> <!-- User's name -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg">
                <li><a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right"></i> <!-- Add a logout icon -->
                    Logout
                </a></li>
            </ul>
        </li>
          @else
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LOGIN
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('studentLogin') }}">STUDENT LOGIN</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('adminLogin') }}">TEACHER LOGIN</a></li>
                  <li><hr class="dropdown-divider"></li>
              </ul>
          </li>
          @endauth

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
