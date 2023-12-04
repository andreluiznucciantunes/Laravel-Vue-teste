<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Resources\V1\ProdutoCollection;
use App\Http\Resources\V1\ProdutoResource;
use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function index(Produtos $produto)
    {
        return ProdutoResource::collection(Produtos::all());
    }

    public function store(StoreProdutoRequest $request)
    {
        Produtos::create($request->validated());
        return response()->json("Produto Criado");
    }

    public function update(StoreProdutoRequest $request, Produtos $produto)
    {
        $produto->update($request->validated());
        return response()->json("Update Realizado");
    }

    public function show(Produtos $produto)
    {
        return new ProdutoResource($produto);
    }

    public function destroy(Produtos $produto)
    {
        $produto->delete();
        return response()->json("Produto deletado");
    }
}
