<template>
	<h1>Data Containers:</h1>
    <div>
        <spin v-if="loading"></spin>
        <div v-else>
            <data-container
                v-for="post in posts"
                :title="post.title"
            />
        </div>
    </div>
</template>

<script >
	import { defineComponent } from 'vue';
 	import Spin from "../components/Spin.vue";
    import axios from 'axios';
    import DataContainer from "../components/DataContainer.vue";
    export default defineComponent({
        components: {
            Spin,
            DataContainer
        },
        data: () => ({
            loading: true,
            posts: []
        }),
        mounted() {
            this.loadPosts();
        },
        methods: {
            loadPosts() {
                axios.get('api/data_containers')
                .then(res => {
					console.log(res.data);
                    this.posts = res.data;
                    setTimeout(() => {
                        this.loading = false;
                    }, 500)
                })
            }
        }
	});
</script>


<style>
    
</style>
