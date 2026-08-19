@extends('layout')
@section('titulo', 'exercicio20')
@section('conteudo')




        <h1>Exercício 20</h1>
        <form method="post" action="/exer20resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe a distância (km): </label>
                <input type="number" id="valor1" name="valor1" class="form-control" step="any" required="">
            </div>
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o tempo (h): </label>
                <input type="number" id="valor2" name="valor2" class="form-control" step="any" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        @isset($velocidade)
            <p>Velocidade média = {{ $velocidade }} km/h</p>
        @endisset

        @isset($erro)
            <p>{{ $erro }}</p>
        @endisset

@endsection