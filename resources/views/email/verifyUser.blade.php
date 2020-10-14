<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Welcome to the site {{ $siswa['nama']}}</h2>
    <br/>
    Your registered email-id is {{$siswa['email']}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{url('siswa/verify', $siswa->token)}}">Verify Email</a>
  </body>
</html>