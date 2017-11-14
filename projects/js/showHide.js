function showHide() {
    var x = document.getElementById("sign-in");
    var y = document.getElementById("thank-you");
    y.style.visibility = "hidden";
    if (x.style.visibility == "visible") {
        x.style.visibility = "hidden";
        y.style.visibility = "visible";
    }
}

function setButton(){
var btn = document.getElementById("submit-button");
if(btn){
    btn.addEventListener("click", function () {
    showHide();});
    }
}