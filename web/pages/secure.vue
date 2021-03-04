<template>
  <div>
    <Navbar />
    <PageHeader title="Profile" />
    <Secure />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Secure from "../components/auth/Secure";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Secure,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Profile",
    };
  },
};
</script>
