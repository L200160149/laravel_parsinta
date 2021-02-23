{{-- <p>
        <?= $data ?>
    </p>

    <p>
        {{$data}}
    </p>

    <p>
        {!! nl2br($data) !!}
    </p> --}}


@extends('layouts.app')
@section('title', 'Home')

@section('content')
    
    <div class="container">
        Home
        {{$name}} <br>
    </div>
@endsection