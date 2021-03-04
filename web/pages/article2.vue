<template>
  <div>
    <Navbar />
    <PageHeader title="Article" />
    <Article2 />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Article2 from "../components/blog/Article2";
import Footer from "../components/Footer";
export default {
  components: {
    Navbar,
    PageHeader,
    Article2,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Blog",
    };
  },
};
</script>
