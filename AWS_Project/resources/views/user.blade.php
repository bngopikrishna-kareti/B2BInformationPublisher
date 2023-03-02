<html>
<head>
    <title>Idea Invest</title>
    <link href= "{{ asset('/css/user.css') }}" rel="stylesheet">

        <script>
            function hideIcon(self){
                self.style.backgroundImage = 'none';
            }
            </script>
</head>
<body>
    <div class="user_header">

        <button >
            <img class="profile_image" src='images/profile_icon.jpg' alt='profile image' > 
        </button>

        <button >
            <img  class="notification_icon" src = 'images/notification_icon.jpg' alt='notification icon'>
        </button>

        <img class = "company_logo" src='images/company_logo.jpeg' alt = 'company logo'>
    </div>

    <div class="search_div">
        <input class="search_bar" type="text" onchange="hideIcon(this);"
        placeholder="search for ideas"> 
    </div>

</body>

</html>
