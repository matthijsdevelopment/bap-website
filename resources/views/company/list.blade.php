@extends('layouts.master')

@section('header')
alle bedrijven
@endsection

@section('content')
<table>
    @foreach ($bedrijven as $bedrijf)
    <tr>
    <td><a href="{{ route('company.details', ['id' => $bedrijf->id]) }}"> {{ $bedrijf->name }} <br> </a></td>
       <td> {{ $bedrijf->address }} <br> </td>
       <td> {{ $bedrijf->zipcode }} <br> </td>
       <td> {{ $bedrijf->city }} <br> </td>
       <td> {{ $bedrijf->country }} <br> </td>

    </tr>
    @endforeach
</table>
@endsection