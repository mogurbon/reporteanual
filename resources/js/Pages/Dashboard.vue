<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <Link :href="route('report.create')">Crear Usuario</Link>


                        <table class="table-auto w-full">
                            <thead>
                            <th class="p-3">id</th>
                            <th class="p-3">name</th>
                            <th class="p-3">email</th>
                            <th class="p-3">actions</th>
                            </thead>
                            <tr >
                                <td class=" p-3 border"></td>
                                <td class=" p-3 border"></td>
                                <td class=" p-3 border"></td>
                                <td class=" p-3 border">acciones</td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
    export default {
        props: {
            users: Object,
        },
        name: "Reporte"
    }
</script>


<style scoped>

</style>
