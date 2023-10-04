<x-base_struct title="Dashboard">
    {{--    <h1>Welcome</h1>--}}
    <x-partials.navigation/>
    <div class="mt-5 container">
        <h2>Hi, {{auth()->user()->name}}, Welcome back</h2>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 mb-md-4 mb-4">

                    <div class="p-3 card text-white" style="background: blue">
                        <div class="m-auto">
                            <div class="mb-4">
                                <i class="fab fa-10x fa-apple"></i>
                            </div>
                            <div class="ms-4">
                                <p class="h1">714k</p>
                                <span>Weekly Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-4 mb-4">

                    <div class="p-3 card text-white" style="background: red">
                        <div class="m-auto">
                            <div class="mb-4">
                                <i class="fab fa-10x fa-apple"></i>
                            </div>
                            <div class="ms-4">
                                <p class="h1">714k</p>
                                <span>Weekly Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-4 mb-4">

                    <div class="p-3 card text-white" style="background: green">
                        <div class="m-auto">
                            <div class="mb-4">
                                <i class="fab fa-10x fa-apple"></i>
                            </div>
                            <div class="ms-4">
                                <p class="h1">714k</p>
                                <span>Weekly Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card p-5 border-0 shadow mb-md-0 mb-3">
                    <p class="h3">Hello there</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda dolorem natus, numquam officia quos ullam voluptas voluptatem voluptatibus voluptatum? Delectus esse eum nemo neque perspiciatis quos recusandae saepe sit?</p>
                </div>
            </div>
            <div class="col">
                <div class="card p-5 border-0 shadow-lg">
                    <p class="h3">Products Sold</p>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card p-5 border-0 shadow">
                    <p class="h3">Total Amount Nexus Has made</p>
                </div>
            </div>
        </div>
    </div>
</x-base_struct>
