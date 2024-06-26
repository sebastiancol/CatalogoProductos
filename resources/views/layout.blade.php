<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>{{"CATALOGO DE PRODUCTOS"}}</title>
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container pt-4">
    
        <div class="card-body col-md-12">
            
            @yield('show')

        </div>
        @yield('index')
       
    </div>
  
    
</body>

</html>