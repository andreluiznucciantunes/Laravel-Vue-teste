<script setup>
    import useProdutos from '../../composables/produtos.js';
    import { onMounted } from "vue";

    const{ produto, getProduto, updateProduto, errors } = useProdutos();

    const props = defineProps({
        id:{
            required: true,
            type: String,
        }
    });
   
    onMounted(()=>getProduto(props.id));

</script>
<template>
    <div class="bg-white mt-10 w-1/2 mr-auto ml-auto flex justify-center h-full rounded">
        <form class="w-full max-w-lg pt-10 pb-10" @submit.prevent="updateProduto($route.params.id)">
        <h1 class="flex font-bold text-lg pb-10">Update Produtos</h1>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Descrição Produto
                </label>
                <input v-if="errors.descricao" v-model="produto.descricao" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Descrição Produto">
                <input v-else v-model="produto.descricao" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Descrição Produto">
                <div v-if="errors.descricao">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.descricao[0] }}</span>
                    </div>
                <p v-else class="text-gray-600 text-xs italic">Não use iniciais</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                 <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Marca
                    </label>
                    <input v-if="errors.firstname" v-model="produto.firstname" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Marca Produto">
                    <input v-else v-model="produto.firstname" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Marca Produto">
                    <div v-if="errors.firstname">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.firstname[0] }}</span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Modelo
                    </label>
                    <input v-if="errors.lastname" v-model="produto.lastname" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Modelo Produto">
                    <input v-else v-model="produto.lastname" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Modelo Produto">
                    <div v-if="errors.lastname">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.lastname[0] }}</span>
                    </div>
                </div>
            </div>
      
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fornecedor">
                    Unidade
                </label>
                <input v-if="errors.unidade" v-model="produto.unidade" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fornecedor" type="text" placeholder="Buendia">
                <input v-else v-model="produto.unidade" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fornecedor" type="text" placeholder="Buendia">
                    <div v-if="errors.unidade">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.unidade[0] }}</span>
                    </div>
                </div>
                 <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fornecedor">
                 Fornecedor
                </label>
                <input v-if="errors.fornecedor" v-model="produto.fornecedor" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fornecedor" type="text" placeholder="Forncedor">
                <input v-else v-model="produto.fornecedor" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fornecedor" type="text" placeholder="Fornecedor">
                    <div v-if="errors.fornecedor">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.fornecedor[0] }}</span>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-codigo_secundario">
                  Código Secundário
                </label>
                <input v-if="errors.codigo_secundario" v-model="produto.codigo_secundario" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-codigo_secundario" type="text" placeholder="00000">
                <input v-else v-model="produto.codigo_secundario" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-codigo_secundario" type="text" placeholder="00000">
                    <div v-if="errors.codigo_secundario">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.codigo_secundario[0] }}</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full mt-10">
                    <button type="submit" class="w-full bg-green-700 pt-3 pb-3 text-white hover:bg-green-900 font-semibold rounded-md">Update Produtos</button>
                </div>
            </div>
        </form>
    </div>
</template>