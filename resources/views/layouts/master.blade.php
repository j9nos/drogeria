<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    @switch(Request::url())
        @case("http://localhost:8000")
            <h1>Perfumes</h1>
            @break
    
        @case("http://localhost:8000/perfumes")
            <h1>Perfumes</h1>
            @break
    
        @case("http://localhost:8000/new-perfume")
            <h1>New Perfume</h1>
            @break


        @default
            Default case...
    @endswitch
        
    
    @yield( "content" )
</body>
</html>