@extends('layouts.master')

@section('header')
{{ $bedrijf->name }}
@endsection

@section('content')
{{ $bedrijf->address }} <br>
{{ $bedrijf->zipcode }} <br>
{{ $bedrijf->city }} <br>
{{ $bedrijf->country }} <br>
{{ $bedrijf->phone }} <br>
<p>
    {{ $bedrijf->description }}
</p>

<a href="{{ route('company.list') }}">Terug naar alle bedrijven</a>
@endsection

