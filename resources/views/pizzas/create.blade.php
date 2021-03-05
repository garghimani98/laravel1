@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="{{route('pizzas.create')}}" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaaian">hawaaian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
        <label for="base">Choose Pizza Base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin and crispy">thin and crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms" >Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers" >peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic" >garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives" >olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>  
   
       
    
</div>
@endsection
