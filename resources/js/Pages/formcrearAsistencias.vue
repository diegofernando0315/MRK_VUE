<template>
    
     <app-layout>
        
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Asistencia</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">inicio</label>
                    <input 
                    id="inicio"
                    v-model="inicio"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="inicio" 
                    />
                    <input-error :message="errors.inicio"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">final</label>
                    <input         
                        id="final"
                        v-model="final"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="final" 
                    />
                    <input-error :message="errors.final"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">total_dia</label>
                    <input         
                        id="total_dia"
                        v-model="total_dia"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="total_dia" 
                    />
                    <input-error :message="errors.total_dia"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha</label>
                    <input         
                        id="fecha"
                        v-model="fecha"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="fecha" 
                    />
                    <input-error :message="errors.fecha"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">empleado</label>
                    <input         
                        id="empleado"
                        v-model="empleado"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="empleado" 
                    />
                    <input-error :message="errors.empleado"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('Asistencia.index')"                    
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                    Cancelar
                    
                </inertia-link> 
                <button 
                    type="submit"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Guardar
                </button>
                </div>
            
                </form>
										
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {Inertia} from '@inertiajs/inertia';
import AppLayout from "@/Layouts/AppLayout";
import InputError from "@/Jetstream/InputError";

export default {
     components:{
        AppLayout,
       InputError
    },
    props:["errors"],

    data(){

        return{
            
                inicio:null,
                final:null,
                total_dia:null,
                fecha:null,
                empleado:null
                
            
        }
    },
    methods:{
        submit(){
           Inertia.post(route('Asistencia.index'),{
               inicio:this.inicio,
               final:this.final,
               total_dia:this.total_dia,
               fecha:this.fecha,
               empleado:this.empleado
           });
        },
    },
};
</script>