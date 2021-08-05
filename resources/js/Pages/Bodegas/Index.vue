<template>
    <app-layout>
         <template #header>
            <h1 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-l from-indigo-500 to-indigo-800 ">Mostrar Bodega</h1>
        </template>
           

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    
    export default {
        name: 'Bodegas',
        components: {
            AppLayout,
        },
        props:{
            bodegas: { type: Object, default: {} }
        },
        setup(props){

            console.log(props.bodegas);

        }
    }
</script>