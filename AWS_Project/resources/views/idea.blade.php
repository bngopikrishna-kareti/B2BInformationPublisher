<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href={{asset('/css/idea.css')}}>
        <script type="text/javascript" src="{{asset('/js/idea.js')}}">
            
        </script>
    </head>
    <body>
        <button class="dashboard" onclick=user_dashboard({{$userId}})>
            dashboard
        </button>
        <h1>{{$idea['title']}}</h1>
        <button class="add_to_cart" onclick="add_to_cart({{$id}})">
            Add to cart
        </button>
        <p class="idea_description">{{$idea['description']}}</p>
        @foreach(explode(',',$idea['tags']) as $tag)
            <input type="submit" value="{{$tag}}" class="tags_button">
        @endforeach
    </body>
</html>