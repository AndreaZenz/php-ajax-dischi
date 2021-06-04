new Vue({
    el: "#app",
    data: {
        albumList: [],
    },
    methods: {
        fetchData(){
            axios
            .get("server.php")
            .then(resp => {
                this.albumList = resp.data;
            });

        }
    },
    mounted() {
        this.fetchData();
    }
});