<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail5 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail5 from "../components/activity/detailsActivite/Detail5";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail5,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
