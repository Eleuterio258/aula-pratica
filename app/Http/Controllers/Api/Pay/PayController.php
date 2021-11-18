<?php

namespace App\Http\Controllers\Api\Pay;

use Paymentsds\MPesa\Client;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    public function pay()
    {
 
        


        $reference =   rand(1, 1000000);
        $celular = "852957672";
        $valor = 150;


        $client = new Client([
            'apiKey' =>  env('APIKEY'),
            'publicKey' =>  env('PUBLICKEY'),
            'serviceProviderCode' =>  env('SERVICEPROVIDERCODE')
        ]);

        if (!empty($celular) && !empty($valor) && !empty($reference)) {
            $paymentData = [
                'from' => '258'.$celular,                  
                'reference' => $reference,           
                'transaction' => 'T12344CC',         
                'amount' => $valor                   
            ];

            $result = $client->receive($paymentData);

            if ($result->success) {
                return ["message" => "Saved successfully",];
            } else {
                return [
                    "message" => "saving error"
                ];
            }
        } else {
            echo "Preencha todos os campos do formulário";
        }
    }
}
