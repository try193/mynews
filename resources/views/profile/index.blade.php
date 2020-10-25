@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <table>
                            <tr>
                                <th>名前：</th><td>{{ str_limit($headline->name, 30) }}</td>
                            </tr>
                            <tr>
                                <th>性別：</th><td>{{ str_limit($headline->gender, 10) }}</td>
                            </tr>
                            <tr>
                                <th>趣味：</th><td>{{ str_limit($headline->hobby, 30) }}</td>
                            </tr>
                            <tr>
                                <th>自己紹介欄：</th><td>{{ str_limit($headline->introduction, 250) }}</td>
                            </tr>
                        </table>
                      
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    更新日時：{{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    名前：{{ str_limit($post->name, 150) }}
                                </div>
                                <div class="body mt-3">
                                    性別：{{ str_limit($post->gender, 150) }}
                                </div>
                                <div class="body mt-3">
                                    趣味：{{ str_limit($post->hobby, 150) }}
                                </div>
                               
                                <div class="body mt-3">
                                    自己紹介欄：{{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection