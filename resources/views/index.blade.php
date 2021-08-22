@extends('layout')


@section('content')
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <p class="h1 text-center main-title">Você terá acesso às suas despesas após o login!</p>
                </div>
            </div>

            <div class="row" style="justify-content:center">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="ticketDescription" name="description", rows="5" >
                            <br>
                            <label for="password">Senha:</label>
                            <input type="text" class="form-control" id="ticketDescription" name="description", rows="5" >
                            <br>
                            <button type="submit" class="btn btn-info btn-lg">Logar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection

