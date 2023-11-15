<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioController extends Controller {
    
    // $tipo = 0        => Geral
    // $tipo = 1        => Agrupado por Modelo
    // $tipo = 2        => Agrupado por Cor
    public function createReport($tipo = 0) {

        $data = array();

        switch($tipo) {

            case 1:
                    $data = $this->getDataModel();
                    $pdf = Pdf::loadView('relatorios.modelo', compact('data'));
                    return $pdf->stream('relatorio-modelos.pdf');
                    break;

            case 2:
                    $data = $this->getDataColor();
                    $pdf = Pdf::loadView('relatorios.cor', compact('data'));
                    return $pdf->stream('relatorio-cores.pdf');
                    break;
            
            default:
                    $data = $this->getDataGeneral();
                    $pdf = Pdf::loadView('relatorios.geral', compact('data'));
                    return $pdf->stream('relatorio-geral.pdf');
                    break;
        }
    }

    private function getDataGeneral() {

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

        return $data;
    }

    private function getDataModel() {

        $veiculos = Veiculo::with(['modelo', 'cor'])->get()->groupBy('modelo_id');

        $data = array();
        foreach($veiculos as $modelo_id => $veic) {
            $modelo = Modelo::find($modelo_id);
            $aux = array();
            $cont = 0;
            foreach($veic as $v) {
                $aux[$cont]['cor'] = $v->cor->nome;
                $aux[$cont]['placa'] = $v->placa;
                $cont++;
            }
            $chave = (Marca::find($modelo->marca_id))->nome . " - " . $modelo->nome;
            $data[$chave] = $aux;
        }
        
        return $data;
    }

    private function getDataColor() {

        $veiculos = Veiculo::with(['modelo', 'cor'])->get()->groupBy('cor_id');

        $data = array();
        foreach($veiculos as $cor_id => $veic) {
            $aux = array();
            $cont = 0;
            foreach($veic as $v) {
                $modelo = 
                $aux[$cont]['marca-modelo'] = (Marca::find($v->modelo->marca_id))->nome . " - " . $v->modelo->nome;
                $aux[$cont]['placa'] = $v->placa;
                $cont++;
            }
            $data[(Cor::find($cor_id))->nome] = $aux;
        }   
        return $data;
    }

}
