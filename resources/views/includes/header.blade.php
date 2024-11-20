<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="{{ url('views/home') }}">
       <!-- <img src="{{ asset('images/logo-vista.jpg') }}" alt="Vista Logo">Vista College -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('views/sign-in') }}"><i class="fas fa-user-plus"></i>Sign-in</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('views/home') }}"><i class="fas fa-box-open"></i>Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('views/late-fee') }}"><i class="fas fa-shopping-cart"></i>Check-out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('views/late-fees') }}"><i class="fas fa-dollar-sign"></i>Late return fees</a>
            </li>
        </ul>
    </div>
</nav>
