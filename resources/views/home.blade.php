@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <painel title="Dashboard">
                
                Teste de conteúdo...

                <div class="row">
                    <div class="col-md-4">
                        <painel title="Conteúdo 1" color="panel-blue">
                            Teste de conteúdo
                        </painel>
                    </div>

                    <div class="col-md-4">
                        <painel title="Conteúdo 2" color="panel-success">
                            Teste de conteúdo
                        </painel>
                    </div>

                    <div class="col-md-4">
                        <painel title="Conteúdo 3" color="panel-danger">
                            Teste de conteúdo
                        </painel>
                    </div>
                </div>
            </painel>
        </div>
    </div>
</div>

@endsection
