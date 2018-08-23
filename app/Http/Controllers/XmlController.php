<?php
namespace App\Http\Controllers;

use App\Export;
use SimpleXMLElement;

class XmlController extends Controller {


    public function __invoke()
    {

        $array = Export::data();

        if (count($array) == 0) {
            throw new Exception("Array cannot be empty");
        }

        $xml = new SimpleXMLElement('<xml/>');
        $track = $xml->addChild('totales');
        foreach ($array as $key => $value)
        {
            $track->addChild('total');
            foreach($value as $k => $v)
            {
                $track->addChild($k, $v);
            }
        }

        Export::create([
            'text' => $xml->asXML()
        ]);
//        header("Content-disposition: attachment; filename=data_" . date('d-m-Y') . ".xml");
//        header('Content-type: "text/xml"; charset="utf8"');
        return $xml->asXML();

    }

}