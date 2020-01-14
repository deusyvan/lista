<?php 
namespace App\Http\Controllers;
use App\Lista;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
    
    public function home(){
        $lista = Lista::all();
        
        $array = array('lista' => $lista);
        
        return view('home',$array);
    }
}
