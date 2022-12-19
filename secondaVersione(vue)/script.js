const app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    inputSearch: "",
    urlApi: location.href + "arrApi.php",
  },
  created() {
    axios.get(this.urlApi).then((axiosResponse) => {
      this.dischi = axiosResponse.data;
    });
  },
  // methods: {
  //   invia() {
  //     axios.get(`./arrApi.php?genre=${this.inputSearch}`).then(({ data }) => {
  //       this.dischi = data;
  //     });
  //   },
  // },
});