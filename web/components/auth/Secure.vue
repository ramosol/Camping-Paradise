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
                  <li>
                    <nuxt-link to="/editaccount">Modification du compte</nuxt-link>
                  </li>
                  <li>
                    <nuxt-link to="/addactivity">Ajouter une activité</nuxt-link>
                  </li>
                  <li><div class="pointer" @click.prevent="logout">Deconnection</div></li>
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
        <!--End Sidebar Wrapper-->
        <div class="col-xl-9 col-lg-9">
          <div class="product-items">
            <div class="row">
              <div class="col-xl-12">
                <div class="showing-result-shorting">
                  <div class="showing">
                    <h1>Hello {{ user.name }}, bienvenue sur ton compte perso!</h1>
                    <br />
                    <div>Adresse email:</div>
                    <p>{{ user.email }}</p>
                    <br />
                    <div>Nom d'utilisateur:</div>
                    <p>{{ user.name }}</p>
                  </div>
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
import axios from "axios";
export default {
  data(){
    return{
      user: []
    }
  },
  methods: {
    logout(){
      this.$store.dispatch('login/logout')
    }
  },
  mounted() {
    const api = 'http://localhost:8000/api/user/details';
    const token = localStorage.getItem('token');
    axios.get(api, {headers: {"Authorization": `Bearer ${token}`}})
        .then((res) => {
          this.user = res.data
        })
  }
};
</script>

<style scoped>

.pointer:hover{
  cursor: pointer;
  color:red;
}

</style>