<?php
    include_once('modelos/Mascota.php');
    $pets = file_get_contents('http://adopet.test/AdoPetWS/public/pets/mascotas');
    #print($pets);
    $arrayPets = json_decode($pets);
    $arrayObjPets = array();
    foreach ($arrayPets as $pet){
        $mascota = new Mascota();
        $mascota = (object) $pet;
        array_push($arrayObjPets,$mascota);
    }
    //print_r($arrayObjPets);
    foreach($arrayObjPets as $pet){
        $x = ($pet->genero == 0) ? "Macho": "Hembra";
        print('
            <div class="col-sm-4 col-xs-6 w3gallery-grids">
            <a href="images/'.$pet->nombre.'.jpg" class="imghvr-hinge-right figure">
                <img src="images/'.$pet->nombre.'.jpg" alt="" title="Pets Care Image"/> 
                <div class="agile-figcaption">
                  <h4>'.$pet->nombre.'</h4>
                  <p>'.$pet->especie.'-'.$pet->raza.'-'.$x.'-'.$pet->edad.'</p>
                </div>
            </a>
        </div>
        ');
    }
    