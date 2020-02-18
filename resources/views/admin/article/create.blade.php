@extends('layouts.admin')


@section('title', '記事作成')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>記事作成</h2>
                <form action="{{ action('Admin\SoundsController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="40">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="genre" value="{{ old('genre') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="prefecture" value="{{ old('prefecture') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">募集パート</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="part" value="{{ old('part') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">作成者</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    
                </form>
            </div>
        </div>
    </div>
    
@endsection