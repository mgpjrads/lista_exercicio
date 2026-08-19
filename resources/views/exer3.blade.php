@extends('layout')
@section('titulo', 'exercicio3')
@section('conteudo')




        <h1>Exercício 3</h1>
        <form method="post" action="/exer3resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite um número (multiplicando):</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Digite um número (multiplicador):  </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        @isset($produto)
            <p> Produto = {{ $produto }} </p>
        @endisset



@endsection