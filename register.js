function reg()
{
    var a,b;
    a=document.getElementById('one').value;
    b=document.getElementById('two').value;
    c=document.getElementById('three').value;

    if(a=="" || b==""|| c=="" )
     {
          alert("Some field remain empty ");
          f1.one.value="";
          f1.two.value="";
          f1.three.value="";
          f1.one.focus();
     }
    else if(a!="" && b!="" && c!="")
     {
           alert(":) Your account is created (:"); 
     }
     else
     {


     }
}