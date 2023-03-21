<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ asset('/css/user_cart.css') }}">
    <script type="text/javascript" src="{{asset('/js/user_cart.js')}}"></script>
</head>
<body>
    <button class="dashboard" onclick=user_dashboard({{$userId}})>
        dashboard
    </button>
    @foreach ($ideas as $idea)
        <?php 
            $idea = (array) $idea;
        ?>
        <div class="idea_class">
            <h3>{{$idea['title']}}</h3>
            <button class="button_class" onclick="remove_idea({{$userId}},{{$idea['id']}})">
                <img src={{asset("images/delete_icon.png")}} alt="delete_icon" class="delete_icon">
            </button>
            <p>{{$idea['description']}}</p>
            @foreach(explode(',',$idea['tags']) as $tag)
                <input type="submit" value="{{$tag}}" class="tags_button" />
            @endforeach
        </div>
    @endforeach
</body>