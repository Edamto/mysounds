@extends('layouts.admin')
@section('title', '記事一覧')

@section('content')
        <div class="container">
        <div class="row">
            <h2>記事一覧</h2>
        </div>
        
         @if (count($errors) > 0)
                <ul>
                   @foreach($errors->all() as $e)
                   <li>{{ $e }}</li>
              @endforeach
                    </ul>
                    @endif
                    
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\SoundsController@add') }}" role="button" class="btn btn-primary">記事作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\SoundsController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $news)
                                <tr>
                                    <th>{{ $news->id }}</th>
                                    <td>{{ \Str::limit($news->title, 100) }}</td>
                                    <td>{{ \Str::limit($news->body, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
