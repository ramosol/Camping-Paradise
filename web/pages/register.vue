<template>
  <div>
    <Navbar />
    <Register />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import Register from "../components/auth/Register";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    Register,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Register",
    };
  },
};
</script>
