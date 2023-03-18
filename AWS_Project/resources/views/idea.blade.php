<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href={{asset('/css/idea.css')}}>
    </head>
    <body>
        <h1>{{$idea['title']}}</h1>
        <button class="add_to_cart">
            Add to cart
        </button>
        <p class="idea_description">{{$idea['description']}}</p>
        @foreach(explode(',',$idea['tags']) as $tag)
            <input type="submit" value="{{$tag}}" class="tags_button">
        @endforeach
    </body>
</html>