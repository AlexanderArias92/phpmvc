<?php


    require_once("model/vista_modelo.php");

      $vista=new Vista_modelo();
   
      $matrizArticulo=$vista->get_vista();



    require_once("views/articulos_vista.php");
    