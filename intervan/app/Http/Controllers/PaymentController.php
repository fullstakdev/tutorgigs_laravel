<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentRate;
use App\Http\Requests\PaymentRateRequest;
use DB;

class PaymentController extends Controller
{
    //


    public function index(){
        $data['title'] = 'Payment Rates';
        $data['payment_rates'] = PaymentRate::all();
        return view('payment.index',$data);
    }

    public function add(PaymentRateRequest $request){
        $data = $request->validated();
        PaymentRate::create($data);
        return redirect()->back()->withSuccess('Payment rate added successfully...');
    }
    public function edit(PaymentRateRequest $request, PaymentRate $paymentRate){
       $paymentRate->update($request->validated());
        return redirect()->back()->withSuccess('Payment rate updated successfully...');
    }
    public function delete(PaymentRate $paymentRate){
        $paymentRate->delete();
        return redirect()->back()->withSuccess('Payment rate deleted successfully...');
    }

    public function getPaymentRate(Request $request){
        $rate = $request->certified==0 ? 'non_teacher_rate' : 'certified_teacher_rate';
        $data = DB::table('payment_rates')->where('duration_min','>=',$request->duration)->orderBy('duration_min')->pluck($rate)->first();
       echo $data;
    }
}
