<template>
  <div>
    <GMap
      ref="gMap"
      language="en"
      :cluster="{ options: { styles: clusterStyle } }"
      :center="{ lat: locations[0].lat, lng: locations[0].lng }"
      :options="{ fullscreenControl: false, styles: mapStyle }"
      :zoom="6"
      style="width:95%;margin-left:50px;"
    >
      <GMapMarker
        v-for="location in locations"
        :key="location.id"
        :position="{ lat: location.lat, lng: location.lng }"
        :options="{
          icon: location === currentLocation ? pins.selected : pins.notSelected,
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
  <!-- <div>
      <br />
      <div style="margin-left:50px">
        <h2><strong>Nos campings Sauvages</strong></h2>
      </div>
      <div></div>
    </div> -->
</template>

<script>
export default {
  data() {
    return {
      currentLocation: {},
      // circleOptions: {
      //   ...
      // },
      locations: [
        {
          lat: 46.227638,
          lng: 2.213749,
        },
        {
          lat: 46.227638,
          lng: 2.213749,
        },
        {
          lat: 46.227638,
          lng: 2.213749,
        },
      ],
      pins: {
        selected: "data:image/png;base64,iVBORw0KGgo...",
        notSelected: "data:image/png;base64,iVBORw0KGgo...",
      },
      // mapStyle: [...],
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
};
</script>
