<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body>
      <?php include('barresup.php'); ?>      
      <?php include('navbar.php'); ?>
          
          <br>
          <div class="container-fluid">
            <div class="card table-responsive">
              <table class="table table-hover shopping-cart-wrap">
                <h2>Votre panier</h2>
              <thead class="text-muted">
              <tr>
                <th scope="col" width="320">Produit</th>
                <th scope="col">Image</th>
                <th scope="col">Quantité"</th>
                <th scope="col" width="220">Prix</th>
                <th scope="col" class="text-right">Actions</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>
              <figure class="media">
                <figcaption class="media-body">
                  <h6 class="title text-truncate">Nom du produit</h6>
                  <dl class="dlist-inline small">
                    <dt>Taille : </dt>
                    <dd>XXL</dd>
                  </dl>
                  <dl class="dlist-inline small">
                    <dt>Couleur: </dt>
                    <dd>Orange</dd>
                  </dl>
                </figcaption>
              </figure> 
                </td>
                <td>
                  <div class="img-wrap"><img src="images/p-3.jpg" class="img-thumbnail img-sm"></div>
                </td>
                <td> 
                  <input type="number" class="form-control" value="1"> 
                </td>
                <td> 
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var> 
                    <small class="text-muted">(15 000 FCFA l'unité)</small> 
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right"> 
                <button class="btn btn-success" data-toggle="tooltip" data-original-title="Ajouter à la liste de souhaits"> <i class="fa fa-heart"></i></button> 
                <button class="btn btn-danger"> <i class="fa fa-trash"></i> Retirer</button>
                </td>
              </tr>
              <tr>
                <td>
              <figure class="media">
                <figcaption class="media-body">
                  <h6 class="title text-truncate">Nom du produit </h6>
                  <dl class="dlist-inline small">
                    <dt>Taille : </dt>
                    <dd>XXL</dd>
                  </dl>
                  <dl class="dlist-inline small">
                    <dt>Couleur: </dt>
                    <dd>Orange</dd>
                  </dl>
                </figcaption>
              </figure> 
                </td>
                <td>
                  <div class="img-wrap"><img src="images/3-sneak.jpg" class="img-thumbnail img-sm"></div>
                </td>
                <td> 
                  <input type="number" class="form-control" value="1">  
                </td>
                <td> 
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var> 
                    <small class="text-muted">(15 000 FCFA l'unité)</small>  
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right"> 
                  <button class="btn btn-success" data-toggle="tooltip" data-original-title="Ajouter à la liste de souhaits"> <i class="fa fa-heart"></i></button> 
                  <button class="btn btn-danger"><i class="fa fa-trash"></i> Retirer</button>
                </td>
              </tr>
              <tr>
                <td>
              <figure class="media">
                <figcaption class="media-body">
                  <h6 class="title text-truncate">Nom du produit </h6>
                  <dl class="dlist-inline small">
                    <dt>Taille : </dt>
                    <dd>XXL</dd>
                  </dl>
                  <dl class="dlist-inline small">
                    <dt>Couleur: </dt>
                    <dd>Orange</dd>
                  </dl>
                </figcaption>
              </figure>
                </td>
                <td>
                  <div class="img-wrap"><img src="images/3-shoe.jpg" class="img-thumbnail img-sm"></div>
                </td>
                <td> 
                  <input type="number" class="form-control" value="1">  
                </td>
                <td> 
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var> 
                    <small class="text-muted">(15 000 FCFA l'unité)</small>  
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right"> 
                  <button class="btn btn-success" data-toggle="tooltip" data-original-title="Ajouter à la liste de souhaits"> <i class="fa fa-heart"></i></button> 
                  <button class="btn btn-danger"> <i class="fa fa-trash"></i> Retirer</button>
                </td>
              </tr>
              <tr>
                <td colspan="3">Code Promo : <input type="text" name=""><button class="btn btn-success"> Soumettre </button></td>
                <td>
                  <figure class="media">
                    <figcaption class="media-body">
                      <h5 class="title text-truncate"><b> Reduction : 2000 FCFA </b></h5>
                      <dl class="dlist-inline large">
                        <dt>Livraison : </dt>
                        <dd>5 000 FCFA</dd>
                      </dl>
                      <dl class="dlist-inline large">
                        <dt>Total : </dt>
                        <dd>48 000 FCFA</dd>
                      </dl>
                    </figcaption>
                  </figure>
                </td>
                <td class="text-right">
                  <a class="btn btn-success" href="checkout.php"><i class="fa fa-thumbs-up"></i> Paiement </a>
                </td>
              </tr>
              </tbody>
              </table>
            </div> <!-- card.// -->
          </div>

          
          <?php include('footer.php'); ?>

    <?php include('script.php'); ?>
  </body>
</html>