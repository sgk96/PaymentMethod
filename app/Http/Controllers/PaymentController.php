<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use Auth;

class PaymentController extends Controller
{
    public function save(Request $request)
    {
       
       $response=$request->response;
       
        $payments= new payment;
        $data=$response['data'];
        
        $payments->amount=$data['amount'];
//      $payments->Date=date('Y-m-d',strtotime($data['date']));
        $payments->paymentStatus=$data['paymentStatus'];  
        $payments->authCode=$data['authCode'];
       
        $payments->save();
    
    }
     public function show()
    {
        $payments = payment::all();
       return view('list')->with('payments',$payments);
    }
    }

