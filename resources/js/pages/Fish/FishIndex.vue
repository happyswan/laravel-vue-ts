<script setup lang="ts">
	import { ref, onBeforeMount } from 'vue';
	import {TFish} from "../../types/TFish";
	import Card from "../../components/structural/Card.vue";
	import Button from "../../components/structural/Button.vue";
	import FishService from "../../services/FishService";

	const fish = ref<TFish[]>([]);
	const isLoading = ref<boolean>(true);

	async function downloadFish() {
		isLoading.value = false;

		const res = await FishService.list(1, 100);
		fish.value = res?.data?.data?.data ?? [];
	}

	onBeforeMount(() => {
		downloadFish();
	});
</script>

<template>
	<div>
		<div>
			<router-link to="/create">
				<Button
					label="Create"
				/>
			</router-link>
		</div>

		<div v-if="isLoading">
			Loading...
		</div>

		<div v-else-if="fish?.length === 0">
			No fish found!
		</div>

		<br>

		<Card
			v-for="(row, index) in fish"
		>
			<template #content>
				{{ (index + 1) + '. ' + row.name }}
			</template>
		</Card>
	</div>
</template>
