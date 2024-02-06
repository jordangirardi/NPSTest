<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function teste()
    {
        $veiculo = [
            'marca' => 'Exemplo Motors',
            'modelo' => 'Carro Elegante',
            'ano' => 2022,
            'motor' => 'V6',
            'cor' => 'Preto',
        ];

        return response()->json($veiculo);
    }
}
