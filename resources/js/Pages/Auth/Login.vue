<script>
export default {
    layout: null
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3'
    let form = useForm({
        email: '',
        password: ''
    })
    let submit = () => {
        form.post('/login')
    }
</script>

<template>
    <Head>
        <title>Login</title>
    </Head>   
    <main class="grid place-items-center min-h-screen">
        <section class="max-w-md mx-auto bg-white p-8 rounded-xl border">
            <h1 class="text-4xl">Login</h1> 
            <form @submit.prevent="submit" class="mt-8">            
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
                        Email
                    </label>
                    <input v-model="form.email" class="border p-2 w-full rounded"
                            type="email"
                            name="email"
                            id="email"
                            required
                    >
                    <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xm"></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
                        Password
                    </label>
                    <input v-model="form.password" class="border p-2 w-full rounded"
                            type="password"
                            name="password"
                            id="password"
                    >
                    <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xm"></div>
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">
                        Log In
                    </button>
                </div>
            </form>
        </section> 

    </main>
</template>

