<script setup lang="ts">
	import Card from "../../components/structural/Card.vue";
	import { reactive } from 'vue';
	import {TFish} from "../../types/TFish";
	import Input from "../../components/structural/Input.vue";
	import Button from "../../components/structural/Button.vue";
	import FishService from "../../services/FishService";

	const form = reactive<TFish>({
		name: ''
	});

	async function storeFish(): Promise<void> {
		if(!form.name) return;

		const res = await FishService.store(form.name);
		console.log(res);
	}

</script>

<template>
	<div>
		<Card>
			<template #content>
				<h1>Create form</h1>

				<div>
					<Input
						placeholder="Name*"
						v-model="form.name"
					/>
				</div>

				<Button
					label="Store"
					@click="storeFish()"
				/>

				<router-link to="/">
					<Button
						label="Back"
					/>
				</router-link>
			</template>
		</Card>
	</div>
</template>
