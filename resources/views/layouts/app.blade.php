<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
@include('includes.header')

@if($title  == 'main')
    @include('includes.additionBlock')
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-8 text-left">
            @yield('content')
        </div>
        <div class="col-4">
            @include('includes.aside')
        </div>
    </div>
</div>
@include('includes.footer')
</body>
</html>
