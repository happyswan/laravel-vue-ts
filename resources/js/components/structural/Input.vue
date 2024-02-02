<script setup lang="ts">

	import { defineProps, PropType } from 'vue';

	const props = defineProps({
		placeholder: { type: String as PropType<string>, required: true },
		modelValue: { type: String as PropType<string>, required: true }
	});

	const emit = defineEmits(['update:modelValue'])

</script>

<template>
	<input
		class="input"
		:placeholder="props.placeholder"
		:value="props.modelValue"
		@input="emit('update:modelValue', $event.target.value)"
	/>
</template>
