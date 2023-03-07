<html>
<head>
    <title>Idea Invest</title>
    <link href= "{{ asset('/css/user.css') }}" rel="stylesheet">

        <script>
            function hideIcon(self){
                self.style.backgroundImage = 'none';
            }

            function user_profile(id){
                window.location = "/user_profile/"+id

            }
            </script>
</head>
<body>
    <div class="user_header">

        <button >
            <img class="profile_image" src={{asset('images/profile_icon.jpg')}} alt='profile image'
            onclick="user_profile({{$id}})" > 
        </button>

        <button >
            <img  class="notification_icon" src = {{asset('images/notification_icon.jpg')}} alt='notification icon'>
        </button>

        <img class = "company_logo" src={{asset('images/company_logo.jpeg')}} alt = 'company logo'>
    </div>

    <div class="search_div">
        <input class="search_bar" type="text" onchange="hideIcon(this);"
        placeholder="search for ideas"> 
    </div>

@foreach ($ideas
 as $idea)
 <div class="idea_class">
    <a href='idea/{{$idea['id']}}'><h3>{{$idea['title']}}</h3></a>
    <p>{{$idea['description']}}</p>
    @foreach(explode(',',$idea['tags']) as $tag)
        <input type="submit" value="{{$tag}}" class="tags_button" />
    @endforeach
 </div>
 @endforeach
</body>
</html>
