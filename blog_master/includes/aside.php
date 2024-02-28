<?php require_once 'includes/helpers.php'; ?>
<aside id="sidebar">
<div id="buscador" class="bloque">
		<h3>Buscar</h3>

		<form action="buscar.php" method="POST"> 
			<input type="text" name="busqueda" />
			<input type="submit" value="Buscar" />
		</form>
	</div>

    <?php if(isset($_SESSION['usuario'])):?>
        <div id='usuario-logueado' class='bloque'>
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'] ; ?></h3>
            <!-- botones-->
            <a class="btn btn-verde" href="crear-entradas.php">Crear entradas</a>
            <a class="btn" href="crear-categoria.php">Crear categoria</a>
            <a class="btn btn-naranja" href="mis-datos.php">Mis datos</a>
            <a class="btn btn-rojo" href="cerrar.php">Cerrar sesión</a>
            
        </div>
    <?php endif ;?>
    
    <?php if(!isset($_SESSION['usuario'])):?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
                <?php if(isset($_SESSION['error_login'])):?>
                    <div class="alerta alerta-error" >
                    <h3><?= $_SESSION['error_login']?></h3>
                    </div>
                <?php endif ;?>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>
                </div>
                <!-- como en register ya almacenamos en la sesión el array de errores entonces podemos recuperarlos aquí -->
                <div id="register" class="bloque">
                    <h3>Registrate</h3> 
                    <!-- MOSTRAR ERRORES-->

                    <?php if(isset($_SESSION['compledato'])): ?>
                        <div class="alerta alerta-exito">
                            <?= $_SESSION['completado']; ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-error">
                            <?= $_SESSION['errores']; ?>
                        </div>
                    <?php endif; ?>

                    <form action="registro.php" method="POST">
                        <!-- mostrar errores -->
                        <?php if(isset($_SESSION['completado'])):?>
                            <div class= "alerta alerta-exito">
                                <?= $_SESSION['completado']?>
                            </div>
                        <?php elseif(isset($_SESSION['errores']['general'])): ?>
                            <div class="alerta alerta-error">
                                <?= $_SESSION['errores']['general'] ?>
                            </div>
                        <?php endif; ?>
                        <label for="nombre">Nombre</label>
                        <input type="nombre" name="nombre">
                        <!-- Sí existe algo en session errores ejecutar la función mostrar errores que viene
                        del script helpers si no, mostrar nada-->
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): ''; ?>
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): ''; ?>

                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): ''; ?>

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'): ''; ?>
                        <input type="submit" name="submit" value="Enviar">
                    </form>
                    <!-- Después de que se mostrarón los erroes estos se deben borrar ejecutando la función
                    borrarErrores del script helpers-->
                    <?php borrarErrores(); ?>
                </div>
                <?php endif ;?>
            </aside>