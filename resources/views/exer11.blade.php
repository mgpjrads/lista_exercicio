@extends('layout')
@section('titulo', 'exercicio11')
@section('conteudo')




        <h1>Exercício 11</h1>
        <form method="post" action="/exer11resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o raio do círculo (cm):</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

        @isset($perimetro)
            <p> Perímetro do círculo = {{ number_format($perimetro, 2, ',', '.') }} cm </p>
        @endisset


@endsection