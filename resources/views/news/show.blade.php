@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card">
            <img src="{{ asset($news->image) }}" class="card-img-top" alt="{{ $news->name }}">
            <div class="card-body text-left mb-5">
                <h1 class="card-title">{{ $news->name }}</h1>
                <h4>Автор: {{ $news->author }}</h4>
                <strong><hr></strong>
                <p class="card-text">Описание: {{ $news->description }}</p>
                <p class="text-right"><strong>Дата создания: </strong>{{ $news->created_at }}</p>
            </div>
        </div>
    </div> 
</div>
@endsection
