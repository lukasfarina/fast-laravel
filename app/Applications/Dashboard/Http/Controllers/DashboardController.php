<?php

namespace App\Applications\Dashboard\Http\Controllers;

use Illuminate\Http\Request;

use App\Core\Http\Requests;
use App\Core\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return "Main Dash";
    }
}
