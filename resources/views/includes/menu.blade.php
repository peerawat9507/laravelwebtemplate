<nav class="navbar navbar-expand-md navbar-dark fixed-top mynav">
 
      <div class="container">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('service')}}">service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('conntact')}}">conntact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>