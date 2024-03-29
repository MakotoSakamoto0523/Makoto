<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>
        <title>Blog</title>

        <!-- Fonts -->

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
       <h1>編集画面</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
           @csrf
           @method('PUT')
         <div class='content_title'>
             <h2>タイトル</h2>
             <input type='text' name='post[title]' value="{{ $post->title }}">
         </div>
         <div class='content_body'>
             <h2>本文</h2>
             <input type='text' name='post[body]'  value="{{ $post->body }}">
         </div>
           <input type="submit" value="保存"/>
       </form>
    </body>
    
</x-app-layout>

  
        
</html>