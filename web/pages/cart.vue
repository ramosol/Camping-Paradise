<template>
  <div>
    <Navbar />
    <PageHeader title="Panier" />
    <Cart />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Cart from "../components/boutique/Cart";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    Footer,
    Cart,
    PageHeader

  },
  head() {
    return {
      title: "Camping Paradise  | Panier"
    };
  },
};
</script>
