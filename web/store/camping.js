import axios from "axios";

export const namespaced = true;

export const state = () => ({
  listCamping: [],
});

export const getters = {
  listCamping: (state) => {
    // console.log("state");
    // console.log(state.listCamping);
    return state.listCamping;
  },
};

export const actions = {
  async getCamping({ commit }, filtre = {}) {
    if (Array.isArray(filtre)) {
      filtre = filtre[0];
    }
    var $url =
      "https://public.opendatasoft.com/api/records/1.0/search/?dataset=hebergements-classes&refine.typologie_etablissement=CAMPING";
      for (const [key, value] of Object.entries(filtre)) {
        if (key == "rows") {
          $url = $url.concat("&rows=");
          $url = $url.concat(value);
        } else if (value != "" || value != 0) {
          $url = $url.concat("&refine.");
          $url = $url.concat(key);
          $url = $url.concat("=");
          $url = $url.concat(value);
          if (key == "classement") {
            if (value > 1) {
              $url = $url.concat("+étoiles");
            } else {
              $url = $url.concat("+étoile");
            }
          }
        }
      }
    $url = encodeURI($url);
    // console.log(encodeURI($url));
    // console.log($url);
    await axios({
      url: $url,
      method: "GET",
      headers: { "Content-type": "application/json" },
    })
      .then((resp) => {
        this.DataCamping = resp.data.records;

        // console.log(this.DataCamping);
        // alert("list camping pass succefuly");
      })
      .catch((err) => console.log(err));

    for (var $i = 0; $i < this.DataCamping.length; $i++) {
      this.DataCamping[$i] = this.DataCamping[$i].fields;
    }
    // console.log(this.DataCamping);
    commit("setDataCamping", this.DataCamping);
  },
};

export const mutations = {
  setDataCamping(state, data) {
    state.listCamping = data;
    // Vue.set(state, "listCamping", data)
  },
};
