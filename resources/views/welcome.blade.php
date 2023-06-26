
@extends('layout')

@section('index')



<div class="jumbotron text-center" style="margin-bottom:0">
  <h1 class="display-3">INGRESO AL CATALOGO</h1>
  <a href="{{ route('list')}}" class="btn btn-success">IR</a>
  <p>
    <blockquote>
        Debes desarrollar una aplicación web para administrar un catálogo de productos. La aplicación debe permitir a los usuarios ver la lista de productos, buscar productos por nombre y ver los detalles de un producto específico. Los datos de los productos se obtendrán a través de una API libre 
        y se mostrarán utilizando el framework Bootstrap.
    </blockquote>
  </p>
</div>
@endsection