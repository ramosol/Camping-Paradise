<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail1 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail1 from "../components/activity/detailsActivite/Detail1";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail1,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
