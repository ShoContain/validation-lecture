@extends('layouts.app')

@section('main')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">名前</th>
        <th scope="col">説明</th>
        <th scope="col">カロリー</th>
      </tr>
    </thead>
    <tbody>
        @if($recipes->count() > 0 )
            @foreach ($recipes as $index => $recipe)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{$recipe->name}}</td>
                    <td>{{$recipe->description}}</td>
                    <td>{{$recipe->calories}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>
@endsection