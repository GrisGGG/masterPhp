<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
    <?php require_once 'includes/aside.php'; ?>
            <div id="principal">
            <h2>Crear Entrada</h2>
            <p>Añade nuevas entradass al blog para que los usuarios puedan leerlas y disfrutar su contenido</p>
            <form action="guardar-entrada.php" method="post">
                <label for="titulo">Titulo de la entrada: </label>
                <input type="text" name="titulo" />
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo'): ''; ?>

                <label for="descripcion">Descripción de la entrada: </label>
                <textarea name="descripcion" rows="10" cols="50">Aquí va tu descripción</textarea>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion'): ''; ?>

                <label for="categoria">Seleccione la categoria: </label>
                <select name="categoria">
                    <?php
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <option  value="<?=$categoria['id'] ?>" 
                    ><?=$categoria['nombre']?></option>
                    <?php
                    endwhile;
                 endif;?>

                </select>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria'): ''; ?>
                <input type="submit" value="Guardar"/>
            </form>
            <?php borrarErrores (); ?>
        </div>

</div>

            <?php require_once 'includes/footer.php'; ?>
  
    
            