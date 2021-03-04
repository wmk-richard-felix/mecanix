<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// TODO: chamar models de quotation e de users

class QuotationController extends Controller
{
    public function index() {

        // TODO: passar informações de:
        // data, mechanic_id, service_id e status    
        return view('pages.quotation-list');

    }

  //  public function show($id) {
    public function show() {

         // TODO: passar informações de
        return view('pages.quotation');
        
    }
}
