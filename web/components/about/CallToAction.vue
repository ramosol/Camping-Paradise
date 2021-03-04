<template>
  <section
    class="cta-one"
    style="background-image: url(/assets/images/about/photo3.jpg)"
  >
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="cta_one_content">
            <h1>
              Nous vous garantissons un service de qualité<br />100% sécurisé et
              qui répondent à vos attentes
            </h1>
            <p>Venez également découvrir notre boutique en ligne!</p>
            <div class="cta_one__button-block">
              <a
                ><nuxt-link to="/product" class="thm-btn cta_one__btn"
                  >Découvrir</nuxt-link
                ></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CallToActionOne",
};
</script>

<style scoped></style>
