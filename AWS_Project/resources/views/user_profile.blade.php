<!DOCTYPE html>
<head>
    <link href='{{asset('/css/user_profile.css')}}' rel='stylesheet'>
</head>
<body>
   <div class="user_profile_header">

        <button>
            <img src={{asset('images/cart_logo.png')}} alt="cart_logo" class="cart_logo">
        </button>
        <img class = "company_logo" src={{asset('images/company_logo.jpeg')}} alt = 'company logo'>
   </div>
   <form action="user_profile" method="POST" class="user_profile_form">
    <input type="text" placeholder="first_name" value={{$user["first_name"]}}><br>
    <input type="text" placeholder="last_name" value={{$user["last_name"]}}><br>
    <input type="text" placeholder="email_address" value={{$user["email"]}}><br>
   </form>
</body>