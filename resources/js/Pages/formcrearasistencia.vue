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
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Inicio</label>
                    <input 
                    id="Inicio"
                    v-model="form.Inicio"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Inicio" 
                    />
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Hora_fin</label>
                    <input         
                        id="Hora_fin"
                        v-model="form.Hora_fin"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Hora_fin" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Totaldia</label>
                    <input         
                        id="Totaldia"
                        v-model="form.Totaldia"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Totaldia" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                    <input         
                        id="Fecha"
                        v-model="Fecha"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Fecha" 
                    />
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Empleado</label>
                    <input         
                        id="Empleado"
                        v-model="Empleado"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Empleado" 
                    />
                </div>
                
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <inertia-link
                    :href="route('asistencia.index')"                    
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
import AppLayout from "@/Layouts/AppLayout";
export default {
    components:{
        AppLayout
    },
    props:{
        errors: Object
    },
    data(){
        return{
            form:{
                inicio:null,
                fin:null,
                total_dia:null,
                fecha:null,
                empleado:null,

            }
        }
    },
    methods:{
        submit(){
            this.$inertia.post(route('asistencia.store'), this.form);
        }
    }
}
</script>