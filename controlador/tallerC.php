<?php
    class TallerC
    {
        public function registrarProveedor()
        {
            if (isset($_POST['nombre_del_proveedor']))
            {
                $datosC = array('nom_proveedor'=> $_POST['nombre_del_proveedor'], 'direccion'=> $_POST['direccion_del_proveedor'], 'tel1'=> $_POST['telefono_1'], 'tel2' => $_POST['telefono_2'], 'correo' => $_POST['correo_proveedor']);
                $tablaBD = 'proveedor'; 
                $respuesta = TallerM::registrarProveedor($datosC, $tablaBD);
            }
           
        }
    }

?>
