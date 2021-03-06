<!--ACCESO A LOS ATRIBUTOS DE USUARIO-->
<?php
$usuario = $this->session->userdata("administrador");
$persona_sesion = $this->session->userdata("administrador");
$rut_usuario = $usuario[0]->rut_usuario;
$clave_usuario = $usuario[0]->clave_usuario;
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/personalizado.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>framework/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/custom.js"></script>

        <!--Data Table-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <script type="text/javascript"  src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <!--ALERT-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <script>
            var base_url = "http://localhost/proyecto_php/";
            var rut_usuario_php = '<?php echo $rut_usuario ?>';
            var clave_usuario_php = '<?php echo $clave_usuario ?>';
        </script>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper teal darken-2">
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion">Cerrar Sesión</a></li>
                    </ul>

                    <ul id="slide-out" class="side-nav fondo_main">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="<?php echo base_url(); ?>framework/imagenes/fondo1.png" class="responsive-img">
                                </div>
                                <a href="#"><img class="circle responsive-img center-block" src="<?php echo base_url(); ?>framework/imagenes/goku.jpg"></a>
                                <span class="white-text">
                                    <p class="center">
                                        <?php echo '' . $persona_sesion[0]->nombre_persona . ' ' . $persona_sesion[0]->apellido_persona; ?>
                                    </p>
                                </span>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url(); ?>welcome/administrador" class="center black-text">Administración de Usuarios</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_panadero" class="center black-text">Administración de Panaderos</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_repartidor" class="center black-text">Administración de Repartidores</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_vehiculo" class="center black-text">Administración de Vehículos</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_ruta" class="center black-text">Administración de Rutas</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_contable" class="center black-text">Administración Contable</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_pedido_administrador" class="center black-text">Administración de Pedidos</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_insumo" class="center black-text">Administración de Insumos</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_mensajeria" class="center black-text">Mensajería</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/modulo_sensor" class="center black-text">Temperatura & Humedad</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cambiar_contrasena" class="center black-text">Cambiar Contraseña</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/cerrar_sesion" class="center black-text">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </header>
