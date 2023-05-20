<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Error;

class ErrorController extends Controller
{
  

    public function post_url(Request $request){
		    	$data =  new Error();

		    	$data->url = $request->url;

		    	$data->save();

		    	 return response()->json([
		            'message' => 'Data inserted successfully',
		            'data' => $data
		        ]);  
		       }


}
