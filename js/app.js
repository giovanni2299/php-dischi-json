const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            disks:[]
        }
    },
    methods: {
        thakeData(){
            axios.get('./script.php').then((res) =>{
                this.disks = res.data;
            });
        }
    },
    created(){
        this.thakeData()
    }
}).mount('#app')
