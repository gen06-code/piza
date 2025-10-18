@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">order</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">User</th>
                                    <th scope="col">Phone/Email</th>
                                    <th scope="col">Date/Time</th>
                                    <th scope="col">Pizza</th>
                                    <th scope="col">Small pizza</th>
                                    <th scope="col">Medium pizza</th>
                                    <th scope="col">Large pizza</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Reject</th>
                                    <th scope="col">Completed</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($orders as $order)
                              
                                   
                                
                                <tr>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{$order->user->email}}</td>
                                    <td>{{$order->date}} / {{$order->time}} </td>
                                    <td>{{$order->pizza->name}} pizza id: {{$order->pizza->id}}</td>
                                    <td>{{$order->small_pizza}}</td>
                                    <td>{{$order->medium_pizza}}</td>
                                    <td>{{$order->large_pizza}}</td>
                                    <td>{{$order->body}}</td>
                                    <td>{{$order->status}}</td>
                                    <td><button class="btn btn-primary">Accept</button></td>
                                    <td><button class="btn btn-primary">Reject</button></td>
                                    <td><button class="btn btn-primary">Completed</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
