@extends('layout')
@section('titulo', 'exercicio19')
@section('conteudo')




        <h1>Exercício 19</h1>
        <form method="post" action="/exer19resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe quantos dias deseja converter: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" step="any" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        @isset($horas)
            <p>Horas = {{ $horas }}</p>
        @endisset

        @isset($minutos)
            <p>Minutos = {{ $minutos }}</p>
        @endisset

        @isset($segundos)
            <p>Segundos = {{ $segundos }}</p>
        @endisset


@endsection