@extends('layout.app')
@section('title','Becode')
@section('content')
<h1>Update a restaurant</h1>
<form action="/restaurant/edit/{{ $restaurant->id }}" method="POST">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $restaurant->name }}">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{ $restaurant->address }}">
    <br>
    <label for="zipCode">ZipCode</label>
    <input type="number" name="zipCode" id="zipCode" value="{{ $restaurant->zipCode }}">
    <br>
    <label for="town">Town</label>
    <input type="text" name="town" id="town" value="{{ $restaurant->town }}">
    <br>
    <label for="country">Country</label>
    <input type="text" name="country" id="country" value="{{ $restaurant->country }}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $restaurant->description }}">
    <br>
    <label for="review">Review</label>
    <input type="number" name="review" id="review" value="{{ $restaurant->review }}">
    <br>
    <input type="submit">
</form>
@endsection