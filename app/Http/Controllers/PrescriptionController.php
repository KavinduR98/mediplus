<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use DB;

class PrescriptionController extends Controller
{
    public function upload_prescription(Request $request){

        try{

            $userID = Auth::id();

            $pres = new Prescription();
            $pres->user_id = $userID;
            $pres->note = $request->get('note');
            $pres->address = $request->get('address');
            $pres->created_date = $request->get('date');

            if ($pres->save()) {
                return response()->json(["status" => "saved", "data" => $pres]);
            } else {
                return response()->json(["status" => 'failed', "message" => "Failed"]);
            }

       }catch(Exception $ex) {
            return $ex;
        }

    }


    public function allPrescription(){

        try {

            $data = DB::table("prescriptions")
                            ->select(
                                'id',
                                'address',
                                'created_date'
                            )
                            ->get();

            return compact('data');

        }
         catch (Exception $ex) {
            return $ex->getMessage();
        }
    }


    public function get_data($id){
        
        try{

            $data = DB::table("prescriptions")
                        ->select('note','address')
                        ->where('id', $id)
                        ->first();

            return response()->json(["status" => "success", "data" => $data]);

        }catch(Exception $ex) {
            return $ex->getMessage();
        }
    }


}
