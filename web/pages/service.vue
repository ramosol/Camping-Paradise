<template>
  <div>

    <br/>
    <div>
      <GMap
        ref="gMap"
        language="en"
        :cluster="{ options: { styles: clusterStyle } }"
        :center="{ lat: locations[0].lat, lng: locations[0].lng }"
        :options="{ fullscreenControl: false }"
        :zoom="6"
        style="width:85%; margin-left:150px;"
      >
        <GMapMarker
          v-for="location in locations"
          :key="location.id"
          :position="{ lat: location.lat, lng: location.lng }"
          :options="{
            icon:
              location === currentLocation ? pins.selected : pins.notSelected,
          }"
          @click="currentLocation = location"
        >
          <GMapInfoWindow :options="{ maxWidth: 200 }">
            <code> lat: {{ location.lat }}, lng: {{ location.lng }} </code>
          </GMapInfoWindow>
        </GMapMarker>
        <GMapCircle />
      </GMap>
    </div>    

  </div>
</template>

<script>



export default {

  data() {

    return {
      title: "Camping Paradise  | Campings",
    };
  },
};
</script>
