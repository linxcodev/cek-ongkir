<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hasil ongkir</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style media="screen">
      label {
        float: left;
      }
    </style>
  </head>
  <body>
    <h1>Cek Ongkir</h1>
    <label>Kota asal = </label> <p>{{$list_biaya['origin_details']['city_name']}}</p>
    <label>Kota Tujuan = </label> <p>{{$list_biaya['destination_details']['city_name']}}</p>
    {{-- @foreach ($list_biaya['results'][0]['costs'] as $cek) --}}
      @for ($i=0; $i < count($list_biaya['results'][0]['costs']); $i++)
        <label>Service = </label>
        <p>{{$list_biaya['results'][0]['costs'][$i]['service']}}</p>
        <label>Ongkir = </label>
        <p>
          Rp. {{number_format($list_biaya['results'][0]['costs'][$i]['cost'][0]['value'],2,",",".")}}
        </p>
        <label>Lama Pengiriman = </label>
        <p>{{$list_biaya['results'][0]['costs'][$i]['cost'][0]['etd']}} Hari</p>
      @endfor
    {{-- @endforeach --}}
    <label>Ekspedisi = </label> <p>{{$list_biaya['results'][0]['code']}}</p>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
