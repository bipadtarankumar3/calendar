<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamList(){
        return view('admin.pages.team.list');
    }
}
