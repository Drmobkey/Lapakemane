<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dipantry\Rajaongkir\Models\ROProvince;
use Dipantry\Rajaongkir\Models\ROCity;
use Dipantry\Rajaongkir\Models\ROSubDistrict;
use Dipantry\Rajaongkir\Models\ROCountry;
use Dipantry\Rajaongkir\Constants\RajaongkirCourier;


class OngkirController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key' => '99eed53b39cbe10c232afcf48f2521a2'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];
        return view('cek-ongkir', ['cities' => $cities, 'ongkir' => '']);
    }
    
    public function cekOngkir(Request $request)
    {
        $response = Http::withHeaders([
            'key' => '99eed53b39cbe10c232afcf48f2521a2'
        ])->get('https://api.rajaongkir.com/starter/city');

        $responseCost = Http::withHeaders([
            'key' => '99eed53b39cbe10c232afcf48f2521a2'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier,
        ]);

        // dd($responseCost->json());

        $cities = $response['rajaongkir']['results'];
        $ongkir = $responseCost['rajaongkir'];
        // dd($ongkir);
        return view('cek-ongkir', ['cities' => $cities, 'ongkir' => $ongkir]);    
    }
}


