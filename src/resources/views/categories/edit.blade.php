@extends('layouts.default')
@section('content')
    <style>
        body{
            background-color: #980101;
            font-family: "Agency FB";
            color: #e2e8f0;
            margin: 10px;
        }

        h1{
            font-size: 60px;
        }

        h2{
            font-size: 35px;
        }

        .center-text{
            text-align: center;
        }

        a{
            text-decoration: none;
            color: cornflowerblue;
        }

        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .category-card {
            position: relative;
            text-align: center;
        }

        .image-container {
            position: relative;
            width: 550px; /* Define uma largura padrão para os cards */
            height: 350px; /* Define uma altura padrão para os cards */
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-container:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .image-container img {
            width: 100%;
            height: 100%; /* Garante que a imagem preencha o card */
            border-radius: 10px;
            display: block;
            transition: opacity 0.3s ease;
            object-fit: cover; /* Ajusta a imagem para preencher o card */
            object-position: center; /* Centraliza o conteúdo da imagem */
        }

        .image-container:hover img {
            opacity: 0.8;
        }

        .category-name {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 16px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .category-name {
            opacity: 1;
        }

        /* INPUT PERSONALIZADO */
        .custom-input {
            width: 100%;
            max-width: 400px; /* Define um limite para inputs grandes */
            padding: 12px 15px; /* Espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            font-family: Arial, sans-serif; /* Fonte limpa e moderna */
            color: #333; /* Cor do texto */
            background-color: #f9f9f9; /* Fundo claro */
            border: 2px solid #ccc; /* Borda padrão */
            border-radius: 8px; /* Cantos arredondados */
            transition: all 0.3s ease; /* Animação para hover e foco */
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra interna */
        }

        .custom-input:focus {
            border-color: #007BFF; /* Cor azul ao focar */
            outline: none; /* Remove o contorno padrão */
            background-color: #ffffff; /* Fundo branco ao focar */
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.5); /* Sombra azul */
        }

        /* BOTÕES PERSONALIZADOS */
        .custom-button {
            display: inline-block;
            padding: 10px 20px; /* Espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            font-family: Arial, sans-serif;
            font-weight: bold; /* Texto em negrito */
            color: #980101; /* Texto branco */
            background-color: white; /* Cor azul */
            border: none; /* Remove a borda padrão */
            border-radius: 8px; /* Cantos arredondados */
            cursor: pointer; /* Cursor de clique */
            transition: all 0.3s ease; /* Animação para hover */
        }

        .custom-button:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra ao hover */
        }

        .custom-button:active {
            background-color: #004085; /* Azul ainda mais escuro ao clicar */
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.3); /* Sombra interna ao clicar */
        }

        .custom-button.secondary {
            background-color: #6c757d; /* Cinza */
        }

        .custom-button.secondary:hover {
            background-color: #5a6268; /* Cinza mais escuro */
        }

        .custom-button.success {
            background-color: #28a745; /* Verde */
        }

        .custom-button.success:hover {
            background-color: #218838; /* Verde mais escuro */
        }
    </style>
    <div class="center-text">
        <h1>New Category</h1>
        <form action="{{route('categories.update', ['category' => $category])}}" enctype="multipart/form-data" method="post">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$category->name}}" class="custom-input" placeholder="Enter category name">
            </div>
            <br>
            <div>
                <label for="name">Cover:</label>
                <input type="file" name="path_to_cover" value="{{$category->path_to_cover}}" id="path_to_cover" class="custom-input">
            </div>
            <br><br>
            <img src="{{$category->path_to_cover}}" alt="">
            <br><br>
            <div>
                <button type="submit" class="custom-button">Save</button>
            </div>
        </form>
    </div>
@endsection

