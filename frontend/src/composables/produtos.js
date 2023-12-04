import { ref } from "vue";
import axios from 'axios'
import { useRouter } from 'vue-router';

axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1/";

export default function useProdutos(){
    const produtos = ref([]);
    const produto = ref([]);
    const errors = ref({});
    const router = useRouter();

    const getProdutos = async () => {
        const response = await axios.get("produto");
        produtos.value = response.data.data;
    }

    const getProduto = async (id) => {
        const response = await axios.get("produto/"+ id);
        produto.value = response.data.data;
    }
    
    const storeProduto = async (data) =>{
        try{
            await axios.post("produto", data);
            await router.push({name: "ProdutoIndex"});
        }catch(error){
            if(error.response.status === 422){
                errors.value = error.response.data.errors;
            }
        }
    }

    const updateProduto = async (id) =>{
        try{
            //console.log(id);
            await axios.put("produto/"+ id, produto.value);
            await router.push({name: "ProdutoIndex"});
        }catch(error){
            if(error.response.status === 422){
                errors.value = error.response.data.errors;
            }
        }
    }

    const destroyProduto = async (id) =>{
        if(!window.confirm(`Você tem certeza em deletar o Produto?`)){
            return;
        }
        try {
            await axios.delete("produto/"+ id);
            await getProdutos(); 
        } catch(error){
            if(error.response.status === 422){
                error.value = error.response.data.data;
            }
        }  
    }

    return{
        produto,
        produtos,
        getProduto,
        getProdutos,
        storeProduto,
        updateProduto,
        destroyProduto,
        errors,
    };
}