<?php
namespace App\Http\Controllers;
use App\Soap\GetTest;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\Auth;

class SoapController extends Controller {

    protected $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }
    public function __invoke()
    {
// Add a new service to the wrapper
        ini_set("soap.wsdl_cache_enabled", 0);
        $this->soapWrapper->add('Test', function ($service) {
            $service
                ->wsdl('http://35.196.0.9/ci-soap/index.php/GloboServer?wsdl')
                ->trace(true);
        });
        $responseW = $this->soapWrapper->call('Test.pruebaTec', ['prueba' => 10
        ]);

        $arrayW = json_decode(json_encode($responseW), True);

        print_r( $arrayW);
        exit;


    }

}