<script setup>
    import { Link } from "@inertiajs/vue3"
    import Pagination from "../Shared/Pagination.vue"
    import { ref, watch } from "vue"
    import { router } from '@inertiajs/vue3'
    let props = defineProps({
            users: Object,
            filters: Object
    })
    let search = ref(props.filters.search)
    watch(search, value => {
        router.get('/users', {search: value}, {
            preserveState: true,
            replace: true
        })
    })
</script>

<template>
    <Head>
        <title>Users</title>
    </Head>
    <div class="flex justify-between mb-6">
        <h1 class="text-4xl">Users</h1>   
        <input v-model="search" type="text" placeholder="Search..." class="border px-2 rounded-lg">
    </div>

    
    <div v-for="user in users.data" :key="user.id" class="lg:flex lg:items-center lg:justify-between mt-4 shadow-md p-4 mb-1">
        <div class="min-w-0 flex-1">
            <div class="text-lg leading-7 text-gray-900 sm:truncate sm:text-lg sm:tracking-tight">{{ user.name }}</div>
        </div>
        <div class="mt-5 flex lg:mt-0 lg:ml-4">
            <span class="hidden sm:block"> 
            <Link :href="'/users/' + user.id + '/edit'" type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                </svg>
                    Edit
            </Link>
            </span>
        </div>
    </div>
    <Pagination :links="users.links" class="mt-6" />   
</template>

