<template>
  <div>
    <br />
    <div id="register-form" class="register-form">
      <h1 class="register-form_title">register</h1>
      <div class="separator"></div>

      <form class="form" @submit.prevent="register">
        <p v-if="errors.length">
          <ul>
            <li v-for="error in errors" :key="error">{{ error }}</li>
          </ul>
        </p>
        <input required name="name" v-model="name" placeholder="Nom" type="text" autocomplete="off" />
        <br />
        <input required name="email" v-model="email" placeholder="Email" type="email" autocomplete="on" />
        <br />
        <input required name="password" v-model="password" placeholder="Mot de passe" type="password" autocomplete="off" />
        <br />
        <input
          required name="confirmedpassword" v-model="confirmedpassword" placeholder="Confirmation du mot de passe" type="password" autocomplete="off" />
        <br />

        <button class="button">register</button>
      </form>
      <br />
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "register",
  data() {
    return {
      errors: [],
      name: "",
      email: "",
      password: "",
      confirmedpassword: "",
    };
  },
  methods: {
    ...mapGetters({ message: "register/message" }),
    async register() {
      this.errors = [];
      if(!this.name) this.errors.push("Nom requis.");
      if(!this.email) this.errors.push("Email requis.");
      if (this.password !== this.confirmedpassword) this.errors.push("les mots de passe doivent être identiques")
      
      if(!this.errors.length){
        let data = {
          name: this.name,
          email: this.email,
          password: this.password,
          c_password: this.confirmedpassword,
        };
        await this.$store.dispatch("register/register", data);
        
        if (this.message() == "Please confirm yourself by clicking on verify user button sent to you on your email"){
          alert(this.message())
          this.$router.replace({ path: "/login" });
        }
        else {
          alert("Something get wrong")
        }
        
      }
    },
  },
};
</script>
<style scoped>
body {
  background: #f1f1f1;
  font-family: "Roboto", sans-serif;
}
.register-form {
  font-family: 16px;
  margin: 0 auto;
  max-width: 600px;
  width: 100%;
}
.register-form .separator {
  border-bottom: solid 1px #ccc;
  margin-bottom: 15px;
}
.register-form .form {
  display: flex;
  flex-direction: column;
  font-size: 16px;
}
.register-form_title {
  color: #333;
  text-align: left;
  font-size: 28px;
}
.register-form input[type="email"],
.register-form input[type="password"],
.register-form input[type="text"],
.register-form textarea {
  border: solid 1px #e8e8e8;
  font-family: "Roboto", sans-serif;
  padding: 10px 7px;
  margin-bottom: 15px;
  outline: none;
}
.register-form textarea {
  resize: none;
}
.titre {
  text-align: center;
}
.register-form .button {
  background: #da552f;
  border: solid 1px #da552f;
  color: white;
  cursor: pointer;
  padding: 10px 50px;
  text-align: center;
  text-transform: uppercase;
}
.register-form .button:hover {
  background: #ea532a;
  border: solid 1px #ea532a;
}
.register-form input[type="email"],
.register-form input[type="text"],
.register-form textarea,
.register-form .button {
  font-size: 15px;
  border-radius: 3px;
}
</style>