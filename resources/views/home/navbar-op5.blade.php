
<!-- Static navbar -->
<nav class="navbar navbar-default" style="margin-bottom: 5px;">
    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-3" id="navLogo">
              
                <div class="navbar-header" style="min-height: 61px; min-width: 247px;">

                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3" aria-expanded="false" aria-controls="navbar" style="margin-right: 0px; margin-top: 14px;">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                            
                  <a class="navbar-brand" href="{{ url('home') }}"><img class="img-responsive" width="247" src="{{ asset('img/logo1.jpg') }}"></a> 
                  <!-- width="247" -->
              </div>

            </div>

            <div class="col-xs-9">
            
                <div id="navbar1" class="navbar-collapse collapse js-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li> -->
                    <li><a href=""><i class="ion-social-facebook" style="font-size: 18px;"></i></a></li>
                    <li><a href=""><i class="ion-social-twitter" style="font-size: 18px;"></i></a></li>
                    <li><a href=""><i class="ion-social-instagram" style="font-size: 18px;"></i></a></li>
                    <li><a href=""><i class="ion-social-linkedin" style="font-size: 18px;"></i></a></li>                    
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

                      <button type="submit" class="btn btn-default btn-success">Ingresar</button>

                    </form>
                     
                </div><!--/.nav-collapse -->
                  
                  <div class="navbar-collapse collapse js-navbar-collapse" style="padding-right: 4px;">
                       <p class="text-right" style="margin: 5px 0 10px;" ><a href=""> Recuperar Contraseña</a> / <a class="text-warning" href="">Registrarse Aqui</a></p>
                  </div>
                  
                 
            </div>           
                
          </div>

    </div><!--/.container -->

    <div id="navbar3" class="navbar-collapse collapse js-navbar-collapse">
      <div class="container">
          <ul class="nav navbar-nav ">
          <!-- <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li> -->
          <li><a href="">Nosotros</a></li>
          <li><a href="">Mercados</a></li>
          <li><a href="">Productos</a></li>
          <li><a href="">Servicios</a></li>
          <li><a href="">Oportunidades de Trabajo</a></li>
          <li><a href="">Contacto</a></li>
        </ul>       
      </div>
        
    </div><!--/.nav-collapse -->    
</nav>



<style type="text/css">
  
    #navLogo{
        padding: 5px;
        margin-top: 18px;
        min-height: 66px;
    }

     #navLogo .navbar-header .navbar-brand{
       /* height: auto;
        margin-top: 11px;
        margin-bottom: 13px;*/
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

    #navbar3{
      font-size: 17px;
      background-color: gainsboro;
    }    
    
    #navbar3 .navbar-nav > li > a {
        color: brown;
    }

    #navbar3 .navbar-nav > li > a:hover{
      background-color: rgb(171, 14, 14);
      color: #fff;
    } 

</style>