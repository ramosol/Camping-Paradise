<template>
  <div>
    <br />
    <div class="container">
      <div class="py-5 text-center">

        <h2>Checkout form</h2>

      </div>

      <div class="row">
        <div class="mb-4 col-md-4 order-md-2">
          <h4 class="mb-3 d-flex justify-content-between align-items-center">
            <span class="text-muted">Votre Panier</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="mb-3 list-group">
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Nom du Produit</h6>
                <small class="text-muted">Description</small>
              </div>
              <span class="text-muted">12 €</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Nom du Produit</h6>
                <small class="text-muted">Description</small>
              </div>
              <span class="text-muted">89.99 €</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Nom du Produit</h6>
                <small class="text-muted">Description</small>
              </div>
              <span class="text-muted">59.99 €</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Code Promo</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-69.99 €</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (Eur)</span>
              <strong>219.97 €</strong>
            </li>
          </ul>

          <form class="p-2 card">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Promo code"
              />
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adresse de Facturation</h4>
          <form class="needs-validation" novalidate>
            <div class="row">

              <div class="mb-3 col-md-6">
                <label for="firstName">First name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  placeholder=""
                  value=""
                  required
                />

                <div class="invalid-feedback">
                  UN PRENOM VALIDE EST REQUIS.
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="lastName">Last name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  placeholder=""
                  value=""
                  required
                />

                <div class="invalid-feedback">
                  UN NOM VALIDE EST REQUIS.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  placeholder="Username"
                  required
                />
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email"
                >Email <span class="text-muted">(Optional)</span></label
              >
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="you@example.com"
              />

              <div class="invalid-feedback">
              Veuillez saisir une adresse e-mail valide pour l'expédition.              </div>
            </div>

            <div class="mb-3">

              <label for="address">Address</label>
              <input
                type="text"
                class="form-control"
                id="address"
                placeholder="1234 Main St"
                required
              />

              <div class="invalid-feedback">
                Veuillez saisir votre adresse d'expédition.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2"
                >Address 2 <span class="text-muted">(Optional)</span></label
              >
              <input
                type="text"
                class="form-control"
                id="address2"
                placeholder="Apartment or suite"
              />
            </div>

            <div class="row">
              <div class="mb-3 col-md-5">
                <label for="country">Country</label>
                <select
                  class="custom-select d-block w-100"
                  id="country"
                  required
                >
                  <option value="">Choose...</option>
                  <option>United States</option>

                </select>
                <div class="invalid-feedback">
                  Veuillez sélectionner un pays valide.
                </div>
              </div>

              <div class="mb-3 col-md-4">
                <label for="state">Pays</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choisir...</option>
                  <option>France</option>
                  <option>Belgique</option>
                </select>
              </div>
              <div class="mb-3 col-md-3">
                <label for="zip">Zip</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">
                  Code postal requis.
                </div>
              </div>
            </div>
            <hr class="mb-4" />
            <div class="custom-control custom-checkbox">

              <input
                type="checkbox"
                class="custom-control-input"
                id="same-address"
              />
              <label class="custom-control-label" for="same-address"
                >Shipping address is the same as my billing address</label
              >
            </div>
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                class="custom-control-input"
                id="save-info"
              />
              <label class="custom-control-label" for="save-info"
                >Save this information for next time</label
              >

            </div>
            <hr class="mb-4" />

            <h4 class="mb-3">Payement</h4>

            <div class="my-3 d-block">
              <div class="custom-control custom-radio">

                <input
                  id="credit"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  checked
                  required
                />
                <label class="custom-control-label" for="credit"
                  >Credit card</label
                >
              </div>
              <div class="custom-control custom-radio">
                <input
                  id="debit"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required
                />
                <label class="custom-control-label" for="debit"
                  >Debit card</label
                >

              </div>
              <div class="custom-control custom-radio">
                <input
                  id="paypal"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required
                />
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">

              <div class="mb-3 col-md-6">
                <label for="cc-name">Name on card</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-name"
                  placeholder=""
                  required
                />
                <small class="text-muted">Full name as displayed on card</small>

                <div class="invalid-feedback">
                  Le nom sur la carte est obligatoire
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="cc-number">Credit card number</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-number"
                  placeholder=""
                  required
                />

                <div class="invalid-feedback">
                  Le numéro de carte de crédit est requis
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-3">
                <label for="cc-expiration">Expiration</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-expiration"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">
                  Date d'expiration requise
                </div>
              </div>
              <div class="mb-3 col-md-3">
                <label for="cc-expiration">CVV</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-cvv"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">
                  Code de sécurité requis
                </div>
              </div>
            </div>

            <hr class="mb-4" />
            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Continue to checkout
            </button>

          </form>
          <br />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Checkout",
};
</script>

<style></style>
