<template>
    
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Usuario</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">cedula</label>
                    <input 
                        id="cedula"
                        v-model="form.cedula"
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="number" 
                        placeholder="cedula" 
                    />
                    <input-error :message="form.errors.cedula"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">nombres</label>
                    <input         
                        id="nombres"
                        v-model="form.nombres"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="nombres" 
                    />
                    <input-error :message="form.errors.nombres"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">apellidos</label>
                    <input         
                        id="apellidos"
                        v-model="form.apellidos"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="apellidos" 
                    />
                    <input-error :message="form.errors.apellidos"/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">celular</label>
                    <input         
                        id="celular"
                        v-model="form.celular"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="celular" 
                    />
                    <input-error :message="form.errors.celular"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">telefono</label>
                    <input         
                        id="telefono"
                        v-model="form.telefono"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="telefono" 
                    />
                    <input-error :message="form.errors.telefono"/>
                </div>

                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">correo</label>
                    <input         
                        id="correo"
                        v-model="form.correo"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="correo" 
                    />
                    <input-error :message="form.errors.correo"/>
                </div>

                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">direccion</label>
                    <input         
                        id="direccion"
                        v-model="form.direccion"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="direccion" 
                    />
                    <input-error :message="form.errors.direccion"/>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">usuario</label>
                    <input         
                        id="usuario"
                        v-model="form.usuario"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="usuario" 
                    />
                    <input-error :message="form.errors.usuario"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">contraseña</label>
                    <input         
                        id="contraseña"
                        v-model="form.contraseña"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="contraseña" 
                    />
                    <input-error :message="form.errors.contraseña"/>
                </div>

                 <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">estado</label>
                    <input         
                        id="estado"
                        v-model="form.estado"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="date" 
                        placeholder="estado" 
                    />
                    <input-error :message="form.errors.estado"/>
                </div>

                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">rol</label>
                    <input         
                        id="rol"
                        v-model="form.rol"                
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
                        type="text" 
                        placeholder="rol" 
                    />
                    <input-error :message="form.errors.rol"/>
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('usuarios.index')"                    
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
            cedula:null,
            nombres:null,
            apellidos:null,
            celular:null,
            telefono:null,
            correo:null,
            direccion:null,
            usuario:null,
            contraseña:null,
            estado:null,
            rol:null

        }); 
    
        function createRecords() {
            form.post(route('usuarios.store'), {
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
           Inertia.post(route('usuario.index'), this.form);
        },
    },
};
</script>