<template>
            <p>{{ title }}:{{ data }}</p>
    
</template>

<script>
import { defineComponent } from 'vue';
    export default defineComponent({
        components: {},
        setup() {
			return {};
		},
        props: {
            title: {
                 type: String,
                 default: "NULL"
            },
            data: {
                 type: String,
                 default: "NULL"
            }
        }
        });
</script>

<style scoped>

</style>