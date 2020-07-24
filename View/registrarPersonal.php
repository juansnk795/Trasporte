<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <form class="form-horizontal" action="../Controller/PersonalControlador.php?Guardar" method="post">
        <fieldset>
            <!-- Form Name -->
            <legend>Registrar conductor</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Nombre:</label>
                <div class="col-md-4">
                    <input id="personal" name="Nombre" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Apellido:</label>
                <div class="col-md-4">
                    <input id="personal" name="Apellido" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Identificacion:</label>
                <div class="col-md-4">
                    <input id="personal" name="Identificacion" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Fecha de nacimiento:</label>
                <div class="col-md-4">
                    <input id="personal" name="Nacimiento" type="date" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Usuario:</label>
                <div class="col-md-4">
                    <input id="personal" name="user" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="personal">Contraseña:</label>
                <div class="col-md-4">
                    <input id="personal" name="password" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <input id="personal" name="rol" type="hidden" value="3" class="form-control input-md">
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