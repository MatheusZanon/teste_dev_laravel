<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teste API Laravel 8</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container">
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
    </body>
</html>
