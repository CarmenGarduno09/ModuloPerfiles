<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfiles</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>/assets/ModuloPerfiles/css/styles.css" rel="stylesheet" />
         <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <div style="border-radius: 250px;background-color:white; padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;">
                <a href="<?php echo base_url(); ?>index.php/index"><img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/logo_utc.png" width="100px" height="45px"></a>
                </div>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">######</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="perfiles.html">Perfiles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">######</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Portfolio Section-->
            <div class="container" style="background-color: rgb(241, 241, 241); padding-top: 30px;">
                <!-- Portfolio Section Heading-->
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="padding-right: 10px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px; background-color: #8baf9c;">
                        <div class="input-group">
                        <select class="form-control" name="carrera" id="carrera" onchange="ver_perfiles(this.value);">
                                        <option>Elige una carrera</option>
                                        <?php 
                                            foreach($carreras as $c){
                                        ?>
                                            <option value="<?php echo $c->idcarreras?>"><?php echo $c->Nombre;?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <br>
                <div id="datos_perfiles">
                <?php
              //  die(var_dump($perfiles));
                foreach($perfiles as $p){
                    if($p->Activo!=0){
                
                ?>
                <div class="col-md-12">
                    <center><h3>Todos los perfiles</h3></center>
                </div>
                <div class="col-md-12" style="background-color: #8baf9c;padding-left: 35px;padding-right: 35px;padding-top: 35px;padding-bottom: 35px;">
                    <div class="row" style="background-color: #8baf9c;">
                        <div class="col-md-2" style="background-color: white;padding-top: 10px;">
                        <img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/user_f.png" width="150px" height="150px">
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-9" style="background-color: white;">
                            <h3><?php echo $p->nombre_us." ".$p->Apellidos;?> </h3>
                            <h4>Carrera:  <?php echo $p->nom_carr ;?></h4>
                            <p style="font-size: 18px;">
                            <?php echo $p->Descripcion;?>
                            <br><br>
                            <button class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $p->id_perfil;?>">Ver perfil</button><br>&nbsp;
                                 
                        </div>
                    </div>
                </div>
                <div><br>&nbsp;</div>
           
           
      
            <div class="modal fade bs-example-modal-lg<?php echo $p->id_perfil;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-lg">
                    
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                            <img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/<?php echo $p->Foto;?>" width="150px" height="150px">
                            </div>
                            <div class="col-md-9">
                                <h3>Nombre: <?php echo $p->nombre_us." ".$p->Apellidos;?> </h3>
                                <h3>Carrera: <?php echo $p->nom_carr;?> </h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal-<?php echo $p->id_perfil;?>">Solicitar</button><br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Perfil</h3>
                            <?php echo $p->Descripcion;?> 
                            <br>&nbsp;
                        </div>
                        <br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Contacto</h3>
                            <ul>
                                <li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;Domicilio:<?php echo $p->Direccion;?> </li>
                                <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;Correo:<?php echo $p->correo;?></li>
                                <li><span class="glyphicon glyphicon-earphone"></span>&nbsp;Teléfono:<?php echo $p->telefono;?></li>
                            </ul>
                        </div>
                        <br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>CV Completo</h3>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/files/<?php echo $p->cv;?>" target="_blank">Ver CV &nbsp;<span class="glyphicon glyphicon-new-window"></span></a><br><br>
                            <br>&nbsp;
                        </div>
                        <br>&nbsp;
                    </div>
                    
                  </div>
                </div>
            
              </div>
              <!-- Modal -->
              <div class="modal fade" id="myModal-<?php echo $p->id_perfil;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-<?php echo $p->id_perfil;?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" onclick="location.reload()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel-<?php echo $p->id_perfil;?>">Formulario de contacto</h4>
                                </div>
                                <div class="modal-body" id="mensaje-<?php echo $p->id_perfil;?>">
                                    <label>Empresa</label>
                                    <input type="text" name="empresa-<?php echo $p->id_perfil;?>" id="empresa-<?php echo $p->id_perfil;?>" class="form-control" placeholder="Ingresa nombre de la empresa">
                                    
                                    <label>Correo electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" class="form-control" name="correo_e-<?php echo $p->id_perfil;?>" id="correo_e-<?php echo $p->id_perfil;?>" placeholder="Ingresa tu correo">
                                        <input type="hidden" class="form-control" name="correo_d-<?php echo $p->id_perfil;?>" id="correo_d-<?php echo $p->id_perfil;?>" value="<?php echo $p->correo;?>">
                                        <input type="hidden" class="form-control" name="name-<?php echo $p->id_perfil;?>" id="name-<?php echo $p->id_perfil;?>" value="<?php echo $p->nombre_us;?>">
                                    </div>
                                    
                                    <label>Asunto</label>
                                    <input type="text" class="form-control" name="asunto-<?php echo $p->id_perfil;?>" id="asunto-<?php echo $p->id_perfil;?>" placeholder="Ingresa asunto">
                                    <label>Mensaje</label>
                                    <textarea rows="5" cols="10" name="cuerpo-<?php echo $p->id_perfil;?>" id="cuerpo-<?php echo $p->id_perfil;?>" class="form-control"></textarea>
                                </div>
                                <div class="modal-footer" id="boton-<?php echo $p->id_perfil;?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick='enviar_email(<?php echo $p->id_perfil;?>);'>Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
              <?php
                    }
                }

                ?>
            
                </div>
        </div> 
        <!-- Footer-->
        <footer class="footer text-center" style="background-color: #008037;">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <div style="border-radius: 250px;background-color:white; padding-top:5px;padding-bottom:5px;padding-right:15px;padding-left:15px;">
                    <a href="<?php echo base_url(); ?>index.php/index"><img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/logo_utc.png" width="160px" height="70px"></a>
                    </div>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Dirección</h4>
                        <p class="lead mb-0">
                            Carretera Santa Barbara - Coroneo
                            Km. 11.2 Corregidora, Qro. México.</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white" style="background-color:darkgreen;">
            <div class="container"><small>Copyright &copy; Universidad Tecnológica de Corregidora 2021</small></div>
        </div>
        
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/js/docs.min.js"></script>
    <script>
        function enviar_email(id){
            var correo_d=document.getElementById('correo_d-'+id).value;
            var correo_e=document.getElementById('correo_e-'+id).value;
            var empresa=document.getElementById('empresa-'+id).value;
            var asunto=document.getElementById('asunto-'+id).value;
            var mensaje=document.getElementById('cuerpo-'+id).value;
            var name=document.getElementById('name-'+id).value;
            $.ajax({
                    type       : "POST",
                    url        : 'index.php/ModuloPerfiles/enviar_email', //script que traerá los datos en el servidor
                    data:({correo_d:correo_d,correo_e:correo_e,empresa:empresa,asunto:asunto,mensaje:mensaje,id_a:id,nom:name}),
                    cache:false,
                    dataType:"text",
                    success:respuestaEnvio,
                    error      : function() {
                        alert('Error: Error en la consulta de datos ');
                    }
            });
            function respuestaEnvio(data){
                if(data=="OK"){
                    alert("se envío el mensaje")
                        $('#mensaje-'+id).empty();
                        $('#boton-'+id).empty();
                        $('#mensaje-'+id).append('<center><img src="http://localhost/ModuloPerfiles/assets/ModuloPerfiles/assets/img/icono-check.png" width="75px" height="75px">'+
                        '<br>'+
                        '<h3>La solicitud ha sido enviada</h3></center>');
                        $('#boton-'+id).append('<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.reload()">Close</button>');
                        $('#mensaje-'+id).trigger('create');
                        $('#boton-'+id).trigger('create');
                    
                }else{
                    alert("no se envío el mensaje")
                    $('#mensaje-'+id).empty();
                    $('#boton-'+id).empty();
                    $('#mensaje-'+id).append('<center><img src="http://localhost/ModuloPerfiles//assets/ModuloPerfiles/assets/img/error.png" width="75px" height="75px">'+
                        '<br>'+
                        '<h3>Error en la solicitud</h3></center>');
                        $('#boton-'+id).append('<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.reload()">Close</button>');
                        $('#mensaje-'+id).trigger('create');
                        $('#boton-'+id).trigger('create');
                    
                }
            }
            
        }
        function ver_perfiles(carrera){
            $.ajax({
                    type       : "POST",
                    url        : 'index.php/ModuloPerfiles/traer_perfiles_carrera', //script que traerá los datos en el servidor
                    data:({id_carrera:carrera}),
                    cache:false,
                    dataType:"json",
                    success:respuestaEnvio,
                    error      : function() {
                        alert('Error: Error en la consulta de datos ');
                    }
            });
            function respuestaEnvio(data){
                if(JSON.stringify(data)=='[]'){
                    $("#datos_perfiles").empty();
                    $("#datos_perfiles").append('<center><h2>No hay perfiles disponibles para esta carrera</h2></center><br><hr>');
                    $("#datos_perfiles").trigger('create');
                }else{
                    $("#datos_perfiles").empty();
                    $(data).each(function(index, data){
                        if(data.activo!=0){
                            $("#datos_perfiles").append('<div class="col-md-12">'+
                    '<center><h3>'+data.nom_carr+'</h3></center>'+
                '</div>'+
                '<div class="col-md-12" style="background-color: #8baf9c;padding-left: 35px;padding-right: 35px;padding-top: 35px;padding-bottom: 35px;">'+
                    '<div class="row" style="background-color: #8baf9c;">'+
                        '<div class="col-md-2" style="background-color: white;padding-top: 10px;">'+
                        '<img src="http://localhost/ModuloPerfiles/assets/ModuloPerfiles/assets/assets/img/user_f.png" width="150px" height="150px">'+
                        '</div>'+
                        '<div class="col-md-1">'+
                        '</div>'+
                        '<div class="col-md-9" style="background-color: white;">'+
                            '<h3>'+data.nombre_us+' '+data.Apellidos+'</h3>'+
                            '<h4>Carrera: '+data.nom_carr+'</h4>'+
                            '<p style="font-size: 18px;">'+
                            data.Descripcion+
                            '<br><br>'+
                            '<button class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg'+data.id_perfil+'">Ver perfil</button><br>&nbsp;'+
                                 
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div><br>&nbsp;</div>'+
           
           
      
            '<div class="modal fade bs-example-modal-lg'+data.id_perfil+'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">'+
                
                '<div class="modal-dialog modal-lg">'+
                    
                  '<div class="modal-content">'+
                    '<div class="modal-header">'+
                        '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
                    '</div>'+
                    '<div class="col-md-12">'+
                        '<div class="row">'+
                            '<div class="col-md-3">'+
                            '<img src="http://localhost/ModuloPerfiles/assets/ModuloPerfiles/assets/assets/img/'+data.Foto+'" width="150px" height="150px">'+
                            '</div>'+
                            '<div class="col-md-9">'+
                                '<h3>Nombre: '+data.nombre_us+' '+data.Apellidos+'</h3>'+
                                '<h3>Carrera: '+data.nom_carr+' </h3>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                   '<br>'+
                    '<div class="col-md-12">'+
                        '<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal-'+data.id_perfil+'">Solicitar</button><br>&nbsp;'+
                        '<div class="col-md-12" style="background-color: #8baf9c;">'+
                            '<h3>Perfil</h3>'+
                            data.Descripcion+
                            '<br>&nbsp;'+
                        '</div>'+
                        '<br>&nbsp;'+
                        '<div class="col-md-12" style="background-color: #8baf9c;">'+
                            '<h3>Contacto</h3>'+
                            '<ul>'+
                                '<li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;Domicilio:'+data.Direccion+' </li>'+
                                '<li><span class="glyphicon glyphicon-envelope"></span>&nbsp;Correo:'+data.correo+'</li>'+
                                '<li><span class="glyphicon glyphicon-earphone"></span>&nbsp;Teléfono:'+data.telefono+'</li>'+
                            '</ul>'+
                        '</div>'+
                        '<br>&nbsp;'+
                        '<div class="col-md-12" style="background-color: #8baf9c;">'+
                            '<h3>CV Completo</h3>'+
                            '<a class="btn btn-danger btn-lg" href="http://localhost/ModuloPerfiles/assets/ModuloPerfiles/assets/assets/files/'+data.cv+'" target="_blank">Ver CV &nbsp;<span class="glyphicon glyphicon-new-window"></span></a><br><br>'+
                            '<br>&nbsp;'+
                        '</div>'+
                        '<br>&nbsp;'+
                    '</div>'+
                    
                  '</div>'+
                '</div>'+
            
              '</div>'+
              '<div class="modal fade" id="myModal-'+data.id_perfil+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-'+data.id_perfil+'" aria-hidden="true">'+
                        '<div class="modal-dialog">'+
                            '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                    '<button type="button" class="close" data-dismiss="modal" onclick="location.reload()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
                                    '<h4 class="modal-title" id="myModalLabel-'+data.id_perfil+'">Formulario de contacto</h4>'+
                                '</div>'+
                                '<div class="modal-body" id="mensaje-'+data.id_perfil+'">'+
                                    '<label>Empresa</label>'+
                                    '<input type="text" name="empresa-'+data.id_perfil+'" id="empresa-'+data.id_perfil+'" class="form-control" placeholder="Ingresa nombre de la empresa">'+
                                    
                                    '<label>Correo electrónico</label>'+
                                    '<div class="input-group">'+
                                        '<span class="input-group-addon">@</span>'+
                                        '<input type="email" class="form-control" name="correo_e-'+data.id_perfil+'" id="correo_e-'+data.id_perfil+'" placeholder="Ingresa tu correo">'+
                                        '<input type="hidden" class="form-control" name="correo_d-'+data.id_perfil+'" id="correo_d-'+data.id_perfil+'" value="'+data.correo+'">'+
                                        '<input type="hidden" class="form-control" name="name-'+data.id_perfil+'" id="name-'+data.id_perfil+'" value="'+data.nombre_us+'">'+
                                    '</div>'+
                                    
                                    '<label>Asunto</label>'+
                                    '<input type="text" class="form-control" name="asunto-'+data.id_perfil+'" id="asunto-'+data.id_perfil+'" placeholder="Ingresa asunto">'+
                                    '<label>Mensaje</label>'+
                                    '<textarea rows="5" cols="10" name="cuerpo-'+data.id_perfil+'" id="cuerpo-'+data.id_perfil+'" class="form-control"></textarea>'+
                                '</div>'+
                                '<div class="modal-footer" id="boton-'+data.id_perfil+'">'+
                                    '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                                    '<button type="button" class="btn btn-primary" onclick="enviar_email('+data.id_perfil+')">Enviar</button>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>');
                        }
                        
                    });
                    $("#datos_perfiles").trigger('create');
                }
                
            }
        }
    </script>
    </body>
</html>
