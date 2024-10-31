let currentIndex = 0; // Índice atual do carrossel
let pontos = 0; // Variável para contar os pontos

// Função para mover o carrossel
function moveCarousel(direction) {
    const carousel = document.querySelector('.carousel');
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    // Atualiza o índice de acordo com a direção
    currentIndex += direction;

    // Ajusta o índice quando ultrapassa o limite de itens
    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    // Move o carrossel para o item atual
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Função chamada ao acertar uma resposta
function acerto(alternativa) {
    // Verifica se a alternativa já foi clicada
    if (!alternativa.classList.contains("clicado")) {
        // Marca a alternativa como clicada
        alternativa.classList.add("clicado");

        // Incrementa pontos e atualiza a pontuação exibida
        pontos += 1;
        document.getElementById("resultado").textContent = `Pontos: ${pontos}`;
    }
}

// Função para resetar os pontos e remover a classe 'clicado' das alternativas
function resetarQuiz() {
    pontos = 0; // Reseta os pontos
    document.getElementById("resultado").textContent = `Pontos: ${pontos}`; // Atualiza o texto da pontuação

    // Remove a classe 'clicado' de todas as alternativas
    const alternativas = document.querySelectorAll(".correto, .incorreto");
    alternativas.forEach(alternativa => alternativa.classList.remove("clicado"));
}

// Evento para resetar o quiz ao clicar no botão
document.getElementById("resetar").addEventListener("click", resetarQuiz);
