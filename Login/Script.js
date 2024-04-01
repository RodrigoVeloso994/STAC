
function logar() {


    var chapa = document.getElementById('CPF').value;
    var senha = document.getElementById('senha').value;

    if(chapa == "admin" && senha == "admin") {
    alert('sucesso'); 
    location.href = "../Aluno/Home/index.html";
    

    }

}
