
<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, router } from '@inertiajs/vue3';

    import PrimaryButton from '@/Components/PrimaryButton.vue';
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


                        <form @submit.prevent="submit" :action="'/report/report_to_pdf/'+report.id" ref="form">


                            <div class="mb-4 lg:mb-4 md:mb-4">
                                <div class="border-b pb-4">
                                    <p class="text-gray-600 font-semibold">Título:</p>
                                    <p class="text-gray-800">{{report.title}}</p>
                                </div>
                                <div class="border-b pb-4 mt-4">
                                    <p class="text-gray-600 font-semibold">Contenido:</p>
                                    <p class="text-gray-800">{{report.content}}</p>
                                </div>
                                <div class="border-b pb-4 mt-4">
                                    <p class="text-gray-600 font-semibold">Fecha de inicio:</p>
                                    <p class="text-gray-800">{{report.init_date}}</p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-gray-600 font-semibold">Fecha de fin:</p>
                                    <p class="text-gray-800">{{report.end_date}}</p>
                                </div>
                            </div>



                            <PrimaryButton type="submit" class="mt-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Generar Pdf
                            </PrimaryButton>





                        </form>



                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script>
    export default {
        props: {
           
            report: Object,
        },
        name: "Create",
        data(){
            return{
                form:{
                    title:'',
                    content:'',
                    init_date:'',
                    end_date:''

                }
            }
        },
        methods:{
            submit(){

                this.$refs.form.submit()
            }
        },
        components:{

            PrimaryButton
        }
    }
</script>


<style scoped>

</style>

