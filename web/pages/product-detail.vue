<template>
  <div>
    <Navbar />
    <PageHeader title="Détails produit" />
    <ProductDetail />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import ProductDetail from "../components/boutique/ProductDetail";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    ProductDetail,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Product Detail",
    };
  },
};
</script>
