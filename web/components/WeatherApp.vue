<template>
    <div>
        <h1>Meteo par ville</h1>
    </div>
</template>

<script>
export default {
    data(){
        return {
            weather: {}
        }
    },
    created() {
        this.getWeatherInfo()
    },
    methods: {
        getWeatherInfo(){
              this.$axios.$get('https://api.openweathermap.org/data/2.5/onecall?lat=33.441792&lon=-94.037689&exclude=hourly,daily,alerts&appid=5d0f7c0efc581e61ee306c08e641e24a')
              .then(res => this.weather)
              console.log(this.weather)
        }
    }
}
</script>