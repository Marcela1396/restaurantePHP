<!DOCTYPE html>
<html>

<head>
    <?php
        include 'estilos.php';
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12" align="center">
                <h1> Restaurante la Macarena </h1>
            </div>

            <div class="col-12">
                <h2> Datos Cliente </h2>
                <form action="./pedido.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" 
                        name="nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" id="cedula" name="cedula">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección <noframes></noframes></label>
                        <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">
                    </div>

                    <h2> Datos Pedido </h2>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <h4> Bebidas </h4>
                            <select class="form-select" aria-label="Default select example" name="bebida"> 
                                <option value="" disabled selected>Escoja la opción de bebida</option>
                                <option value="Agua" id="agua">Agua</option>
                                <option value="Gaseosa" id="gaseosa">Gaseosa</option>
                                <option value="Jugo" id="jugo">Jugo Hit</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <h4> Comidas </h4>
                            <select class="form-select" aria-label="Default select example" name="comida"> 
                                <option value="" disabled selected>Escoja la opción de comida</option>
                                <option value="Hamburguesa" id="hamburguesa">Hamburguesa</option>
                                <option value="Perro Caliente" id="perro">Perro caliente</option>
                                <option value="Helado" id="helado">Helado</option>
                                <option value="Pollo" id="pollo">Pollo</option>
                                <option value="Chuleta" id="chuleta">Chuleta de cerdo</option>
                            </select>
                        </div>
                    </div>
                     <br>
                    <div align="center">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        <input class="btn btn-secondary" type="reset" value="Limpiar">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>