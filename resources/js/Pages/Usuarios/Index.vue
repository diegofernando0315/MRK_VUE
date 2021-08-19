<template>
    <app-layout>
         <template #header>
            <h1 class="text-center text-2xl 
            font-bold leading-7 text-gray-300 
            sm:text-3xl sm:truncate py-4 
            bg-gradient-to-l from-indigo-500
             to-indigo-800 ">Mostrar usuario</h1>
        </template>
           
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                 <inertia-link
                  :href="route('usuarios.create')"
                  class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                     Registrar usuario
                 </inertia-link>

        
                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                        <tr class="text-left border-b border-gray-300">
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Cedula</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Nombres</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Apellidos</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Celular</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Telefono</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Correo</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Direccion</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Usuario</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Contraseña</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Estado</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">rol</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                    </tr>
                        </thead>
                        <tbody class="bg-gray-700 border-b border-gray-600 text-gray-200">
                            <tr v-for="usuar in registros" :key="usuar.id">
                                <td>{{usuar.cedula}}</td>
                                <td>{{usuar.nombres}}</td>
                                <td>{{usuar.apelidos}}</td>
                                <td>{{usuar.celular}}</td>
                                <td>{{usuar.telefono}}</td>
                                <td>{{usuar.correo}}</td>
                                <td>{{usuar.direccion}}</td>
                                <td>{{usuar.usuario}}</td>
                                <td>{{usuar.contraseña}}</td>
                                <td>{{usuar.estado}}</td>
                                <td>{{usuar.rol}}</td>
                                <td>{{usuar.updated_at}}</td>
                                <td class="flex m-2">
                                    <inertia-link 
                                        :href="route('usuarios.edit',usuar.id)"
                                        class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-2 rounded-lg shadow-md"
                                        type="button">
                                        Editar  
                                    </inertia-link>|

                                    <inertia-link 
                                        :href="route('usuarios.destroy',usuar.id )"
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
        name: 'usuarios',
        props:{
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