<x-base_struct title="Products">
    <x-partials.navigation/>
    <section class="container">
        <h1>Products</h1>
        <div class="d-flex justify-content-end">
            <div class="me-5">
                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> New User
                </button>
            </div>
            <div class="float-end">
                <div class="position-relative filter-container">
                    <button class="filter-btn border-0 bg-transparent"><span>Sort By:</span></button>
                    <div class="position-absolute z-1 card bg-dark text-white top-100 filter">
                        <ul class="px-4 py-3 list-group">
                            <button class="text-white text-start text-decoration-none bg-transparent border-0">
                                <li class=" list-unstyled">Newest</li>
                            </button>
                            <hr class=""/>
                            <button class="text-white text-start text-decoration-none bg-transparent border-0">
                                <li class=" list-unstyled">Oldest</li>
                            </button>
                            <hr class=""/>
                            <button class="text-white text-start text-decoration-none bg-transparent border-0">
                                <li class=" list-unstyled">Price High - Low</li>
                            </button>
                            <hr/>
                            <button class="text-white text-start text-decoration-none bg-transparent border-0">
                                <li class=" list-unstyled">Price Low - High</li>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-5 my-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="m-2">
                        <div class="shadow card product-card">
                            <div class="card-header h-75 p-0">
                                <img src="{{asset('images/pubg.jpg')}}" class="img-fluid h-100 w-100 rounded-top-3"/>
                            </div>
                            <div class="card-footer h-25 bg-white">
                                <span class="">Nike Air Force 1 NDESTRUKT</span>
                                <div class="d-flex justify-content-between">
                                    <i class="far fat fa-circle-trash text-danger product-delete fa-2x"></i>
                                    <span class=" mt-3">$78.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base_struct>
