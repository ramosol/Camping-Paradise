<template>
  <div>
    <Navbar />
    <PageHeader title="Checkout" />
    <Checkout />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Checkout from "../components/boutique/Checkout";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    Footer,
    Checkout,
    PageHeader

  },
  head() {
    return {
      title: "Camping Paradise  | Checkout"
    };
  },
};
</script>
