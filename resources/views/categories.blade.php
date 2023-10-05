<x-base_struct title="Categories">
    <x-partials.navigation/>

    @php
        $text = 'Category';
        $action = 'categories';
    @endphp
    <div class="container">
        <section>
            <div class="d-flex justify-content-between">
                <h1>Categories</h1>
                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> New Category
                </button>
            </div>
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="d-flex w-50 search align-items-center ms-4 ">
                        <i class="far fa-magnifying-glass"></i>
                        <input class="border-0 form-control p-3 w-100" placeholder="Search User..."/>
                    </div>
                    <i class="far text-black fa-bars-filter"></i>
                </div>
                <div class="card-body">
                    @if(empty($category->count()))
                        <div class="d-flex">
                            <p class="lead m-auto">There Are No Categories Yet</p>
                            <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="far fa-plus"></i>
                            </button>
                        </div>
                    @else
                        <table class="table">
                            <thead>
                            <th>
                                <div>
                                    <input type="checkbox" class="form-control-check mega-check" id="checkBox"/>
                                    <label for="checkBox" class="box-content"></label>
                                </div>
                            </th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col"><i class="far fa-trash-alt text-danger"></i></th>
                            </thead>
                            <tbody>
                            @foreach($category as $key => $categories)
                                <tr class="p-5">
                                    <td>
                                        <div>
                                            <input type="checkbox" class="form-control-check user-check" id="{{$categories->id}}" name="{{$categories->id}}"/>
                                            <label for="{{$categories->id}}" class="box-content"></label>
                                        </div>
                                    </td>
                                    <td><p class="lead h3">{{$categories->category_name}}</p></td>
                                    <td><p class="lead h3">{{$categories->created_at}}</p></td>
                                    <td><p class="lead h3">{{$categories->updated_at}}</p></td>
                                    <td><i class="far categories-delete-btn fa-trash-alt text-danger" data-category-id="{{$categories->id}}"></i></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </section>
        <x-_modal :text="$text" :action="$action">
            <div class="form-group">
                <label for="icon">Icon</label>
                <input id="icon" name="icon" type="text" class="form-control"/>
            </div>
            @error('icon') <p class="text-danger">Please provide an Icon</p> @enderror
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input id="category_name" name="category_name" type="text" class="form-control"/>
            </div>
            @error('account_type') <p class="text-danger">Please provide an Account Type</p> @enderror
            <button type="submit" class="float-end btn btn-primary">Create {{$text}}
                <i class="far fa-spin fa-spinner-third ms-3"></i>
            </button>
        </x-_modal>
</x-base_struct>
