@extends('layouts.app')

@section('content')
<head>
</head>
<div class="container">
    @foreach($ph as $items)
    <div class="mb-3">
    <div class="card p-2">
        <div class="card-header">
            <h3 class="text-primary">Phone Type</h3>
        </div>

    <div class="card-body">
        <div class="col mb-2">
            <div class="col-9">
               <img class="mb-3" hieght="205" width="205" src=https://img.freepik.com/free-vector/digital-device-mockup_53876-89354.jpg?w=740&t=st=1675872528~exp=1675873128~hmac=40122803c2a44d16a7684af0a22a613bfcfb71372738577e2a0bc2f63e584d34>
            </div>
            
            <div class="col-2">
               <h1 class="text-dark alert alert-primary text-center">{{$items->Name}}</h1>
               <p class="text-dark">Price: <span class="badge bg-primary"> {{$items->Price}} </span></p>
               <p class="text-dark">Quantity: <span class="badge bg-primary"> {{$items->QTY}} </span></p>
            </div>
        </div>  
</div>

    <div class="card-footer">
            <a href="{{   route('getlistid',[$items->id])   }}" class="btn btn-primary">Add to cart</a>
    </div>  

    </div>
</div>
    @endforeach
</div>




@foreach($ph as $items)

@endforeach

@endsection