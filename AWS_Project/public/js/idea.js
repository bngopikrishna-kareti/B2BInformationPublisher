function add_to_cart(id){
    current_url = window.location.href;
    window.location=current_url.includes('add_to_cart')?'add_to_cart':id+'/add_to_cart';
}


function user_dashboard(id){
    window.location = "/user/"+id;
}