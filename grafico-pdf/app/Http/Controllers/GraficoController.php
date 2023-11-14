<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class GraficoController extends Controller {
    
    public function loadDataGraphs() {

        $veiculos = Veiculo::with(['modelo', 'cor'])->get();

        $data = array();
        $cont = 0;
        foreach($veiculos as $vel) {
            $data[$cont]['marca'] = (Marca::find($vel->modelo->marca_id))->nome;
            $data[$cont]['modelo'] = $vel->modelo->nome;
            $data[$cont]['cor'] = $vel->cor->nome;
            $data[$cont]['placa'] = $vel->placa;
            $cont++;
        }
        // return json_encode($data);

        // CALCULA TOTAL / MARCA
        $total_marcas = array();
        $total_marcas[0] = ['Marcas', 'Qtde de Veículos'];
        $cont = 1;
        foreach (array_count_values(array_column($data, 'marca')) as $key => $value) {
            $total_marcas[$cont] = [$key, $value];
            $cont++;
        }
        $total_marcas = json_encode($total_marcas);
        // return $total_marcas;

        // CALCULA TOTAL / MODELO
        $total_modelos = array();
        $total_modelos[0] = ['Modelos', 'Qtde de Veículos'];
        $cont = 1;
        foreach (array_count_values(array_column($data, 'modelo')) as $key => $value) {
            $total_modelos[$cont] = [$key, $value];
            $cont++;
        }
        $total_modelos = json_encode($total_modelos);
        // return $total_modelos;

        // CALCULA TOTAL / COR
        $total_cores = array();
        $total_cores[0] = ['Cores', 'Qtde de Veículos'];
        $cont = 1;
        foreach (array_count_values(array_column($data, 'cor')) as $key => $value) {
            $total_cores[$cont] = [$key, $value];
            $cont++;
        }
        $total_cores = json_encode($total_cores);
        // return $total_cores;

        return view('graficos.index', compact(['data', 'total_marcas', 'total_modelos', 'total_cores']));
    }
}
