function calcularMedia() {
   
    let matricula = document.getElementById("matricula").value;
    let nome = document.getElementById("nome").value;
    let nota1 = parseFloat(document.getElementById("nota1").value);
    let nota2 = parseFloat(document.getElementById("nota2").value);
    
    if(n1 =! Number && nota2 ) {
        cell3.innerHTML = "digite um valor"
    }

    let media = (nota1 + nota2) / 2
    let table = document.getElementById("tabela");
    let row = table.insertRow(-1);
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    let cell5 = row.insertCell(4);
   
     

    cell1.innerHTML = matricula;
     cell2.innerHTML = nome;
     cell3.innerHTML = nota1;
     cell4.innerHTML = nota2;
     cell5.innerHTML = media.toFixed(2);
   }