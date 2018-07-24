@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card bg-1">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container mt-3">
<div class="card row justify-content-center m-2 bg-1">
    <h2 class="card-header ml-1 mr-1" style="border-bottom: solid 1px black">My Decks</h2>
    <div class="card-body mw-50 pt-0">
        <div style="border-bottom: solid 1px black" class="pt-2 row pb-1">
            
            <div class="col">
                <h4 class="mb-0 d-inline">Spanish</h4>
                <a href="#" class="fas fa-pencil-alt text-primary mr-4" style="font-size: 16px;"></a> 
                <p class="d-inline" style="font-size: .9rem">Cards: 12</p>
                <p class="font-italic ml-2 mb-0">No Description</p>
            </div>

            <div class="col-sm-auto p-1 d-flex justify-content-center">
                <div class="align-self-center">
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-warning">Remove</button>
                <button class="btn btn-sm btn-danger">Delete</button>
                <button class="btn btn-sm btn-success">View</button>
                </div>
            </div>
            
            <!-- <a href="#" class="btn btn-sm btn-primary">Go somewhere</a> -->
        </div>

        <div style="border-bottom: solid 1px black" class="pt-2 row pb-1">
            
            <div class="col">
                <h4 class="mb-0 d-inline">
                    Spanish      
                </h4>
                <a class="fas fa-pencil-alt text-primary" style="font-size: 16px;"></a> 
                <p class="font-italic ml-2 mb-0">
                    No Description
                </p>
            </div>

            <div class="col-sm-auto p-1 d-flex justify-content-center">
                <div class="align-self-center">
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-warning">Remove</button>
                <button class="btn btn-sm btn-danger">Delete</button>
                <button class="btn btn-sm btn-success">View</button>
                </div>
            </div>
            
            <!-- <a href="#" class="btn btn-sm btn-primary">Go somewhere</a> -->
        </div>

        <div style="border-bottom: solid 1px black" class="pt-2 row pb-1">
            
            <div class="col">
                <h4 class="mb-0 d-inline">
                    Spanish      
                </h4>
                <a class="fas fa-pencil-alt text-primary" style="font-size: 16px;"></a> 
                <p class="font-italic ml-2 mb-0">
                    No Description
                </p>
            </div>

            <div class="col-sm-auto p-1 d-flex justify-content-center">
                <div class="align-self-center">
                <button class="btn btn-sm btn-primary">Edit</button>
                <button class="btn btn-sm btn-warning">Remove</button>
                <button class="btn btn-sm btn-danger">Delete</button>
                <button class="btn btn-sm btn-success">View</button>
                </div>
            </div>
            
            <!-- <a href="#" class="btn btn-sm btn-primary">Go somewhere</a> -->
        </div>

         






    </div>
</div>
</div>

@endsection
