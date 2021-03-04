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
              <img src="/assets/images/activity/velo.jpg" alt="" />
            </div>
            <div class="harvest_innovations">
              <h2>VTT OFF ROAD TRAIL</h2>
              <p>
                Vivez une courte aventure en VTT dans les vallées cachées et
                préservées qui entourent la région du Briançonnais, au cœur d’un
                territoire d’exception dans les Hautes-Alpes. Un séjour en
                étoile, accessible, qui emprunte les pistes et sentiers roulants
                à travers les villages et hameaux d’alpages des vallées de la
                Clarée, de la Guisane, et des Fonts de Cervières. Le long d'une
                rivière, face aux glaciers des Ecrins ou aux forts Vauban, dans
                une vallée perdue à côté de la frontière italienne, nous roulons
                chaque jour dans des paysages de cartes postales avant de nous
                retrouver dans un hébergement chaleureux et confortable le soir
                venu autour d’une bonne table de produits du coin.
              </p>

              <p class="harvest_innovations_bottom_text">
                Circuit accompagné À partir de 12 ans. Aventure de 3 Jours
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
  name: "Detail3",
};
</script>

<style scoped></style>
