<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


        <!------ Include the above in your HEAD tag ---------->
        <style type="text/css">
            body{
                margin-top: auto;
                background-color: #f1f1f1;
            }
            .border{
                border-bottom:1px solid #F1F1F1;
                margin-bottom:10px;
            }
            .main-secction{
                box-shadow: 10px 10px 10px;
            }
            .image-section{
                padding: 0px;
            }
            .image-section img{
                width: 100%;
                height:250px;
                position: relative;
            }
            .user-image{
                position: absolute;
                margin-top:-50px;
            }
            .user-left-part{
                margin: 0px;
            }
            .user-image img{
                width:100px;
                height:100px;
            }
            .user-profil-part{
                padding-bottom:30px;
                background-color:#FAFAFA;
            }
            .follow{    
                margin-top:70px;   
            }
            .user-detail-row{
                margin:0px; 
            }
            .user-detail-section2 p{
                font-size:12px;
                padding: 0px;
                margin: 0px;
            }
            .user-detail-section2{
                margin-top:10px;
            }
            .user-detail-section2 span{
                color:#7CBBC3;
                font-size: 20px;
            }
            .user-detail-section2 small{
                font-size:12px;
                color:#D3A86A;
            }
            .profile-right-section{
                padding: 20px 0px 10px 15px;
                background-color: #FFFFFF;  
            }
            .profile-right-section-row{
                margin: 0px;
            }
            .profile-header-section1 h1{
                font-size: 25px;
                margin: 0px;
            }
            .profile-header-section1 h5{
                color: #0062cc;
            }
            .req-btn{
                height:30px;
                font-size:12px;
            }
            .profile-tag{
                padding: 10px;
                border:1px solid #F6F6F6;
            }
            .profile-tag p{
                font-size: 12px;
                color:black;
            }
            .profile-tag i{
                color:#ADADAD;
                font-size: 20px;
            }
            .image-right-part{
                background-color: #FCFCFC;
                margin: 0px;
                padding: 5px;
            }
            .img-main-rightPart{
                background-color: #FCFCFC;
                margin-top: auto;
            }
            .image-right-detail{
                padding: 0px;
            }
            .image-right-detail p{
                font-size: 12px;
            }
            .image-right-detail a:hover{
                text-decoration: none;
            }
            .image-right img{
                width: 100%;
            }
            .image-right-detail-section2{
                margin: 0px;
            }
            .image-right-detail-section2 p{
                color:#38ACDF;
                margin:0px;
            }
            .image-right-detail-section2 span{
                color:#7F7F7F;
            }

            .nav-link{
                font-size: 1.2em;    
            }

        </style>

    </head>


    <body>
        <header style="background-color: #369979;">

            <div>
                <table border="1" width = 100%>

                    <tbody>
                        <tr class="row">
                            <td class="col-md-6">
                                <table border="0" width=100%>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="logo">
                                                    <h3>
                                                        <a href="#" style="text-decoration: none;color: white;">X131R</a>
                                                    </h3>
                                                </div>


                                            </td>
                                            <td>
                                                <div class="search-bar">
                                                    <form class="form-inline">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 70%">
                                                        <button class="btn btn-primary" type="submit">Search</button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>

                            <td class="col-md-4">
                                <div style="display: inline-block">

                                    <a href="#">Personal</a> 
                                    <a href="#">Home</a>
                                </div>

                                <div style="display: inline-block">
                                    Area 1
                                </div>

                                <div style="display: inline-block">
                                    Area2
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </header>


        <div class="container main-secction">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
                </div>
                <div class="row user-left-part">
                    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                        <div class="row ">
                            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                <button id="btn-contact" onclick= "clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">Contactarme</button> 
                                <button class="btn btn-warning btn-block">Descargar Curriculum</button>                               
                            </div>
                            <div class="row user-detail-row">
                                <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                    <div class="border"></div>
                                    <p>FOLLOWER</p>
                                    <span>320</span>
                                </div>                           
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                        <div class="row profile-right-section-row">
                            <div class="col-md-12 profile-header">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                        <h1>Juan Perez</h1>
                                        <h5>Developer</h5>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                        <a href="#" class="btn btn-primary btn-block">Seguir buscando</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Perfil Profesional</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab" aria-selected="false">
                                                    <i class="fas fa-info-circle">
                                                    </i> Información Detallada</a>
                                            </li>                                                
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>ID</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>509230671</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Nombre</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Juan Perez</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>juanp@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Teléfono</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>12345678</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Profesion</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="buzz">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Experience</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Expert</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Hourly Rate</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>10$/hr</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Total Projects</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>230</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>English Level</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Expert</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Availability</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>6 months</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Your Bio</label>
                                                        <br/>
                                                        <p>Your detail description</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-4 img-main-rightPart">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row image-right-part">
                                                    <div class="col-md-6 pull-left image-right-detail">
                                                        <h6>PUBLICIDAD</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://camaradecomerciozn.com/">
                                                <div class="col-md-12 image-right">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/New-Play-Store-logo.png">
                                                </div>
                                            </a>
                                            <div class="col-md-12 image-right-detail-section2">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contact">Contactarme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
                        </div>
                        <div class="form-group">
                            <label for="txtFullname">Nombre completo</label>
                            <input type="text" id="txtFullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="text" id="txtEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Teléfono</label>
                            <input type="text" id="txtPhone" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
