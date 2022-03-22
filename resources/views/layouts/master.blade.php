<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    @if(Request::is("/"))
        <h1>Perfumes</h1>
    @elseif(Request::is("perfumes"))
        <h1>Perfumes</h1>
    @elseif(Request::is("new-perfume"))
        <h1>Add new perfume</h1>
    @elseif(Request::is("edit-perfume/*"))
        <h1>Edit a perfume</h1>
    @else
        <h1>perfumes</h1>
    @endif

    @yield( "content" )
</body>
</html>