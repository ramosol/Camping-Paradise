<template>
  <section class="product">
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
            ></div>
            <!--End single sidebar-->
            <!--Start sidebar categories Box-->
            <div
              class="single-sidebar wow fadeInUp animated"
              data-wow-delay="0.3s"
              data-wow-duration="1200ms"
              style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.3s; animation-name: fadeInUp;"
            >
              <div class="categories-box">
                <div class="title">
                  <h3>Menu</h3>
                </div>
                <ul class="clearfix categories">
                  <li><nuxt-link to="/secure">Compte</nuxt-link></li>
                  <li><nuxt-link to="/">Modification du compte</nuxt-link></li>
                  <li>
                    <nuxt-link to="/addactivity">Ajouter une activité</nuxt-link>
                  </li>
                  <li>
                    <nuxt-link to="/" v-on:click.native="logout()">Déconnexion</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
            <!--End sidebar categories Box-->
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
        <div class="activity_form_box">
          <div class="text-left block-title">
            <h3>Ajouter une nouvelle activité</h3>
            <p>
              Veuillez remplir les informations ci-dessous pour ajouter une nouvelle activité
            </p>
            <div class="leaf">
              <img src="/assets/images/resources/leaf.png" alt="" />
            </div>
          </div>
          <form class="contact_one_form" @submit.prevent="postForm">
            <div class="row">
              <div class="col-md-6">
                <div class="input_box">
                  <input type="text" v-model="data.name" placeholder="Titre de l'activité" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="input_box">
                  <textarea type="text" v-model="data.description"  placeholder="Description de l'activité"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input_box">
                  <button type="submit" class="thm-btn contact_one_btn">
                    Valider
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios'
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({ user: "login/user" }),
  },
  data(){
    return{
      data: {
        user_id: 1,
        name: "",
        description: ""
      }
    }
  },
  // TODO: YESSAAAII
  methods:{
    async postForm(){
      const api = 'http://localhost:8000/api/acti/add';
      const token = localStorage.getItem('token');
      const data = this.data;
      console.log(data)
      try{
        await axios.post(api, data,{headers: {"Authorization": `Bearer ${token}`}})
            .then((resp) => {
          console.log(resp)
      });}
      catch(err){
        console.error(err)}
      }
  },
};
</script>
