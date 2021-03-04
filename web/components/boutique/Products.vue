<template>
  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="sidebar-wrapper style2">
            <!--Start single sidebar-->
            <div
              class="single-sidebar wow fadeInUp animated animated"
              data-wow-delay="0.1s"
              data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.1s; animation-name: fadeInUp;"
            ></div>
            <!--End single sidebar-->
            <!--Start sidebar categories Box-->
            <div
              class="single-sidebar wow fadeInUp animated animated"
              data-wow-delay="0.3s"
              data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.3s; animation-name: fadeInUp;"
            >
              <div class="categories-box">
                <div class="title">
                  <h3>Categories</h3>
                </div>
                <ul class="categories clearfix">
                  <li><a href="#">Tentes</a></li>
                  <li><a href="#">Sacs de couchages</a></li>
                  <li><a href="#">Sac à dos</a></li>
                  <li><a href="#">Chaussures</a></li>
                  <li><a href="#">Autres accessoires</a></li>
                </ul>
              </div>
            </div>
            <!--End sidebar categories Box-->
            <!--Start single sidebar-->
            <div
              class="single-sidebar wow fadeInUp animated animated"
              data-wow-delay="0.5s"
              data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.5s; animation-name: fadeInUp;"
            ></div>
            <!--End single sidebar-->
          </div>
        </div>
        <!--End Sidebar Wrapper-->
        <div class="col-xl-9 col-lg-9">
          <div class="product-items">
            <div class="row">
              <div class="col-xl-12">
                <div class="showing-result-shorting">
                  <div class="left">
                    <div class="showing">
                      <p>Affichage des résultats</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="all_products">
              <div class="row">
                <!--START V-FOR-->
                <div
                  class="col-xl-4 col-lg-4 col-md-6"
                  :key="prod.id"
                  v-for="prod in product"
                >
                  <div class="all_products_single text-center">
                    <div class="all_product_item_image">
                      <img
                        :src="encodeURI(`http://localhost:8000${prod.image}`)"
                        alt=""
                      />
                      <div class="all_product_hover">
                        <div class="all_product_icon">
                          <nuxt-link :to="`/cart/${prod.id}`"
                            ><span class="icon-shopping-cart"></span
                          ></nuxt-link>
                        </div>
                      </div>
                    </div>
                    <h4>
                      <nuxt-link :to="`/product-detail/${prod.id}`">{{
                        prod.name
                      }}</nuxt-link>
                    </h4>
                    <p>{{ prod.price }} €</p>
                  </div>
                </div>
                <!--Fin V-FOR-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";
export default {
  name: "Products",
  data() {
    return {
      product: [],
    };
  },
  mounted() {
    axios.get("http://localhost:8000/api/product/show").then((res) => {
      // console.log(res.data)
      this.product = res.data;
    });
  },
};
</script>

<style scoped></style>
