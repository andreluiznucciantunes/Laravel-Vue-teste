<script setup>
    import { reactive } from 'vue';
    import useProdutos from '../../composables/produtos.js';

    const{ storeProduto, errors } = useProdutos();

    const form = reactive({
        descricao: "",
        marca: "",
        modelo: "",
        unidade: "",
        forncedor: "",
        codigo_secundario: ""
    });

</script>
<template>
    <div class="bg-white mt-10 w-1/2 mr-auto ml-auto flex justify-center h-full rounded">
        <form class="w-full max-w-lg pt-10 pb-10" @submit.prevent="storeProduto(form)">
        <h1 class="flex font-bold text-lg pb-10">Registro Produto</h1>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Descrição
                </label>
                <input v-if="errors.descricao" v-model="form.descricao" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Descrição Produto">
                <input v-else v-model="form.descricao" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Descrição Produto">
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
                    <input v-if="errors.marca" v-model="form.marca" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Marca Produto">
                    <input v-else v-model="form.marca" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Marca Produto">
                    <div v-if="errors.marca">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.marca[0] }}</span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Modelo
                    </label>
                    <input v-if="errors.modelo" v-model="form.modelo" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Modelo Produto">
                    <input v-else v-model="form.modelo" class="appearance-none block w-full bg-gray-100 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Modelo Produto">
                    <div v-if="errors.modelo">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.modelo[0] }}</span>
                    </div>
                </div>
            </div>
           
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    Unidade
                </label>
                <input v-if="errors.unidade" v-model="form.unidade" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Unidade Medida">
                <input v-else v-model="form.unidade" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Unidade Medida">
                    <div v-if="errors.unidade">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.unidade[0] }}</span>
                    </div>
                </div>
                 <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                   Fornecedor
                </label>
                <input v-if="errors.fornecedor" v-model="form.fornecedor" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Fornecedor">
                <input v-else v-model="form.fornecedor" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Fornecedor">
                    <div v-if="errors.city">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.fornecedor[0] }}</span>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-codigo_secundario">
                    Código Secundário
                </label>
                <input v-if="errors.codigo_secundario" v-model="form.codigo_secundario" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-red-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-codigo_secundario" type="text" placeholder="00000">
                <input v-else v-model="form.codigo_secundario" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-codigo_secundario" type="text" placeholder="00000">
                    <div v-if="errors.codigo_secundario">
                        <span class="text-red-600 font-semibold text-xs">{{ errors.codigo_secundario[0] }}</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full mt-10">
                    <button type="submit" class="w-full bg-green-700 pt-3 pb-3 text-white hover:bg-green-900 font-semibold rounded-md">Add Produtos</button>
                </div>
            </div>
        </form>
    </div>
</template>