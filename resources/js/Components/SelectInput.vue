<template>
    <div class="w-full px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <label class="block text-sm">
            <div
                class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400"
            >
                <select
                    class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-500 dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                    @input="$emit('update:modelValue', $event.target.value)"
                    :placeholder="text"
                    :required="required"
                    :value="modelValue"
                >
                    <option value="" selected>{{ text }}</option>
                    <option
                        v-for="option in options"
                        :value="option.id"
                        :key="option.id"
                    >
                        {{ option.country }}
                    </option>
                </select>
                <div
                    class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
                >
                    <slot />
                </div>
            </div>
        </label>
    </div>
</template>

<script setup>
defineProps(['modelValue', 'text', 'required', 'options'])

defineEmits(['update:modelValue'])
</script>
