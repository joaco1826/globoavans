<?php
/**
 * Created by PhpStorm.
 * User: redessociales
 * Date: 23/08/18
 * Time: 10:31 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export extends model
{
    protected $table = 'xml';

    protected $fillable = ['text'];

    public static function data()
    {
        $data = [ [
            'NomProduc' => 'Berenjenas',
            'anio' => 1998,
            'SumaDeKilo' => 78673
        ], [
            'NomProduc' => 'Berenjenas',
            'anio' => 1999,
            'SumaDeKilo' => 78273
        ],[
            'NomProduc' => 'Berenjenas',
            'anio' => 2000,
            'SumaDeKilo' => 78643
        ],[
            'NomProduc' => 'Berenjenas',
            'anio' => 2001,
            'SumaDeKilo' => 78173
        ],[
            'NomProduc' => 'Berenjenas',
            'anio' => 2002,
            'SumaDeKilo' => 78873
        ],
        ];
        return $data;
    }
}