<?php
include '../../app/AuthController.php';
$user = new AuthController;

if (!$user->isLogin()) {
    header("Location: public/view/productos.php");
}
include '../templates/headIn.template.php'
?>

<body>
    <!-- 
        Aun por definir si solo un usuario Aaministrador podra crear nuevas cuentas o sera de acceso libre
     -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card2">
                <div class="card-header">
                    <h3>Registrar Usuario</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="../../app/AuthController.php" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Juan Pablo" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="lastname" placeholder="Perez Cruz" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="correo@fake.com" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="pwd" class="form-control" placeholder="******" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" name="phone_number" class="form-control" placeholder="6120000000" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            
                            <select class="form-control" aria-label="Default select example" name="create_by" id="create_by">
                                <option value="Jonatan Soto">Jhonatan Soto</option>
                                <option value="Mark Zuckerberg">Mark Zuckerberg</option>
                                <option value="Bill Gates">Bill Gates</option>
                            </select>
                            <!-- <input type="text" name="phone_number" class="form-control" placeholder="6120000000" required> -->
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <select class="form-control" aria-label="Default select example" name="role" id="role">
                                <option value="Administrador">Administrador</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Cliente">Cliente</option>
                            </select>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="file" name="imagen" class="form-control"  required>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recordar usuario
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Registrar" class="btn float-right login_btn">
                            <input type="hidden" name="action" value="create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <section class="cont">
            <div class="row cont justify-content-md-center aling align-items-center">
                <div class="col-md-6 col-sm-12 justify-content-md-center aling align-items-center">
                    <form method="post" action="../../app/AuthController.php" enctype="multipart/form-data">
                        <h1 class="text-center">
                            Registrar nuevo socio:
                        </h1>

                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre/s</span>
                                <input type="text" name="name" class="form-control" placeholder="Juan Pablo" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Appelido/s</span>
                                <input type="text" name="lastname" class="form-control" placeholder="Perez Cruz" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Correo</span>
                                <input type="email" name="email" class="form-control" placeholder="correo@fake.com" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Numero de telefono</span>
                                <input type="text" name="phone_number" class="form-control" placeholder="6121000000" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Creado por:</span>
                                <select class="form-select" aria-label="Default select example" name="role" id="role">
                                    <option value="Jonatan Soto">Jonatan Soto</option>
                                    <option value="Mark Zuckerberg">Mark Zuckerberg</option>
                                    <option value="Bill Gates">Bill Gates</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rol</span>
                                <select class="form-select" aria-label="Default select example" name="role" id="role">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Empleado">Empleado</option>
                                    <option value="Cliente">Cliente</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Contraseña</span>
                                <input type="password" name="password" class="form-control" placeholder="******" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Foto</span>
                                <input type="file" name="imagen" class="form-control"  required>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <button type="submit" class="btn btn-primary">Continuar</button>
                            <input type="hidden" name="action" value="create">
                        </div>
                    </form>
                </div>
                
            </div>
        </section>
    </div> -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>