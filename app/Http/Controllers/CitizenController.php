<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizens;
use App\Models\States;
use Illuminate\Support\Facades\Validator;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class CitizenController extends Controller
{
    //

    private function insert_citizen($name, $gender, $address, $phone, $ward_id){
        $create = Citizens::create([
            'name' => $name,
            'gender' => $gender,
            'address' =>  $address,
            'phone' =>$phone,
            'ward_id' => $ward_id
        ]);
        if($create){
            return true;
        }else{
            return false;
        }
    }

    public function showform(){
        $state = States::select('id','name')->get();
        return view('citizen.register',compact('state'));
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "gender" => "required|numeric",
            "address" => "required|string",
            "phone" => "required|numeric",
            "ward_id" => "required|numeric"
        ]);


        if ($validator->fails()) {
            return redirect()->back($validator->errors(), $validator->errors()->first());
        }

        $insert = $this->insert_citizen($request->name, $request->gender, $request->address, $request->phone, $request->ward_id);

        if($insert){

        }else{

        }


    }

    private function view(){
        $citizen = Citizens::select('name','gender','address', 'phone', 'ward_id', 'wards.name AS ward_name', 'wards.lga_id', 'lgas.name AS lga_name', 'lgas.state_id', 'state.name AS state_name')
        ->leftjoin('wards', 'wards.id', 'citizens.ward_id')
        ->leftjoin('lgas', 'lgas.id', 'wards.lga_id')
        ->leftjoin('states', 'state.id', 'lgas.state_id')
        ->get();

        return view('citizen.view',compact('citizen'));
    }

    public function record(){
        $records = $this->view();
        return view('citizen.view',compact('records'));
    }

}
