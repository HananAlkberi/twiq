@extends('layouts.app')

@section('content')

<h1 class="text-center p-5">  أهلاً بكم في الصفحة الرئيسية </h1>
<div class="container"> 

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Type</th>
      <th>Price</th>
      <th>Color</th>
    </tr>
  </thead>
  <tbody>
  @foreach($phone as $items)
      <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQEueEBshvzRY1HKQ5GDOFjprGh6DF9EI9NZf6nJWglwjxEZlHbelh70xdpyRD9kSLDQqqgq5CZVx7KjumBzBH5BFdKZOw3-tetVQGcdP5A4z1PfomBqZp5vxoOUfq4HA0Q4zviShcr&usqp=CAc"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"/>
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$items['Type']}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$items['Price']}}</p>
      </td>
      <td>
        <span class="fw-normal mb-1">{{$items['Color']}}</span>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>

</div>
@endsection
