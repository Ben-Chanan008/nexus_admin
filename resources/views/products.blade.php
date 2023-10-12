<x-base_struct title="Products">
    <x-partials.navigation/>
    <section class="container">
        <h1>Products</h1>
        <div class="d-flex justify-content-end">
            <div class="me-5">
                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> New Product
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
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex w-50 search align-items-center ms-4 ">
                <i class="far fa-magnifying-glass"></i>
                <input class="border-0 form-control p-3 w-100 search-filter" placeholder="Search Product..."/>
            </div>
            <i class="far text-black fa-bars-filter"></i>
        </div>
        <div class="d-flex data-msg"></div>
        <div class="mx-5 my-5">
            <div class="row">
                @forelse($products as $key => $product)
                    <div class="col-lg-3 data">
                        <div class="m-2">
                            <div class="shadow card product-card">
                                <div class="card-header h-75 p-0">
                                    <img src="{{asset('storage') . '/' . $product->images}}" class="img-fluid h-100 w-100 rounded-top-3"/>
                                </div>
                                <div class="card-footer h-25 bg-white">
                                    <span class="">{{$product->product_name}}</span>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <i class="far fat fa-circle-trash text-danger product-delete fa-2x"></i>
                                            <i class="far fat fa-gear text-primary product-delete fa-2x"></i>
                                        </div>
                                        <span class=" mt-3">${{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex">
                        <p class="lead m-auto">There Are No Products Yet</p>
                        <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="far fa-plus"></i>
                        </button>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <x-_modal text="Product" action="products">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input id="product_name" name="product_name" type="text" class="form-control"/>
                </div>
                @error('product_name') <p class="text-danger">{{$message}}</p>@enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="img">Product Image</label>
                    <input id="img" name="images" type="file" class="form-control"/>
                </div>
                @error('images') <p class="text-danger">{{$message}}</p>@enderror
            </div>
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <input id="about" name="about" type="text" class="form-control"/>
            @error('about') <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input id="body" name="body" type="text" class="form-control"/>
            @error('body') <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input id="price" name="price" type="text" class="form-control"/>
                </div>
                @error('price') <p class="text-danger">{{$message}}</p>@enderror
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="review">Review</label>
                    <input id="review" name="review" type="text" class="form-control"/>
                </div>
                @error('review') <p class="text-danger">{{$message}}</p>@enderror
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input id="rating" name="rating" type="text" class="form-control"/>
                </div>
                @error('rating') <p class="text-danger">{{$message}}</p>@enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email">Category</label>
            <select id="category" name="category_id" class="form-select form-control">
                <option value="" disabled="" selected="" class="category-list">Please Select A Category...</option>
                @foreach($categories as $key => $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            @error('category_id') <p class="text-danger">{{$message}}</p>@enderror
        </div>
        <button type="submit" class="btn btn-primary float-end">Create Product
            <i class="far fa-spin fa-spinner-third ms-3"></i>
        </button>
    </x-_modal>
</x-base_struct>
