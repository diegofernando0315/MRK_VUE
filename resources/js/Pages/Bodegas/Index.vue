<template>
    <app-layout>
         <template #header>
            <h1 class="text-center text-2xl 
            font-bold leading-7 text-gray-300 
            sm:text-3xl sm:truncate py-4 
            bg-gradient-to-l from-indigo-500 
            to-indigo-800 ">Mostrar Bodega</h1>
        </template>

       <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

               <inertia-link
                  :href="route('bodegas.create')"
                  class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                     Registrar Bodega
                 </inertia-link>

        
                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                        <tr class="text-left border-b border-gray-300">
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">estado</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">num_rem</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">tipo</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">cantidad</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">descripcion</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">fecha_ingreso</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">fecha_salida</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">cliente</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                    </tr>
                        </thead>
                      <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
                            <tr v-for="Bode in registros" :key="Bode.id">
                             <td>{{Bode.estado}}</td>
                             <td>{{Bode.num_rem}}</td>
                             <td>{{Bode.tipo}}</td>
                             <td>{{Bode.cantidad}}</td>
                             <td>{{Bode.descripcion}}</td>
                             <td>{{Bode.fecha_ingreso}}</td>
                             <td>{{Bode.fecha_salida}}</td>
                             <td>{{Bode.cliente}}</td>
                            <td class="flex m-2">
                     <inertia-link 
                          :href="route('bodegas.edit',Bode.id)"
                          class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-2 rounded-lg shadow-md"
                          type="button">
                          Editar  
                     </inertia-link>|

                     <inertia-link 
                        :href="route('bodegas.destroy', Bode.id)"
                        class="flex-shrink-0 bg-red-500 text-white text-base font-semibold py-2 px-2 rounded-lg shadow-md"
                        type="button">
                         Eliminar  
                          </inertia-link>
                         </td>
                        </tr>
                      </tbody>  
                    </table>
                </div>
            </div>
        </div>
       

    </app-layout>
</template>

<script>

    import AppLayout from '@/Layouts/AppLayout'
    export default {
        name: 'bodegas',
        props: {
            'registros': { type: Object, default: {} }
        },
         components: {
            AppLayout,
        },
        setup(props){

            return {

            }

        },
    }
</script>