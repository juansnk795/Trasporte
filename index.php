<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
</head>
</head>
<body>
<form class="form-horizontal" action="{{ url('personal/store')  }}" method="post">
        <fieldset>
            <!-- Form Name -->
            <legend>Iniciar sesión</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Usuario:</label>
                <div class="col-md-4">
                    <input id="user" name="user" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Contraseña:</label>
                <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Registrar</button>
                </div>
            </div>

        </fieldset>
    </form>
</body>
</html>