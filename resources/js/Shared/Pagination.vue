<script setup>
    import { Link } from "@inertiajs/vue3"
    defineProps({
            links: Array
    })
</script>

<template>    
    <div>
        <template v-for="link in links">
            <Link
                v-if="link.url" 
                :href="link.url" 
                v-html="link.label"
                class="mx-1"
                :class="{'text-grey-500' : !link.url, 'font-bold': link.active}"
            />
            <span 
                v-else 
                v-html="link.label"
                class="mx-1"
                :class="link.url ? '' : 'text-grey-500'"
            />
        </template>        
    </div>
</template>