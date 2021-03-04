import axios from "axios";

export const state = () => ({
  token: null,
  data: {},
});

export const getters = {
  token: (state) => state.token,
  user: (state) => state.data,
};

export const mutations = {
  auth_success(state, token) {
    state.token = token;
  },
  setUserData(state, userData) {
    state.data = userData;
  },
  logout(state) {
    state.status = "";
    state.token = null;
  },
};
export const actions = {
  async userupdate({}, data) {
    return new Promise((resolve, reject) => {
      axios({ url: "http://localhost:8000/api/user/edit", data: data, method: "POST" })
        .then((resp) => {
          resolve(resp);
          alert('User modified');
          this.$router.replace({ path: "/secure" });
        })
        .catch((err) => {
          reject(err);
        });
    });
  },
};
