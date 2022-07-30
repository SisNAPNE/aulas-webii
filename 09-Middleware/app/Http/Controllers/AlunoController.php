<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller {
    
    public function __construct() {

        // $this->middleware('Mid');
    }

    public function index() {

        return "<h1>Método index()</h1>";    
    }
 
    public function show($id) {

        return "<h1>Método show()</h1>";    
    }
    

}
