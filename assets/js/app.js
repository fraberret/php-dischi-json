const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
            base_api_url: 'api.php',

        }
    },
    mounted() {
        axios.get(this.base_api_url)
            .then((result) => {
                console.log(result);
                this.dischi = result.data
            })
    }
}).mount('#app')