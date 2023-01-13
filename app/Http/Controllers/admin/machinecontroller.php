<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machine;
use App\Http\Controllers\admin\jobworkcontroller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

class machinecontroller extends Controller
{
    public function createmachine(){
        return view('admin.createmachine'); 
        

       }
    //    public function insertmachine(Request $request)
    //    {
    //        $machine = new machine;
    //        $machine->name = $request->get('name');
    //        $machine->growthrate = $request->get('rate');
    //       $a=$machine->created_at =carbon::now();
     
    //        $machine->save(); 
    //              // return machine::where(function ($query)  use ($time_5_min_ago) {
    //     //     $query->where('status', '=', 'inactive')
    //     //         ->where('created_at', '<', $time_5_min_ago); 
    //     // });

    //     return redirect('createmachine')->with(['message'=>'Insert Machine Sucessfull!']);

    //     // ->header("Refresh", "2;url=/status/update");
    //    }


    public function insertmachine(Request $request)
    {
        $machine = new machine;
        $machine->name = $request->get('name');
        $machine->growthrate = $request->get('rate');
        // $machine->status = ('1');
        $machine->created_at = Carbon::now();
        $sc= Session::get('created_at',$machine);
//  dd($sc);
        $machine->save();
      
   //   if('created_at'){
   //      DB::table('machine')->where('created_at','<',$w)
   //      ->update(['status'=>'1']);
     
   //   }
   //   else{
   //        DB::table('machine')
   //      ->update(['status'=>'0']);

   //   }
        DB::table('machine')->where('created_at','<',Carbon::now()->subMinutes(1)->toDateTimeString())
        ->update(['status'=>'1']);


     return redirect('createmachine')->with(['message'=>'Insert Machine Sucessfull!']);
    }

       public function deletemachine($id)
    {
        $data = DB::table('machine')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }

    public function updateStatus(Request $request)
    {
      $time_5_min_ago = Carbon::now()->subMinute(1);
        $product = machine::find($request->machine_id); 
        $product->status = $request->status; 
        $product->save(); 
  

        DB::table('machine')->where('created_at','<',Carbon::now()->subMinutes(1)->toDateTimeString())
        ->update(['status'=>'1']);
      // return machine::where(function ($query)  use ($time_5_min_ago) {
      //        $query->where('status', '=', '1')
      //        ->where('created_at', '<', $time_5_min_ago); 
      //    });

        return response()->json(['success'=>'Status change successfully.']); 
    }
    // public function cronJob()
    // {
    //     $time = DB::table('machine')->orderBy('created_at','desc')->first();
    //     // dd($time);
    //     $book = machine::where('created_at', '<=', Carbon::now()->addHour($time->hours))->where('accepted','=',0)->get();
    //     foreach($book as $row)
    //     {
    //         if($row->accepted != 1)
    //         {
    //           machine::where('id',$row->id)->update(['rejected' => 1, 'accepted' => 0,'status' => 'Cancelled']);
    //         }
    //     }
    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Executed',
    //         'data' => []
    //     ], 201);
    // }   
}
// database name=juscodiamond
// user name=juscodiamond
// password genrate=50,fH1$Na)}B