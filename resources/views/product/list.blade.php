 @extends('layouts.master')

@section('header')
Alle Producten
@endsection

@section('content')
<table>
    @foreach ($products as $product)
    <tr>
    <td><a href=""> {{ $product->title }} <br> </a></td>
       <td> {{ $product->description }} <br> </td>
       <td> {{ $product->price }} <br> </td>
       <td> {{ $product->pub_date }} <br> </td>

    </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection