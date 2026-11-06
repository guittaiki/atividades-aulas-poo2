<?php
require_once "src/Carro.php";
require_once "src/Moto.php";

$carro = new Carro('Toyota', 'Corolla Cross', 2026, 4);
$moto = new Moto('BMW', 'S1000RR', 2027, 1000);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de veículos</title>
    <link rel="stylesheet" href="css/estilo.css">
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
                    <?= ($carro->getModelo()) ?>
                </h2>
                
                <p class="detalhe">
                    Ano: <?= $carro->getAno() ?>
                </p>
                
                <p class="detalhe">
                    Portas: <?= $carro->getQuantidadePortas() ?>
                </p>
                
                <p class="preco">
                    Diária: R$ <?= number_format($carro->calcularDiaria(), 2, ',', '.') ?>
                </p>
            </article>

            <article class="cartao">
                <span class="tipo">Moto</span>
                <h2>
                    <?= htmlspecialchars($moto->getMarca()) ?>
                    <?= htmlspecialchars($moto->getModelo()) ?>
                </h2>

                <p class="detalhe">
                    Ano: <?= $moto->getAno() ?>
                </p>
                
                <p class="detalhe">
                    Cilindradas: <?= $moto->getCilindradas() ?>
                </p>
                <p class="preco">
                    Diária: R$ <?= number_format($moto->calcularDiaria(), 2, ',', '.') ?>
                </p>
            </article>
        </section>
    </main>

    <footer class="rodape">
        <p>Catálogo demonstrativo de veículos para aluguel.</p>
    </footer>
</body>
</html>
