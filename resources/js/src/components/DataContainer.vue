<template>
    <div class="post_box">
        <h1>{{title}}</h1>
        <div>
            <data-title 
            :title="title"
            :data="title"
            />
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import axios from 'axios';
import DataTitle from "./Data.vue";
    export default defineComponent({
        components: {
            DataTitle
        },
        setup() {
			return {};
		},
        props: {
             title: {
                 type: String,
                 default: "NULL"
            }
        }
        });
</script>

<style scoped>
.post_box{
    margin-top: 100px;
    border: 1px white;
}
</style>