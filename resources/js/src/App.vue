<template>
	
	
	<div class="container">
		<PrimaryHeader />
	<main class="main">
		<router-view />
	</main>
	</div>
</template>

<script lang="ts">
	import { defineComponent } from 'vue';
	import PrimaryHeader from './components/PrimaryHeader.vue';

	export default defineComponent({
		components: {
			PrimaryHeader,
		},
		setup() {
			return {
			};
		},
	});
</script>

<style>
	.container {
		width: 1300px;
		background-color: #D9D9D9;
		margin: 0 auto;
	}
	.main{
		padding: 40px;
		padding-top: 5%;
	}
</style>