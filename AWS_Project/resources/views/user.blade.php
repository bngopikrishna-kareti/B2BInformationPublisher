<html>
<head>
    <title>Idea Invest</title>
    <link href= "{{ asset('/css/user.css') }}" rel="stylesheet">

        <script>
            function filterIdeas(id){
                var input = document.getElementById("inputIdea");
                input.addEventListener("keypress", function(event){
                if (event.keyCode == 13){
                    window.location = id+"?filter="+input.value;
                }
            });
            }

            function user_profile(id){
                window.location = "/user_profile/"+id

            }

            function all_ideas(id){
                window.location = id
            }
            
        </script>
        <noscript>
        <h1>JavaScript is disabled</h1>
        </noscript>
</head>
<body>
    <div class="user_header">

        <button >
            <img class="profile_image" src={{asset('images/profile_icon.jpg')}} alt='profile image'
            onclick="user_profile({{$id}})" > 
            <br>
            {{$user["first_name"]}}
        </button>

        <button >
            <img  class="notification_icon" src = {{asset('images/notification_icon.jpg')}} alt='notification icon'>
        </button>

        <img class = "company_logo" src={{asset('images/company_logo.jpeg')}} alt = 'company logo'>
    </div>

    <div class="search_div">
        <input 
        class="search_bar" 
        id="inputIdea"
        type="text" 
        onchange="filterIdeas({{$id}})"
        placeholder="search for ideas"> 
    </div>

    <table class="ideas_menu">
        <tr>
            <button onclick="all_ideas({{$id}})">
                All Ideas
            </button>
        </tr>
    </table>

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
