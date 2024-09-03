<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import DarkButton from '@/Components/DarkButton.vue'
import NavLink from '@/Components/NavLink.vue'

import { Head } from '@inertiajs/vue3'

const props = defineProps({
    book: {
        type: Object,
        default: {}
    },
    authors: {
        type: Object,
        default: {}
    }
})
</script>

<template>
    <Head title="Book" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center overflow-hidden mb-4 w-full">
                {{ book.title }}
                <NavLink :href="route('books.index')">
                    <DarkButton>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </DarkButton>
                </NavLink>
            </div>
        </template>
    </AuthenticatedLayout>
</template>