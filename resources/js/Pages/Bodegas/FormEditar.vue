<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Bodega  # {{ bodega.id}}</h2>
        </template>

 <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Estado</label>
                    <input 
                        id="estado"
                        v-model="form.estado"
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="Estado" 
                    />
                    <input-error :message="form.errors.estado"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Num_rem</label>
                    <input         
                        id="num_rem"
                        v-model="form.num_rem"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="Num_rem" 
                    />
                    <input-error :message="form.errors.num_rem"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                    <input         
                        id="tipo"
                        v-model="form.tipo"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text"
                        placeholder="Tipo" 
                    />
                    <input-error :message="form.errors.tipo"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                    <input         
                        id="cantidad"
                        v-model="form.cantidad"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="number" 
                        placeholder="Cantidad" 
                    />
                    <input-error :message="form.errors.cantidad"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">descripcion</label>
                    <input         
                        id="descripcion"
                        v-model="form.descripcion"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text"
                        placeholder="descripcion" 
                    />
                    <input-error :message="form.errors.descripcion"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha_salida</label>
                    <input         
                        id="fecha_salida"
                        v-model="form.fecha_salida"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="fecha_salida" 
                    />
                    <input-error :message="form.errors.fecha_salida"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha_ingreso</label>
                    <input         
                        id="fecha_ingreso"
                        v-model="form.fecha_ingreso"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="fecha_ingreso" 
                    />
                    <input-error :message="form.errors.fecha_ingreso"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">cliente</label>
                    <input         
                        id="cliente"
                        v-model="form.cliente"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="cliente" 
                    />
                    <input-error :message="form.errors.cliente"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('bodegas.index')"                    
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                    Cancelar
                    
                </inertia-link> 
                <button 
                    @click="updateRecords"
                    type="button"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Editar
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
    name: 'Form_editar',
    components:{
        AppLayout,
        InputError
    },
    props:{
        'bodega': { type: Object, default: {} }
    },

    setup(props){

        const form = useForm({
            estado:props.bodega.estado,
            num_rem:props.bodega.num_rem,
            tipo:props.bodega.tipo,
            cantidad:props.bodega.cantidad,
            descripcion:props.bodega.descripcion,
            fecha_salida:props.bodega.fecha_salida,
            fecha_ingreso:props.bodega.fecha_ingreso,
            cliente:props.bodega.cliente
        }); 
    
        function updateRecords() {
            form.put(route('bodegas.update', props.bodega.id), {
                preserveScroll: true,
                preserveState: true,
                onSuccess: () => {
                    console.log('Editado con exito');
                },
                onError: (e) => {
                    console.log('Error' + e);
                },
            })
        }
        
        return {
            form,
            updateRecords
        }

    },



    methods:{
        submit(){
           Inertia.post(route('bodega.index'), this.form);
        },
    },
};
</script>       