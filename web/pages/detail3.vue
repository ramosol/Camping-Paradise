<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail3 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail3 from "../components/activity/detailsActivite/Detail3";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail3,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
