<?php
// Carregue as classes usando require_once.
// Crie um objeto Carro e um objeto Moto com os dados indicados no enunciado.
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de veículos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Veículos para alugar</h1>
        <p>Escolha o veículo ideal para sua próxima viagem.</p>
    </header>

    <main class="conteudo">
        <section class="lista-veiculos">
            <article class="cartao">
                <span class="tipo">Carro</span>
                
                <h2>
                    <!-- Exiba marca e modelo do carro -->
                </h2>
                
                <p class="detalhe">
                    Ano: <!-- Exiba o ano -->
                </p>
                
                <p class="detalhe">
                    Portas: <!-- Exiba a quantidade de portas -->
                </p>
                
                <p class="preco">
                    Diária: R$ <!-- Exiba a diária formatada com duas casas decimais -->
                </p>
            </article>

            <article class="cartao">
                <span class="tipo">Moto</span>
                <h2>
                    <!-- Exiba marca e modelo da moto -->
                </h2>

                <p class="detalhe">
                    Ano: <!-- Exiba o ano -->
                </p>
                
                <p class="detalhe">
                    Cilindradas: <!-- Exiba as cilindradas -->
                </p>
                <p class="preco">
                    Diária: R$ <!-- Exiba a diária formatada com duas casas decimais -->
                </p>
            </article>
        </section>
    </main>

    <footer class="rodape">
        <p>Catálogo demonstrativo de veículos para aluguel.</p>
    </footer>
</body>
</html>
