<template>
  <div>
    <Navbar />
    <Login />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import Login from "../components/auth/Login";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    Footer,
    Login,
  },
  head() {
    return {
      title: "Camping Paradise  | Login",
    };
  },
};
</script>
