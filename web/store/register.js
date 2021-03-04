import axios from "axios";

export const state = () => ({
  message: "",
});

export const getters = {
  message: (state) => state.message,
};

export const mutations = {
  set_message(state, message) {
    state.message = message.message;
    console.log(state.message);
  },
};

export const actions = {
  async register({ commit }, data) {
    try {
      await axios({
        url: "http://localhost:8000/api/user/register",
        data: data,
        method: "POST",
      }).then((resp) => {
        // console.log(resp.data.success);
        commit("set_message", resp.data.success);
      });
      // axios.defaults.headers.common["Authorization"] = "Bearer " + token.data;
      // this.$router.replace({ path: "/" });
      // console.log(token.data)
      // return this.message;
    } catch (err) {
      console.error(err);
    }
  },
};
