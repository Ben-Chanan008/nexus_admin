<x-base_struct title="Login">
    <div class="row vh-100">
        <div class="col-lg-6">
            <div class="d-flex justify-content-center align-items-center flex-column vh-100">
                <p class="h1">Hi, Please Sign In</p>
                <img alt="img" src="{{asset('/images/welcome.png')}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex justify-content-center flex-column align-items-center vh-100">
                <h3 class="mb-3">Nexus Admin</h3>
                <p>Don't Have an Account? <a href="http://localhost:8080">Register</a></p>
                <div class="d-flex mb-3">
                    <button class="btn btn-primary"><i class="fab fa-google"></i></button>
                    <button class="btn btn-primary-outline"><i class="fab fa-facebook"></i></button>
                    <button class="btn btn-primary"><i class="fab fa-twitter"></i></button>
                </div>
                <div class="d-flex mb-5">
                    <div class="hr"></div>
                    <span>OR</span>
                    <div class="hr"></div>
                </div>
                <div>
                    <form action="/user/authenticate" method="POST" id="form" class="login-form">
                        @csrf
                        <div class="form-group position-relative">
                            <input name="email" type="email" id="email" data-validate="validate" class="p-3 floating position-relative form-control" placeholder=" "/>
                            <label for="email" class="float-label">Email address</label>
                            <p class="text-danger msg mt-3"></p>
                        </div>
                        <div class="form-group position-relative">
                            <input name="password" type="password" data-validate="validate" id="password" class="p-3 floating position-relative form-control" placeholder=" "/>
                            <label for="password" class="float-label">Password</label>
                            <p class="text-danger msg mt-3"></p>
                        </div>
                        <div class="form-group d-flex flex-row mt-4 align-items-center">
                            <div>
                                <input type="checkbox" id="check" class="form-control-check">
                                <label for="check" class="box-content"></label>
                            </div>
                            <span class="h6 ms-2">Remember Me</span>
                        </div>
                        <button class="btn btn-primary w-100">Login<i class="fa ms-5 d-none loader fa-spin fa-spinner-third"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base_struct>
