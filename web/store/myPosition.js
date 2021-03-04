export const state = () => ({
    currentPosition: "{ici position}"
  })
  
  export const mutations = {
    getCurrentPosition(state) {
        navigator.geolocation.getCurrentPosition((position) => {
          console.log(position)
          // this.state.currentPosition = position.coords
          })
    }
  }
  