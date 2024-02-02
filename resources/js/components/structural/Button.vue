<script setup lang="ts">

	import { defineProps, PropType } from 'vue';
	import { TSeverity } from "../../types/TSeverity";

	const props = defineProps({
		label: { type: String as PropType<string>, required: false },
		severity: { type: String as PropType<TSeverity>, required: false },
	});

</script>

<template>
	<button
		:class="`btn bg-${severity}`"
	>{{ label }}</button>
</template>
