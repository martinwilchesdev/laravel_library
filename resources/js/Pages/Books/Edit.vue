<script setup>
import Form from './Form.vue'

const props = defineProps({
    authors: {
        type: Object,
        default: {}
    },
    book: {
        type: Object,
        default: {}
    },
    authorsOfBook: {
        type: Object,
        default: {}
    }
})
</script>

<template>
    <Form :authors="authors" :book="book" :authorsOfBook="authorsOfBook"></Form>
</template>
