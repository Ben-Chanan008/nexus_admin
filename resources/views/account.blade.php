@php
    $text = 'Account';
    $action = 'accounts';
@endphp
<x-base_struct title="Accounts">
    <x-partials.navigation/>
    <div class="container">
        <section>
            <div class="d-flex justify-content-between">
                <h1>Accounts</h1>
                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> New Account
                </button>
            </div>
        </section>
        <div class="container" id="account_type_wrapper">
            <x-account-view :$accounts/>
        </div>
    </div>
    <x-_modal :text="$text" :action="$action" class="account_form">
        <div class="form-group">
            <label for="icon">Icon</label>
            <input id="icon" name="icon" type="text" class="form-control"/>
        </div>
        @error('icon') <p class="text-danger">Please provide an Icon</p> @enderror
        <div class="form-group">
            <label for="account_type">Account Type</label>
            <input id="account_type" name="account_type" type="text" class="form-control"/>
        </div>
        @error('account_type') <p class="text-danger">Please provide an Account Type</p> @enderror
        <button type="submit" class="float-end btn btn-primary">Create {{$text}}
            <i class="far fa-spin fa-spinner-third ms-3"></i>
        </button>
    </x-_modal>
</x-base_struct>
