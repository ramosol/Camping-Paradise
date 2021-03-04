<template>
  <div>
    <Navbar />
    <PageHeader title="Boutique produits" />
    <Products />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Products from "../components/boutique/Products";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Products,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Products",
    };
  },
};
</script>
