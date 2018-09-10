var username = document.querySelector(".user");
var line = document.querySelector(".line");
var next = document.querySelector(".next");
var pass = document.querySelector(".pass");
var back = document.querySelector(".previous");
var final = document.querySelector(".final");
var nextBtn = document.querySelector(".next");
var user_status = document.querySelector(".email_status");
var pass_status = document.querySelector(".pass_status");

username.addEventListener("click", activateItem);
next.addEventListener("click", nextItem);

//username click
function activateItem(){
    line.classList.add("newline")
    username.classList.add("usernameplacing")
}

//password click
pass.addEventListener("click", activateItem1);
function activateItem1(){
    line.classList.add("newline")
    pass.classList.add("usernameplacing")
}

back.addEventListener("click", function(){
    event.preventDefault()
    $(pass).toggleClass('hidden')
    $(username).removeClass('hidden')
    back.classList.add("hide")
    final.classList.add("hide")
    nextBtn.classList.remove("hidden")
    user_status.classList.remove("hidden")
    pass_status.classList.add("hide")
});


function nextItem(){
    var checkUsername = document.querySelector("#email_status").innerHTML;
    var ok = new String("OK    ");
    var notFound = new String("Username not found    ");
    var nothing = new String("");
    var isNothing = JSON.stringify(checkUsername) === JSON.stringify(nothing);
    if(isNothing){
        alert("Enter detail!");
    }
    var isnotFound = JSON.stringify(checkUsername) === JSON.stringify(notFound);
    if(isnotFound){
        alert("Username not found");
    }
    var isok = JSON.stringify(checkUsername) === JSON.stringify(ok);
    if(isok){
        //$(username).addClass('hidden')
        event.preventDefault()
        $(username).toggleClass('hidden')
        $(pass).removeClass('hidden')
        $(back).removeClass('hide')
        nextBtn.classList.add("hidden")
        $(final).removeClass('hide')
        user_status.classList.add("hidden")
        pass_status.classList.remove("hide")
    }
}

//pasword/username unclick
$(document).on("click", function(e) {
    if (($(e.target).is(username) === false) && ($(e.target).is(pass) === false)) {
      $(line).removeClass("newline");
      $(username).removeClass("usernameplacing");
      $(pass).removeClass("usernameplacing");
    }
  });



