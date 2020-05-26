<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1 class="text-danger"> Lista de paises</h1>
    <table class="table table-hover" >
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Población</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais=>$infopais)
            <tr>
                <td>
                    {{$pais}}
                </td>
                <td>
                    {{$infopais["Capital"]}}
                </td>
                <td>
                    {{$infopais["Moneda"]}}
                </td>
                <td>
                    {{$infopais["Población"]}}
                </td>
                <td>
                    @foreach ($infopais["Ciudades"] as $ciudad)
                      <ul>  
                        {{$ciudad}}
                      </ul>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>