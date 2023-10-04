@forelse($accounts as $key => $account)
    <div class="card mb-5 shadow">
        <div class="p-5 d-flex align-items-center justify-content-around">
            <i class="fa-2x {{$account->icon}}"></i>
            <p class="h4">{{$account->account_type}}</p>
            <div>
                <i class=" text-danger far fa-2x fa-trash-alt delete-btn" data-id="{{$account->id}}"></i>
            </div>
        </div>
    </div>
@empty
    <div class="d-flex mt-5">
        <p class="m-auto h2">There are No Account Types</p>
        <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="far fa-plus"></i>
        </button>
    </div>
@endforelse
