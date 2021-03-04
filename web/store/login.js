import axios from "axios";

export const state = () => ({
  status: null,
  token: null,
  user: {},
});

export const getters = {
  token: (state) => state.token,
  user: (state) => state.user,
  isLoggedIn: state => state.token !== null,
  usLoggedOut: state => state.token ===null,
};

export const mutations = {
  auth_success(state, token) {
    state.token = token;
    state.status = "Connected";
  },
  setUserData(state, userData) {
    state.user = userData;
  },
};

export const actions = {
  async login({ commit, dispatch }, data) {
    try {
      const token = await axios({
        url: "http://localhost:8000/api/user/login",
        data: data,
        method: "POST",
      });
      axios.defaults.headers.common["Authorization"] = "Bearer " + token.data;
      localStorage.setItem("token", token.data);
      commit("auth_success", token.data);
      dispatch("userDetails");
      this.$router.replace({ path: "/secure" });
    } catch (err) {
      console.error(err);
    }
  },

  async logout(){
    try{
      const api = 'http://localhost:8000/api/user/logout';
      const token = localStorage.getItem('token');
      await axios.get(api , { headers: {"Authorization" : `Bearer ${token}`} })
      localStorage.removeItem('token')
      this.$router.push({ name: 'index' })
    }catch(err){
      console.log(err)
    }
  },
};
