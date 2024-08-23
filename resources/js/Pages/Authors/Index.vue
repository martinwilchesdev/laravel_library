<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    authors: {
        type: Object,
        default: {}
    },
    countries: {
        type: Object,
        default: {}
    }
})
</script>

<template>
    <Head title="Authors"></Head>

    <AuthenticatedLayout>
        <template #header>
            Authors
        </template>

        <div class="w-full overflow-hidden rounded-lg border shadow-md">
            <div class="w-full overflow-x-auto bg-white">
                <table class="w-full whitespace-none-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Last Name</th>
                                <th class="px-4 py-3">Country</th>
                                <th class="px-4 py-3">Detail</th>
                                <th class="px-4 py-3">Edit</th>
                                <th class="px-4 py-3">Delete</th>
                            </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        <tr v-for="(author, index) in authors" :key="id">
                            <td class="px-4 py-3 text-sm">
                                {{ index + 1 }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ author.name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ author.last_name }}
                            </td>
                            <!-- <td class="px-4 py-3 text-sm">
                                {{ a.country }}
                            </td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>