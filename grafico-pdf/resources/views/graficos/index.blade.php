@extends('templates.main')

@section('conteudo')

<div class="row">
    <div class="col overflow-auto" id="tabela" style="width: 640px; height: 480px;">
        <table class="table align-middle caption-top table-striped">
            <caption>Veiculos Cadastrados</caption>
            <thead>
            <tr>
                <th scope="col" class="d-none d-md-table-cell">MARCA/MODELO</th>
                <th scope="col">COR</th>
                <th scope="col">PLACA</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['marca'] }} - {{ $item['modelo'] }}</td>
                        <td class="d-none d-md-table-cell">{{ $item['cor'] }}</td>
                        <td class="d-none d-md-table-cell">{{ $item['placa'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col text-center" id="barra" style="width: 640px; height: 480px;"></div>
</div>
<div class="row">
    <div class="col text-center" id="pizza" style="width: 640px; height: 480px;"></div>
    <div class="col text-center" id="coluna" style="width: 640px; height: 480px;"></div>
</div>

@endsection

@section('script')

<script type="text/javascript">

    let marcas = <?php echo $total_marcas ?>;
    let modelos = <?php echo $total_modelos ?>;
    let cores = <?php echo $total_cores ?>;

    google.charts.load('current', {'packages':['corechart']})
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // MARCAS
        // Dados do Gráfico    
        let data = google.visualization.arrayToDataTable(marcas);

        // Opções de Configuração
        options = {
            title: 'MARCAS DE VEÍCULOS',
            colors: ['#198754'],
            legend: 'none',
            hAxis: {
                title: 'Quantidade',
                titleTextStyle: {
                    fontSize: 12,
                    bold: true,
                }
            },
            vAxis: {
            },
        };

        // DESENHA GRÁFICO DE BARRAS - MARCAS
        chart = new google.visualization.BarChart(document.getElementById('barra'));
        chart.draw(data, options);

        // ============================================= //
        // ============================================= //
        // ============================================= //

        // MODELOS
        // Dados do Gráfico    
        data = google.visualization.arrayToDataTable(modelos);

        // Opções de Configuração
        options = {
            title: 'MODELOS DE VEÍCULOS',
            is3D: true
        };

        // DESENHA GRÁFICO DE PIZZA - DOR DE CABEÇA
        chart = new google.visualization.PieChart(document.getElementById('pizza'));
        chart.draw(data, options);

        // ============================================= //
        // ============================================= //
        // ============================================= //

        // CORES
        // Dados do Gráfico   
        data = google.visualization.arrayToDataTable(cores);

        // Opções de Configuração
        options = {
            title: 'Quantidade',
            colors: ['#198754'],
            legend: 'none',
            hAxis: {
                
            },
            vAxis: {
                title: 'Quantidade',
                titleTextStyle: {
                    fontSize: 12,
                    bold: true,
                }
            }
        };

        // DESENHA GRÁFICO DE COLUNAS - DOR NO SEIO
        chart = new google.visualization.ColumnChart(document.getElementById('coluna'));
        chart.draw(data, options);
    }

</script>

@endsection