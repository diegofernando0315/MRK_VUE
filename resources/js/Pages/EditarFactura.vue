<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Factura</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                    <input 
                    id="cantidad"
                    v-model="form.cantidad"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="cantidad" 
                    />
                    <input-error :message="errors.cantidad"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">descripción</label>
                    <input         
                        id="descripcion"
                        v-model="form.descripcion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="descripción" 
                    />
                    <input-error :message="errors.descripcion"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">precio_unidad</label>
                    <input         
                        id="precio_unidad"
                        v-model="form.precio_unidad"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="precio_unidad" 
                    />
                    <input-error :message="errors.precio_unidad"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Total</label>
                    <input         
                        id="total"
                        v-model="form.total"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Total" 
                    />
                    <input-error :message="errors.total"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                    <input         
                        id="fecha"
                        v-model="form.fecha"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Fecha" 
                    />
                    <input-error :message="errors.fecha"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Usuario</label>
                    <input         
                        id="cliente"
                        v-model="form.cliente"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="cliente" 
                    />
                    <input-error :message="errors.usuario"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('factura.index')"                    
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
    props:["customer","errors"],

    data(){

        return{
            
              form:{
                cantidad:this.customer.cantidad,
                descripcion:this.customer.descripcion,
                precio_unidad:this.customer.precio_unidad,
                total:this.customer.total,
                fecha:this.customer.fecha,
                cliente:this.customer.cliente
              },
                
            
        };
    },
    methods:{
        submit(){
           Inertia.put(route('factura.update',{ 'customer':this.customer} ), this.form);
        },
    },
};
</script>