<?php

namespace App\Http\Controllers\sidebar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class todo extends Controller
{
  public function index()
  {

    return view('content.sidebar.Todo');
  }
}
