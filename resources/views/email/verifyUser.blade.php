<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Selamat Datang {{ $siswa['nama']}}</h2>
    <br/>
      Email Yang teregistrasi adalah {{$siswa['email']}} , 
      Silahkan Klik Link Dibawah ini untuk menverifikasi
    <br/>
    <a href="{{url('siswa/verify', $siswa->token)}}">Verifikasi Email</a>
  </body>
</html>