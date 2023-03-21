function update(id){
    var current_url = window.location.href;
    var user_details = new Object();
    var options = document.getElementById('tags').selectedOptions;
    var tags = Array.from(options).map(({ value }) => value);
    user_details.tags = tags.length >=1 ? tags : document.getElementById("interested_tags").value;
    user_details.first_name = document.getElementById("first_name").value;
    user_details.last_name = document.getElementById("last_name").value;
    user_details.email_address = document.getElementById("email_address").value;
    var user_update_url = current_url.includes('update') ? "update?": id+"/update?";
    console.log(user_update_url);
    for(var key in user_details)
    {
        user_update_url += key+'='+user_details[key]+'&';
    }
    user_update_url = user_update_url.slice(0,user_update_url.length-1);
    window.location = user_update_url;
}

function user_dashboard(id){
    window.location = "/user/"+id;
}

function wishlist_page(id){
    window.location = "/user/"+id+"/wishlist";
}