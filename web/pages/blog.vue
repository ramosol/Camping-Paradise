<template>
  <div>
    <Navbar />
    <PageHeader title="Blog Paradise" />
    <BlogOne />
    <Footer />
  </div>
</template>

<script>
import Navbar from "../components/Navbar";
import PageHeader from "../components/PageHeader";
import Footer from "../components/Footer";
import BlogOne from "../components/blog/BlogOne";
export default {
  components: {
    Navbar,
    PageHeader,
    BlogOne,
    Footer,
  },
  head() {
    return {
      title: "Camping Paradise  | Blog",
    };
  },
};
</script>
