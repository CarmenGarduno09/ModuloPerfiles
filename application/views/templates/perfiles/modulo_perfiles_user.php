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
        <link href="<?php echo base_url(); ?>assets/ModuloPerfiles/css/styles.css" rel="stylesheet" />
         <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/ModuloPerfiles/assets/assets/css/bootstrap.min.css" rel="stylesheet">
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo base_url();?>/perfles_usuario">Perfiles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">######</a></li>
                    </ul>
                </div>
            </div>
            <div style="padding-right: 20px;">
                <a href="user.html"><img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/user.png" width="40px" height="40px"></a>
            </div>
        </nav>
        <!-- Portfolio Section-->
            <div class="container" style="background-color: rgb(241, 241, 241); padding-top: 30px;">
                <!-- Portfolio Section Heading-->
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="background-color: #8baf9c; border-radius:0.5em;">
                        <center><h2 style="color:white;">Mi perfil</h2></center>
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
                <?php 
                    foreach($perfiles as $p){

                        
                ?>
                <div class="col-md-12" style="background-color: #8baf9c;padding-left: 35px;padding-right: 35px;padding-top: 35px;padding-bottom: 25px;">
                    
                    <div class="row" style="background-color: #8baf9c;">
                        <div class="col-md-2" style="background-color: white;padding-top: 10px;">
                            <img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/user_f.png" width="150px" height="150px">
                        </div>
                        <div class="col-md-1">

                        </div>
                        
                        <?php 
                            if($p->Activo==0){                      
                        ?>
                        <div class="col-md-6" style="background-color: white;">
                            <h3><?php echo $p->Nombre." ".$p->Apellidos;?> </h3>
                            <p style="font-size: 18px;">
                                <?php echo $p->Descripcion;?></p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-<?php echo $p->id_perfil;?>">Vista previa</a><br>&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="col-md-1">
                                        <a class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg-e-<?php echo $p->id_perfil;?>">Editar</a><br>&nbsp;
                                    </div>
                                </div>
                                 
                        </div>
                        <div class="col-md-3" style="background-color: white;">
                        <br>
                            <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>&nbsp;  Tu perfil ha sido revisado y solicitado, se te ha enviado un correo con la solicitud por parte de la emppresa.</div>
                        </div>
                        <?php
                            }else{
                        ?>
                        <div class="col-md-9" style="background-color: white;">
                            <h3><?php echo $p->Nombre." ".$p->Apellidos;?> </h3>
                            <p style="font-size: 18px;">
                                <?php echo $p->Descripcion;?></p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-<?php echo $p->id_perfil;?>">Vista previa</a><br>&nbsp;
                                    </div>
                                    <div class="col-md-1">
                                        <a class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg-e-<?php echo $p->id_perfil;?>">Editar</a><br>&nbsp;
                                    </div>
                                </div>
                                 
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    
                </div>
                <div><br>&nbsp;</div>
                <?php 
                    }
                ?>
            </div>
            <?php 
                foreach($perfiles as $p){
      
            ?>
            <div class="modal fade bs-example-modal-lg-<?php echo $p->id_perfil;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                
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
                                <h3>Nombre: <?php echo $p->Nombre." ".$p->Apellidos;?></h3>
                                <h3>Carrera: <?php echo $p->Nombre_c;?></h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Perfil</h3>
                            <?php echo $p->Descripcion;?>
                            <br>&nbsp;
                        </div>
                        <br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Contacto</h3>
                            <ul>
                                <li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;Domicilio: <b><?php echo $p->Direccion;?></b></li>
                                <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;Correo: <b><?php echo $p->correo;?></b></li>
                                <li><span class="glyphicon glyphicon-earphone"></span>&nbsp;Teléfono: <b><?php echo $p->telefono?></b></li>
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
            <?php 
                }
            ?>

            <?php 
                foreach($perfiles as $p){
      
            ?>
            <div class="modal fade bs-example-modal-lg-e-<?php echo $p->id_perfil;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-lg">
                    
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/img/<?php echo $p->Foto;?>" width="150px" height="150px"><br><br>
                                <button class="btn btn-success" onclick="view_pf(<?php echo $p->id_perfil;?>);">Cambiar foto</button><br>
                                <div id="ch_pf-<?php echo $p->id_perfil;?>" style="display: none;">
                                    <label>Selecciona foto:</label><br>
                                    <input type="file" name="new_pf-<?php echo $p->id_perfil;?>" id="new_pf-<?php echo $p->id_perfil;?>">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>Nombre: <?php echo $p->Nombre." ".$p->Apellidos;?></h3>
                                <h3>Carrera: <?php echo $p->Nombre_c;?></h3><select class="form-control" name="carrera-<?php echo $p->id_perfil;?>" id="carrera-<?php echo $p->id_perfil;?>" disabled>
                                        <option>Elige una carrera</option>
                                        <?php 
                                            foreach($carreras as $c){
                                        ?>
                                            <option value="<?php echo $c->idcarreras?>" <?php if($c->idcarreras==$p->carreras_idcarreras){echo "selected";}?>><?php echo $c->Nombre;?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Perfil</h3>
                            <textarea rows="5" cols="10" name="descripcion-<?php echo $p->id_perfil;?>" id="descripcion-<?php echo $p->id_perfil;?>" class="form-control" disabled><?php echo $p->Descripcion;?></textarea>
                            <br>&nbsp;
                        </div>
                        <br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>Contacto</h3>
                            <ul>
                                <li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;Domicilio: <input type="text" name="direccion-<?php echo $p->id_perfil;?>" id="direccion-<?php echo $p->id_perfil;?>" class="form-control" value="<?php echo $p->Direccion;?>" disabled></li><br>
                                <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;Correo: <input type="text" name="correo-<?php echo $p->id_perfil;?>" id="correo-<?php echo $p->id_perfil;?>" class="form-control" value="<?php echo $p->correo;?>" disabled></li><br>
                                <li><span class="glyphicon glyphicon-earphone"></span>&nbsp;Teléfono: <input type="text" name="telefono-<?php echo $p->id_perfil;?>" id="telefono-<?php echo $p->id_perfil;?>" class="form-control" value="<?php echo $p->telefono;?>" disabled></li><br>
                            </ul>
                        </div>
                        <br>&nbsp;
                        <div class="col-md-12" style="background-color: #8baf9c;">
                            <h3>CV Completo</h3>
                            <embed src="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/files/<?php echo $p->cv;?>#toolbar=0&navpanes=1&scrollbar=0" type="application/pdf" width="75%" height="450" /><br>
                            <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>/assets/ModuloPerfiles/assets/assets/files/<?php echo $p->cv;?>" target="_blank">Ver CV &nbsp;<span class="glyphicon glyphicon-new-window"></span></a><br><br>
                            <label>Subir nuevo CV:</label>
                            <form method="post" action="cambiar_cv/<?php echo $p->id_perfil;?>" enctype="multipart/form-data">
                            <input type="file" name="new_cv-<?php echo $p->id_perfil;?>" id="new_cv-<?php echo $p->id_perfil;?>"><br>
                            <input type="submit" value = "Cambiar CV" name="btn_arc" class="btn" style="background-color: skyblue;">
                            </form>
                            <br>&nbsp;
                        </div>
                        <br>&nbsp;
                    </div>
                    
                  </div>
                </div>
            </div>
            <?php 
                }
            ?>
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
        $(document).ready(function(e){});
                                    function view_pf(num){
                                        var v_pf=document.getElementById("ch_pf-"+num+"");
                                        if(v_pf.style.display==="none"){
                                            v_pf.style.display="block";
                                        }else{
                                            v_pf.style.display="none";
                                        }
                                    }
                                </script>
    </body>
</html>
