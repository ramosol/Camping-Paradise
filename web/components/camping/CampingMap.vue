<template>

  <div>
    <br />
    <div v-if="displayWeather">
      <div style="text-align: center;">
        <h2><strong>Voici la méteo de la ville choisis pour aujourd'hui :</strong></h2>
      <h1>{{ weather.name }}</h1>
      <img :src="icon" alt="" />

      <p>
        <span>{{ temp() }} &#176;C</span>
        <span>{{ descriptionWeather() }}</span>
      </p>
      </div>
    </div>
    <br />
    <div>
      <GMap
        v-if="loading === false"
        ref="gMap"
        language="en"
        :cluster="{ options: { styles: clusterStyle } }"
        :center="{ lat: currentLocation.lat, lng: currentLocation.lng }"
        :options="{ fullscreenControl: false }"
        :zoom="6"
        style="width:95%; margin-left:40px;"
      >
        <GMapMarker
          v-for="location in campLocations"
          :key="location.id"
          :position="{
            lat: location.coordonnees[0],
            lng: location.coordonnees[1],
          }"
          :options="{
            icon:
              location === currentLocation ? pins.selected : pins.notSelected,
          }"
          @click="currentLocation = location"
        >
          <GMapInfoWindow :options="{ maxWidth: 300 }">

            <code
              >{{ location.nom_commercial }}<br />
              {{ location.classement }} sur 5<br />{{ location.adresse }},
              {{ location.code_postal }} {{ location.commune }}<br />
              {{ location.nom_dep }}<br />Telephone : {{ location.telephone
              }}<br /><a :href="location.site_internet" target="_blank">{{
                location.site_internet
              }}</a
              ><br />
            </code>
            <button @click="getMeteo(location.coordonnees)">
              Afficher la meteo
            </button>

          </GMapInfoWindow>
        </GMapMarker>
        <GMapCircle />
      </GMap>
    </div>
    

  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  data() {
    return {
      displayWeather: false,
      weather: {},
      currentLocation: {
        lat: 46.227638,
        lng: 2.213749,
      },
      locations: [
        {
          lat: 46.227638,
          lng: 2.213749,
        },
      ],
      campLocations: [],
      loading: false,
      pins: {
        selected:
          "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHUSURBVHgB5VU7SwNBEJ7LmZBgMC+UdKKx0MZCG2srwcbCB2glpFDQ3to/IegvSAIWPrBJIySlipUKKqYLaHJ3iWIelzu/DTk8j71H7MQPltmZnflmZ3b3juivQ3BzCIfDI4FAYBvTRV3XR7tBglCCOIP9oFwuv/46QSwWWwfZIaaDNi7vGOlqtZqhfhPE4/EViAy5V6ljE8uVSuXYc4JkMjncarUeMR0ib5Db7fZEvV6vWBd8PG+Q73LIFYyj3lAsa1G/37/D4+JWgPbcQkybd9jpdGYVRXlmSiQSSYmieMWmhgMuwI0kSTPkpQJgzKJnDfJuKYryBJH7sVNBSPGI7BKoFl3n+GguMY4JHiz6GtoybiisRczmEtPFAM+Ifl6i5DmTKYqeX+Nssj19lUz9N2J4XNxDTiQSkwi4oz6ADU3hLdxb7dwW9RyL5B0FHrltAgZUsEce4eRrmwB3ugCRJ3fk4VvsOwEDHtcWxKeDy4emaWmHdRKdFpvNphQKhdhFmOet42D3sftTJw7X/wHgw/U8h1ywkJ/gYJeI/wi/g8kdmqqqG5Alk62Er+emG7nXBFSr1aroNSNknwOVzZnNS6xIHtFoNF6CweAbpheyLOfo3+ALfrSuzJ1F8EsAAAAASUVORK5CYII=",
        notSelected:
          "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHUSURBVHgB5VU7SwNBEJ7LmZBgMC+UdKKx0MZCG2srwcbCB2glpFDQ3to/IegvSAIWPrBJIySlipUKKqYLaHJ3iWIelzu/DTk8j71H7MQPltmZnflmZ3b3juivQ3BzCIfDI4FAYBvTRV3XR7tBglCCOIP9oFwuv/46QSwWWwfZIaaDNi7vGOlqtZqhfhPE4/EViAy5V6ljE8uVSuXYc4JkMjncarUeMR0ib5Db7fZEvV6vWBd8PG+Q73LIFYyj3lAsa1G/37/D4+JWgPbcQkybd9jpdGYVRXlmSiQSSYmieMWmhgMuwI0kSTPkpQJgzKJnDfJuKYryBJH7sVNBSPGI7BKoFl3n+GguMY4JHiz6GtoybiisRczmEtPFAM+Ifl6i5DmTKYqeX+Nssj19lUz9N2J4XNxDTiQSkwi4oz6ADU3hLdxb7dwW9RyL5B0FHrltAgZUsEce4eRrmwB3ugCRJ3fk4VvsOwEDHtcWxKeDy4emaWmHdRKdFpvNphQKhdhFmOet42D3sftTJw7X/wHgw/U8h1ywkJ/gYJeI/wi/g8kdmqqqG5Alk62Er+emG7nXBFSr1aroNSNknwOVzZnNS6xIHtFoNF6CweAbpheyLOfo3+ALfrSuzJ1F8EsAAAAASUVORK5CYII=",
      },
      clusterStyle: [
        {
          url:
            "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m1.png",
          width: 56,
          height: 56,
          textColor: "#fff",
        },
      ],
    };
  },
  computed: {
    ...mapGetters("camping", ["listCamping"]),

    icon() {
      return this.weather.weather
        ? `https://openweathermap.org/img/w/${this.weather.weather[0].icon}.png`
        : "";
    },
  },
  async mounted() {

    // this.currentLocation = await this.getPosition();
    // this.currentLocation = this.currentLocation.coords;
    // console.log(this.currentLocation)
  },
  async created() {
    this.loading = true;
    var $arg = { rows: 500 };
    await this.getCamping($arg);
    this.campLocations = this.$store.state.camping.listCamping;

    this.campLocations = this.campLocations.filter(
      (el) => el.coordonnees !== undefined
    );
    // console.log(this.campLocations)
    this.loading = false;

  },
  methods: {
    ...mapActions("camping", ["getCamping"]),

    getPosition() {
      return new Promise((res, rej) => {
        navigator.geolocation.getCurrentPosition(res, rej);

      });
    },
    async getMeteo(coords) {
      this.displayWeather = true;
      await this.$axios
        .$get(
          `https://api.openweathermap.org/data/2.5/weather?lat=${coords[0]}&lon=${coords[1]}&appid=fcbf7f948ed26aadd55688fea20e756d`
        )
        .then((res) => (this.weather = res));
    },
    temp() {
      return this.weather.main
        ? Math.round(this.weather.main.temp - 273)
        : "?? C";
    },
    descriptionWeather() {
      return this.weather.weather
        ? this.weather.weather[0].description
        : "Pas de description";
    },
  },

};
</script>
