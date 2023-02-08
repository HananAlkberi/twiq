@extends('layouts.app')
@section('content')
<a href="{{   route('getlist')   }}" class="btn btn-primary">Back</a>

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://img.freepik.com/free-photo/3d-illustration-smartphone-with-paper-bags-gift-boxes-online-shopping-e-commerce-concept_58466-14625.jpg?size=626&ext=jpg&ga=GA1.2.919865286.1675856157&semt=sph" alt="" width="200" height="150">
        <h1>Checkout</h1>
        <p class="lead"> </p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>

            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <h6 class="text-muted">{{$ph->Name}}</h6>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Price</h6>
                        <small class="text-muted">{{$ph->Price}}</small>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Quantity</h6>
                        <small class="text-muted">1</small>
                    </div>

                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>VAT</span>
                    <small>
                    {{$ph->Price*0.15}}
                    </small>                
                </li>
            </ul>

                <li class="list-group-item d-flex justify-content-between text-primary">
                    <span>Total (SAR)</span>
                    <small>
                    {{$ph->Price + $ph->Price*0.15}}
                    </small>                
                </li>
            </ul>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 MOBILE PHONE</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

@endsection