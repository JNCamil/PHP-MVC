<h1>USUARIOS</h1>


<?php foreach ($usuarios as $usuario):?>
    <p><?= $usuario["nombre"] . " | " . $usuario["apellidos"] ?></p>

<?php endforeach; ?>
