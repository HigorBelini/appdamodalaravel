@extends('adminlte::page')

@section('title', 'APP da Moda - Área do administrador')

@section('content_header')
  <h1 style="text-align: center;">Relatórios do sistema</h1>
@stop

@section('content')
   
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Moda</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
               <canvas class="bar-chart" width="200" height="200"></canvas>
            </div>
            <!-- /.box-body -->
        </div>


        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fitness</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
               <canvas class="line-chart" width="200" height="200"></canvas>
            </div>
            <!-- /.box-body -->
        </div>


        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Brinquedos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
               <canvas class="pie-chart" width="200" height="200"></canvas>
            </div>
            <!-- /.box-body -->
        </div>

@stop

@section('js')
     <script src="{{ asset('js/app.js')}}"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
            <script>
                var ctx = document.getElementsByClassName("bar-chart");

                var chartGraph = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Out","Nov","Dez"],
                        datasets: [{
                            label: "Ataio",
                            data: [9,13,12],
                            borderWidth: 2,
                            borderColor: 'rgba(77,166,253,0.85)',
                            backgroundColor: 'rgb(77,166,253)',
                        },
                        {
                            label: "Luma",
                            data: [15,15,13],
                            borderWidth: 2,
                            borderColor: 'rgba(100,200,253,0.85)',
                            backgroundColor: 'rgb(100,200,253)',
                        },
                        {
                            label: "Talento",
                            data: [12,15,10],
                            borderWidth: 2,
                            borderColor: 'rgba(0,200,0,0.85)',
                            backgroundColor: 'rgb(0,200,0)',
                        }
                        ]
                    }
                    
                });
            </script>
            <script>
                var ctx = document.getElementsByClassName("line-chart");

                var chartGraph = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Out","Nov","Dez"],
                        datasets: [{
                            label: "Ataio",
                            data: [9,13,12],
                            borderWidth: 2,
                            borderColor: 'rgba(77,166,253,0.85)',
                            backgroundColor: 'transparent',
                        },
                        {
                            label: "Luma",
                            data: [15,15,13],
                            borderWidth: 2,
                            borderColor: 'rgba(100,200,253,0.85)',
                            backgroundColor: 'transparent',
                        },
                        {
                            label: "Talento",
                            data: [12,15,10],
                            borderWidth: 2,
                            borderColor: 'rgba(0,200,0,0.85)',
                            backgroundColor: 'transparent',
                        }
                        ]
                    }
                    
                });
            </script>
            <script>
                var ctx = document.getElementsByClassName("pie-chart");

                var chartGraph = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: {
                        labels: ["Out","Nov","Dez"],
                        datasets: [{
                            label: "Ataio",
                            data: [9,13,12],
                            borderWidth: 2,
                            borderColor: 'rgba(77,166,253,0.85)',
                            backgroundColor: 'rgb(77,166,253)',
                        },
                        {
                            label: "Luma",
                            data: [15,15,13],
                            borderWidth: 2,
                            borderColor: 'rgba(100,200,253,0.85)',
                            backgroundColor: 'rgb(100,200,253)',
                        },
                        {
                            label: "Talento",
                            data: [12,15,10],
                            borderWidth: 2,
                            borderColor: 'rgba(0,200,0,0.85)',
                            backgroundColor: 'rgb(0,200,0)',
                        }
                        ]
                    }
                    
                });
            </script>
@stop

