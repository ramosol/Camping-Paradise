<template>
  <div>
    <Navbar />
    <PageHeader title="Localisation des campings" />
    <CampingMap />
    <Camping />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Camping from "../components/camping/Camping";
import CampingMap from "../components/camping/CampingMap.vue";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    CampingMap,
    Camping,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Camping",
    };
  },
};
</script>