@extends('layouts.app')

@section('title','lista posts')

@section('content')
<table class="table">
  <thead>
      <tr class="bg-primary text-white">
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Contenuto</th>
        <th scope="col">Data_post</th>
        <th scope="col">Autore</th>
        <th scope="col">Slug</th>
        <th scope="col">Mostra</th>
        <th scope="col">Modifica</th>
        <th scope="col">Elimina</th>
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
          <td>{{$elemento->slug}}</th>
          <td>
            <a href="{{route("admin.posts.show", $elemento->id)}}"><button type="button" class="btn btn-primary">Mostra</button></a>
          </th>
          <td>
            {{-- <a href="{{route("admin.posts.edit", $elemento->id)}}"><button type="button" class="btn btn-success">Modifica</button></a> --}}
          </th>
          <td>
            <a href="{{route("admin.posts.destroy", $elemento->id)}}"><button type="button" class="btn btn-danger">Elimina</button></a>
          </th>
        </tr>
        @endforeach
      </tbody>
      <a href="{{route("admin.posts.create")}}"><button type="button" class="btn btn-warning">Crea nuovo</button></a>
  </table>
@endsection