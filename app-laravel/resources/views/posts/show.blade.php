<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Descricao</th>
            <th>Conteudo</th>
            <th>Slug</th>
            <th>Nome do User</th>
        </tr>
        <td>"{{$post->title}}"</td>
        <td>"{{$post->description}}"</td>
        <td>{{$post->content}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->user->name}}</td>
    </table>

    <
