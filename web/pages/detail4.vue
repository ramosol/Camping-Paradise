<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail4 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail4 from "../components/activity/detailsActivite/Detail4";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail4,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
