@extends('layouts.master')

@section('header')
    Form
@endsection

@section('content')
<form action="{{ route('product.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="">title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">omschrijving</label>
            <textarea  name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="title">prijs</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="">PublicatieDatum</label>
            <input type="date" name="pub_date" class="form-control">
        </div>
        <button type="submit" class="">Opslaan</button>
    </form>
@endsection