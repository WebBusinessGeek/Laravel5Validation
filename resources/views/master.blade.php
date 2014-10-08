<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Validation Play</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-twit/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-twit/css/bootstrap-theme.min.css" rel="stylesheet">

   
  </head>
  <body>
    <div class="container">
      
      <h1>Laravel 5 Validation ToDo app</h1>

      @if(!Request::is('todo/create'))
        <a href="/todo/create" class="btn btn-success">create new todo</a>
      @endif
     

        @yield('content')


    </div>

    
  </body>
</html>