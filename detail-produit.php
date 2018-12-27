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
          <div class="card">
          <div class="row no-gutters">
            <aside class="col-sm-5 border-right">
        <article class="gallery-wrap"> 
        <div class="img-big-wrap">
          <div> <a href="images/p-3.jpg" data-fancybox=""><img src="images/p-3.jpg"></a></div>
        </div> <!-- slider-product.// -->
        <div class="img-small-wrap">
          <div class="item-gallery"> <img src="images/3-sneak.jpg"></div>
          <div class="item-gallery"> <img src="images/3-shoe.jpg"></div>
          <div class="item-gallery"> <img src="images/p-7.jpg"></div>
          <div class="item-gallery"> <img src="images/p-8.jpg"></div>
        </div> <!-- slider-nav.// -->
        </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
        <article class="p-5">
          <h3 class="title mb-3">Nom produit</h3>

        <div class="mb-3"> 
          <var class="price h3 text-warning"> 
            <span class="num">25 000 FCFA</span>
          </var>
        </div> <!-- price-detail-wrap .// -->
        <dl>
          <dt>Description</dt>
          <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco </p></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Model#</dt>
          <dd class="col-sm-9">Nike</dd>

          <dt class="col-sm-3">Couleur</dt>
          <dd class="col-sm-9">Bleu / Blanc</dd>

          <dt class="col-sm-3">Livraison</dt>
          <dd class="col-sm-9">Dans toute l'Afrique centrale</dd>
        </dl>
        <div class="rating-wrap">

          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
            </li>
            <li>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
            </li>
          </ul>
          <div class="label-rating">132 Avis</div>
          <div class="label-rating">164 Commandes </div>
        </div> <!-- rating-wrap.// -->
        <hr>
          <div class="row">
            <div class="col-sm-5">
              <dl class="dlist-inline">
                <dt>Quantité : </dt>
                <dd> 
                  <select class="form-control form-control-sm" style="width:70px;">
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                  </select>
                </dd>
              </dl>  <!-- item-property .// -->
            </div> <!-- col.// -->
            <div class="col-sm-7">
              <dl class="dlist-inline">
                  <dt>Taille : </dt>
                  <dd>
                    <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <span class="form-check-label">SM</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <span class="form-check-label">MD</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <span class="form-check-label">XXL</span>
                  </label>
                  </dd>
              </dl>  <!-- item-property .// -->
            </div> <!-- col.// -->
          </div> <!-- row.// -->
          <hr>
          <a href="#" class="btn  btn-primary"> Acheter </a>
          <a href="#" class="btn  btn-outline-primary"> <i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
        </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
          </div> <!-- row.// -->
        </div> <!-- card.// -->
        </div>

          
        <?php include('footer.php'); ?>

    <?php include('script.php'); ?>
  </body>
</html>