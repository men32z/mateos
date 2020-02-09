<?php

namespace App\Http\Controllers;

use App\Product;
use Mail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
      return view('web.index');
    }

    public function aboutus(){
      return view('web.aboutus');
    }

    public function contact(){
      return view('web.contact');
    }

    public function catalog(){
      $products = Product::paginate(10);
      return view('web.products.index', compact('products'));
    }

    public function send(Request $request) {
      $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required', 'token' => 'required' ]);
      //ContactUS::create($request->all());

      $token = $request->get('token');

      $client = new Client();
      $res = $client->post('https://www.google.com/recaptcha/api/siteverify', [
        'multipart' => [
        [
            'name'     => 'secret',
            'contents' => '6Lc2e3gUAAAAAChGxx1E9L82vb6LNOb-wGCj31R3'
        ],
        [
            'name'     => 'response',
            'contents' => $token
        ]
      ]]);
      //$res->getStatusCode(); // 200
      $body = $res->getBody();
      $resultado = json_decode($body->getContents());
      if($resultado->success){
        Mail::send('mail', array(
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'user_message' => $request->get('message')
               ), function($message){
               $message->from('contact@mateoesenlinea.com');
               $message->to('preza.luis@gmail.com', 'WebMaster')->subject('Contacto en Web');

           });

        return redirect()->route('contact')->with('success', 'Gracias por contactarnos!');
      } else {
        return back()->with('error', 'error con el captcha, recomendamos usar Google Chrome o Firefox.');
      }

     }
}
