<!-- Navbar -->
<nav id="fixed_navbar" class="navbar navbar-expand-lg bg-light navbar-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#" style="font-weight: 700;font-size: 40px;line-height: 40px;">AJIO</a>
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="header_navigation navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Link -->
                <li class="nav-item px-2">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item px-2 dropdown dropdown-hover position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-mdb-toggle="dropdown" aria-expanded="false"> Shop </a>
                    <!-- Dropdown menu -->
                    <div id="megaDropdown" class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown"
                        style="border-top-left-radius: 0; border-top-right-radius: 0;">
                        <div class="container">
                            <div class="row my-4">
                                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="list-group list-group-flush">
                                        <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                                        <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                                        <a href="" class="list-group-item list-group-item-action">Amet
                                            consectetur</a>
                                        <a href="" class="list-group-item list-group-item-action">Cras justo
                                            odio</a>
                                        <a href="" class="list-group-item list-group-item-action">Adipisicing
                                            elit</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="list-group list-group-flush">
                                        <a href="" class="list-group-item list-group-item-action">Explicabo
                                            voluptas</a>
                                        <a href="" class="list-group-item list-group-item-action">Perspiciatis
                                            quo</a>
                                        <a href="" class="list-group-item list-group-item-action">Cras justo
                                            odio</a>
                                        <a href="" class="list-group-item list-group-item-action">Laudantium
                                            maiores</a>
                                        <a href="" class="list-group-item list-group-item-action">Provident
                                            dolor</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                    <div class="list-group list-group-flush">
                                        <a href="" class="list-group-item list-group-item-action">Iste
                                            quaerato</a>
                                        <a href="" class="list-group-item list-group-item-action">Cras justo
                                            odio</a>
                                        <a href="" class="list-group-item list-group-item-action">Est iure</a>
                                        <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                                        <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="list-group list-group-flush">
                                        <a href="" class="list-group-item list-group-item-action">Cras justo
                                            odio</a>
                                        <a href="" class="list-group-item list-group-item-action">Saepe</a>
                                        <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                                        <a href="" class="list-group-item list-group-item-action">Sunt
                                            doloribus</a>
                                        <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Sale</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Men</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Women </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Blog </a>
                </li>
                <!-- Dropdown -->
            </ul>
            <!-- Icons -->
            <ul class="headerMenusIcons navbar-nav d-flex flex-row me-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/login">Login</a></li>
                      <li><a class="dropdown-item" href="/signup">SignUp</a></li>
                    </ul>
                  </li>
                <li class="nav-item mx-2 me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
                <li class="nav-item mx-2 me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                </li>
                <!-- Search -->
                {{-- <form class="w-auto mx-3">
                    <input type="search" class="form-control" placeholder="Type query" aria-label="Search" />
                </form> --}}
                <li class="nav-item mx-2 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </li>
                @php
                    $SessionData = Session::get('name');
                    if(isset($SessionData)){
                        echo '<li class="userLogin mx-2 nav-item me-3 me-lg-0">
                                <a class="nav-link" href="#" value="1">
                                    <i class="fa-regular fa-user" style="font-weight: 400; font-size:17px"></i>
                                </a>
                            </li>
                            <li class="mx-2 nav-item me-3 me-lg-0">
                                <a class="nav-link" href="/logout" value="1">
                                    Logout
                                </a>
                            </li>';
                    }else{
                        echo '<li class="mx-2 nav-item me-3 me-lg-0">
                                <a class="nav-link" href="#" value="1">
                                    <i class="fa-regular fa-user" style="font-weight: 400; font-size:17px"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="#" value="1">
                                    Guest
                                </a>
                            </li>';
                    }
                    
                @endphp
                
            </ul>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
