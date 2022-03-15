@extends('layouts.dashboard')

@section('title','lista posts')

@section('content')
<table class="table">
  <thead>
      <tr class="bg-primary">
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Contenuto</th>
        <th scope="col">Data_post</th>
        <th scope="col">Autore</th>
        <th scope="col">Pubblicato</th>
        <th scope="col">Slug</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $elemento)
        <tr class="bg-light">
          <th scope="row">{{$elemento->id}}</th>
          <td>{{$elemento->title}}</th>
          <td>{!!$elemento->content!!}</th>
          <td>{{$elemento->post_date}}</th>
          <td>{{$elemento->author}}</th>
          <td>{{$elemento->published}}</th>
          <td>{{$elemento->slug}}</th>
        </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection