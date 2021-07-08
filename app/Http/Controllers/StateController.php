<?php

namespace App\Http\Controllers;

use App\Models\States;
use Illuminate\Http\Request;

class StateController extends Controller
{
    //

    private function insert_states($name){
        $create = States::create([
            'name' => $name
        ]);
        if($create){
            return true;
        }else{
            return false;
        }
    }

    public function retrieve_state(){
        
    }

}
