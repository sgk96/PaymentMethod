<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function save()
    {
        <?php
 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'YOUR_PUBLIC_API_KEY';
Simplify::$privateKey = 'YOUR_PRIVATE_API_KEY';
 
$payment = Simplify_Payment::createPayment(array(
        'amount' => '1000',
        'description' => 'payment description',
        'invoice' => '[INVOICE ID]',
        'card' => array(
           'number' => '5555555555554444',
           'expMonth' => '8',
           'cvc' => '123',
           'expYear' => '99'
        )
));
 
if ($payment->paymentStatus == 'APPROVED') {
    echo "Payment approved\n";
}
 
?>
    }
}
