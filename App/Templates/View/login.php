<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Restaurante - Login</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!--login.css-->
    <link rel="stylesheet" href="/Wep/App/Templates/style/login.css">
</head>
<body>
    <section class="login-form">
        <div class="container" style="height: 625px">
            <div class="row" >
                <div class="col-md-12 login">       
                    <a href="/Wep/"><i class="fas fa-long-arrow-alt-left text-white back my-2" style="font-size:40px "></i></a>
                    <h2 class="text-center lables">Login</h2>                    
                        <form method="POST" action="/Wep/login">
                        <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                            <div id="info"class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                <strong > <?php echo $_SESSION['error']; ?> </strong>                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        } else if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                            <div id="info"class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                <strong > <?php echo $_SESSION['success']; ?> </strong>                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                        }
                        $_SESSION['success'] = "";
                        $_SESSION['error'] = "";
                        ?> 
                        <div class="form-group input-group"><!--inicio user-->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                <input id="email" required="required" name="email" class="form-control" placeholder="E-mail" type="text">
                            </div><!--fim user-->

                            <div class="form-group input-group"><!--inicio password-->
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                <input id="password"  required="required" name="password" class="form-control" placeholder="Senha" type="password">
                            </div><!--fim password-->
                            <div class="form-group">
                            <label class="form-check-lable check">
                                <input type="checkbox" class="form-check-input ">
                                <small class="lables remember-size">Lembrar-me</small>
                            </label>
                           <p><!--inicio botões-->
                                <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-primary btn-block bg-primary text-white mb-2 btn-weight"> <i class="fab fa-twitter "></i>          Entrar com o Twitter  </a>
                                <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-primary btn-block bg-primary text-white  mb-2 btn-weight"> <i class="fab fa-facebook-f "></i>       Entrar com o facebook  </a>
                                <a href="/Wep/login/nada-para-ver-aqui" class="btn btn-danger btn-block bg-danger text-white  mb-2 btn-weight"> <i class="fab fa-google-plus"></i>       Entrar com o google  </a>       
                                <button type="submit" class="btn btn-block btn-facebook  bg-success text-white btn-weight"> Logar </button>
                            </p><!--fim botões-->
        
                            <p class="text-center lables">Não possui uma conta? 
                                 <a href="/Wep/cadastro" class="lables-link">Cadastre-se</a><br>
                                 <a href="/Wep/recuperar-senha" class="lables-link" >Esqueci minha senha</a><br>
                            </p>
                        </div>
                                
                                                  
                        </form>

                    <section>
           
                </div>

                <div >

                </div>
                

            </div>
        </div>
    </section>
</body>
</html>

