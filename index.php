<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi primera app con php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <h1> Restaurante la Macarena </h1>
            </div>

            <div class="col-12">
                <h2> Datos Cliente </h2>
                <form action="./pedido.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Cédula</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" id="cedula" name="cedula">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direcció<noframes></noframes></label>
                        <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">
                    </div>

                    <h2> Datos Pedido </h2>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <h2> Bebidas </h2>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="bebida1" name="bebida1">
                                <label class="form-check-label" for="bebida1">Jugo Hit</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="bebida2" name="bebida2">
                                <label class="form-check-label" for="bebida2">Limonada</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="bebida3" name="bebida3">
                                <label class="form-check-label" for="bebida2">Café</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <h2> Comidas </h2>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="comida1" name="comida1">
                                <label class="form-check-label" for="comida1">Hamburguesa</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="comida2" name="comida2">
                                <label class="form-check-label" for="comida2">Perro Caliente</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="comida3" name="comida3">
                                <label class="form-check-label" for="comida3">Pizza</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" align="center">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>