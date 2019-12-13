<header>
   <div class="conteiner-fluid">
       <div class="row">
            <nav class="navbar navbar-default col-md-12">
        
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sitio</a>
            </div>
            <div class="col-md-4"></div>
            <ul class="nav navbar-nav navbar-right ">
            <?php if(isset($_SESSION['email'])): ?>
                <li><div class="col-sm-1 style" style="width: 6rem; margin-top: 25%"><a href="perfil.php"><img class="img-responsive" src= <?= $fotoPerfilUsuario ?>></a></div></li>
                <li><a href="perfil.php"><?= $_SESSION['nombre']?></a></li>
                <li><a href="carrito.php"><i class="fas fa-shopping-basket p-2"></i></a></li>
                <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="logout.php">Log out</a></li>  
                <?php endif; ?>
            </ul>
                
            <ul class="nav navbar-nav navbar-right ">
                <?php if(!isset($_SESSION['email'])): ?>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registro.php">Registro</a></li>
                <?php endif; ?>
            </ul>
        
    </nav>
       </div>
   </div>
</header>
       









      