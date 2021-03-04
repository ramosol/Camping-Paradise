<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <AboutActivity />
    <Activite />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import AboutActivity from "../components/activity/AboutActivity";
import PageHeader from "../components/PageHeader";
import Activite from "../components/activity/Activite";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    AboutActivity,
    Activite,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Activités",
    };
  },
};
</script>
