@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>Lista tecnologies:</h1>
        @foreach ($tecnologies as $item)
            <h4>{{$item->name}}</h4>
        @endforeach
    </div>
</div>
@endsection