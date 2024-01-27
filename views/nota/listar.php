<h3><?=$nota->getTitulo();?></h3>
<h4><?=$nota->getDescripcion();?></h4>
<h2>LISTA DE NOTAS</h2>

<?php  foreach($notas as $nota): ?>
<p><?= $nota['titulo'] . " | " . $nota['fecha']?></p>

<?php endforeach; ?>

