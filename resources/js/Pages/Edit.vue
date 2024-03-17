
<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, router } from '@inertiajs/vue3';
    import InputError from '@/Components/InputError.vue';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Reporte</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                        <form @submit.prevent="submit">
                            <div class="mt-4">
                                <InputLabel value="Titulo"/>

                                <input-error :message="errors.title"></input-error>
                                <TextInput
                                        id="name"
                                        type="text"
                                        class="mt-1 block "
                                        v-model="form.title"

                                        autofocus
                                        autocomplete="name"
                                />
                            </div>
                            <div class="mt-4">

                                <InputLabel value="Contenido"/>

                                <input-error :message="errors.content"></input-error>


                                <textarea v-model="form.content"
                                          class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                          placeholder=" ">

                                </textarea>

                            </div>

                            <div class="mt-4">
                                <InputLabel value="Fecha Inicio"/>

                                <input-error :message="errors.init_date"></input-error>
                                <TextInput
                                        id="name"
                                        type="date"
                                        class="mt-1 block "
                                        v-model="form.init_date"

                                        autofocus
                                        autocomplete="name"
                                />
                            </div>
                            <div class="mt-4">
                                <InputLabel value="Fecha Fin"/>

                                <input-error :message="errors.end_date"></input-error>
                                <TextInput
                                        id="name"
                                        type="date"
                                        class="mt-1 block "
                                        v-model="form.end_date"

                                        autofocus
                                        autocomplete="name"
                                />
                            </div>



                            <div class="mt-4">

                                <InputLabel :value="form.status == 1 ? 'Estado del Reporte : En Edicion' : ' Estado del Reporte : Enviado'"/>
                                <br>

                                <input type="radio" id="one" value="1" v-model="form.status" />
                                <label for="one" class="mt-2" >En Edicion</label>
                                <br>
                                <input type="radio" id="two" value="2" v-model="form.status" />
                                <label for="two">Enviar a Revision</label>
                            </div>


                            <PrimaryButton class="mt-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Enviar
                            </PrimaryButton>


                            <!--<button type="submit">Enviar</button>-->
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

            errors: Object,
            report: Object
        },
        name: "Create",
        data(){
            return{
                form:{
                    title:this.report.title,
                    content: this.report.content,
                    init_date:this.report.init_date,
                    end_date:this.report.end_date,
                    status:this.report.status

                }
            }
        },
        methods:{
            submit(){
                console.log(this.form);
                router.put(route('report.update', {'report':this.report}),this.form)
            }
        },
        components:{
            InputError,
            TextInput,
            InputLabel,
            PrimaryButton
        }
    }
</script>


<style scoped>

</style>

