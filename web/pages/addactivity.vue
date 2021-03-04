<template>
  <div>
    <Navbar />
    <PageHeader title="Nouvelles activitées" />
    <Addactivity />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Addactivity from "../components/auth/AddActivity";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Addactivity,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Ajouter une activité",
    };
  },
};
</script>
