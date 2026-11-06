# Catálogo de veículos

Projeto didático em PHP que demonstra programação orientada a objetos por meio de um catálogo simples de veículos para aluguel.

## Funcionalidades

- Modela veículos com uma classe base abstrata e classes especializadas para carro e moto.
- Exibe informações dos veículos e o valor da diária no catálogo.
- Formata os preços em reais, com duas casas decimais.

## Veículos do catálogo

| Tipo | Marca e modelo | Ano | Característica | Diária |
|---|---|---:|---|---:|
| Carro | Toyota Corolla Cross | 2026 | 4 portas | R$ 150,00 |
| Moto | BMW S1000RR | 2027 | 1000 cilindradas | R$ 70,00 |

Os valores das diárias são definidos pelos métodos `calcularDiaria()` de cada classe.

## Estrutura do projeto

```text
.
├── index.php
├── README.md
├── css/
│   └── estilo.css
└── src/
    ├── Carro.php
    ├── Moto.php
    └── Veiculo.php
```

## Organização das classes

- `Veiculo` é a classe abstrata que armazena marca, modelo e ano e declara o método `calcularDiaria()`.
- `Carro` herda de `Veiculo`, acrescenta a quantidade de portas e define sua diária.
- `Moto` herda de `Veiculo`, acrescenta as cilindradas e define sua diária.
- `index.php` instancia os veículos e monta a página do catálogo.
- `css/estilo.css` contém os estilos da página.

## Conceitos demonstrados

- **Abstração:** `Veiculo` define as características e o comportamento comum sem poder ser instanciada diretamente.
- **Herança:** `Carro` e `Moto` reutilizam os dados e o contrato definidos em `Veiculo`.
- **Encapsulamento:** os atributos das classes são privados e acessados por métodos getters.
- **Polimorfismo:** cada classe concreta implementa `calcularDiaria()` com seu próprio valor.

## Como executar

É necessário ter o PHP instalado. No terminal, a partir da pasta do projeto, inicie o servidor embutido:

```bash
php -S localhost:8000
```

Depois, acesse <http://localhost:8000>.

> **Observação:** no estado atual, `Carro.php` e `Moto.php` não carregam corretamente a classe base `Veiculo`. Para executar a página, cada uma deve incluir `Veiculo.php` usando um caminho relativo ao próprio arquivo, por exemplo `require_once __DIR__ . '/Veiculo.php';`.
