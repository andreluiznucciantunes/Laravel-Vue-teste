<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'marca' => $this->marca,  
            'modelo' => $this->modelo,
            'unidade' => $this->unidade,
            'fornecedor' => $this->fornecedor,
            'codigo_secundario' => $this->codigoSecundario,
        ];
    }
}
