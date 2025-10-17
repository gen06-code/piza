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
                                    <th scope="col">status</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Reject</th>
                                    <th scope="col">Completed</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><button class="btn btn-primary">Accept</button></td>
                                    <td><button class="btn btn-primary">Reject</button></td>
                                    <td><button class="btn btn-primary">Completed</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
