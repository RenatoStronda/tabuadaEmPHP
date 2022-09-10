
function validanum1() {
    if(document.getElementsByName("num1")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num1")[0].focus();
        return false;
    }
}