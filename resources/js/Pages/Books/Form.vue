<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import DangerButton from '@/Components/DangerButton.vue'
import InputGroup from '@/Components/InputGroup.vue'
import InputError from '@/Components/InputError.vue'
import NavLink from '@/Components/NavLink.vue'

import { Head, useForm } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
    authors: {
        type: Object,
        default: {},
    },
    book: {
        type: Object,
        default: {},
    },
    authorsOfBook: {
        type: Object,
        default: {},
    },
})

const form = useForm({
    id: '',
    isbn: '',
    description: '',
    title: '',
    publisher: '',
    pages: '',
    image: '',
    release_date: '',
    authors: [],
})

const title_form = ref(props.book === null ? 'Create book' : 'Edit Book')
const req = ref('required')
const srcImg = ref('../../storage/img/example.jpg')

const classMsj = ref('hidden')
const msj = ref('')
</script>

<template>
    <Head title="Book" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center overflow-hidden mb-4 w-full">
                {{ title_form }}
                <NavLink :href="route('books.index')">
                    <DarkButton>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"
                            />
                        </svg>
                    </DarkButton>
                </NavLink>
            </div>
        </template>
        <div class="grid gap-6 bg-white mb-8 md:grid-cols-2 border rounded-lg">
            <div class="min-w-0 p-4 rounded-lg shadow-xs">
                <form class="mt-6 mb-6 space-y-6 max-w-xl">
                    <InputGroup
                        :text="isbn"
                        :required="req"
                        v-model="form.isbn"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                    </InputGroup>
                    <InputError :message="form.errors.isbn" />
                </form>
            </div>
            <div class="min-w-0 p-4 rounded-lg shadow-xs">
                <img :src="srcImg" :alt="book.title" width="200px" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
