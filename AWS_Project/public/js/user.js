function filterIdeas(id){
    var input = document.getElementById("inputIdea");
    input.addEventListener("keypress", function(event){
    if (event.keyCode == 13){
        window.location = id+"?filter="+input.value;
    }
});
}

function interested_ideas(id){
    window.location = id+"?interested_ideas=true";
}

function user_profile(id){
    window.location = "/user_profile/"+id

}

function all_ideas(id){
    window.location = id
}
