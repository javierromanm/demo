<script>
    import Layout from "../Shared/Layout.vue"
    import { Link } from "@inertiajs/vue3"    
    export default {
        layout: Layout,
        props: {
            time: String
        }
    }
</script>

<template>
    <h1 class="text-4xl">Users</h1>   
    <p style="margin-top: 700px;">The current time is {{ time }}</p> 
    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
</template>

