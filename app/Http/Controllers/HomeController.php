<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;
use Form;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function livredor()
    {
      $guestbooks = Guestbook::all();
        return view('livredor', ['guestbooks'=>$guestbooks]);
    }

    public function insertOne(Request $request)
    {
        $guestbook = new Guestbook;
        $guestbook->name = $request->name;
        $guestbook->content = $request->content;
        $guestbook->save();

        return redirect('/livredor');
        }

    }
