<template>
	
	
	<div class="container">
		<PrimaryHeader />
	<main class="main">
		<router-view />
	</main>
	<PrimaryFooter />
	</div>
</template>

<script lang="ts">
	import { defineComponent } from 'vue';
	import PrimaryHeader from './components/PrimaryHeader.vue';
	import PrimaryFooter from './components/PrimaryFooter.vue';

	export default defineComponent({
		components: {
			PrimaryHeader,
			PrimaryFooter,
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
		padding: 0;
	}
	.main{
		padding-top: 5%;
	}
</style>