<script>
    
let campoFiltro = document.querySelector("#filtro");
campoFiltro.addEventListener("input",function(){
    let jogos = document.querySelectorAll(".jogos");

    if(this.value.length > 0){
        for(let i = 0; i < jogos.length; i++){
        let jogo = jogos[i];
        let pNome = jogo.querySelector(".titulo");
        let nome = pNome.textContent;
        var expressao = new RegExp(this.value,"i");
        if(!expressao.test(nome)){
            jogo.classList.add("escondido");
        }else{
            jogo.classList.remove("escondido");
        }
        
        }
            
    }else{
        for(let i = 0; i < jogos.length; i++){
            jogo = jogos[i];
            jogo.classList.remove("escondido");
        }
        
    }
});

</script>