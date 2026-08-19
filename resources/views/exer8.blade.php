@extends('layout')
@section('titulo', 'exercicio8')
@section('conteudo')




        <h1>Exercício 8</h1>
        <form method="post" action="/exer8resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite a base/comprimento do retângulo (cm):</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor1" class="form-label">Digite a altura/largura do retângulo (cm):</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        @isset($area)
            <p> Área do retângulo = {{ number_format($area, 2) }} cm² </p>
        @endisset


@endsection