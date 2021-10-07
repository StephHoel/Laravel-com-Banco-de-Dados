<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index() {
        return view('steph.home');
    }

    public function videos(){
        return view('steph.videos');
    }

    public function web(){
        return view('steph.web');
    }

    public function jogos(){
        return view('steph.jogos');
    }

    public function blog(){
        return view('steph.blog');
    }

    public function textos(){
        return view('steph.textos');
    }

    public function algiz(){
        return view('steph.algiz');
    }

    public function sobre(){
        return view('steph.sobre');
    }

    public function contato(){
        return view('steph.contato');
    }
}
