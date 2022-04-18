<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Paws</title>
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin.css" />
    <script src="https://kit.fontawesome.com/33bad729c6.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('user-layouts.navbaruser')
    @yield('container')

    @if(Auth::user()->image)
    <image class="image rounded-circle" src="{{asset('/storages/images/'.Auth::user()->image)}}" alt="profile_image" style="width:80px;height:80px;padding:10px;margin:0px;"></image>
    @endif
</body>