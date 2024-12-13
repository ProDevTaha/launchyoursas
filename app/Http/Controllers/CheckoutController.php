<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CheckoutController extends Controller
{
  public function checkoutDeils($id)
  {
      $plans = [
          20 => [
              'name' => 'Basic Plan',
              'price' => 9.9,
              'description' => 'A great starting point for individuals or small teams to access essential features at an affordable price.',
              'features' => [
                  ['name' => 'Access to basic features', 'description' => 'Get all the essential tools to kickstart your journey.'],
                  ['name' => '24/7 customer support', 'description' => 'Receive assistance anytime you need it.'],
                  ['name' => 'Regular updates', 'description' => 'Stay up-to-date with the latest features and improvements.'],
              ],
              'duration' => '1 month',
              'delivery' => 'Instant access after payment',
              'how_works' => 'Sign up, choose your plan, make a payment, and start using our service immediately.',
          ],
          45 => [
              'name' => 'Standard Plan',
              'price' => 19.9,
              'description' => 'Perfect for growing teams that need additional features, flexibility, and enhanced support.',
              'features' => [
                  ['name' => 'Everything in the Basic Plan', 'description' => 'Includes all features of the Basic Plan.'],
                  ['name' => 'Advanced analytics', 'description' => 'Gain deeper insights into your performance.'],
                  ['name' => 'Priority customer support', 'description' => 'Get prioritized assistance for faster resolutions.'],
                  ['name' => 'More integrations', 'description' => 'Connect with more tools and platforms.'],
              ],
              'duration' => '1 month',
              'delivery' => 'Instant access after payment',
              'how_works' => 'Sign up, choose your plan, make a payment, and access advanced features right away.',
          ],
          70 => [
              'name' => 'Premium Plan',
              'price' => 39.9,
              'description' => 'For larger teams or businesses that need advanced features, scalability, and dedicated support for high performance.',
              'features' => [
                  ['name' => 'Everything in the Standard Plan', 'description' => 'Includes all features of the Standard Plan.'],
                  ['name' => 'Customizable solutions', 'description' => 'Tailored solutions to meet your specific needs.'],
                  ['name' => 'Dedicated account manager', 'description' => 'Work with an expert for personalized support.'],
                  ['name' => 'Enterprise-grade security', 'description' => 'Top-level security for peace of mind.'],
                  ['name' => 'Unlimited integrations', 'description' => 'Seamlessly integrate with all necessary tools.'],
              ],
              'duration' => '1 month',
              'delivery' => 'Instant access after payment and onboarding session',
              'how_works' => 'Sign up, select your plan, make a payment, and schedule an onboarding session for personalized support.',
          ],
      ];
  
      $plan = $plans[$id] ?? null;
  
      if (!$plan) {
          return redirect()->route('pricing')->with('error', 'Plan not found.');
      }
  
      return view('checkoutDetails', compact('plan'));
  }
  

    public function checkout(Request $request)
    {
       
       $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
       try{
        $dataPayment = $request->input('dataPayment');
        $token = $stripe->tokens()->create([
          'card' => [
            'name'=>$dataPayment['name'], 
            'number' => $dataPayment['number'],
            'exp_year' =>intval($dataPayment['year']),
            'exp_month' =>intval($dataPayment['month']),
            'cvc' => intval($dataPayment['cvc']),   
          ]
        ]);

          if (!isset($token['id'])) {
            return redirect()->route('stripe.add.money');
          }
            
          $charge = $stripe->charges()->create([
            'card' => $token['id'],
            'currency' => 'USD',
            'amount' => $dataPayment['price'],
            'description' => 'course spring boot', 
          ],);
            
           if($charge['status'] == 'succeeded') {  
                $data = [
                    'StatusVisa' =>$charge['status'], 
                    'id' =>$charge['id'],
                    'status'=>$charge['status'] 
                ]; 
           }else return response()->json(['error' => 'Internal Server Error'], 500);
       }catch(\Exception $e){
            return response()->json(['error' => 'Internal Server Error'], 500);
       }
    } 
    
    public function checkoutSimple($price){
      try { 
        return view('checkout', compact('price')); 
      } catch (\Throwable $th) {
        return $th->getMessage();
      }
    }

    public function stripePost(Request $request){ 
      
      $request->validate(
        [
          'email'=>'required|email',
          'name'=>'required',
          'phone'=>'required',
          //'state'=>'required',
          'country'=>'required',
          'city'=>'required',
          //'zip'=>'required',
          //'address1'=>'required'
        ]   
    ); 
      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
      $customer = Stripe\Customer::create([
        'name' => $request->name,
        'email' => $request->email,
        //'phone' =>$request->phone,
        'address' => [
        //     'line1' => $request->adress1,
        //     'line2' => $request->adress2,
        'city' => $request->city,
        //     'state' => $request->state,
        //     'postal_code' =>$request->zip,
          'country' => $request->country,
        ],
        "source" => $request->stripeToken,
      ]); 

      $charge = Stripe\Charge::create ([
        'customer' => $customer->id,
        "amount" => $request->price*100, 
        "currency" => "usd",
         "description" => $request->thankyou == 'smartersplanet'  ? 'BOOT-COURSE' : $request->course 
      ]);
         
        if ($charge->status === 'succeeded') {
          //return view("payment.success");
           $dataOrder = [
            'price' => $request->price,
            'name' =>  $request->name,
            'email' => $request->email,
            'orderId' => $customer->id,
            'phone' =>$request->phone,
            'country' =>$request->country,
            'offre' =>$request->offre,
            'thankyou' =>$request->thankyou,
            'course' =>$request->course,
            'device' =>$request->device,
            'mac_address' =>$request->mac_address,
            'application' =>$request->application
          ];
            if(isset($request->thankyou) && $request->thankyou == 'bootcoders'){
                Mail::send('emails.newOrder',$dataOrder,function($message){
                  $message->to('bootcoders.tv@gmail.com','Hicham marhar')
                  ->subject('New Order BootCoders');
                });
                 Mail::send('emails.orderCustomer',$dataOrder,function($message){
                  $message->to('bootcoders.tv@gmail.com','Hicham marhar')
                  ->subject('New Order BootCoders');
                });
                Mail::send('emails.orderCustomer', $dataOrder, function ($message) use ($request) {
                  $message->to($request->email, $request->name)
                      ->subject('Order BootCoders (IPTV)');
                });
                  return redirect("https://www.bootcoders.com/successOrder" 
                . ($request->login ? "?login=" . $request->login : '?login=00')
                . ($request->phone ? "&phone=" . $request->phone : '')
                . ($request->country ? "&country=" . $request->country : '')
                . ($request->name ? "&name=" . $request->name : '')
                . ($request->email ? "&email=" . $request->email : '')
                . ($request->price ? "&price=" . $request->price : '')
                . ($dataOrder['orderId'] ? "&orderId=" . $dataOrder['orderId'] : '')
                . ($request->offre ? "&offre=" . $request->offre : ''))
                ;
            }else if (isset($request->thankyou) && $request->thankyou == 'technooiptv'){
                Mail::send('emails.newOrder',$dataOrder,function($message){
                  $message->to('technoiptvservice@gmail.com','Hicham marhar')
                  ->subject('New Order Technoiptv');
                });
                 Mail::send('emails.orderCustomer',$dataOrder,function($message){
                  $message->to('technoiptvservice@gmail.com','Hicham marhar')
                  ->subject('New Order Technoiptv');
                });
                Mail::send('emails.orderCustomer', $dataOrder, function ($message) use ($request) {
                  $message->to($request->email, $request->name)
                      ->subject('Order Technoiptv ');
                }); 
                return redirect('https://technooiptv.com/thank-you/');
            }
            else if (isset($request->thankyou) && $request->thankyou == 'smartersplanet'){
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.newOrder',$dataOrder,function($message){
                $message->to('smartersplanet@gmail.com','Hicham marhar')
                ->subject('New Order Smartersplanet');
              });
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.orderCustomerSmartersplanet',$dataOrder,function($message){
                $message->to('smartersplanet@gmail.com','Hicham marhar')
                ->subject('New Order Smartersplanet'.'Smartersplanet');
              });
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.orderCustomerSmartersplanet', $dataOrder, function ($message) use ($request) {
                $message->to($request->email, $request->name)
                    ->subject('Order Smartersplanet ');
              }); 
              return redirect('https://smartersplanet.com/thanks-page'); 
            }
            else if (isset($request->thankyou) && $request->thankyou == 'smarterstivi'){
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.newOrder',$dataOrder,function($message){
                $message->to('smarterstivi@gmail.com','Hicham marhar')
                ->subject('New Order Smarterstivi');
              });
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.orderCustomerSmarterstivi',$dataOrder,function($message){
                $message->to('smarterstivi@gmail.com','Hicham marhar')
                ->subject('Order Smarterstivi');
              });
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.orderCustomerSmarterstivi', $dataOrder, function ($message) use ($request) {
                $message->to($request->email, $request->name)
                  ->subject('Order Smarterstivi');
              }); 
              return redirect('https://smarterstivi.com/checkout/order-received/'); 
            }
        }else{
          return view("payment.oops");
        } 
    }


    public function checkoutView(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'offre' =>$request->offre,
          'thankyou' =>$request->thankyou
        ]; 
        $this->saveData($data); 
        return view('payment.checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('payment.checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'offre' =>$request->offre,
          'thankyou' =>$request->thankyou,
        ]; 
        $this->saveData($data); 
        return view('payment.checkout',$data);  
      }
     
    }
    

    public function checkoutViewFromSmartersplanet(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->Courses,
          'offre' =>$request->offres,
          'thankyou' =>$request->thankyou
        ];

        $this->saveData($data); 
        return view('payment.checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('payment.checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->Courses,
          'offre' =>$request->offres,
          'thankyou' =>$request->thankyou
        ];
        $this->saveData($data); 
        return view('payment.checkout',$data);  
      }
     
    }
    
    public function checkoutViewB(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'thankyou' =>$request->thankyou,
          'offre' =>$request->offre,
          'login' =>$request->login,
          'remoteSubmit' => false
        ]; 
        $this->saveData($data); 
        return view('payment.checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('payment.checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'thankyou' =>$request->thankyou,
          'offre' =>$request->offre,
          'login' =>$request->login,
          'remoteSubmit' => false
        ]; 
        $this->saveData($data); 
        return view('payment.checkout',$data);  
      }
     
    }

    public function saveData($data){
      $_SESSION['data'] = $data;
      return  $_SESSION['data'] ;
    }


    public function productPage(Request $request){

      if($request->isMethod('get')){
        $data = $_SESSION['ProductPage']; 
        return view('productPage',$data);    
      } 

      $data = [
        'price' =>$request->price,
        'course' =>$request->course,
        'videos' =>$request->videos,
        'duration' =>$request->duration,
        'valeurAjeuter' =>$request->valeurAjeuter
      ]; 
      $this->saveProductPage($data); 
      return view('productPage',$data);      
    }

    public function saveProductPage($data){
      $_SESSION['ProductPage'] = $data; 
    }


}
