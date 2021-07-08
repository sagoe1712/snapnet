<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wards;

class WardController extends Controller
{
    //
    private function insert_ward($name, $lga_id){
        $create = Wards::create([
            'name' => $name,
            'lga_id' => $lga_id
        ]);
        if($create){
            return true;
        }else{
            return false;
        }
    }

    public function showDropdown($id){
        $fetch_lga = Wards::where('lga_id','=',$id)->select('id','name')->get();

        return $fetch_lga;
    }
}
