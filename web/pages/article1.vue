<template>
  <div>
    <Navbar />
    <PageHeader title="Article" />
    <Article1 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Article1 from "../components/blog/Article1";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Article1,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Blog",
    };
  },
};
</script>
