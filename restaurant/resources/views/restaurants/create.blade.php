@extends('layout.app')
@section('title','Becode')
@section('content')
<h1>Add a restaurant</h1>
<form action="/restaurant/create" method="POST">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    <br>
    <label for="zipCode">ZipCode</label>
    <input type="number" name="zipCode" id="zipCode">
    <br>
    <label for="town">Town</label>
    <input type="text" name="town" id="town">
    <br>
    <label for="country">Country</label>
    <input type="text" name="country" id="country">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    <label for="review">Review</label>
    <input type="number" name="review" id="review">
    <br>
    <input type="submit">
</form>
@endsection
