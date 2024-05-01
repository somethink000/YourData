<template>
	<header class="header">
		<p class="logo">YourData</p>

		<div class="nav_icons">
			<p>Icon</p>
		</div>
	
	</header>
</template>

<script lang="ts">
	import { defineComponent } from 'vue';

	export default defineComponent({
		components: {},
		setup() {
			return {};
		},
	});
</script>

<style>
	.header {
		width: 100%;
		padding: 10px;
		margin: 0 auto;
		display: flex;
		align-items: center;
		justify-content: space-between;
		
	}
	.logo{
		font-size: 25px;
	}
</style>