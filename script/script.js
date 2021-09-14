function validar() {

    nome = document.getElementById("user_id");
    sobrenome = document.getElementById("lastname_id");
    nomeSize = nome.value.length;
    sobrenomeSize = sobrenome.value.length;


    ok = true
    if (nomeSize == 0 || sobrenomeSize == 0) {
        //apenas visual, serve para o alert nao aparecer se algum campo estiver em branco 

    } else {


        if (sobrenomeSize < 3) {
            alert("o sobrenome precisa ter pelo menos 3 carateres");
            ok = false

        }




        if (nomeSize < 3) {
            alert("o nome precisa ter pelo menos 3 carateres");
            ok = false

        }
        if (ok) { //Verifica se houve algum erro, se houver nao executa o submit
            form = document.getElementById("form");
            form.action = "cadastro.php";
            form.submit()
        }
    }
}