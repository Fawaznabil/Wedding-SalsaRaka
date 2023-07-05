<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>

  <table style="width: 100%;">

    <tr>
        <td>
        <img src="assets/mitra-logo-dark.png" style=" width: 60px; height: auto; align:center;">
        </td>
      <td style="text-align: center; width:100%;" >
        <span style="line-height: 1.6; font-weight: bold;">
          BADAN EKSEKUTIF MAHASISWA VOKASI
          <br>UNIVERSITAS AIRLANGGA
        </span>
      </td>

      <td >
      <img src="assets/logo_bem_vokasi_hd.png" style=" width: 60px; height: auto; align: center; ">
      </td>
    </tr>

  </table>


  <hr class="line-title">
  <p style="text-align: center" >
    LAPORAN DATA CUSTOMER <br>
    <b>Proses Qc</b>
  </p>
  <table class="table table-bordered">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Asal Instansi</th>
        <th>Judul</th>
        <th>Media</th>
        <th>Jenis Konten</th>
        <th>Tanggal Upload</th>
        <th>Deskripsi</th>
    </tr>
    @foreach ($data as $item )
    <tr>
        <td>PN{{$item->id}}</td>
        <td>{{$item->NAMA_PEMESANAN }}</td>
        <td>{{$item->ASAL_INSTANSI}}</td>
        <td>{{$item->JUDUL}}</td>
        <td>{{$item->MEDIA}}</td>
        <td>{{$item->JENIS_KONTEN}}</td>
        <td>{{$item->TGL_UPLOAD}}</td>
        <td>{{$item->DESKRIPSI}}</td>
    </tr>
    @endforeach

  </table>

</body>
</html>
