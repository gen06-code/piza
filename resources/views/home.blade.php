@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <a href="" class="list-group-item list-group-item-action">Category1</a>
                            <a href="" class="list-group-item list-group-item-action">Category2</a>
                            <a href="" class="list-group-item list-group-item-action">Category3</a>
                            <a href="" class="list-group-item list-group-item-action">Category4</a>
                            <a href="" class="list-group-item list-group-item-action">Category5</a>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>

                    <div class="card-body">
                        <div class="row">
                            @forelse ($pizzas as $pizza)
                               
                                <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width:100%;"/>
                            @empty
                            <p>no pizza to show</p>
                                
                            @endforelse
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        
        a.list-group-item{
            font-size:18px;
        }
        a.list-group-item:hover{
            color: #FFF;
            background-color: red;
        }
        .card-header{
            background-color: #F00;
            color: #FFF;
            font-size:20px;
        }
    </style>
@endsection
