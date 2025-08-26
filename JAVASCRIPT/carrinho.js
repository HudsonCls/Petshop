// Carrega o carrinho e o total do localStorage, ou começa com vazio/zero se não houver nada salvo
let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
let total = parseFloat(localStorage.getItem('total')) || 0;

// Adiciona um item ao carrinho
function adicionarAoCarrinho(nome, preco) {
    // Procura se o item já existe no carrinho
    const index = carrinho.findIndex(item => item.nome === nome);
    if (index !== -1) {
        // Se já existe, incrementa a quantidade
        carrinho[index].quantidade += 1;
    } else {
        // Se não existe, adiciona novo item
        carrinho.push({ nome, preco, quantidade: 1 });
    }
    // Atualiza o total
    total += preco;
    salvarCarrinho();
    atualizarCarrinho();
}

// Remove um item do carrinho
function removerDoCarrinho(nome) {
    // Procura o item pelo nome
    const index = carrinho.findIndex(item => item.nome === nome);
    if (index !== -1 && carrinho[index].quantidade > 0) {
        // Diminui o total e a quantidade
        total -= carrinho[index].preco;
        carrinho[index].quantidade -= 1;

        // Remove o item se a quantidade chegar a zero
        if (carrinho[index].quantidade === 0) {
            carrinho.splice(index, 1);
        }

        // Garante que o total não fique negativo
        if (total < 0) total = 0;

        salvarCarrinho();
        atualizarCarrinho();
    }
}

// Limpa todo o carrinho, com confirmação
function limparCarrinho(confirmar = true) {
    if (confirm("Tem certeza que deseja esvaziar o carrinho?")) {
        carrinho = [];
        total = 0;
        localStorage.removeItem('carrinho');
        localStorage.removeItem('total');
        atualizarCarrinho();
    }
}

// Salva o carrinho e o total no localStorage
function salvarCarrinho() {
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    localStorage.setItem('total', total.toFixed(2));
}

// Atualiza a exibição do carrinho na página
function atualizarCarrinho() {
    const lista = document.getElementById("itensCarrinho");
    const totalSpan = document.getElementById("totalCarrinho");
    if (!lista || !totalSpan) return;

    lista.innerHTML = "";

    if (carrinho.length === 0) {
        // Exibe mensagem se o carrinho estiver vazio
        lista.innerHTML = "<li>Nenhum item no carrinho.</li>";
    } else {
        // Lista todos os itens do carrinho
        carrinho.forEach(item => {
            const li = document.createElement("li");
            li.innerHTML = `
                <span>${item.nome} - R$ ${(item.preco * item.quantidade).toFixed(2)} (Qtd: ${item.quantidade})</span>
                <div class="botoes-quantidade">
                    <button onclick="adicionarAoCarrinho('${item.nome}', ${item.preco})">+</button>
                    <button onclick="removerDoCarrinho('${item.nome}')">−</button>
                </div>
            `;
            lista.appendChild(li);
        });
    }

    // Atualiza o valor total exibido
    totalSpan.textContent = total.toFixed(2);
}

// Finaliza a compra, exibe alerta e limpa o carrinho
function finalizarCompra() {
    const forma = document.getElementById("formaPagamento").value;
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }
    alert(`Compra finalizada com sucesso!\nTotal: R$ ${total.toFixed(2)}\n Pagamento: ${forma}`);
    limparCarrinho();
}

// Atualiza o carrinho ao carregar a página
document.addEventListener('DOMContentLoaded', atualizarCarrinho);
