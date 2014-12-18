 <header style="height:100px"> 
     
    <img src="../../img/logo.png" class="pull-left" style="width:150px;height:50px;"/>
    <h4 class="pull-right">Bienvenido Sr.(a) <?php echo $_SESSION['nombre_usuario']; ?></h4>
        </header>
 <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                
                <div class="btn-group" style="float:left;margin:10px;"> 
              <a href="inicio_admin.php" type="button" class="btn btn-success btn-sm" role="button"> 
                <span class="glyphicon glyphicon-user"></span>
                Inicio
              </a>
            </div>

                <div class="btn-group" style="float:left; margin:10px;"> 
                  <button type="button" class="btn btn-info btn-sm  dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-large"></span> Recetas <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li> <a href="ingresar_receta.php">Ingresar Receta</a></li>
                    <li> <a href="modificar_receta.php">Modificar Receta</a></li>
                    <li> <a href="eliminar_receta.php">Anular Receta</a></li>
                    <li class="divider"></li>
                    <li> <a href="ingresar_categoria.php">Ingresar Categoria Receta</a></li>

                </ul>
                </div>
                
                 <div class="btn-group" style="float:left; margin:10px;"> 
                  <button type="button" class="btn btn-info btn-sm  dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-large"></span> Articulos <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li> <a href="ingresar_articulo.php">Ingresar Articulo</a></li>
                    <li> <a href="eliminar_articulo.php">Anular Articulo</a></li>
                    

                </ul>
                </div>

                  <div class="btn-group" style="float:left; margin: 10px;"> 
                  <button type="button" class="btn btn-warning btn-sm  dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-inbox"></span> Preguntas <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="aprobar_pregunta.php">Aprobar Preguntas</a></li>
                   <li> <a href="responder_pregunta.php">Responder Preguntas</a></li>
                  </ul>
                </div>


                <div class="btn-group" style="float:left;margin:10px;"> 
              <a href="sobre_mi.php" type="button" class="btn btn-success btn-sm" role="button"> 
                <span class="glyphicon glyphicon-user"></span>
                Sobre Mi
              </a>
            </div>
               
               <div class="btn-group" style="float:right; margin:10px;"> 
               <a class="btn btn-primary btn-sm " style="margin-left:10px; margin-right:10px;" role="button" onclick="salir()">
                 Cerrar Sesion  <span class="glyphicon glyphicon-off">    </span></a> 
            </div>
             </div>
          </nav>