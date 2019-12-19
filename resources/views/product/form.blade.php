@extends('layouts.master')

@section('header')
    Form
@endsection

@section('content')

@if($errors->any())
    <div class="errorr">
        <p>Er zijn fouten, het formulier is niet opgeslagen.</p>
    </div>
@endif  
<form action="{{ route('product.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="">Titel</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title' )}}">
        @error('title')
            <div class="error-message">
                {{ $message }}
            </div>
        @enderror
    </div>
        <div class="form-group">
            <label for="">Beschrijving</label>
        <textarea  name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
        @error('description')
        <div class="error-message">
            {{ $message }}
        </div>
    @enderror    
    </div>
        <div class="form-group">
            <label for="title">Prijs</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
            @error('price')
            <div class="error-message">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="">PublicatieDatum</label>
            <input type="date" name="pub_date" class="form-control @error('pub_date') is-invalid @enderror" value="{{ old('pub_date') }}">
            @error('pub_date')
            <div class="error-message">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="">Opslaan</button>
    </form>
@endsection