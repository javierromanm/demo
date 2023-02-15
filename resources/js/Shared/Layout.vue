<script>
    import Nav from "./Nav.vue"    
    import {Head} from "@inertiajs/vue3"  
    export default {
        components: { Nav },
        computed: {
            username(){
                return this.$page.props.auth.user.username
            }          
        }
    }
</script>

<template>
    <Head>
        <title>My App</title>
        <meta type="description" content="Info about my app" head-key="description" >
    </Head>
    
    <section class="bg-gray-200 p-6">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="text-3xl">My App</h1>
                <p class="ml-6 text-sm">Welcome {{ username }}</p>
            </div>
            <Nav />          
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />  
        </div>        
    </section>    
</template>