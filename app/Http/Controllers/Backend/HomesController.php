<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomesController extends Controller
{
    public function getAdminHome() {
    	return view('backend.index');
    }

    public function getProfile() {
    	return view('backend.setting.profile');
    }
}
