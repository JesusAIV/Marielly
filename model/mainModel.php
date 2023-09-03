<?php

class mainModel
{
    protected function sweet_alert($datos)
    {
        if ($datos['Alerta'] == "simple") {
            $alerta = "
                <script>
                    Swal.fire({
                        title: '" . $datos['Titulo'] . "',
                        text: '" . $datos['Texto'] . "',
                        icon: '" . $datos['Tipo'] . "',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
            ";
        } elseif ($datos['Alerta'] == "recargar") {
            $alerta = "
                <script>
                    Swal.fire({
                        title: '" . $datos['Titulo'] . "',
                        text: '" . $datos['Texto'] . "',
                        icon: '" . $datos['Tipo'] . "',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#table-productos').DataTable().ajax.reload();
                        }
                    })
                </script>
            ";
        } elseif ($datos['Alerta'] == "limpiar") {
            $alerta = "
                <script>
                    Swal.fire({
                        title: '" . $datos['Titulo'] . "',
                        text: '" . $datos['Texto'] . "',
                        icon: '" . $datos['Tipo'] . "',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('.FormularioAjax')[0].reset();
                        }
                    });
                </script>
            ";
        } elseif ($datos['Alerta'] == "mensaje") {
            $alerta = "
                <script>
                    Swal.fire({
                        title: '" . $datos['Titulo'] . "',
                        text: '" . $datos['Texto'] . "',
                        icon: '" . $datos['Tipo'] . "'
                    })
                </script>
            ";
        }
        return $alerta;
    }
}
