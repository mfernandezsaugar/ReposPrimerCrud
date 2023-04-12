<!DOCTYPE html>
<html lang="en">

<style>
    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .color-container{
        width: 16px;
        height: 16px;
        display: inline-block;
        border-radius: 4px;
    }
    a{
        text-decoration: none;
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<form action="{{route('store-usuario')}}" method="post">
    @csrf
  <div class="mb-3" mt-4>
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name ="name" id="name">
  </div>
  <div class="mb-3" mt-4>
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Añadir</button>
</form>
</body>
</html>