<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Asistencia</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Inicio</label>
                    <input 
                    id="inicio"
                    v-model="form.inicio"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Inicio" 
                    />
                    <input-error :message="form.errors.inicio"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Final</label>
                    <input         
                        id="final"
                        v-model="form.final"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Final" 
                    />
                    <input-error :message="form.errors.final"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Total_Dia</label>
                    <input         
                        id="total_dia"
                        v-model="form.total_dia"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Total_Dia" 
                    />
                    <input-error :message="form.errors.total_dia"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                    <input         
                        id="fecha"
                        v-model="form.fecha"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Fecha" 
                    />
                    <input-error :message="form.errors.fecha"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Usuario</label>
                    <input         
                        id="usuario "
                        v-model="form.usuario"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Usuario" 
                    />
                    <input-error :message="form.errors.usuario"/>
                </div>
                
        </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('Attendances.index')"                    
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                    Cancelar
                    
                </inertia-link> 
                <button 
                    @click="createRecords"
                    type="button"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Guardar
                </button>
                </div>
            										
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {Inertia} from '@inertiajs/inertia';
import AppLayout from "@/Layouts/AppLayout";
import InputError from "@/Jetstream/InputError";
import { useForm } from '@inertiajs/inertia-vue3';

export default {
    name: 'Form_crear',
    components:{
        AppLayout,
        InputError
    },
    props:{},

    setup(props){

        const form = useForm({
            inicio:null,
            final:null,
            total_dia:null,
            fecha:null,
            usuario:null
           
        }); 
    
        function createRecords() {
            form.post(route('Attendances.store'), {
                preserveScroll: true,
                preserveState: true,
                onSuccess: () => {
                    console.log('Guardado con exito');
                },
                onError: (e) => {
                    console.log('Error' + e);
                },
            })
        }
        
        return {
            form,
            createRecords
        }

    },



    methods:{
        submit(){
           Inertia.post(route('Attendance.index'), this.form);
        },
    },
};
</script>