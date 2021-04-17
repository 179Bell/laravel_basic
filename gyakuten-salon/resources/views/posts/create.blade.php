@extends('layouts')

@section('content')

    
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>
            
            <form method="POST" action="{{route('posts.store')}}">
                {{csrf_field()}}
                
                <fielset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input 
                            id="title"
                            name="title"
                            type="text" 
                            class="form-control"
                            value="{{old('title')}}"
                        >
                        <div class="text-danger">
                            {{$errors->first('title')}}
                        </div>
                    </div>
                    
                    <div>
                        <label for="body">
                            本文
                        </label>
                        <textarea
                            id="body"
                            name="body"
                            rows="4"
                            class="form-control"
                        >{{old('body')}}</textarea>
                         <div class="text-danger">
                            {{$errors->first('body')}}
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <a  class="btn btn-secondary" href="{{route('top')}}">
                            キャンセル
                        </a>
                        
                        <button class="btn btn-primary" type="submit">
                            投稿する
                        </button>
                    </div>
                    
                </fielset>
            </form>
        </div>
    </div>
    
    

@endsection('content')