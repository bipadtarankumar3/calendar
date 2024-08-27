<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalanderController extends Controller
{
    public function calanderList(){
        return view('admin.pages.calander.list');
    }
}
