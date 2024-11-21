<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="{{ url('views/home') }}">
       <!-- <img src="{{ asset('images/logo-vista.jpg') }}" alt="Vista Logo">Vista College -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('reservation-panel') }}"><i class="fas fa-user-plus"></i>Admin</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-shopping-cart"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/products') }}"><i class="fas fa-user-plus"></i>Producten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/barcode-search') }}"><i class="fas fa-dollar-sign"></i>Barcode</a>
            </li>
        </ul>
    </div>
</nav>
