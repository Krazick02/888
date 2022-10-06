<?php 
include 'app/AuthController.php';
$user = new AuthController; 
    
if(!$user->isLogin()){
    header("Location: public/view/productos.php");
}

include 'public/templates/headIn.template.php'
?>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="https://gmail.com"><i class="fab fa-google-plus-square"></i></a></span>
					<span><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="app/AuthController.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="email" placeholder="Usuario" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pwd" class="form-control" placeholder="******" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar usuario
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
                        <input type="hidden" name="action" value="access">
					</div>
				</form>
			</div>
			<div class="card-footer">
                <div class="d-flex justify-content-center links">
                    No tienes cuenta?<a href="public/view/registerUser.php">¡Registrate!</a>
				</div>
				<div class="d-flex justify-content-center">
                    <a href="public/view/recobery.php">Olvidaste la contraseña?</a>
				</div>
			</div>
		</div>
        <?php include 'public/templates/footer.template.php'?>
	</div>
</div>

    <!-- <body>
        <div class="container">
            <section class="cont">
                <div class="row cont justify-content-md-center aling align-items-center">
                    <div class="col-md-6 col-sm-12 justify-content-md-center aling align-items-center">
                        <form method="post" action="app/AuthController.php">
                            <h1 class="text-center">
                                Iniciar sesion
                            </h1>

                            <div class="row mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" name="email" class="form-control" placeholder="Usuario" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="password" name="pwd" class="form-control" placeholder="******" required>
                                </div>
                            </div>
                            
                            <div class="form-check form-switch">
                                
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled">
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Recordar Usuario</label>
                            </div>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                                <input type="hidden" name="action" value="access">
                            </div>
                        </form>
                        <div class="row " style="width: 100%;">
                            <div class="text-center col-sm-6"><a class="enlace" href="public/view/registerUser.php">Registrar</a></div>
                            <div class="text-center col-sm-6"><a class="enlace" href="recobery.php">Recuperar Contraseña</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>