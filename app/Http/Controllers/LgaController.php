<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lga;

class LgaController extends Controller
{
    //

    private function insert_lga($name, $state_id){
        $create = Lga::create([
            'name' => $name,
            'state_id' => $state_id
        ]);
        if($create){
            return true;
        }else{
            return false;
        }
    }

    public function showDropdown($id){
        $fetch_lga = Lga::where('state_id','=',$id)->select('id','name')->get();

        return $fetch_lga;
    }

}
