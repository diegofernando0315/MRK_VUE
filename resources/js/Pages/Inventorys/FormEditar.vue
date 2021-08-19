<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Inventario # {{ Inventory.id}}</h2>
        </template>

 <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">cantidad</label>
                    <input 
                    id="cantidad"
                    v-model="form.cantidad"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                    type="number" 
                    placeholder="cantidad" 
                    />
                    <input-error :message="form.errors.cantidad"/>
                </div>
                

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">tipo</label>
                    <input         
                        id="tipo"
                        v-model="form.tipo"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="tipo" 
                    />
                    <input-error :message="form.errors.tipo"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">estado</label>
                    <input         
                        id="estado"
                        v-model="form.estado"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="estado" 
                    />
                    <input-error :message="form.errors.estado"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha</label>
                    <input         
                        id="fecha"
                        v-model="form.fecha"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="fecha" 
                    />
                    <input-error :message="form.errors.fecha"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('Inventorys.index')"                    
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
        'Inventory': { type: Object, default: {} }
    },

    setup(props){

        const form = useForm({
            
            cantidad:props.Inventory.cantidad,
            tipo:props.Inventory.tipo,
            estado:props.Inventory.estado,
            fecha:props.Inventory.fecha

        }); 
    
        function updateRecords() {
            form.put(route('Inventorys.update', props.inven.id), {
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
           Inertia.post(route('Inventorys.index'), this.form);
        },
    },
};
</script>       