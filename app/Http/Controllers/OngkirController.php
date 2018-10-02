<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Agungjk\Rajaongkir\RajaOngkirFacade as RajaOngkir;

class OngkirController extends Controller
{
  public function index()
  {
    $kota = RajaOngkir::city();

    return view('welcome', compact('kota'));
  }

  public function ongkir(Request $request)
  {
    $request->validate(['berat' => 'required']);

    $kota_asal_id = $request->asal;
    $kota_tujuan_id = $request->kota;
    $berat = $request->berat; // dalam gram
    $kurir = $request->ekspedisi;
    $list_biaya = RajaOngkir::cost($kota_asal_id, $kota_tujuan_id, $berat, $kurir);

    // return $list_biaya;
    return view('ongkir', compact('list_biaya'));
  }
}
