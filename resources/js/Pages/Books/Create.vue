<script setup>
import Form from './Form.vue'

const props = defineProps({
    authors: {
        type: Object,
        default: {}
    }
})
</script>

<template>
    <Form :authors="authors"></Form>
</template>
