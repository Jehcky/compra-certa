function enderecoSelectHandler(){
    if(document.getElementById("enderecoSelect").value == '0'){
        document.getElementById("enderecoInput").hidden = false;
    }else{
        document.getElementById("enderecoInput").hidden = true;
    }
}