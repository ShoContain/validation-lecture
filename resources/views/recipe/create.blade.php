@extends('layouts.app')

@section('main')
<form action="{{ route('recipe.store')}}" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-4 mb-3">
      <label for="name">名前</label>
      <input name="name" class="form-control" id="name" placeholder="お好み焼き" value="{{ old('name') }}">
      @if ($errors->has('name'))
      <p class="text-danger">{{$errors->first('name')}}</p>
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4 mb-3">
      <label for="description">説明</label>
      <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
      @if ($errors->has('description'))
      <p class="text-danger">{{$errors->first('description')}}</p>
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4 mb-3">
      <label for="calories">カロリー</label>
      <input name="calories" class="form-control" id="calories" value="{{ old('calories') }}">
      @if ($errors->has('calories'))
      <p class="text-danger">{{$errors->first('calories')}}</p>
      @endif
    </div>
  </div>
  <button type="submit" class="btn btn-success">投稿</button>
  </div>
</form>
@endsection