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
                <h2>Votre liste de souhaits</h2>
              <thead class="text-muted">
              <tr>
                <th scope="col" width="350">Produit</th>
                <th scope="col">Image</th>
                <th scope="col" >Prix</th>
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
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var><br>
                    <small class="text-muted">(15 000 FCFA l'unité)</small> 
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                  <button class="btn btn-success"> <i class="fa fa-shopping-cart"></i> Acheter</button>
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
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var><br>
                    <small class="text-muted">(15 000 FCFA l'unité)</small>  
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                  <button class="btn btn-success"> <i class="fa fa-shopping-cart"></i> Acheter</button>
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
                  <div class="price-wrap"> 
                    <var class="price">15 000 FCFA</var><br>
                    <small class="text-muted">(15 000 FCFA l'unité)</small>  
                  </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                  <button class="btn btn-success"> <i class="fa fa-shopping-cart"></i> Acheter</button>
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