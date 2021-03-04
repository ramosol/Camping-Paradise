<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail6 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail6 from "../components/activity/detailsActivite/Detail6";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail6,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
