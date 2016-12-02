<script type="text/javascript">
    
    $(document).ready(function() {

// ------------------------ AJUSTAR CONTENEDOR DE ACUERDO A AL TAMAÑO DE LA PANTALLA -------------------------
  /******** NOTA: tengo q ver si la pagina sera con el width completo o no *****/

  $(function(){
      if(screen.width> 1370){     
        $("#navPrincipal, #n3").removeClass('container-fluid').addClass('container');
      }else{
        $("#navPrincipal, #n3").removeClass('container').addClass('container-fluid');
      }
    });
  });

</script>




<style type="text/css">

/*.navbar-nav > li:hover > .dropdown-menu {
    display: block;
  background: ghostwhite; /* remove background to make transparent*/
  /*box-shadow:none;*/ /*get rid of shadow to make transparent*/
  /*margin-top:0px;*/ /*to adjust padding of dropdown in respect to navbar bottom */
/*}*/

.dropdown-large {
  position: static !important;
}
.dropdown-menu-large {
  /*margin-left: 16px;*/
  /*margin-right: 16px;*/
  padding: 20px 0px;
  /*width:100%;*/
  left:90px;
  min-width: 348px;
  font-size: 15px
}
.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-large > li > ul > li {
  list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover,
.dropdown-menu-large > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a,
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-large {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-large > li {
    margin-bottom: 30px;
  }
  .dropdown-menu-large > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-large .dropdown-header {
    padding: 3px 15px !important;
  }
}
</style>

<style type="text/css">
  
  #login-dp{
      min-width: 250px;
      padding: 14px 14px 0;
      overflow:hidden;
      background-color:rgba(255,255,255,.8);
  }
  #login-dp .help-block{
      font-size:12px    
  }
  #login-dp .bottom{
      background-color:rgba(255,255,255,.8);
      border-top:1px solid #ddd;
      clear:both;
      padding:14px;
  }
  #login-dp .social-buttons{
      margin:12px 0    
  }
  #login-dp .social-buttons a{
      width: 49%;
  }
  #login-dp .form-group {
      margin-bottom: 10px;
  }
  .btn-fb{
      color: #fff;
      background-color:#3b5998;
  }
  .btn-fb:hover{
      color: #fff;
      background-color:#496ebc 
  }
  .btn-tw{
      color: #fff;
      background-color:#55acee;
  }
  .btn-tw:hover{
      color: #fff;
      background-color:#59b5fa;
  }
  @media(max-width:768px){
      #login-dp{
          background-color: inherit;
          color: #fff;
      }
      #login-dp .bottom{
          background-color: inherit;
          border-top:0 none;
      }
  }
</style>


