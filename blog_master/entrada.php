<?php require_once 'includes/helpers.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php $entrada_actual = conseguirEntrada($db, $_GET['id']); 
    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
?>  
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
    <?php require_once 'includes/aside.php'; ?>
            <div id="principal">
            
                <h1><?=$entrada_actual['titulo'] ;?></h1>
                <a href="categoria.php?id=<?=$entrada_actual['categoria_id'];?>">
                <h2><?=$entrada_actual['categoria'] ;?></h2>
                </a>
                
                <h4><?=$entrada_actual['fecha'] ;?> | <?=$entrada_actual['usuario'] ; ?></h4>
                <p>
                <?=$entrada_actual['descripcion'] ;?>
                </p>

                <?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
                <a class="btn btn-verde" href="editar-entrada.php?id=<?=$entrada_actual['id']?>">Editar entrada</a>
                <a class="btn" href="borrar-entrada.php?id=<?=$entrada_actual['id']?>">Borrar entrada</a>
                
                <?php endif; ?>
            </div>
            <?php require_once 'includes/footer.php'; ?>
    </div>
    