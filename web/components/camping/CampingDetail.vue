<template>
  <div class="col-md-3 product-men">
    <h4>
      <nuxt-link to="/product-detail">{{ name }}</nuxt-link>
    </h4>
    <p>{{ adresse }}</p>
    <p>{{ etoile }}</p>
    <p>{{ coord }}</p>
  </div>
</template>

<script>
export default {
  name: "CampingDetail",
  props: {
    coord: Array,
    name: String,
    etoile: String,
    adresse: String,
  },
};
</script>
