<?php 
if (isset($_SESSION['lista-item']) && !empty($_SESSION['lista-item'])) {
    foreach ($_SESSION['lista-item'] as $item) {
    $src = '/Wep/App/Templates/Gallery/' . $item['imgProduto'];
?>
    <div class="card-deck my-5 col-md-4" >
        <div class="card">
            <?php echo "<img class='card-img-top' src='$src' alt='Imagem de capa do card'>" ?>
            <div class="card-body">
            <h5 class="cardheader"> <?php echo $item['nomeProduto']; ?> </h5>
            <div class="d-flex my-4 ">
                <i class="star fas fa-star text-warning "></i>
                <i class="star fas fa-star text-warning "></i>
                <i class="star fas fa-star text-warning "></i>
                <i class="star fas fa-star text-warning "></i>
                <i class="star fas fa-star text-warning "></i> <span class="badge badge-pill badge-secondary ml-2">5.0</span>
            </div>
            <p class="card-text description"> <?php if (isset($item['ingredientes'])) { echo "Ingredientes: " . $item['ingredientes']; } else { echo "Fornecedor: " . $item['fornecedor']; } ?> </p>
            <div>
                <p class="h5 font-weight-bold text-dark">Preço: R$ <?php echo $item['precoProduto']; ?> </p>
            </div>
            </div>
            <div class="card-footer">
            <form method="GET">
                <input name='idProduto' hidden value="<?php echo $item['idProduto']; ?>">
                <button class="btn btn-success btn-lg btn-block" type="submit">Adicionar à comanda</button>
            </div>
            </form>
        </div>
    </div>
<?php
    }
} else {
    echo "<div class='my-5' style='border: 2px solid grey; width:980px'>
             <h3 class='my-5 text-center'>Nenhum produto cadastrado!</h3>
          </div>";
}
$_SESSION['lista-item'] = array();
?>
