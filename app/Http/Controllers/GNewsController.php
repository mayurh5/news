<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use DB;
use File;
Use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;

class GNewsController extends Controller
{
    public function index() 
    {
        try {

            $news = $this->_gNewsLiveDataGet("73606313f8af1d60930bb7847fe5f8d4"); 

            $news = json_decode($news,true);
        
            return view('home.index',compact('news'));

        }catch(Exception $exception){
            return redirect()->route('index')->with('error', 'The error message here!');
        }
       
    }

    private function _gNewsLiveDataGet($token){

        try{
            $curl = curl_init();

            $url = 'https://gnews.io/api/v4/search?token='.urlencode($token).'&lang=hi&country=in&max=15&from=2022-01-08T10:19:14Z&to=2022-01-19T04:19:14Z&q=all';
        
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            // echo $response;
           
            return $response;

        } catch (\Exception $th) {
            return NULL;
        } 

    }

    public function secondTask(Request $request){

        $employee = DB::table('employee')
                     ->where(\DB::raw('substr(First_name, -1)'), '=' , 'n')
                     ->get();

        $reward = DB::table('reward as r')
                    ->where('r.amount' ,'<', 1500) 
                    ->leftjoin('employee as e','r.Employee_ref_id','=','e.Employee_id')
                    ->get('e.*');

        $join_date = DB::table('employee')
                    ->where('Joining_date' ,'<=', '2019-02-25') 
                    ->get();

                    $data['employee_last_letter_n'] = $employee;
                    $data['reward'] = $reward;
                    $data['join_date'] = $join_date;

        return $data;

    }
}