<!-- Static navbar -->
<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container-fluid" id="navPrincipal" style="background-image: url('{{ asset('img/mq.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-4" id="navLogo">
              
                <div class="navbar-header" style="min-height: 61px; min-width: 247px;">

                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3" aria-expanded="false" aria-controls="navbar" style="margin-right: 0px; margin-top: 14px;">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                            
                  <a style="height: 78px;" class="navbar-brand" href="{{ url('home') }}"><img class="img-responsive"  src="{{ asset('img/induchem_logo.png') }}"></a> 
                  <!-- width="247" -->
              </div>

            </div>

            <div class="col-xs-8">
            
                <div id="navbar1" class="navbar-collapse collapse js-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li> -->
                    <li><a href="http://www.facebook.com/induchemve/" target="_blank"><i class="ion-social-facebook" style="font-size: 18px;"></i></a></li>
                    <li><a href="https://twitter.com/Induchem_ve" target="_blank"><i class="ion-social-twitter" style="font-size: 18px;"></i></a></li>
                    <li><a href="http://www.instagram.com/induchem_ve" target="_blank"><i class="ion-social-instagram" style="font-size: 18px;"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/induchem-c-a-" target="_blank"><i class="ion-social-linkedin" style="font-size: 18px;"></i></a></li>                    
                    </ul>
                   
                </div><!--/.nav-collapse -->
                      
                <div id="navbar2" class="navbar-collapse collapse js-navbar-collapse">
                    
                    <form class="form-inline pull-right">

                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Usuario">
                      </div>

                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Contraseña">
                      </div>

                      <button type="submit" class="btn btn-default btn-danger" style="border-color: #fff;" >Ingresar</button>

                    </form>
                     
                </div><!--/.nav-collapse -->
                  
                  <div class="navbar-collapse collapse js-navbar-collapse" style="padding-right: 4px;">
                       <p class="text-right" style="margin: 8px 0 10px;" ><a style="color: rgba(43, 43, 43, 0.79);" href=""> Recuperar Contraseña</a> / <a style="color: navy" href="">Registrarse Aqui</a></p>
                  </div>
                  
                 
            </div>           
                
          </div>
</div>
    </div><!--/.container -->


<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;" id="n3" >
    <div id="navbar3" class="navbar-collapse collapse js-navbar-collapse">
      <div class="container">
          <ul class="nav navbar-nav">
            
            <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
         <!-- 
        <li class="dropdown dropdown-large">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mercados<b class="caret"></b></a>
                    
          <ul class="dropdown-menu dropdown-menu-large row">
           
            <li class="col-sm-7">
              <ul class="dropdown-menu-large">                
                <li class="dropdown-header text-center" style="color:#d40b0b;">Nuestros Productos por Sectores</li>

                <li class="divider"></li>
                <li class="row">
                  <ul class="col-sm-6">
                    <li><a href="#">Alimentos</a></li>
                    
                    <li ><a href="#">Servicios</a></li>
                    <li ><a href="#">Institucional</a></li>
                  

                    <li ><a href="#">Embotelladora</a></li>
                    <li ><a href="#">Tratamineto de Efluentes</a></li>

                    <li ><a href="#">Bebidas</a></li>
                   
                    <li ><a href="#">Vidrio y Plástico</a></li>
                    <li ><a href="#">Papel</a></li>
                  </ul>

                  <ul class="col-sm-6">
                    <li ><a href="#">Textil</a></li>

               

                    <li ><a href="#">Azucarero</a></li>                                 
                    <li ><a href="#">Aceite</a></li>                                 

                    <li ><a href="#">Químicos</a></li>
                    <li ><a href="#">Petroleo</a></li>                  
                    
                    <li ><a href="#">Automotríz</a></li>
                    <li ><a href="#">Metalmecánica</a></li>
                    
                    <li ><a style="border: 1px solid brown; border-radius: 20px; color: brown;width: 130px;" href="{{ url('quimicos') }}">Todos</a></li>
                  </ul>
                </li>                    
              </ul>
            </li>

            
          </ul>       
        </li>
 -->
        <li  class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Mercados<span class="caret"></span> </a>
            <div class="dropdown-menu col-xs-12" style="width: 327px;left: -60px;">
                <div class="row" style="margin:0;">

                  <div class="col-md-12">                  
                    <h4 class="text-center">Nuestros Productos por Sectores</h4>
                      <hr style=" margin-top: 10px; margin-bottom: 10px;">
                    </div>

                  <div class="col-xs-6">
                     <ul class="list-unstyled listMerca">
                        <li><a href="#">Alimentos</a></li>
                        <!-- <li class="divider"></li> -->
                        <li ><a href="#">Servicios</a></li>
                        <li ><a href="#">Institucional</a></li>
                        
                        <!-- <li class="divider"></li> -->

                        <li ><a href="#">Embotelladora</a></li>
                        <li style="min-width: 158px;" ><a href="#">Tratamineto de Efluentes</a></li>

                        <li ><a href="#">Bebidas</a></li>
                        <!-- <li ><a href="#">Cervecería y Refresco</a></li> -->
                        <!-- <li class="divider"></li> -->
                        <li ><a href="#">Vidrio y Plástico</a></li>
                        <li ><a href="#">Papel</a></li>
                    </ul>
                  </div>

                  <div class="col-xs-6">
                     <ul class="list-unstyled listMerca">
                         <li ><a href="#">Textil</a></li>

                        <!-- <li class="divider"></li> -->

                        <li ><a href="#">Azucarero</a></li>                                 
                        <li ><a href="#">Aceite</a></li>                                 

                        <li ><a href="#">Químicos</a></li>
                        <li ><a href="#">Petroleo</a></li>                  
                        
                        <li ><a href="#">Automotríz</a></li>
                        <li ><a href="#">Metalmecánica</a></li>
                        <!-- <li class="divider"></li> -->
                        <li ><a style="color: brown" href="{{ url('font') }}">Todos</a></li>
                    </ul>
                  </div>
                  
                </div>

                
               
            </div>
        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>


          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

            <li class="dropdown-submenu">
                <a href="#">Químicos</a>
                <ul class="dropdown-menu">                                
                  <li><a href="{{ url('AbrillantadoresDesoxidante') }}">Químicos</a></li>
                  <li><a href="{{ url('materiasPrimas') }}">Materias Primas</a></li>
                </ul>
            </li>
            
            <li role="separator" class="divider" style="margin-left: 16px;margin-right: 38px;" ></li>

            <li class="dropdown-submenu">
              <a href="#">Termoplásticos</a>
              <ul class="dropdown-menu">                                
                  <li><a href="{{ url('valvulas') }}">Válvulas</a></li>
                  <li><a href="{{ url('tuberias') }}">Tuberías </a></li>
                  <li><a href="{{ url('bombas') }}">Bombas </a></li>                  
                  <li><a href="{{ url('barras') }}">Barras </a></li>
                  <li><a href="{{ url('soldarTuberias') }}">Máquinas de Soldar Tuberías </a></li>
                  <li><a href="{{ url('extrusoras') }}">Máquinas Extrusoras </a></li>                  
                </ul>
            </li>

            <li role="separator" class="divider" style="margin-left: 16px;margin-right: 38px;" ></li>

            <li class="dropdown-submenu">
                <a href="#">Motores</a>
                <ul class="dropdown-menu">                                
                  <li><a href="{{ url('motores') }}">Motores</a></li>
                  <li><a href="{{ url('inversores') }}">Inversores</a></li>
                  <li><a href="{{ url('reductores') }}">Reductores</a></li>                                    
                </ul>
            </li>

            <li role="separator" class="divider" style="margin-left: 16px;margin-right: 38px;" ></li>

            <li class="dropdown-submenu">
                <a href="#">Actuadores</a>
                <ul class="dropdown-menu">                                
                  <li><a href="actuadoresElectrico">Eléctricos</a></li>
                  <li><a href="{{ url('actuadoresNeumatico') }}">Neumáticos</a></li>                                  
                </ul>
            </li>

          </ul>

        </li>

        <li><a href="{{ url('servicios')}}">Servicios</a></li>

        <li><a href="{{ url('oportunidades')}}">Oportunidades de Empleo</a></li>


        <li><a href="{{ url('contacto') }}">Contacto</a></li>
     
      </ul>
      </div>
              
    </div><!--/.nav-collapse -->
    </div><!--/.nav-collapse -->

</nav>

<style type="text/css">
    
    #navLogo{
        padding: 5px;
        margin-top: 18px;
        min-height: 66px;
        padding-left: 25px;
    }

     #navLogo .navbar-header .navbar-brand{
        padding: 0px;
      }
   
    .login{
        width: 100px; 
        border-radius: 5px; 
        height: 33px;
    }
   
    .navbar{
      background-color: transparent; 
      border-color: transparent;
      border: 0px;       
    }

    #navbar1 .navbar-nav > li > a {        
      color: darkslategray;
      padding: 10px 7px 10px 10px;  
    }

    #navbar2{
      padding-right: 0px;
    }

