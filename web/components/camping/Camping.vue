<template>
  <section class="product">
    <div style="margin-left:50px:; ">
      <h2 style="text-align:center"><strong>Nos campings Sauvages</strong></h2>
    </div>
    <br />
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="sidebar-wrapper style2">
            <!--Start single sidebar-->
            <div
              class="single-sidebar wow fadeInUp animated"
              data-wow-delay="0.1s"
              data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.1s; animation-name: fadeInUp;"
            >
              <div style="padding-top: 100px" class="sidebar-search-box">
                <form class="form" @submit.prevent="rechercher">
                  Filtrer :

                  <br />
                  Region:
                  <input
                    type="region"
                    v-model="region"
                    class="form-control"
                    id="region"
                    placeholder="Entrez une region"
                  />
                  <br />
                  Departement:
                  <input
                    type="departement"
                    v-model="departement"
                    class="form-control"
                    id="departement"
                    placeholder="Entrez un departement"
                  />
                  <br />
                  Étoiles:
                  <input
                    type="classement"
                    v-model="classement"
                    class="form-control"
                    id="classement"
                    placeholder="Entrez un chiffre entre 1 et 5 "
                  />
                  <br />
                  <button class="button">Rechercher</button>
                  <div class="separator"></div>
                </form>
              </div>
            </div>
            <!--End single sidebar-->

            <!--Start single sidebar-->
            <div
              class="single-sidebar wow fadeInUp animated"
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
                      <!-- <p>
                        Affichage des résultats {{ firstCamping }}-{{
                          lastCamping
                        }}
                        sur {{ nbCamping }}
                      </p> -->
                    </div>
                  </div>
                  <div class="right">
                    <div class="shorting">
                      <div
                        class="dropdown shorting bootstrap-select"
                        style="width: 100%;"
                      >
                        <!-- <select
                          class="selectpicker"
                          data-width="100%"
                          tabindex="-98"
                        >
                          <option selected="selected"
                            >Trier par: Camping Paradise présente</option
                          >
                          <option>Prix: par ordre croissant</option>
                          <option>Prix: par ordre décroissant</option>
                        </select> -->
                        <div class="dropdown-menu " role="combobox">
                          <div
                            class="inner show"
                            role="listbox"
                            aria-expanded="false"
                            tabindex="-1"
                          >
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
              <div class="text-center all_products_single">
                <div style="border-style: double;" class="row">
                  <campingDetail
                    v-for="(camp, index) in listCamping"
                    :key="index"
                    :coord="camp.coord"
                    :name="camp.nom_commercial"
                    :adresse="camp.adresse"
                    :etoile="camp.classement"
                    style="border-style: double;" 
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

import CampingDetail from "./CampingDetail.vue";

export default {
  components: { CampingDetail },
  name: "camping",

  data() {
    return {
      // firstCamping: 1,
      // lastCamping: 10,
      // nbCamping: 10,
      region: "",
      departement: "",
      classement: "",
    };
  },

  computed: {
    ...mapGetters("camping", ["listCamping"]),
  },

  async mounted() {
    var $arg = { rows: 300 };
    await this.getCamping($arg);
  },

  methods: {
    ...mapActions("camping", ["getCamping"]),

    async rechercher() {
      var region = this.region.toUpperCase();
      var departement = this.departement.toUpperCase();
      var $result = {
        rows: 20,
        nom_reg: region,
        nom_dep: departement,
        classement: this.classement,
      };
      await this.getCamping([$result]);
    },
  },
};
</script>

<style scoped></style>
