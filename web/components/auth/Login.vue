<template>
  <div>
    <br />

    <div id="login-form" class="login-form">
      <h1 class="login-form_title">login</h1>
      <div class="separator"></div>

      <form class="form" @submit.prevent="login">
        <input
          type="email"
          v-model="user.email"
          class="form-control"
          id="email"
          aria-describedby="emailHelp"
        />
        <br />
        <input
          type="password"
          v-model="user.password"
          class="form-control"
          id="password"
        />
        <br />
        <button class="button">Login</button>
        <div class="separator"></div>
        <div>
          <span>Nouveau chez nous ? </span>
          <nuxt-link to="/Register">Créez votre compte ici</nuxt-link>
        </div>
      </form>
      <br />
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      user: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    login: function() {
      let data = {
        email: this.user.email,
        password: this.user.password,
      };
      this.$store.dispatch("login/login", data);
    },
  },
};
</script>
<style scoped>
body {
  background: #f1f1f1;
  font-family: "Roboto", sans-serif;
}

.login-form {
  font-family: 16px;
  margin: 0 auto;
  max-width: 600px;
  width: 100%;
}

.login-form .separator {
  border-bottom: solid 1px #ccc;
  margin-bottom: 15px;
}

.login-form .form {
  display: flex;
  flex-direction: column;
  font-size: 16px;
}

.login-form_title {
  color: #333;
  text-align: left;
  font-size: 28px;
}

.login-form input[type="email"],
.login-form input[type="password"],
.login-form textarea {
  border: solid 1px #e8e8e8;
  font-family: "Roboto", sans-serif;
  padding: 10px 7px;
  margin-bottom: 15px;
  outline: none;
}

.login-form textarea {
  resize: none;
}
.titre {
  text-align: center;
}

.login-form .button {
  background: #da552f;
  border: solid 1px #da552f;
  color: white;
  cursor: pointer;
  padding: 10px 50px;
  text-align: center;
  text-transform: uppercase;
}

.login-form .button:hover {
  background: #ea532a;
  border: solid 1px #ea532a;
}

.login-form input[type="email"],
.login-form input[type="text"],
.login-form textarea,
.login-form .button {
  font-size: 15px;
  border-radius: 3px;
}
</style>