/*-----------------------------------------------------------*/

    #navbar3{
      border-top: 1px solid brown;
      border-bottom: 1px solid brown;
      background-color: white;
      /*background-color: rgba(246, 246, 246, 0.61);*/
      margin-top: 0px;
    }    

    #navbar3 .navbar-nav > li > a {
        color: brown;
    }

    #navbar3 .navbar-nav > li > a:hover{
      background-color: rgb(171, 14, 14);
      color: #fff;
    }
    
    #navbar3 div ul li{
      font-size: 15px;
    }

/*------------------------------------------------*/
  
  .listMerca{
    padding-bottom: 10px;
  }

  .listMerca li{
    padding-left: 7px;
    padding-top: 3px;
  }

/*------------------------------------------------*/

   /* #menu li ul li a {
        color: black;
        font-size: 17px;
    }
    #menu li ul li a:hover {
       background-color: gainsboro;
       color: black;
    }

    #menu ul li:first-child a:after {
        content: '';
        position: absolute;
        left: 35px;
        top: -10px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 10px solid #fff;
    }

    #menu ul li:first-child a:hover:after {
        border-bottom-color: #fff; 
    }

    #menu li:hover > ul {
        display: block;
    }

    #menu li:hover > a {
      color: #fafafa;
      background-color: rgb(171, 14, 14);
    }*/

</style>
<!-- Submenu -multiple -->

<style type="text/css">
         
  .dropdown-submenu {
      position: relative;
  }

  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px;
      border-radius: 0 6px 6px 6px;
  }

  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
  }

  .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #7b7b7b;
      margin-top: 5px;
      margin-right: -10px;
  }

  .dropdown-submenu:hover>a:after {
      border-left-color: brown;
  }

  .dropdown-submenu.pull-left {
      float: none;
  }

  .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px;
  }
</style>

