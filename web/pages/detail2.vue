<template>
  <div>
    <Navbar />
    <PageHeader title="Les activités" />
    <Detail2 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Detail2 from "../components/activity/detailsActivite/Detail2";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Detail2,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Détail Activité",
    };
  },
};
</script>
