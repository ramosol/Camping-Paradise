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
              <img src="/assets/images/activity/decouverte.jpg" alt="" />
            </div>
            <div class="harvest_innovations">
              <h2>ACTIVITÉ ORIENTATION</h2>
              <p>
                Les objectifs généraux de nos animations nature sont de
                permettre une rencontre forte et directe de l’enfant avec les
                différents éléments de la nature, la création d’un lien affectif
                entre l’enfant et la nature, l’éveil de sa curiosité et le
                développement de sa capacité à se poser des questions et à
                expérimenter, la structuration des connaissances à partir des
                découvertes des enfants et de l’apport de l’animateur.
              </p>

              <p class="harvest_innovations_bottom_text">
                Immersion et découverte sensorielle en forêt (3-12 ans).
              </p>
              <p>
                Descriptif : Au cours d’une balade en forêt, l’animateur propose
                au groupe différentes activités de découvertes sensorielles
                (goûter des plantes comestibles, écouter les bruits de la forêt,
                se maquiller avec de la boue, créer son parfum, composer avec
                les couleurs…) et/ou imaginaires et des activités de coopération
                dans le groupe. Il en profite pour installer une dynamique de
                découverte et de solidarité dans le groupe.
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
  name: "Detail4",
};
</script>

<style scoped></style>
