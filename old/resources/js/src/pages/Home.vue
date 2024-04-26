<template >
  
	<h1 class="pad">Data Containers:</h1>
    <div>
        <div class="data_container pad" v-for="data_container in containers">
            <h1>{{ data_container.title }}</h1>
            
            <div class="data" v-for="dt in data_container.datas">
            <p>Name:</p>
            <p class="data_title">Deez</p>
            </div>

            <!-- <div class="data">
            <p>Email:</p>
            <p class="data_title">MyEmail@gay.club</p>
            </div>
            --> 
        </div>

        
    </div>

</template>

<script >
	import { defineComponent } from 'vue';
    import axios from 'axios';
    export default defineComponent({
        components: {
        
        },
        data: () => ({
            containers: []
        }),
        mounted() {
            this.loadPosts();
        },
        methods: {
            loadPosts() {
                axios.get('api/data_containers')
                .then(res => {
					console.log(res.data);
                    this.containers = res.data;
                })
            }
        }
	});
</script>


<style>
   .pad{
    padding: 2%;
   }
    .data_container{
        width: 100%;
        margin-top: 2%;
        background-color: white;
    }
    .data{
        margin-top: 3%;
        margin-left: 1%;
    }
    .data_title{
    font-size: 24px;
    }
</style>
