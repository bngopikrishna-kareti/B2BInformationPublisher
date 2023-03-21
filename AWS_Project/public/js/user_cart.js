function remove_idea(userId, id){
    window.location = '/user/'+userId+'/wishlist?remove=true&ideaId='+id;
}

function user_dashboard(id){
    window.location = "/user/"+id;
}