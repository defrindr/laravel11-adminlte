<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class GuestController extends Controller
{

  public function index()
  {
    return view('page.guest.index');
  }
}
