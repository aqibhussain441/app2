@extends('layouts.app')

@section('section')

@section('content')
<h2>Card</h2>
<ul>
    <li>Background color: #{{ $card->bg_color }}</li>
</ul>
@endsection
