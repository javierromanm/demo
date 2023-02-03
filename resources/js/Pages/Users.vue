<script>
    import Nav from "../Shared/Nav.vue"
    import { Link } from "@inertiajs/vue3"
    export default {
        components: { Nav, Link },
        props: {time: String}
    }
</script>

<template>
    <Nav />
    <h1>Users</h1>   
    <p style="margin-top: 700px;">The current time is {{ time }}</p> 
    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
</template>

