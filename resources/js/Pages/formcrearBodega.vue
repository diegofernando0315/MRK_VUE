<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Bodega</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Estado</label>
                    <input 
                    id="Estado"
                    v-model="Estado"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Estado" 
                    />
                    <input-error :message="errors.Estado"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">num_rem</label>
                    <input         
                        id="num_rem"
                        v-model="num_rem"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="num_rem" 
                    />
                    <input-error :message="errors.num_rem"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">tipo</label>
                    <input         
                        id="tipo"
                        v-model="tipo"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="tipo" 
                    />
                    <input-error :message="errors.tipo"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">cantidad</label>
                    <input         
                        id="cantidad"
                        v-model="cantidad"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="cantidad" 
                    />
                    <input-error :message="errors.cantidad"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">descripcion</label>
                    <input         
                        id="descripcion"
                        v-model="descripcion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="descripcion" 
                    />
                    <input-error :message="errors.descripcion"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha_ingreso</label>
                    <input         
                        id="fecha_ingreso"
                        v-model="fecha_ingreso"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="fecha_ingreso" 
                    />
                    <input-error :message="errors.fecha_ingreso"/>
                </div>

                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha_salida</label>
                    <input         
                        id="fecha_salida"
                        v-model="fecha_salida"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="fecha_salida" 
                    />
                    <input-error :message="errors.fecha_salida"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">cliente</label>
                    <input         
                        id="cliente"
                        v-model="cliente"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="cliente" 
                    />
                    <input-error :message="errors.cliente"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('Bodega.index')"                    
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
            
                estado:null,
                num_rem:null,
                tipo:null,
                cantidad:null,
                descripcion:null,
                fecha_ingreso:null,
                fecha_salida:null,
                cliente:null
                
            
        }
    },
    methods:{
        submit(){
           Inertia.post(route('Bodega.index'),{
               estado:this.estado,
               num_rem:this.num_rem,
               tipo:this.tipo,
               cantidad:this.cantidad,
               descripcion:this.descripcion,
               fecha_ingreso:this.fecha_ingreso,
               echa_salida:this.echa_salida,
               cliente:this.cliente
           });
        },
    },
};
</script>