<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    public function show()
{
    
    return view('show-profile');
}

}
