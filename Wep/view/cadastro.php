<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Restaurante - Cadastro</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!--login.css-->
    <link rel="stylesheet" type="text/css" href="../public/style/cadastro.css">
    
    
</head>
<body>
    <section class="login-form">
        <div class="container">
            <div class="row">
                <form action="#" method="POST">

                <div class="col-md-12 login  ">                                    
                    <h2 class="text-center lables">Cadastro</h2>
                    <form action="#" method="POST" ><!--inicio form-->

                        <div class="form-group input-group"><!--inicio user-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input id="user" required="required" name="usuario" class="form-control" placeholder="Nome completo" type="text">
                        </div><!--fim user-->
                      

                        <div class="form-group input-group"><!--inicio email-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input id="email"  required="required" name="email" class="form-control" placeholder="E-mail" type="email">
                        </div><!--fim email-->

                        
                        <div class="form-group input-group "><!--inicio phone-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                             </div>
                            <input id="phone"  name="telefone" class="form-control phone-ddd-mask"   pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="DDD + telefone (opcional)"  type="tel">
                        </div><!--fim inicio-->

                        <div class="form-group input-group"><!--inicio card-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
                             </div>
                             <select name="cartoes" id="cartoes" style="max-width: 120px">                                
                                <option value="">Selecione</option>
                                <option value="1">Visa</option>
                                <option value="2">Mastercard</option>

                            </select>
                            <input  id="card" required="required" name="card" class="form-control" pattern="[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}" placeholder="Número do cartão" type="tel"><!--isso talvez dê erro depois por causa do tipo-->
                        </div><!--fim card-->

                        <div class="form-group input-group"><!--inicio password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Criar a Senha" type="password">
                        </div><!--fim password-->

                        
                        <div class="form-group input-group"><!--inicio confirma password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                             </div>
                            <input id="password"  required="required" name="password" class="form-control" placeholder="Repita a Senha" type="password">
                        </div><!--fim confirma password-->

                        <p><!--inicio botões-->
                            <a href="pagelanding.php" type="submit" class="btn btn-primary btn-block bg-primary text-white btn-weight"> <i class="fab fa-twitter "></i>          Criar com o Twitter  </a>
                            <a href="pagelanding.php" type="submit" class="btn btn-primary btn-block bg-primary text-white btn-weight"> <i class="fab fa-facebook-f "></i>       Criar com o facebook  </a>
                            <a href="pagelanding.php" type="submit" class="btn btn-danger btn-block bg-danger text-white btn-weight"> <i class="fab fa-google-plus"></i>       Criar com o google  </a>       
                            <button type="submit" class="btn btn-block btn-facebook  bg-success text-white btn-weight ">Criar conta</button>
                        </p><!--fim botões-->
                        
   
                        <p class="text-center lables">Já possui uma conta? <a href="login.php">Login</a> </p>  

                        
                
                                         
                    </form><!--fim form-->   
                </div>

                <div >

                </div>
                

            </div>
        </div>
    </section>
</body>
</html>