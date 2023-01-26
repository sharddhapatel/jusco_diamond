<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class machinecontroller extends Controller
{
    public function createmachine(){
        return view('admin.createmachine');
       }
       public function insertmachine(Request $request)
       {
           $machine = new machine;
           $machine->name = $request->get('name');
           $machine->growthrate = $request->get('rate');
          
           $machine->save();
      
        return redirect('createmachine')->with(['message'=>'Insert Machine Sucessfull!']);
       }
       public function deletemachine(Request $request, $id)
    {
        $data = DB::table('machine')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
    // public function changeStatus(Request $request)
    // {
    //     $user = machine::find($request->user_id);
    //     $user->status = $request->status;
    //     $user->save();
    //     return response()->json(['success'=>'Status change successfully.']);
    // }
    public function machine(){
        $data=DB::table('machine')->get();
        return view('admin.machine')->with(['data'=>$data]);
       }
    public function updateStatus(Request $request)
    {
        $user = machine::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        
        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function searchmachine(Request $request)
    {
        $requestData = ['id','name','growthrate','status'];
        $date = $request->all();
      
       
        $search = $request->input('datesearch');
     //   dd($search);
    
     
        if ($search == "lastmonth") {
            $data = DB::table('machine')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('machine')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('machine')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('machine')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {

            $data = DB::table('machine')->whereDate('created_at', Carbon::today())->get();
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('machine')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('machine')->whereMonth('created_at', Carbon::now()->month)->get();
        } 
 

        else {
            $data = DB::table('machine')->get();
        }
        return view('admin.machine')->with(['data' => $data]);
    }
}
