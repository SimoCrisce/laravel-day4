@extends('template.base')

@section('title', 'Lista libri')

@section('content')
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Categoria</th>
              </tr>
            </thead>
        @foreach($books as $book)
        <tbody>
            <tr>
              <th scope="row">{{$book->id}}</th>
              <td>{{$book->title}}</td>
              <td>{{$book->author}}</td>
              <td>{{$book->category}}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('books.edit', ['book' => $book]) }}">Modifica</a>
                    <form method="post" action="{{route('books.destroy', ['book' => $book])}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Elimina</a>
                    </form>
                </td>
            </tr>
          </tbody>
          @endforeach
        </table>
@endsection