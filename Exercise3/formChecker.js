// var myInput = document.getElementById("psw");
var flag1 = false;
var flag2 = false;


function hide()
{
    var myInput = document.getElementById("psw");
    let alt = document.getElementById("usrname").value.indexOf('@');
    let commas = document.getElementById("usrname").value.indexOf('.');
    if(commas >alt && alt>0)
    {
      document.getElementById("login").style.display = "none";
      document.getElementById("store").style.display = "block";
      if(myInput.value.length < 1)
      {
        alert("The password should be at least one character!");
        return false
      }
      return true;
    }
    else
    {
      alert("Invalid email!");
      return false;
    }
}


function check()
{
  var Rose = document.getElementById("Rose").value;
  var Lily = document.getElementById("Lily").value;
  var Hydrangea = document.getElementById("Hydrangea").value;
  if(Rose==''&&Lily==''&&Hydrangea==''){
    alert("Please choose at least one product!");
    return false;
  }else{
    return true;
  }
}
