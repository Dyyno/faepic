
const ferramenta = new IntersectionObserver ( (entries)=> {
    entries.forEach( (entrada) =>{
        if(entrada.isIntersecting ){
            entrada.target.classList.add('mudanca') //adiciona uma classe ao elemento caso ele esteja dentro do padrao informado
        } else{
            entrada.target.classList.remove('mudanca') //"" remove
        }
    }) 
}) //função recebe um parâmetro

const animacao = document.querySelectorAll('.animacao');

//querySelector procura apenas por um elemento. querySelectorALl procura por vários elementos.

animacao.forEach((element) => ferramenta.observe(element)) //animacao vira uma lista com varios elementos