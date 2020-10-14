<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>

    <link href="{{ asset("assets/css/sb-admin-2.min.css")}}" rel="stylesheet">

    <style>
        .image{
            max-width: 70%;
        }
    </style>
</head>
<body class="container">

    <div class="d-flex justify-content-center">
        <img 
        class="image mx-5"
        src="{{ asset("/my-assets/not-active.jpg") }}" alt="">
    </div>

    <br>

    <div class="d-flex justify-content-center">
        <a href="{{ url("/") }}" class="btn btn-primary">Ke Home</a>
    </div>
    
</body>
</html>