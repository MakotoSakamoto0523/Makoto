<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
       <h1>Blog Name</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title">
               <h2>Title</h2>
               <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
               <P class="title_error" style="color:red">{{ $errors->first('post.title') }}</P>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。" value="{{ old('post.body') }}"></textarea>
               <P class="body_error" style="color:red">{{ $errors->first('post.body') }}</P>
           </div>
           <div class="category">
               <h2>Category</h2>
               <select name="post[category_id]">
                   @foreach($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                   @endforeach        
               </select>
           </div>
           <input type="submit" value="保存"/>
       </form>
       <div class='footer'>[<a href="/">戻る</a>]</div>
    </body>
</html>