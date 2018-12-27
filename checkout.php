<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body>
      <?php include('barresup.php'); ?>      
      <?php include('navbar.php'); ?>
          
        <br>

        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Votre Panier</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Nom Product</h6>
                                <small class="text-muted">Courte description</small>
                            </div>
                            <span class="text-muted">12 000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Second produit</h6>
                                <small class="text-muted">Courte description</small>
                            </div>
                            <span class="text-muted">15 000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">N-ieme produit</h6>
                                <small class="text-muted">Courte description</small>
                            </div>
                            <span class="text-muted">20 000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Livraison</h6>
                                <small class="text-muted">Point relais / Adresse</small>
                            </div>
                            <span class="text-muted">2 000 FCFA</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Code promo</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">- 5 000 FCFA</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (CFA)</span>
                            <strong>47 000</strong>
                        </li>
                    </ul>
                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Code Promo">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Appliquer</button>
                            </div>
                        </div>
                    </form>
                    <div class="payment-methods">
                        <p class="pt-4 mb-2">Modes de paiement</p>
                        <hr>
                        <ul class="list-inline d-flex">
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-visa"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-stripe"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-paypal"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <i class="fa-2x fa fa-cc-jcb"></i>
                            </li>
                            <li class="mx-1 text-info">
                                <img src="images/OM logo.png" height="32">
                            </li>
                            <li class="mx-1 text-info">
                                <img src="images/Momo logo.jpg" height="32">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Adresse</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nom</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback" style="display: none;">
                                    Veuillez entrer votre nom.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Prenom</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback" style="display: none;">
                                    Veuillez entrer votre nom.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback" style="display: none;">
                                Veuillez entrer un email valide.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback" style="display: none;">
                                Veuillez entrer votre adresse
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Adresse 2
                                <span class="text-muted">(Optionel)</span>
                            </label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Livrer à mon adresse par defaut</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Se souvenir de mes informations la prochaine fois</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Paiement</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Carte de Credit</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Monnaie mobile</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">Cash à la livraison</label>
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">
                            <i class="fa fa-credit-card"></i> Valider ma commande</button>
                    </form>
                </div>
              </div>
          </div>
      </section>
      <br>
          
      <?php include('footer.php'); ?>

    <?php include('script.php'); ?>
  </body>
</html>