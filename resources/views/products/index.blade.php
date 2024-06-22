@extends('layout')

@section('index')

<!--<div class="alert colores text-center" id="close">
    <button type="button" class="close" data-dismiss="alert">&times;</button> 
   
</div>-->

    <div class="row m-9">
        <div class="col-12 mx-auto"> 
            <div class="card">
                
                <div class="card-header">
                    <h3 class="card-title text-center">BUSQUEDA INFORMACION </h3>
                    <input class="form-control me-2" type="search" placeholder="buscar producto" aria-label="Search">
                    
                    <div class="form-group">
                        <label for="gen"></label>
                        <select requiered name="genero" class="custom-select mb-1 form-control">
                            <option>Seleccione categoria</option>
                            
                            <option selected value=""></option>                                                                    
                            
                        </select>
                        <div id="root"></div>
                       
                    </div>
                    <a href="{{ route('getlist')}}"><button class="btn btn-outline-success" type="submit" name="search">BUSCAR</button></a>
 
                </div>
                <div class="card-body">
                   
                    <table class="table text-center text-uppercase table-bordered ">
                        <thead class="" >
                            <tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Imagen</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($infoarray as $product)
                            <tr>
                                <td>{{ $product['title'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td><img src="{{ $product['image'] }}" width="150px" height="200px"></td>
                                <!-- <td>
                                    <a class="btn btn-primary" href=""><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    &nbsp;
                                    <a class="btn btn-danger delete" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>-->
                            </tr>
                            @endforeach                       
                        </tbody>
                    </table>
                   
                </div>
            </div>        
        </div>
    </div>
   

@endsection