<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\packet;
use App\Models\Bactch;
use Illuminate\Bus\Batch;
use Illuminate\Support\Carbon;
class seedcontroller extends Controller
{
    // public function seeds1(){
    //     $data=DB::table('bactches')->get();
    //     $sum=DB::table('packets')->sum('weight');
   
    //     return view('admin.seeds1')->with(['data'=>$data,'sum'=>$sum]);
    //    }
    public function seedPrint(Request $request,$id){
        $data=DB::table('packets')
            ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
            ->select('packets.*', 'bactches.*')
            ->where('packets.id',$id)
            ->first();
            return view('admin.seedsPrint')->with(['data'=>$data,'random'=>rand(1111111111,9999999999)]);
    }

    public function multiPrint(Request $request){ 
            $datas=DB::table('packets')
                ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
                ->select('packets.*', 'bactches.*')
                ->get();
            return view('admin.multiPrints')->with(['datas'=>$datas,'random'=>rand(1111111111,9999999999)]);
    }
    public function seeds1(){
        // $data=DB::table('bactches')->get();
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');
        // $page= packet::paginate(10);
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
        $samedata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id')
        ->paginate(10);
        return view('admin.seeds1')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided,'samedata'=>$samedata]);
       }
    
    public function insertseeds(Request $request)
    {
        $batch= $request->input('batch_id');
        $pcs = $request->input('pcs');
        $shape = $request->input('shape');
        $height = $request->input('height');
        $length = $request->input('length');
        $width = $request->input('width');
        $weight = $request->input('weight');
 
        // number of rows submitted (use a required value)
        $n = count($height);
        // track valid student records
        $students = [];

        for ($i=0; $i < $n; $i++) { 
            $data = [
                'batch_id' => $batch,
                'pcs' => $pcs,
                'shape' => $shape,
                'height' => $height[$i],
                'length' => $length[$i],
                'width' => $width[$i],
                'weight' => $weight[$i],
            ];

            $students[] = $data;
        }

        foreach ($students as $row) {
            Packet::create($row);

        }
        $user = Bactch::where('id', '=', $request->input('batch_id'))->first();
    
        return view('admin.directPrint', compact('user','students'));
   }
       public function seedslist(){
        return view('admin.seedslist');
       }
       public function searchseeds(Request $request){
     
        $pro= $request->input('seedn');
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
        // dd($pro);
       $samedata= DB::table('packets')   
        ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
        ->select('packets.*', 'bactches.*')
        ->distinct('name')->count('name');




            
        if ($request->seedn) {
            // dd('hello');
            $samedata = DB::table('packets')->join('bactches', 'packets.batch_id', '=', 'bactches.id')->where('name', "like", "%" . $pro . "%")->paginate(10);
        }  else  {
                    $samedata = DB::table('packets')->join('bactches'.'id','=','packets'.'batch_id')->paginate(10);
                   } 
        return view('admin.seeds1')->with(['samedata' => $samedata,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
}

    //    public function searchseeds(Request $request)
    //    {
    //        $requestData = ['id','batch_id','pcs','shape','height','length','width','weight','timer','stop_timer'];
    //        $date = $request->all();
         
          
    //        $search = $request->input('datesearch');
    //     //   dd($search);
    //     $samedata =Bactch::where('id', '=', $request->input('batch_id'))->get();
    //     $sum=DB::table('packets')->sum('weight');
    //     $sumdivided=DB::table('packets')->sum('height');
    //     // $page= packet::paginate(10);
    //     $count = DB::table('packets')->count();
    //     if($count == 0){
    //         $count = 1;
    //     }
    //     $divided=$sumdivided/$count;
    //     round($divided,2);
    //     $sumlenth=DB::table('packets')->sum('length'); 
    //     $lenthdivided=$sumlenth/$count;
    //     $sumwidth=DB::table('packets')->sum('width'); 
    //     $widthdivided=$sumlenth/$count;
    //        if ($search == "lastmonth") {
    //            $data = DB::table('packets')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->paginate(10);
    //        } elseif ($search == "last7days") {
    //            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subDays(7))->paginate(10);
    //        } elseif ($search == "last15days") {
    //            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subdays(15))->paginate(10);
    //        } elseif ($search  == "lastyear") {
    //            $data = DB::table('packets')->where('id', '=', $request->input('batch_id'))->whereYear('created_at', date('Y', strtotime('-1 year')))->paginate(10);
    //        } elseif ($search == "today") {
   
    //            $data = DB::table('packets')->join('bactches'.'id','=','packets'.'batch_id')->whereDate('created_at', Carbon::today())->paginate(10);
    //            // dd($search);
    //        } elseif ($search == "yesterday") {
    //            $data = DB::table('packets')->whereDate('created_at', '=', Carbon::yesterday())->paginate(10);
    //        } elseif ($search == "thismonth") {
    //            $data = DB::table('packets')->whereMonth('created_at', Carbon::now()->month)->paginate(10);
    //        } 
    
   
    //        else {
    //            $data = DB::table('packets')->paginate(10);
    //        }
    //        return view('admin.seeds1')->with(['data' => $data,'samedata' => $samedata,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
    //    }

