<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
      <a class="navbar-brand nav-link {{ ($title === "Home") ?'active' : '' }}" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      @auth
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link {{ ($title === "ShowRooms") ?'active' : '' }}" aria-current="page" href="/showrooms-car">MyCar</a>
              </li>
          </ul>
      </div>
      @else
      @endauth


          <ul class="navbar-nav ms-auto">
                @auth
                <a href="/create-car" class="nav-link bg-light text-primary mx-3" style="border-radius:6px">Add Car</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-2 bg-light text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius:6px">
                      {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}"><i class="bi bi-person-fill-gear text-primary"></i> My Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right text-danger"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i></i> Login</a>
                </li>
                @endauth
            </ul>

      </div>
  </div>
</nav>