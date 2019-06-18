
function check_login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    $.ajax({
        type: "POST",
        url: "check_login/post",
        data: { username: username, password: password},
        success: function(html){
            // console.log(html);
            var Obj = JSON.parse(html);
            if(Obj.status != 'correct'){
                alert('UserName OR Password Not Correct');
                window.location.href = "?"
            }else{
                window.location.href = "profile";
            }
        }
    });
}

function next_home_page(){
    window.location.href = "home_page";
}
