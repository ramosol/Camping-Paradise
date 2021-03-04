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
        <!--End Sidebar Wrapper-->
        <div class="col-xl-9 col-lg-9">
          <div class="product-items">
            <div class="showing-result-shorting">
              <div id="update-form" class="update-form">
                <h1 class="update-form_title">Modifier Profile</h1>
                <div class="separator"></div>

                <form class="form" @submit.prevent="userupdate">
                  <input
                    type="text"
                    v-model="data.name"
                    class="form-control"
                    id="name"
                    aria-describedby="nameHelp"
                    placeholder="Nouveau Nom"
                  />
                  <br />
                  <input
                    type="email"
                    v-model="data.email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Nouveau Email"
                  />
                  <br />
                  <input
                    type="password"
                    v-model="data.password"
                    class="form-control"
                    id="password"
                    placeholder="Nouveau mot de passe"
                  />
                  <input
                    type="password"
                    v-model="data.c_password"
                    class="form-control"
                    id="c_password"
                    placeholder=" Confirmer nouveau mot de passe"
                  />
                  <br />
                  <button class="button">Submit</button>
                  <div class="separator"></div>
                </form>
                <br />
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
export default {
  data() {
    return {
      data: {
        name: "",
        email: "",
        password: "",
        c_password: "",
      },
    };
  },
  computed: {
    ...mapGetters({ user: "login/user" }),
  },
  mounted() {
    console.log(this.user);
    this.data.name = this.user.name;
    this.data.email = this.user.email;
  },
  methods: {
    ...mapActions(["userupdate/logout"]),
    userupdate: function() {
      let data = {
        name: this.data.name,
        email: this.data.email,
        password: this.data.password,
        c_password: this.data.c_password,
      };
      console.log(this.data);
      this.$store.dispatch("userupdate/userupdate", data);
    },
  },
};
</script>

<style scoped>
body {
  background: #f1f1f1;
  font-family: "Roboto", sans-serif;
}

.update-form {
  font-family: 16px;
  margin: 0 auto;
  max-width: 600px;
  width: 100%;
}

.update-form .separator {
  border-bottom: solid 1px #ccc;
  margin-bottom: 15px;
}

.update-form .form {
  display: flex;
  flex-direction: column;
  font-size: 16px;
}

.update-form_title {
  color: #333;
  text-align: center;
  font-size: 28px;
}

.update-form input[type="text"],
.update-form input[type="email"],
.update-form input[type="password"],
.update-form textarea {
  border: solid 1px #e8e8e8;
  font-family: "Roboto", sans-serif;
  padding: 10px 7px;
  margin-bottom: 15px;
  outline: none;
}

.update-form textarea {
  resize: none;
}
.titre {
  text-align: center;
}

.update-form .button {
  background: #da552f;
  border: solid 1px #da552f;
  color: white;
  cursor: pointer;
  padding: 10px 50px;
  text-align: center;
  text-transform: uppercase;
}

.update-form .button:hover {
  background: #ea532a;
  border: solid 1px #ea532a;
}

.update-form input[type="text"],
.update-form input[type="email"],
.update-form input[type="text"],
.update-form textarea,
.update-form .button {
  font-size: 15px;
  border-radius: 3px;
}
</style>
