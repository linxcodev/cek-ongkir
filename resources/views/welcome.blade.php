<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cek Ongkir</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Cek ongkir dari yogyakarta</h1>

      <form action="{{route('cek.ongkir')}}" method="post">
        @csrf
        <label>Kota Asal</label>
        <select class="form-control mb-4" name="asal" id="asal">
          <option value="39">Bantul</option>
          <option value="135">Gunung Kidul</option>
          <option value="210">Kulon Progo</option>
        </select>
        <label>Kota Tujuan</label>
        <select class="form-control mb-4" name="kota" id="kota">
          @foreach ($kota as $kotas)
            <option value="{{ $kotas->city_id }}">{{ $kotas->city_name }}</option>
          @endforeach
        </select>
        <label>Ekspedisi</label>
        <select class="form-control mb-4" name="ekspedisi" id="ekspedisi">
          <option value="jne">JNE</option>
          <option value="tiki">TIKI</option>
        </select>
        <label for="staticEmail">Berat (Dalam Gram)</label>
        <input type="text" class="form-control mb-4" name="berat">
        <button type="submit" class="btn btn-primary">Cek Ongkir</button>
      </form>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
