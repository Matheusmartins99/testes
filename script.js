function cadastro(){
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var senha = document.getElementById("senha").value;
    var confirm_senha = document.getElementById("confirm_senha").value; 

    if ((nome.length !== 0 && email.length !== 0 && number.length !== 0 && senha.length !== 0 && confirm_senha.length !== 0) && (senha === confirm_senha)) {

        var objeto = {
            nome: nome,
            email: email,
            telefone: number,
            senha: senha,
        };
        console.log("Isso é um objeto", objeto);
        console.log("Acessar nome no objeto", objeto.nome);

        fetch("http://localhost/teste-blog/cadastro.php", {
            method: "POST",
            body: JSON.stringify(objeto),
            headers: {"Content-type": "application/json; charset=UTF-8"},
        })
            .then((response) => response.json())
            .then((json) => console.log(json))
            .catch((err) => console.log(err));

        document.getElementById('success').style.display = 'block';
        document.getElementById('error').style.display = 'none';

        setTimeout(() => {
            document.getElementById('success').style.display = "none";
        }, 5000);
    } else {
        document.getElementById('success').style.display = 'none';
        document.getElementById('error').style.display = 'block';
    }

    

}

//     if(nome === ""){
//         alert("Preencha seu nome por favor!")
//         return
//     }
//     if(email === ""){
//         alert("Preencha seu e-mail por favor!")
//         return
//     }
//     if(number === ""){
//         alert("Preencha seu telefone por favor!")
//         return
//     }
//     if(senha === ""){
//         alert("Preencha sua senha por favor!")
//         return
//     }
//     if(confirm_senha === ""){
//         alert("Confirme sua senha por favor!")
//         return
//     }
//     if(confirm_senha !== senha){
//         alert("As duas senhas não são iguais!")
//         return
//     }

//     // console.log(nome);
//     // console.log(email);
//     // console.log(number);
//     // console.log(senha);
//     // console.log(confirm_senha);

//     var array = [nome, email, number, senha];
//     var objeto = {
//         nome: nome,
//         email: email,
//         number: number,
//         senha: senha,
//     }
//     console.log(array);
//     console.log("O nome é: ", array[0]);
//     console.log("---------------");
//     console.log(objeto);
//     console.log("O nome é: ", objeto.nome);

//     alert("Sucesso ao cadastrar-se!")


// }