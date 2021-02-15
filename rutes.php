<?php

 $rutes->definir([

     '' => 'vista/index.php',

     'cases' => 'vista/principal.php',
     'cases/afegir' => 'vista/formAfegir.php',
     'usuari' => 'vista/gestioUsuari.php',
     'cases/gestionar/*' => 'vista/gestioCasa.php',
     'editar/info/*' => 'vista/formEditar.php',
     'editar/imatges/*' => 'vista/formEditarFotos.php',
     'reserves' => 'vista/reserves.php',
     'reserves/grafics' => 'vista/grafics.php',
     'gestio/tarifes/*' => 'vista/gestioTarifa.php',
     'gestio/bloqueig/*' => 'vista/gestioBloqueig.php'




 ]);
