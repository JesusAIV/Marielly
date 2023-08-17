<?php
    class viewmodel{
        protected function obtenervistamodelo($views){
            $lista = ["inicio", "tiendas", "quienessomos", "producto", "detalle", "cuenta", "contacto", "productoDetalle", "inventario", "productos", "categoria"];

            if(in_array($views,$lista)){
                if(is_file("./view/content/".$views.".php")){
                    $contenido = "./view/content/".$views.".php";
                }else{
                    $contenido = "inicio";
                }
            }else{
                $contenido = "inicio";
            }
            return $contenido;
        }
    }