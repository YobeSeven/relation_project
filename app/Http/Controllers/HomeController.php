<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Gender;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        $genders = Gender::all();
        $classes = Classe::all();
        return view("home" , compact("eleves" , "genders" , "classes"));
    }
}
