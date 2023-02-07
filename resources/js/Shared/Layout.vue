<script>
    import Nav from "./Nav.vue"    
    export default {
        components: { Nav }
    }
</script>

<template>
    <section class="bg-gray-200 p-6">
        <header class="flex justify-between">
            <h1 class="text-3xl">My App</h1>
            <Nav />          
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />  
        </div>        
    </section>    
</template>