@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                </div>
            </div>
            @if (count($errors)>0)
            <div class="card mt-5">
                <div class="card-body">
                    
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    
                </div>
            </div>
            @endif
        </div>


        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Pizza</div>





                <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name of pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{$pizza->name}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description of pizza</label>
                            <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                        </div>

                        <div class="form-inline">
                            <label>Pizza price($)</label>
                            <input type="numeric" name="small_pizza_price" class="form-control" placeholder="small pizza price" value="{{$pizza->small_pizza_price}}">
                            <input type="numeric" name="medium_pizza_price" class="form-control" placeholder="medium pizza price" value="{{$pizza->medium_pizza_price}}">
                            <input type="numeric" name="large_pizza_price" class="form-control" placeholder="large pizza price" value="{{$pizza->large_pizza_price}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Category</label>
                            <select class="form-control" name="category" >
                                <option value="vegetarian">Vegetarian Pizza</option>
                                <option value="non-vegetarian">Non vegetarian Pizza</option>
                                <option value="traditional">Traditional Pizza</option>
                                <option></option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{Storage::url($pizza->image)}}" width="80">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>



            <!--             

            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name of pizza</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name of pizza">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description of pizza</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="row g-2 align-items-center mb-3">
                        <div class="col-12 col-md-auto">
                            <label class="form-label mb-0">Pizza price ($)</label>
                        </div>
                        <div class="col-12 col-md">
                            <input type="number" class="form-control" placeholder="small pizza price">
                        </div>
                        <div class="col-12 col-md">
                            <input type="number" class="form-control" placeholder="medium pizza price">
                        </div>
                        <div class="col-12 col-md">
                            <input type="number" class="form-control" placeholder="large pizza price">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">Select category</option>
                            <option value="vegetarian">Vegetarian Pizza</option>
                            <option value="non-vegetarian">Non vegetarian Pizza</option>
                            <option value="traditional">Traditional Pizza</option>
                        </select>
                    </div>
                </div>
            </div>

            -->

        </div>
    </div>
    @endsection