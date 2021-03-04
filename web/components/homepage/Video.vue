<template>
  <section
    class="video-one"
    style="background-image:url(/assets/images/resources/video.jpg);"
  >
    <div class="container text-center">
      <a href="https://youtu.be/yYannWneAJA" class="video-one__btn videoOne"
        ><i class="fa fa-play"></i
      ></a>
      <p>LA CHAiNE YOUTUBE D'AVENTURES SAUVAGES EN FRANCE #CampingParadise</p>
      <h3>
        Notre campeur fidèle "The Other Life" nous donne envie de s'évader et de
        découvrir les coins les plus sauvages de France.
      </h3>
    </div>
  </section>
</template>

<script>
export default {
  name: "VideoOne",
  mounted() {
    new GLightbox({
      selector: ".videoOne",
      touchNavigation: true,
      loop: true,
      autoplayVideos: true,
    });
  },
};
</script>

<style scoped></style>
