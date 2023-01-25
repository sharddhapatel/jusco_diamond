<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\lotprocess;
use App\Models\processreson;
use App\Models\finishtype;
use App\Models\color;
use App\Models\purity;
use App\Models\Bactch;
use App\Models\batchsquare;
use App\Models\shap;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class batchcontroller extends Controller
{
    public function searchdate(Request $request)
    {
        $requestData = ['id', 'name'];
        $date = $request->all();

        $search = $request->input('datesearch');
        $batch= $request->input('batch');
        // if($request->ajax())
        // {
        //     echo"HELLO";
        if ($search == "lastmonth") {
            $data = DB::table('bactches')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('bactches')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('bactches')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('bactches')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {
            $data = DB::table('bactches')->whereDate('created_at', Carbon::today())->get();
        } elseif ($search == "yesterday") {
            $data = DB::table('bactches')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('bactches')->whereMonth('created_at', Carbon::now()->month)->get();
        } 
        elseif ($request->batch) {
            $data = DB::table('bactches')->where('name', "like", "%" . $batch . "%")->get();
        } 
        else {
            $data = DB::table('bactches')->get();
        }
        return view('admin.createlot')->with(['data' => $data, 'batch' => $batch]);
    }
    public function getbatch($id)
    {
     $pdata = DB::table('bactches')
     ->join('packets', 'packets.batch_id', '=', 'bactches.id')
     ->where('bactches.id', $id)
     ->get();
     $data=DB::table('bactches')->get();
     $sum=DB::table('packets')->sum('weight');
     $sumdivided=DB::table('packets')->sum('height');

     $count = DB::table('packets')->count();
     if($count == 0){
         $count = 1;
     }
     $divided=$sumdivided/$count;
     round($divided,2);
     $sumlenth=DB::table('packets')->sum('length'); 
     $lenthdivided=$sumlenth/$count;
     $sumwidth=DB::table('packets')->sum('width'); 
     $widthdivided=$sumlenth/$count;
      return view('admin.clickbatch')->with(['pdata' => $pdata,'data'=>$data,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided,]);
    }
    public function searchseed(Request $request)
    {
        $requestData = ['id','batch_id','pcs','shape','height','length','width','weight','timer','stop_timer'];
        $date = $request->all();
        $pdata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id');

        $search = $request->input('datesearch');
       
        // if($request->ajax())
        // {
        //     echo"HELLO";
        if ($search == "lastmonth") {
            $data = DB::table('packets')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('packets')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {
            $data = DB::table('packets')->whereDate('created_at', Carbon::today())->get();
        } elseif ($search == "yesterday") {
            $data = DB::table('packets')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('packets')->whereMonth('created_at', Carbon::now()->month)->get();
        } 

        else {
            $data = DB::table('packets')->get();
        }
        return redirect('getbatch/{id}')->with(['data' => $data]);
    }
    public function searchshape(Request $request)
    {
        $requestData = ['id','name','status'];
        $date = $request->all();
      
        $pro= $request->input('shapn');
        $search = $request->input('datesearch');
    //    dd($search);
       
     
        if ($search == "lastmonth") {
            $data = DB::table('shaps')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->paginate(10);
        } elseif ($search == "last7days") {
            $data = DB::table('shaps')->where('created_at', '>=', Carbon::now()->subDays(7))->paginate(10);
        } elseif ($search == "last15days") {
            $data = DB::table('shaps')->where('created_at', '>=', Carbon::now()->subdays(15))->paginate(10);
        } elseif ($search  == "lastyear") {
            $data = DB::table('shaps')->whereYear('created_at', date('Y', strtotime('-1 year')))->paginate(10);
        } elseif ($search == "today") {

            $data = DB::table('shaps')->whereDate('created_at', Carbon::today())->paginate(10);
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('shaps')->whereDate('created_at', '=', Carbon::yesterday())->paginate(10);
        } elseif ($search == "thismonth") {
            $data = DB::table('shaps')->whereMonth('created_at', Carbon::now()->month)->paginate(10);
        } 
        elseif ($request->shapn) {
            $data = DB::table('shaps')->where('name', "like", "%" . $pro . "%")->paginate(10);
        } 

        else {
            $data = DB::table('shaps')->paginate(10);
        }
        return view('admin.shape')->with(['data' => $data,'pro'=>$pro]);
    }
    public function searchcolor(Request $request)
    {
        $requestData = ['id','name','status'];
        $date = $request->all();
      
        $pro= $request->input('colorn');
        $search = $request->input('datesearch');
    //    dd($search);
       
     
        if ($search == "lastmonth") {
            $data = DB::table('colors')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->paginate(10);
        } elseif ($search == "last7days") {
            $data = DB::table('colors')->where('created_at', '>=', Carbon::now()->subDays(7))->paginate(10);
        } elseif ($search == "last15days") {
            $data = DB::table('colors')->where('created_at', '>=', Carbon::now()->subdays(15))->paginate(10);
        } elseif ($search  == "lastyear") {
            $data = DB::table('colors')->whereYear('created_at', date('Y', strtotime('-1 year')))->paginate(10);
        } elseif ($search == "today") {

            $data = DB::table('colors')->whereDate('created_at', Carbon::today())->paginate(10);
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('colors')->whereDate('created_at', '=', Carbon::yesterday())->paginate(10);
        } elseif ($search == "thismonth") {
            $data = DB::table('colors')->whereMonth('created_at', Carbon::now()->month)->paginate(10);
        } 
        elseif ($request->shapn) {
            $data = DB::table('colors')->where('name', "like", "%" . $pro . "%")->paginate(10);
        } 

        else {
            $data = DB::table('colors')->paginate(10);
        }
        return view('admin.color')->with(['data' => $data,'pro'=>$pro]);
    }
    public function createlot(Request $request)
    {
        $requestData = ['id','name'];
        $data = DB::table('bactches')->get();
   
            return view('admin.createlot')->with(['data'=>$data]);
    }
    public function search(Request $request)
    {
        $requestData = ['id', 'name'];
       
        $batchname= $request->input('batchname');
     
        if ($request->batchname) {
            $data = DB::table('bactches')->where('name', "like", "%" . $batchname . "%")->get();
        }
        
        else {
            $data = DB::table('bactches')->get();
        }
        return view('admin.createlot')->with(['data' => $data, 'batchname' => $batchname]);
    }
    public function batchlist(Request $request){
        $requestData = ['id', 'name'];
       
        
        $pro = $request->input('seed');
            $samedata = DB::table('bactches')
            ->join('packets', 'packets.batch_id', '=', 'bactches.id')
            ->where('name', "like", "%" . $request->search. "%")->paginate(10);
        return view('admin.batchlist')->with(['samedata'=>$samedata,'pro'=>$pro]);
       }
    public function batch1(){
        return view('admin.batch1');
       }
       public function insertbatch(Request $request)
       {
           $batch = new Bactch;
           $batch->name = $request->get('name');
           $batch->save();
       
           return redirect()->back()->with('message', 'Batch added successfully');
       }
    public function shape(Request $request){  
        $requestData = ['id', 'name','status'];
        $pro = $request->input('shapename');
        $data = DB::table('shaps')
    ->where('name', "like", "%" . $request->shapename. "%")->paginate(10);

    
    //   dd($pro);
        return view('admin.shape')->with(['pro'=>$pro,'data'=>$data]);
       }
       public function insertshape(Request $request)
       {
           $shape = new shap;
           $shape->name = $request->get('name');
           $shape->save();
           
        return redirect('shape')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }

       public function shaperemove(Request $request, $id)
       {
           $data = DB::table('shaps')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function lotprocess(){
        return view('admin.lotprocess');
       }
       public function insertlotprocess(Request $request)
       {
           $stockpackets = new lotprocess;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('lotprocess')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function lotprocessremove(Request $request, $id)
       {
           $data = DB::table('lotprocesses')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function processreson(){
        return view('admin.processreson');
       }
       public function insertprocessreson(Request $request)
       {
           $stockpackets = new processreson;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('processreson')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function processresonremove(Request $request, $id)
       {
           $data = DB::table('processresons')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function finishtype(){
        return view('admin.finishtype');
       }
       public function insertfinishtype(Request $request)
       {
           $stockpackets = new finishtype;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('finishtype')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function finishtyperemove(Request $request, $id)
       {
           $data = DB::table('finishtypes')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
       public function color(Request $request){
        $requestData = ['id', 'name','status'];
       
        $data = DB::table('colors')
    ->paginate(10);
        return view('admin.color')->with(['data'=>$data]);
       }
       public function insertcolor(Request $request)
       {
           $stockpackets = new color;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('color')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function colorremove(Request $request, $id)
       {
           $data = DB::table('colors')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function purity(){
        return view('admin.purity');
       }
       public function insertpurity(Request $request)
       {
           $stockpackets = new purity;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('purity')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function purityremove(Request $request, $id)
       {
           $data = DB::table('purities')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
    //    public function createlot(Request $request){
    //     $requestData = ['id', 'name'];
    //     $current = new Carbon('first day of January 2016');
    //     $pro = $request->input('search');
    //     $data = DB::table('bactches')->where('name', "like", "%" . $request->search. "%")->get();
    
    //     return view('admin.createlot')->with(['current'=>$current,'data'=>$data,'pro'=>$pro]);
    //     // ->with('message', json_encode(['success'=>'Seeds sucessfull!']));
    //   }

    //   public function clickbatch(){
    //     return view('admin.clickbatch');
    //    }

    //    public function editbatch($id)
    //    {
    //        $data = DB::table('packets')->where('id', $id)->first();
    //        return view('admin.clickbatch')->with('data', $data);
    //    }
  
      
     

    }
