$(document).ready(function(){
    $("#register_toggle").click(function(){
        $("#login_form").hide(500);
        $("#register_form").show(700);
    });
    $("#login_toggle").click(function(){
    	$("#register_form").hide(500);
        $("#login_form").show(700);
    });

});