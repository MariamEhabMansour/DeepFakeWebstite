<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homepage(){
      return view('homepage');
    }

    public function service(){
      //return "About us Page";
      return view('service');
    }

    public function generator(){
        //return "About us Page";
        return view('generator');
      }

      public function policy(){
        //return "About us Page";
        return view('policy');
      }

    public function contact(){
      //return "Contact " . $_GET["name"];
      //return "Contact " . request('name');
      $name = request('name');
      return view('contact', compact('name'));
    }

    public function services(){
      //return "<h1 style='color: red;'>This is the Services Page</h1>";
      $services_list = ["Web Development", "Web Design", "Training"];
      return view('services', compact('services_list'));
    }


}
