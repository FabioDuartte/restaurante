<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar produtos</title>

    <!-- Bootstrap início -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Jquery início -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="../style/registerProducts.css">
</head>

<body>
  <header ><!--Inicio Header-->
    <nav class="navbar navbar-expand-sm navbar-warning nav-bg  nav-transparente">
        <div class="container">
          <!--Logo-->
          <a  href="#" class="navbar-brand" style="color: white;">
           <img src="../images/logo/logo-removebg-preview.png" alt="" width="120px" class="logo" >
          </a>    
          <!--Menu Hamburguer-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-dark"></i>
          </button>
          <!--Navegação-->
          <div class="collapse navbar-collapse " id="nav-principal">              
              <ul class="navbar-nav ml-auto   ">  
                  
                
                <li class="nav-link format-link">
                    <div class="dropdown ">
                        <span class="dropdown-toggle text-white" data-toggle="dropdown">
                            <i class="far fa-user"></i> 
                        </span>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./registerProducts.php" class="dropdown-item nav-item format-link ">Cadastrar produtos</a>
                            <div class="dropdown-divider"></div>
                            <a href="./orders.php" class="dropdown-item nav-item format-link">Visualizar pedidos</a>
                            <div class="dropdown-divider"></div>
                            <a href="./bill.php" class="dropdown-item nav-item format-link">Minha Comanda</a>
                            <div class="dropdown-divider"></div>
                            <a href="./bill.php" class="dropdown-item nav-item format-link">Editar Cdastro</a>
                            <div class="dropdown-divider"></div>
                            <a href="./login.php" class="dropdown-item nav-item format-link">Sair</a>
                        </div>
                    </div>
                </li>
              </ul>
          </div>
        </div>
    </nav>        
</header><!--Fim Header-->

    <section id="home" class="d-flex "> 
        <div class="container align-self-center"  >
          <div class="container">
            <div class="row ">
              <div class="col">
                
                <form>
                <h1 class="display-3  text-dark">Cadastro de produtos</h1>
                
                  <div class="form-group">
                    <label for="tipo">Tipo do produto</label>
                    <select class="form-control" id="tipo">
                      <option value="">Selecione o tipo do produto</option>
                      <option value="1">Café</option>
                      <option value="2">Almoço</option>
                      <option value="3">Jantar</option>
                      <option value="4">Bebida</option>
                   
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fornecedor ">Nome</label>
                      <input type="text" class="form-control" id="fornecedor">
                  </div>
                  <div class="form-group">
                    <label for="fornecedor ">Fornecedor</label>
                      <input type="text" class="form-control" id="fornecedor">
                  </div>
                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" ></textarea>
                  </div>
                </form>

                <div>
                  <input type="submit" class="btn btn-lg enter  btn-block " value="Salvar Cadastro">
                  <input type="reset" class="btn  btn-lg cancel btn-block " value="Cancelar">
                </div>
                
              
              </div>
              
            </div>
    </section>
    <footer class="rodape my-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <ul class="nav justify-content-center ">
              <li class="  nav-item">
                <a class="nav-link " href="pagelanding.php">Home</a>
              </li>
              <li class="  nav-item">
                <a class="nav-link" href="breakfest.php">Café</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link" href="lunch.php">Almoço</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="dinner.php">Jantar</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link " href="drink.php">Bebidas</a>
              </li>
            </ul>
          </div> 
          <div class="col-md-12 my-2 notas">
            <div class="text-center ">
              <p>Endereço: Rua dos alfeneiros nº 4</p>
              <p>Tel.: (xx) xxxx-xxxx</p>
              <p>&copy; Copyright Caldeirão Furado </p>
          </div>
        </div>
    
          </div>  
        </div>
        
    </footer>
    


    
    
</body>
</html>