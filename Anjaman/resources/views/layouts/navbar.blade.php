@auth
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="images/Anjaman_Logo.png" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menu -->
            <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item mx-md-2">
                <a class="nav-link active"  href="/">Beranda</a>
            </li>
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="#">Market</a>
            </li>
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="#">Keranjang</a>
            </li>
            @if (auth()->user()->role=="admin")                   
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                Admin Manager
                </a>
            </li>
                @endif
            </ul>
            
        </div>
            <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
            </li>
        </div>
    </nav>
@else
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="images/Anjaman_Logo.png" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menu -->
            <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item mx-md-2">
                <a class="nav-link active"  href="/">Beranda</a>
            </li>
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="#">Market</a>
            </li>
            </ul>
            
        </div>
            <form class="d-flex">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style=" border-radius: 10px;">
                Masuk
                </button>
            </form>
        </div>
    </nav>
    @endauth