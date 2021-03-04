<template>
  <div>
    <Navbar />
    <PageHeader title="A propos" />
    <Aboutone />
    <Team />
    <CallToAction />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Aboutone from "../components/about/Aboutone";
import Team from "../components/about/Team";
import CallToAction from "../components/about/CallToAction";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Aboutone,
    Team,
    CallToAction,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | About",
    };
  },
};
</script>
