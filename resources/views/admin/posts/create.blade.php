@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Crea un fumetto:</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo" value="{{old("title")}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Contenuto</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{old("description")}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Data_post</label>
            <input type="text" class="form-control-file" id="thumb" name="thumb">
        </div>
        <div class="form-group">
            <label for="price">Autore</label>
            <input type="number" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Inserisci prezzo" value="{{old("price")}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Sulg</label>
            <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Inserisci data uscita" value="{{old("sale_date")}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <a href="{{route("admin.posts.index")}}">
            <button type="button" class="btn btn-primary">Torna indietro</button>
        </a>
        <a href="{{route("admin.posts.index")}}">
            <button type="submit" class="btn btn-success">Salva</button>
        </a>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection