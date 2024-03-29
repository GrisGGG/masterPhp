<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
    <?php require_once 'includes/aside.php'; ?>
        <div id="principal">
        <h3>Mis datos</h3> 
                    <!-- MOSTRAR ERRORES-->
                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                            <?= $_SESSION['completado']; ?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-error">
                            <?php $_SESSION['errores']; ?>
                        </div>
                    <?php endif; ?>
                    <form action="actualizar-datos.php" method="POST">
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
                        <input type="nombre" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" />
                        <!-- Sí existe algo en session errores ejecutar la función mostrar errores que viene
                        del script helpers si no, mostrar nada-->
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): ''; ?>
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellido']; ?>"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): ''; ?>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): ''; ?>
                        <input type="submit" name="submit" value="Actualizar">
                    </form>
                    <?php borrarErrores(); ?>
            </div>
            </div>




<?php require_once 'includes/footer.php'; ?>
  
    