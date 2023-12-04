<script setup>
    import useProdutos from '../../composables/produtos.js';
    import { onMounted } from "vue";

    const { produtos, getProdutos, destroyProduto } = useProdutos();
    onMounted(()=>getProdutos());

</script>
<template>
<div class="mt-12">
    <div class="flex justify-end m-2 p-2">
        <RouterLink :to="{name: 'ProdutoCreate'}" class="px-4 py-2 bg-slate-100 border border-gray-400 rounded-sm1 hover:bg-green-800 hover:text-white">Add Produtos</RouterLink>
    </div>
<div class="relative overflow-x-auto">
    <table class="w-full text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-neutral-800 font-light uppercase bg-green-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-3 pb-2 pt-2">
                    Produto ID
                </th>
                <th scope="col" class="px-3 py-5">
                    Descrição
                </th>
                <th scope="col" class="px-3 py-5">
                    Marca
                </th>
                <th scope="col" class="px-3 py-5">
                    Modelo
                </th>
                 <th scope="col" class="px-3 py-5">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="produto in produtos" :key="produto.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-green-200">
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ produto.id }}
                </th>
                <td class="px-3 py-4">
                   {{ produto.descricao }}
                </td>
                <td class="px-3 py-4">
                    {{ produto.marca + ' ' + produto.modelo }}
                </td>
                <td class="px-3 py-4">
                    {{ produto.unidade +', '+ produto.forncedor  + ' ' + produto.codigo_secundario }}
                </td>
                <td class="px-3 py-4">  
                    <RouterLink :to="{ name: 'ProdutoEdit', params:{ id: produto.id }}" class="px-2 pt-2 pb-2.5 pr-6 pl-6 bg-yellow-600 hover:text-white rounded-md hover:bg-yellow-700 text-white font-semibold">Edit</RouterLink>
                    <button @click="destroyProduto(produto.id, produtos.fullname)" class="px-2 pt-2 pb-2 pr-6 pl-6 bg-red-600 hover:text-white rounded-md hover:bg-red-700 text-white font-semibold">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</div>
</template>