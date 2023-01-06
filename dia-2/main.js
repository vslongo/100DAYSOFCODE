let string = "onde esta o nosso querido peixe chamado nemo ?"

function findNemo(){
    arr = string.split(" ")
    result = arr.indexOf('nemo')
    if(result === -1){
        console.log(`nemo morreu`)
    }else{
        console.log(`Nemo foi encontrado na  posição ${result}`)
    }
}
findNemo()