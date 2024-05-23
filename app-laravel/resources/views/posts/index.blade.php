@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('posts.create')}}" class="btn btn-success float-right">Criar Postagem</a>
            <h2>Postagens Blog</h2>
            <div class="clearfix"></div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Autor</th>
                <th>Título</th>
                <th>Status</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        @if($post->is_active)
                            <span class="badge badge-success">Ativo</span>
                        @else
                            <span class="badge badge-danger">Inativo</span>
                        @endif
                    </td>
                    <td>{{date('d/m/Y H:i:s', strtotime($post->created_at))}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-sm btn-primary">Editar</a>

                            <form action="{{route('posts.destroy',['post' => $post->id])}}" method="post">
                                @csrf

                                @method('DELETE')

                                <input type="submit" value="Remover" class="btn btn-sm btn-danger">

                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum registro cadastrado!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
