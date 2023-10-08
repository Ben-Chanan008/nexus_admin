<x-base_struct title="Users">
    <x-partials.navigation/>
    <div class="container">
        <section>
            <div class="d-flex justify-content-between">
                <h1>Users</h1>
                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> New User
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
                    @if(empty($user->count()))
                        <div class="d-flex">
                            <p class="lead m-auto">There Are No Users Yet</p>
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
                            <th scope="col">Name</th>
                            <th scope="col">Account</th>
                            <th scope="col">Status</th>
                            <th scope="col">Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $key => $users)
                                <tr class="p-5">
                                    <td>
                                        <div>
                                            <input type="checkbox" class="form-control-check user-check" id="{{$users->id}}" name="{{$users->id}}"/>
                                            <label for="{{$users->id}}" class="box-content"></label>
                                        </div>
                                    </td>
                                    <td><p class="lead h3">{{$users->name}}</p></td>
                                    <td><p class="account-type" data-account="{{$users->account}}"></p></td>
                                    @if($users->is_active === 1)
                                        <td class="">
                                            <button data-user-id="{{$users->id}}" class="active-btn btn btn-outline-success">Active</button>
                                        </td>
                                    @else
                                        <td class="">
                                            <button class="btn px-3 btn-outline-danger active-btn" data-user-id="{{$users->id}}">Inactive</button>
                                        </td>
                                    @endif
                                    <td><p>{{$users->username}}</p></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </section>
        <x-_modal :text=" $text" action="users">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input id="password" name="password" type="password" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Account</label>
                <select id="password" name="account" class="form-control">
                    @foreach($accounts as $key => $account)
                        <option value="{{$account->id}}">{{$account->account_type}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary float-end">Create {{$text}}
                <i class="far fa-spin fa-spinner-third ms-3"></i>
            </button>
        </x-_modal>
    </div>
</x-base_struct>
