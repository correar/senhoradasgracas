@extends('layouts.app')
@section('title', 'Nossa Senhora das Graças - Mesquita - RJ')



@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <h4 class="card-title">Missas</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Horários:</h5>
                            <p class="card-text">Domingos: 7:00, 9:00 e 19:00 horas</p>
                            <p class="card-text">Segundas: 19:00 horas</p>
                            <p class="card-text">Quintas: 19:00 horas</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <h4 class="card-title">Localização</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Paróquia Nossa Senhora das Graças</h5>
                            <p class="card-text">Rua Paraná, Mesquita, Rio de Janeiro</p>
                            <p class="card-text">Regional X, Diocese de Nova Iguaçu</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <h4 class="card-title">Pároco</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Padre Alexandre</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        <h4 class="card-title">Próximos Eventos</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Abertura do Mês da Bíblia:</h5>
                        <p class="card-text">Domingos: 02/09/2018 08:00 horas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection