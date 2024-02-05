<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class TrainController extends Controller

{
    //


    public function index(){
      

        // $trains = train::all();

        return view ('train.index', compact('trains'));

        
    }
}