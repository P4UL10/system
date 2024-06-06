function haha(){
    let check = document.getElementById("check");
    let agree = document.getElementByid("agree");

    if (check.checked){
        agree.removeAttribute("disabled");
    }else{
        agree.disabled = "true";
    }
 }