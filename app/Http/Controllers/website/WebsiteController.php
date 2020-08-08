<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
class WebsiteController extends Controller
{
    //

    public function index()
    {
        $clients = Client::with('image')->limit(10)->get();
        $services = Service::with('parentService')->get();
 
        // $slides = Slider::with('image')->get();
        // dd($clients);
        return view('website.home', compact('services','clients'));
    }

      /* Return Client Page */
      public function client()
      {
          $clients = Client::with('image')->get();
          return view('website.client', compact('clients'));
      }
  
}
