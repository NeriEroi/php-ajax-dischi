// Vue.config.devtools = true;

const app = new Vue ({
    el: "#root",
    data() {
        return {
            disks: [],
        }
    },
    created() {
        axios
            .get('http://localhost/php-ajax-dischi/server/server.php')
            .then((response) => {    
               console.log(response); 
                this.disks = response.data;  
            })
    }
});