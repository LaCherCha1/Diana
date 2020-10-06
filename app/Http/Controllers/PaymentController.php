<?php

namespace App\Http\Controllers;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;



class PaymentController extends Controller
{
    private $client;

    public function __construct()
    {
        // Creating an environment
        // LIVE
        $clientId = "Abm8ZOgvDT_NFQkdcijfMyqP3uXymxaM7jArAHzKV2jztKezIy8pUnhfOZjBSHLzpPU9reMvMVnbV8L3";
        $clientSecret = "EIPKJr4f3Nzg6UoNS-dXQCcWfgs-grIgm3nYbuy6Bn2dgfsmf38Y2dfYahPQs8XlHtcsWz0Ezx41LXSU";
        $environment = new ProductionEnvironment($clientId, $clientSecret);
        $this->client = new PayPalHttpClient($environment);

        // SANDBOX
        // $clientId = "Afb-eqnK1x0CWFsSbQZRNqh8yFJ2z2Ww4h16l7CM5a19DMpTlCR83t5oWTfQRQ8R24HhP3Nu5C0l2yyK";
        // $clientSecret = "EFjltanFP8x1lqhOYvLUrnneoYl3Go50LQAC2-EF5hdqENB6vv-ofAGruG3AC7YS0LNmJm4E4nNydlwl";
        // $environment = new SandboxEnvironment($clientId, $clientSecret);
        // $this->client = new PayPalHttpClient($environment);
    }

    //pago pagina principal
    public function create()
    {

        // Creating Order
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => "plan1",
                "amount" => [
                    "value" => "888.00",
                    "currency_code" => "USD"
                ],
                "description" => "Progama Manifestando mis sueños (Pago Completo)",
            ]],
            "application_context" => [
                'brand_name' => 'Diana Guevara',
                'locale' => 'es-US',
                'landing_page' => 'BILLING',
                'shipping_preferences' => 'NO_SHIPPING',
                'user_action' => 'PAY_NOW',
                "cancel_url" => route('planes'),
                "return_url" => route('hacer-pago'),

            ]
        ];

        $response = $this->client->execute($request);
        /* echo "<pre>";
        // var_dump($response);
        echo "<hr>";
        var_dump($response->result); */
        return redirect($response->result->links[1]->href);

        //end function
    }

    public function subscription()
    {

        // Creating Order
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => "plan1",
                "amount" => [
                    "value" => "444.00",
                    "currency_code" => "USD"
                ],
                "description" => "Progama Manifestando mis sueños (Pago Parcial)",
            ]],
            "application_context" => [
                'brand_name' => 'Diana Guevara',
                'locale' => 'es-US',
                'landing_page' => 'BILLING',
                'shipping_preferences' => 'NO_SHIPPING',
                'user_action' => 'PAY_NOW',
                "cancel_url" => route('planes'),
                "return_url" => route('hacer-pago'),

            ]
        ];

        $response = $this->client->execute($request);
        /* echo "<pre>";
        // var_dump($response);
        echo "<hr>";
        var_dump($response->result); */
        return redirect($response->result->links[1]->href);

        //end function
    }
   
    public function execute()
    {


        $orderId = request('token');
        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');
        // Call API with your client and get a response for your call
        $response = $this->client->execute($request);
        // If call returns body in response, you can get the deserialized version from the result attribute of the response
        $payer = $response->result->payer;
        // echo "<pre>";
        // var_dump($payer); 
        // gettype($payer);
        session(["payer" => $payer]);
        return redirect()->route("enviar-email");
    }


//co-creando

    public function coCreate()
    {

        // Creating Order
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => "co-creando",
                "amount" => [
                    "value" => "88.00",
                    "currency_code" => "USD"
                ],
                "description" => "Co-Creando Mi Mejor Año",
            ]],
            "application_context" => [
                'brand_name' => 'Diana Guevara',
                'locale' => 'es-US',
                'landing_page' => 'BILLING',
                'shipping_preferences' => 'NO_SHIPPING',
                'user_action' => 'PAY_NOW',
                "cancel_url" => route('co-creando'),
                "return_url" => route('co-creando-hacer'),

            ]
        ];

        $response = $this->client->execute($request);
        /* echo "<pre>";
        // var_dump($response);
        echo "<hr>";
        var_dump($response->result); */
        return redirect($response->result->links[1]->href);

        //end function
    }


    public function coExecute()
    {


        $orderId = request('token');
        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');
        // Call API with your client and get a response for your call
        $response = $this->client->execute($request);
        // If call returns body in response, you can get the deserialized version from the result attribute of the response
        $payer = $response->result->payer;       
        session(["payer" => $payer]);
        return redirect()->route("co-creando-email");
    }
}
