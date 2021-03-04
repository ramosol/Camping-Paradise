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
              <img src="/assets/images/activity/tyrolienne.jpg" alt="" />
            </div>
            <div class="harvest_innovations">
              <h2>DÉSCENTE EN TYROLIENNE</h2>
              <p>
                Vous avez toujours rêvé de voler ? L’espace de quelques dizaines
                de secondes, c’est possible grâce à notre parcours de
                tyroliennes géantes du Natura Parc. Suspendu par votre baudrier,
                vous glisserez le long d’un câble tendu entre deux arbres à plus
                de 25m du sol. La double traversée du lac vous garantit une
                sensation de liberté spectaculaire dans une nature
                époustouflante. Frissons au rendez-vous!
              </p>

              <p class="harvest_innovations_bottom_text">
                La tyrolienne, une activité accessible à tous. Dès 11 ans, vous
                pourrez profiter de cette expérience accessible à tous et qui
                vous garantit un souvenir mémorable. Vous avez le vertige ou
                peur du vide ? Laissez-vous aller et sautez le pas ! Vous ne le
                regretterez pas. Nombreux sont ceux qui ont fait leur baptême du
                feu en tyrolienne au Natura Parc et tous sont repartis avec une
                seule envie, recommencer ! Les enfants qui n’ont pas 11ans mais
                qui mesurent toutefois plus d’1m60 les bras levés seront
                autorisés à sauter également. Ces règles sont évidemment des
                normes de sécurité que nous nous devons de respecter.
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
  name: "Detail1",
};
</script>

<style scoped></style>
