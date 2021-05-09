<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel CRUD </title>
      <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
            height:55px
        }
        body{
            background-image:url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-vector%2Fbackground&psig=AOvVaw2-WMEoiFrw3r0MN0sk3ej8&ust=1620539444183000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCHxIKxufACFQAAAAAdAAAAABAD");
            background-size:cover;
        }

    </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
            <nav class="navbar navbar-dark bg-dark">
             <h4 style="color:white">CRUD in Laravel 8</h4>
             <h4 style="color:white">Mery-an Telez</h4>
            </nav>

             <div class="container">
                  @yield('content')
             </div><br><br><br>

            <div class="text-center footer bg-dark">
                 <h5 style="margin-top:1px">Activity in Architecture and Information System </h5 >
                 <h6>Teacher: Sir Christian Maderazo</h6>
            </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>