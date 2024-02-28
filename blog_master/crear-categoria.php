<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
    <?php require_once 'includes/aside.php'; ?>
            <div id="principal">
            <h2>Crear Categorias</h2>
            <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p>
           
            <form action="guardar-categoria.php" method="post">
                <label for="nombre">Nombre de la categoria: </label>
                <input type="text" name="nombre" />

                <input type="submit" value="Guardar"/>
            </form>
        </div>

</div>

            <?php require_once 'includes/footer.php'; ?>
  
    
            