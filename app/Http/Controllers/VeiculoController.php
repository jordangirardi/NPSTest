<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function getAvailableCars()
    {
        $json_data = '{
            "veiculos_a_venda": [
              {
                "nome": "Toyota Corolla",
                "ano": 2020,
                "preco": 50000,
                "cor": "Azul"
              },
              {
                "nome": "Honda Civic",
                "ano": 2018,
                "preco": 35000,
                "cor": "Prata"
              },
              {
                "nome": "Ford Mustang",
                "ano": 2022,
                "preco": 60000,
                "cor": "Vermelho"
              },
              {
                "nome": "Chevrolet Camaro",
                "ano": 2019,
                "preco": 40000,
                "cor": "Preto"
              },
              {
                "nome": "Volkswagen Golf",
                "ano": 2021,
                "preco": 55000,
                "cor": "Branco"
              },
              {
                "nome": "BMW 3 Series",
                "ano": 2017,
                "preco": 30000,
                "cor": "Verde"
              },
              {
                "nome": "Mercedes-Benz E-Class",
                "ano": 2023,
                "preco": 70000,
                "cor": "Amarelo"
              },
              {
                "nome": "Audi A4",
                "ano": 2016,
                "preco": 28000,
                "cor": "Cinza"
              },
              {
                "nome": "Hyundai Elantra",
                "ano": 2020,
                "preco": 52000,
                "cor": "Laranja"
              },
              {
                "nome": "Nissan Altima",
                "ano": 2019,
                "preco": 45000,
                "cor": "Roxo"
              }
            ]
          }';

        return response()->json($json_data);
    }
}
