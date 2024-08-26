<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Livre;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //La page/vue home.blade.php
    public function home()
    {
        $books = Livre::all();
        return view('home.home', compact('books'));
    }

    //La page/vue about.blade.php
    public function about()
    {
        return view('home.about');
    }

    public function terms()
    {
        return view('home.terms');
    }

    //la page/vue dashboard.blade.php
    public function dashboard()
    {
        if(Auth::id())
        {
           $role=Auth()->user()->role;

           if($role=="user")
           {
            $books = Livre::all();
             return view('home.dashboard',compact('books'));
           }

           else if($role=="admin")
           {

            $books = Livre::all();
             return view('home.adminDashboard',compact('books'));
           }
        }
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $books = Book::where('title', 'like', '%' . $search . '%')->paginate(5);
        return view('home.adminDashboard', ['books' => $books]);
    }


}
