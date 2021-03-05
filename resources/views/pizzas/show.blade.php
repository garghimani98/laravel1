@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>Order for {{$pizza->name}}</h1>
   <p class="type">Type-{{$pizza->type}}</p>
   <p class="base">Type-{{$pizza->base}}</p>
   <p class="toppings">Extra Toppings:</p>
   <ul>
      @foreach($pizza->toppings as $topping)
         <li>
            {{ $topping }}
         </li>
      @endforeach
   </ul>
   
   <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
     @csrf
     <!--@method('DELETE')-->
     <!--cross site request forgery-->
     
     <button>Delete this item </button>
     
   </form>
</div>
<a href="/pizzas" class="back">Go back to all pizzas</a>
@endsection
