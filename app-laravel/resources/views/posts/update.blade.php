@extends('layouts.app')

@section('content')
    <form action="{{route('posts.update',['post' => $post->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$post->description}}">
        </div>

        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
    </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$post->slug}}">
        </div>
        <button class="btn btn-lg btn-success">Alterar Postagem</button>
    </form>
    <form action="{{route('post.destroy', ['post' => $post->id])}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar Postagem">
    </form>
@endsection