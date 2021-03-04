<template>
  <section class="service_detail">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4">
          <div class="service_details_left">
            <div class="retour_activite">
              <nuxt-link to="/activite"
                ><i class="fas fa-arrow-alt-circle-left"></i>Retour aux
                activités</nuxt-link
              >
            </div>
            <div class="need_help_box">
              <h2>Besoin d'aide?</h2>
              <p>
                Notre service clientèle est à votre disposition pour toutes
                questions éventuelles sur la réservation d'une activité.
              </p>
              <h3><span class="icon-phone-call"></span>+33 066 888 0000</h3>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-8">
          <div class="service_details_right">
            <div class="service_details_One_img">
              <img src="/assets/images/activity/marche.jpg" alt="" />
            </div>
            <div class="harvest_innovations">
              <h2>ACTIVITÉ ORIENTATION</h2>
              <p>
                Nos parcours d'orientation sont accessibles au plus grand nombre
                d'entre vous!
              </p>

              <p class="harvest_innovations_bottom_text">
                En effet , on vous propose une belle ballade de +- 10km ( vous
                pouvez la raccourcir) au coeur de la nature, carte en main, à la
                recherche de diverses images ludiques et de mots cachés
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Detail6",
};
</script>

<style scoped></style>
