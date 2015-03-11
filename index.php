<?php require_once('cabecalho.php');
      require_once('LogicaUsuario.php');?>    

    <?php if(usuarioEstaLogado()) { ?>
        <p class="alert-success">Você está logado como <?=usuarioLogado()?>. <a href="logout.php">Logout</a></p>
        <h1 class="text-center login-title">Sistema Consultório Médico</h1> 
    <?php } else { ?>
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Consultório Médico</h1>
            <h2 class="text-center">Login</h2>
            <div class="account-wall">
                
                <form class="form-signin" action="login.php" method="post">
                	<input type="text" name="login" class="form-control" placeholder="Informe o seu login" required autofocus>
	                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
	                <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>	                
                </form>

            </div>            
        </div>
    </div>
    </div>
    <?php } ?>

    <?php if(usuarioEstaLogado()) { ?>
        <div>
            <img src="images/home_logo.png"/>
        </div>
    <?php } ?>

<?php include('rodape.php') ?>