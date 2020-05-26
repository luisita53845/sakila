<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
</head>
<body>
        <form method="POST" action="{{ url('categorias/update' )  }}" class="form-horizontal"  >
        @csrf
        <input name="id" type="hidden" value="{{ $nombre->category_id}}"/>

        <fieldset>
​        
        <legend>Editar Categoría</legend>

        @if(session("Exito"));

          <div class="alert-success">{{ session ("Exito")}}</div>
        
        @endif
​
        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="nombre">Nombre de Categoría</label>  
        <div class="col-md-4">
        <input id="textinput" name="nombre" value="{{ $nombre->name}}" type="text" placeholder="Ingrese aquí la categoría" class="form-control input-md">
          <strong class="text-danger">{{ $errors->first('nombre')}}</strong>
        </div>
        </div>
​
        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
            <button id="" type="submit" name="" class="btn btn-primary">Enviar</button>
        </div>
        </div>
​
        </fieldset>
        </form>
</body>
</html>