<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href={{asset('/css/idea.css')}}>
        <script>
            function add_to_cart()
            {
                window.location='/add_to_cart';
            }
        </script>
    </head>
    <body>
        <h1>{{$idea['title']}}</h1>
        <button class="add_to_cart" onclick="add_to_cart()">
            Add to cart
        </button>
        <p class="idea_description">{{$idea['description']}}</p>
        @foreach(explode(',',$idea['tags']) as $tag)
            <input type="submit" value="{{$tag}}" class="tags_button">
        @endforeach
    </body>
</html>