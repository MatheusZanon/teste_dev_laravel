@extends('layout')


@section('content')
<div class="row mt-3" style="justify-content: center">
    <div class="col-6 mb-3">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center mb-2">
                        <h4 class="card-title">Lista de Despesas</h4>
                        <a href="/users" class="btn btn-warning btn-sm float-right">Adicionar Nova Despesa</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped color-table inverse-table">
                        <thead>
                            <tr>
                            <th>Data de Registro</th>
                            <th>Valor</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
