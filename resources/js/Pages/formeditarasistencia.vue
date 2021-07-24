<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">EDITAR ASISTENCIA</h2>
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
                            v-model="form.inicio"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="inicio" 
                        />
                        </div>
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">final</label>
                        <input         
                            id="final"
                            v-model="form.final"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="final" 
                        />
                        </div>

                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">totaldia</label>
                        <input         
                            id="totaldia"
                            v-model="form.totaldia"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="totaldia" 
                        />
                        </div>

                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">fecha</label>
                        <input         
                            id="fecha"
                            v-model="form.fecha"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="fecha" 
                        />
                        </div>

                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">empleado</label>
                        <input         
                            id="empleado"
                            v-model="form.empleado"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="empleado" 
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
                            class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                        >
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
  components: {
    AppLayout,
  },
  props: ["asistencia"],
  data() {
    return {
      form: {
        inicio: this.$props.asistencia.inicio,
        final: this.$props.asistencia.final,
        totaldia: this.$props.asistencia.totaldia,
        fecha: this.$props.asistencia.fecha,
        empleado: this.$props.asistencia.empleado,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("asistencia.update", this.$props.asistencia.id),
        this.form
      );
    },
  },
};
</script>