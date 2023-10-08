<div class="offcanvas bg-white offcanvas-start show" tabindex="-1" id="offcanvas" data-bs-backdrop="true" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center">
            <img src="{{asset('meta/nexus.png')}}" alt="nexus_logo" height="50px" width="50px">
            <h5 class="offcanvas-title ms-3" id="offcanvasLabel">Nexus</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container-fluid">
            <div class="card p-3 flex-row border-0 justify-content-center align-items-center" style="background: green">
                <div class="me-3">
                    <div class="rounded-circle bg-white text-dark"><img alt="user-img" src="{{asset('images/user-img.png')}}" height="45px" width="45px" class="img-fluid p-1"/></div>
                </div>
                <span class="text-white">{{auth()->user()->name}}</span>
            </div>
        </div>
        <div class="dropdown mt-5">
            <div class="mb-3">
                <a href="/" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-chart-line me-3"></i>
                    <p class="mb-0">Dashboard</p>
                </a>
            </div>
            <div class="mb-3">
                <a href="/logout" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-power-off me-3"></i>
                    <p class="mb-0">Logout</p>
                </a>
            </div>
            <div class="mb-3">
                <a href="/users" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-user me-3"></i>
                    <p class="mb-0">Users</p>
                </a>
            </div>
            <div class="mb-3">
                <a href="/products" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-shopping-cart me-3"></i>
                    <p class="mb-0">Products</p>
                </a>
            </div>
            <div class="mb-3">
                <a href="/categories" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-bars me-3"></i>
                    <p class="mb-0">Categories</p>
                </a>
            </div>
            <div class="mb-3">
                <a href="/accounts" class="btn p-3 btn-light w-100 d-flex align-items-center justify-content-start">
                    <i class="far fa-shield me-3"></i>
                    <p class="mb-0">Accounts</p>
                </a>
            </div>
        </div>
    </div>

    <div class="bottom d-flex">
        <div class="m-auto">
            <img alt="nexus_logo" src="{{asset('meta/nexus.png')}}" class="img-fluid mb-4" height="200px" width="200px"/>
            {{--            <span class="lead fs-1">Nexus</span>--}}
        </div>
    </div>
</div>
