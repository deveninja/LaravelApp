<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function index() {
      $title = "Index Page";
      return view('layouts.index');//->with('title', $title);
    }

    public function about() {
      $title = "About Page";
      return view('pages.about');//->with('title', $title);
    }

    public function contact() {
      $title = "Contact Page";
      return view('pages.contact');//->with('title', $title);
    }

    public function services() {
      $title = "Services Page";
      return view('pages.services');//->with('title', $title);
    }
}
