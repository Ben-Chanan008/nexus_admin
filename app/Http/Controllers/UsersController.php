<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AccountType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    //

    public function index()
    {
//        dd(User::all());
        return view('users.user', ['user' => User::all(), 'text' => '', 'accounts' => AccountType::all()]);
    }

    public function store(Request $request)
    {
        $form_fields = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', Rule::unique('users', 'email'), 'email'],
            'password' => 'required',
            'account' => 'required',
        ]);

        User::create($form_fields);

        return redirect('/users');
    }

    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {

        $form_fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $current_user = User::where('email', $form_fields['email'])->get();
//        return dd($current_user[0]->account);
        $current_user_account = $current_user[0];


        if ($current_user_account->account === 1) {
            if (auth()->attempt($form_fields)) {
                $request->session()->regenerate();
                return response(['/'], 200);
            } else
                return response(['Invalid Credentials'], 422);
        } else
            return response(['Invalid Account Type'], 422);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('login');
    }

}
