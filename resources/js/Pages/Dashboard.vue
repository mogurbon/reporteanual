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
                    <div class="p-6 sm:px-20 bg-white ">

                        <Link :href="route('report.create')" class="mb-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Capturar Reporte</Link>


                        <table class="table-auto border-collapse border border-slate-400">
                            <thead>
                            <th class="p-3 bg-blue-100 ">id</th>
                            <th class="p-3 bg-blue-100">titulo</th>
                            <th class="p-3 bg-blue-100">contenido</th>
                            <th class="p-3 bg-blue-100">status</th>
                            <th class="p-3 bg-blue-100">acciones</th>
                            </thead>
                            <tr v-for="r in reports" :key="r.id">
                                <td class=" p-3 border border-slate-300">{{r.id}}</td>
                                <td class=" p-3 border border-slate-300">{{r.titulo}}</td>
                                <td class=" p-3 border border-slate-300">{{r.content.substring(0,50) }}</td>
                                <td class=" p-3 border border-slate-300">{{r.status == 1 ? 'Activo' : 'Enviado' }}</td>
                                <td class=" p-3 border border-slate-300">
                                    <Link :href="route('report.create')">
                                        Editar
                                    </Link>
                                    <Link :href="route('report.create')">
                                       Visualizar
                                    </Link>
                                </td>

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
            reports: Object,
        },
        name: "Reporte"
    }
</script>


<style scoped>

</style>
