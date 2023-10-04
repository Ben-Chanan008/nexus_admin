<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AccountType;
use App\View\Components\AccountView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    //

    public function show()
    {
        return view('account', ['accounts' => AccountType::all()]);
    }

    public function store(Request $request)
    {
//        dd($request);

        $form_fields = $request->validate([
            'icon' => 'required',
            'account_type' => 'required',
        ]);

        AccountType::create($form_fields);

        return redirect('/accounts');
    }

    public function destroy($id)
    {
//        dd($request);

        AccountType::destroy($id);
//        $account->destroy($id);
        $response = Blade::renderComponent(new AccountView(AccountType::all()));
        return response(['res' => $response]);
    }

    public function get(Request $request)
    {
        $id = $request->all()['_account'];

        $res = AccountType::find($id)->account_type;
        return response()->json($res);
    }
}
