// Array para armazenar os itens do carrinho
let carrinho = [];

// Função para adicionar um produto ao carrinho
function adicionarAoCarrinho(produto, preco) {
    carrinho.push({ produto, preco }); // Adiciona o produto e o preço ao array
    atualizarCarrinho(); // Atualiza a exibição do carrinho
}

// Função para atualizar a exibição dos itens do carrinho na página
function atualizarCarrinho() {
    const itensCarrinho = document.getElementById('itensCarrinho'); // Obtém o elemento HTML do carrinho
    if (carrinho.length === 0) {
        itensCarrinho.innerText = 'Nenhum item no carrinho.'; // Mensagem se o carrinho estiver vazio
    } else {
        // Lista os itens do carrinho separados por vírgula
        itensCarrinho.innerText = carrinho.map(item => `${item.produto} - R$ ${item.preco}`).join(', ');
    }
}

// Função para finalizar a compra
function finalizarCompra() {
    const formaPagamento = document.getElementById('formaPagamento').value; // Obtém a forma de pagamento selecionada
    if (carrinho.length === 0) {
        alert('Seu carrinho está vazio!'); // Alerta se o carrinho estiver vazio
    } else {
        // Mensagem de sucesso e forma de pagamento escolhida
        alert(`Compra finalizada com sucesso! Forma de pagamento: ${formaPagamento}`);
        carrinho = []; // Limpa o carrinho
        atualizarCarrinho(); // Atualiza a exibição do carrinho
    }
}
