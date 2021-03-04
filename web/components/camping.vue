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
            >
              <div class="sidebar-search-box">
                <form class="form" @submit.prevent="rechercher">
                  nombre de Camping:
                  <input type="nbCamping" v-model="nbCamping" class="form-control" id="nbCamping" />
                  <br />
                  region:
                  <input type="region" v-model="region" class="form-control" id="region" />
                  <br />
                  departement:
                  <input type="departement" v-model="departement" class="form-control" id="departement" />
                  <br />
                  classement:
                  <input type="classement" v-model="classement" class="form-control" id="classement" />
                  <br />
                  <button class="button">rechercher</button>
                  <div class="separator"></div>
                </form>
              </div>
            </div>
            <!--End single sidebar-->

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
                      <p>Affichage des résultats {{ firstCamping }}-{{ lastCamping }} sur {{ nbCamping }}</p>
                    </div>
                  </div>
                  <div class="right">
                    <div class="shorting">
                      <div class="dropdown shorting bootstrap-select" style="width: 100%;">
                        <select class="selectpicker" data-width="100%" tabindex="-98">
                          <option selected="selected">Trier par: Camping Paradise présente</option>
                          <option>Prix: par ordre croissant</option>
                          <option>Prix: par ordre décroissant</option>
                        </select>
                        <div class="dropdown-menu " role="combobox">
                          <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                            <ul class="dropdown-menu inner show"></ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="all_products">
              <div class="all_products_single text-center">
                <div class="all_product_item_image">
                  <campingDetail
                    v-for="(camp, index) in listCamping"
                    :key="index"
                    :coord="camp.coord"
                    :name="camp.nom_commercial"
                    :adresse="camp.adresse"
                    :etoile="camp.classement"
                  ></campingDetail>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import campingDetail from "./campingDetail.vue";

export default {
  components: { campingDetail },
  name: "camping",

  data() {
    return {
      firstCamping: 1,
      lastCamping: 10,
      nbCamping: 10,
      region: "",
      departement: "",
      classement: "",
    };
  },

  computed: {
    ...mapGetters("camping", ["listCamping"]),
  },

  async mounted() {
    await this.getCamping();
  },

  methods: {
    ...mapActions("camping", ["getCamping"]),

    next10camping() {
      if (this.lastCamping < this.nbCamping) {
        this.firstCamping += 10;
        this.lastCamping += 10;
      }
      if (this.lastCamping > this.nbCamping) {
        this.firstCamping = this.nbCamping - 9;
        this.lastCamping = this.nbCamping;
      }
    },

    previous10camping() {
      if (this.firstCamping > 1) {
        this.firstCamping -= 10;
        this.lastCamping -= 10;
      }
      if (this.firstCamping < 1) {
        this.firstCamping = 1;
        this.lastCamping = 10;
      }
    },
    async rechercher() {
      var $result = {
        rows: parseInt(this.nbCamping),
        nom_reg: this.region,
        nom_dep: this.departement,
        classement: this.classement,
      };
      await this.getCamping([$result]);
    },
  },
};
</script>

<style scoped></style>
