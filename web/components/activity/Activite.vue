<template>
  <section class="recent-project">
    <div class="container">
      <div class="text-center block-title"><h3>Notre sélection:</h3></div>
      <div class="row">
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img
                src="/assets/images/activity/tyrolienne.jpg"
                alt="Recent Project Img"
              />
              <div class="project_content">
                <h3>déscente en<br />tyrolienne</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail1"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img
                src="/assets/images/activity/velo.jpg"
                alt="Recent Project Img"
              />
              <div class="project_content">
                <h3>VTT Off<br />Road Trail</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail2"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img
                src="/assets/images/activity/orientation.jpg"
                alt="Recent Project Img"
              />
              <div class="project_content">
                <h3>Activité<br />orientation</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail3"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img
                src="/assets/images/activity/decouverte.jpg"
                alt="Recent Project Img"
              />
              <div class="project_content">
                <h3>Nature &<br />Découverte</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail4"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img
                src="/assets/images/activity/cuisine.jpg"
                alt="Recent Project Img"
              />
              <div class="project_content">
                <h3>Soirée BBQ<br />en pleine nature</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail5"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4">
          <div class="recent_project_single mrb-30">
            <div class="project_img_box">
              <img src="/assets/images/activity/marche.jpg" alt="Marche" />
              <div class="project_content">
                <h3>Marche<br />& Aventure</h3>
              </div>
              <div class="hover_box">
                <nuxt-link to="/detail6"
                  ><span class="icon-left-arrow"></span
                ></nuxt-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Activités des utilisateurs -->
    <div class="brand-one">
      <div class="container">
        <div class="text-center block-title">
          <h3 style="color: white">La sélection de nos utilisteurs:</h3>
          <h2 style="color: white">
            N'hésitez pas à nous joindre pour plus d'informations concernant une
            activité ;-)
          </h2>
        </div>
        <!-- <div class="all_products">
          <div class="text-center all_products_single">
            <div style="border-style: double;" class="row">
              <div
                class="col-xl-4 col-lg-4 col-md-6"
                v-for="info in data"
                :key="info.id"
              >
                <div>NOM DE L'ACTIVITE: {{ info.name }}</div>
                <div>DESCRIPTION: {{ info.description }}</div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-sm">
            <div class="service_1_single wow fadeInUp">
              <div class="content2">
                <div
                  class="col-xl-4 col-lg-4 col-md-6"
                  v-for="info in data"
                  :key="info.id"
                >
                  <h3>Nom de l'activité : {{ info.name }}</h3>
                  <p>Description de l'activité: {{ info.description }}</p>
                  <p>Poster le: {{ info.created_at }}</p>
                  <br /><br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- TEST -->

        <div class="row">
          <div class="col-xl-12">
            <div class="our_projects_btn">
              <nuxt-link to="/login"
                ><span class="thm-btn">Ajouter une activité</span></nuxt-link
              >
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
  name: "Activite",
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    const api = "http://localhost:8000/api/acti/show";
    // const token = localStorage.getItem('token')
    axios.get(api).then((res) => {
      this.data = res.data;
    });
  },
};
</script>

<style scoped></style>
