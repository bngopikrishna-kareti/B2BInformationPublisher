<!DOCTYPE html>
<?php
$tags = ['tech', 'oil', 'textile','automobile','construction','cosmetics','minerals','pharmacy', 'health', 'IT','AI'];
?>
<head>
    <link href='{{asset('/css/user_profile.css')}}' rel='stylesheet'>
    <script>
        function update(id){
            var user_details = new Object();
            var options = document.getElementById('tags').selectedOptions;
            var tags = Array.from(options).map(({ value }) => value);
            user_details.tags = tags.length >=1 ? tags : document.getElementById("interested_tags").value;
            user_details.first_name = document.getElementById("first_name").value;
            user_details.last_name = document.getElementById("last_name").value;
            user_details.email_address = document.getElementById("email_address").value;
            console.log(user_details);
            var user_update_url = id+"/update?";
            for(var key in user_details)
            {
                user_update_url += key+'='+user_details[key]+'&';
            }
            user_update_url = user_update_url.slice(0,user_update_url.length-1);
            window.location = user_update_url;
        }
    </script>
</head>
<body>
   <div class="user_profile_header">

        <button>
            <img src={{asset('images/cart_logo.png')}} alt="cart_logo" class="cart_logo">
        </button>
        <img class = "company_logo" src={{asset('images/company_logo.jpeg')}} alt = 'company logo'>
   </div>
   <div>
    <table>
        <th class="user_profile_table_header">
            <img src = {{asset('images/profile_icon.jpg')}} alt="profile image" class="user_profile_icon">
        <br>
        <input type="button" value="Sign Out" class="user_signout_button">
        </th>
        <th>
            <form action="user_profile" method="POST" class="user_profile_form">
                <input type="text" placeholder="first_name" value={{$user["first_name"]}} id="first_name"><br>
                <input type="text" placeholder="last_name" value={{$user["last_name"]}} id="last_name"><br>
                <input type="text" placeholder="email_address" value={{$user["email"]}} id="email_address"><br>
                <input id="interested_tags" type="text" placeholder="interested_tags" readonly value={{$user["interested_tags"]}}><br>
                <select multiple style="width: 50%" id="tags">
                    @foreach ($tags as $tag)
                    <option value={{$tag}}>{{$tag}}</option>
                    @endforeach
                </select><br>
                <input type="button" value="update" class="update_button"
                onclick="update({{$id}})">
            </form>
        </th>
    </table>
   </div>
</body>