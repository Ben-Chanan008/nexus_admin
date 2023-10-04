<nav class="navbar navbar-expand-lg shadow bg-white">
    <div class="container">
        <button class="btn btn-outline" data-bs-target="#offcanvas" data-bs-toggle="offcanvas">
            <i class="fa-solid fa-bars"></i>
            <img src="{{asset('meta/nexus.png')}}" alt="" class="img-fluid" height="50px" width="50px">
            <a class="navbar-brand ms-1" href="#">Nexus</a>
        </button>

        <div class="d-flex nav-links">
            <div class="d-flex p-2 mx-2 justify-content-center align-items-center rounded-circle bg-light">
                <i class="far fa-user"></i>
            </div>
            <div class="d-flex p-2 justify-content-center align-items-center mx-2 rounded-circle bg-light position-relative drop-down-container">
                <button class="btn-drop border-0 bg-transparent"><img alt="user-img" src="{{asset('images/user-img.png')}}" height="50px" width="50px" class="img-fluid"/></button>
                <div class="position-absolute z-1 card bg-dark text-white top-100 start-0 user-links ">
                    <ul class="px-4 py-3 list-group">
                        <a class="text-white text-decoration-none" href="#">
                            <li class=" list-unstyled">Profile</li>
                        </a>
                        <hr class=""/>
                        <a class="text-white text-decoration-none" href="#">
                            <li class=" list-unstyled">Settings</li>
                        </a>
                        <hr class=""/>
                        <a class="text-white text-decoration-none" href="/logout">
                            <li class=" list-unstyled">Logout</li>
                        </a>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
