@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                        @if (Auth::check())
                            <form action="" method="post">@csrf
                                <div class="form-group">
                                    <p>Name:{{ auth()->user()->name }}</p>
                                    <p>Email:{{ auth()->user()->email }}</p>
                                    <p>Phone number:<input type="number" class="form-control" name="phone"></p>
                                    <p>Small pizza order:<input type="number" class="form-control" name="small_pizza"></p>
                                    <p>Medium pizza order:<input type="number" class="form-control" name="medium_pizza">
                                    </p>
                                    <p>Large pizza order:<input type="number" class="form-control" name="large_pizza"></p>
                                    <p>
                                        <button class="btn btn-danger" type="submit">Make order</button>
                                    </p>
                                </div>
                            </form>
                        @else
                            <p><a href="/login">Please Login to make order</a></p>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>

                    <div class="card-body">
                        <div class="row">

                            <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail" style="width:100%;" />
                            <p>{{ $pizza->name }}</p>
                            <p>{{ $pizza->description }}</p>
                            <p>Small Pizza Price:${{ $pizza->small_pizza_price }}</p>
                            <p>Medium Pizza Price:${{ $pizza->medium_pizza_price }}</p>
                            <p>Large Pizza Price:${{ $pizza->large_pizza_price }}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <style>
        a.list-group-item {
            font-size: 18px;
        }

        a.list-group-item:hover {
            color: #FFF;
            background-color: red;
        }

        .card-header {
            background-color: #F00;
            color: #FFF;
            font-size: 20px;
        }
    </style>
@endsection
