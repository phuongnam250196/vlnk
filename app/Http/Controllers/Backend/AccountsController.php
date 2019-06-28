<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class AccountsController extends Controller
{
    public function getAccount() {
        $data = User::whereNull('level')->paginate(10);
        // dd($data);  
    	return view('backend.account.index', compact('data'));
    }
}
