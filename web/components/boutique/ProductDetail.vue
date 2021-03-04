<template>
  <div>
    <section class="product_detail">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="product_detail_image">
              <img src="/assets/images/boutique/chaussure.jpg" alt="" />
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="product_detail_content">
              <h2>Chaussure randonnée Ghanzi</h2>
              <div class="product_detail_review_box">
                <div class="product_detail_price_box">
                  <p>50€</p>
                  <h3>Une chaussure de randonnée imperméable !</h3>
                </div>
              </div>
              <div class="product_detail_text">
                <p>
                  la chaussure de randonnée Ghanzi est une chaussure de
                  randonnée tout terrain et imperméable! Sa tige haute
                  protectrice assure un maintien parfait du pied. Les pieds ne
                  craindront pas l'eau avec sa membrane imperméable et
                  respirante. Un pare-pierres résistant et une excellente
                  adhérence : c’est une vraie chaussure montagne, le tout à prix
                  tout doux !
                </p>
              </div>
              <ul class="list-unstyled product_detail_address">
                <li>REF. 1232/598</li>
                <li>Disponible</li>
              </ul>
              <div class="product-quantity-box">
                <div class="input-box">
                  <input
                    class="quantity-spinner"
                    type="number"
                    value="1"
                    name="quantity"
                  />
                </div>
                <div class="addto-cart-box">
                  <button class="thm-btn" type="submit">
                    Ajouter au panier
                  </button>
                </div>
                <div class="wishlist_btn">
                  <a href="#" class="thm-btn">Favoris</a>
                </div>
              </div>
              <ul class="list-unstyled category_tag_list">
                <li>Catégorie: Chaussure</li>
                <li>Tags: Randonnée</li>
              </ul>
              <div class="product_detail_share_box">
                <div class="share_box_title">
                  <h2>Partager avec vos amis!</h2>
                </div>
                <div class="share_box_social">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="all_products_two">
      <div class="container">
        <div class="block-title text-center">
          <h3>Produits similaires</h3>
          <div class="leaf">
            <img src="/assets/images/resources/leaf.png" alt="" />
          </div>
        </div>
        <div class="all_products">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="all_products_single text-center">
                <div class="all_product_item_image">
                  <img src="/assets/images/boutique/chaussure.jpg" alt="" />
                  <div class="all_product_hover">
                    <div class="all_product_icon">
                      <a href="#"><span class="icon-shopping-cart"></span></a>
                    </div>
                  </div>
                </div>
                <h4>CHAUSSURE RANDONNÉE GHANZI</h4>
                <p>50€</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="all_products_single text-center">
                <div class="all_product_item_image">
                  <img src="/assets/images/boutique/chaussure.jpg" alt="" />
                  <div class="all_product_hover">
                    <div class="all_product_icon">
                      <a href="#"><span class="icon-shopping-cart"></span></a>
                    </div>
                  </div>
                </div>
                <h4>CHAUSSURE RANDONNÉE GHANZI</h4>
                <p>50€</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="all_products_single text-center">
                <div class="all_product_item_image">
                  <img src="/assets/images/boutique/chaussure.jpg" alt="" />
                  <div class="all_product_hover">
                    <div class="all_product_icon">
                      <a href="#"><span class="icon-shopping-cart"></span></a>
                    </div>
                  </div>
                </div>
                <h4>CHAUSSURE RANDONNÉE GHANZI</h4>
                <p>50€</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="all_products_single text-center">
                <div class="all_product_item_image">
                  <img src="/assets/images/boutique/chaussure.jpg" alt="" />
                  <div class="all_product_hover">
                    <div class="all_product_icon">
                      <a href="#"><span class="icon-shopping-cart"></span></a>
                    </div>
                  </div>
                </div>
                <h4>CHAUSSURE RANDONNÉE GHANZI</h4>
                <p>50€</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ProductDetail",
  data(){
    return{
      product: []
    }
  },
  async created(){
    await axios.get('http://localhost:8000/api/product/show/1')
        .then((res)=> {
          console.log(res.data)
          this.product = res.data
        })
  },
};
</script>

<style scoped>
.mission-tabs {
  display: flex;
  flex-wrap: wrap;
}
.mission-tabs label {
  order: 1;
  display: block;
  padding: 17px 50px;
  margin-right: 0.2rem;
  cursor: pointer;
  background: #5e9054;
  font-weight: 500;
  transition: background ease 0.2s;
  font-size: 19px;
  text-transform: uppercase;
  color: #fff;
}
.mission-tabs .tab {
  order: 99;
  flex-grow: 1;
  width: 100%;
  display: none;
  padding: 1rem;
  background: #f4f5f8;
}
.default-tabs .mission-tabs .text {
  position: relative;
  font-size: 20px;
  font-weight: 300;
  color: #5e9054;
  line-height: 1.7em;
  letter-spacing: 2px;
}
.mission-tabs input[type="radio"] {
  display: none;
}
.mission-tabs input[type="radio"]:checked + label {
  background: #f4f5f8;
  color: #222;
}
.mission-tabs input[type="radio"]:checked + label + .tab {
  display: block;
}

@media (max-width: 45em) {
  .mission-tabs .tab,
  .mission-tabs label {
    order: initial;
  }
  .mission-tabs label {
    width: 100%;
    margin-right: 0;
    margin-top: 0.2rem;
  }
}
</style>
