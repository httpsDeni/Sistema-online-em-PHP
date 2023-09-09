# Sistema de Cadastro de Colaboradores e Chefes em PHP

Este é um sistema simples de cadastro de colaboradores e chefes desenvolvido em PHP que permite aos usuários registrar os detalhes dos colaboradores e seus respectivos chefes. Os dados são armazenados em um banco de dados SQLite local.

## Funcionalidades

- Cadastre colaboradores com nomes e escolha seus chefes.
- Liste os colaboradores cadastrados.
- Opção para sair do programa.

## Como Usar

1. Clone este repositório em sua máquina local:

git clone https://github.com/seu-usuario/seu-repositorio.git


2. No terminal, navegue até a pasta do projeto:

cd seu-repositorio


3. Se o arquivo `cadastro.db` ainda não existir, você pode criar manualmente um arquivo vazio com esse nome na mesma pasta.

4. Inicie um servidor PHP local para executar o sistema:

php -S localhost:8000


5. Abra um navegador da web e acesse a seguinte URL:

http://localhost:8000/index.php


6. Siga as instruções na página para cadastrar colaboradores, listar colaboradores ou sair do programa.

## Estrutura do Projeto

- `index.php`: A página inicial que exibe o formulário de cadastro e a lista de colaboradores.
- `process.php`: O arquivo que processa o formulário de cadastro e armazena os dados no banco de dados SQLite.
- `lista_colaboradores.php`: O arquivo que lista os colaboradores cadastrados.
- `cadastro.db`: O banco de dados SQLite para armazenar os dados.

## Requisitos

- PHP instalado em sua máquina.

## Autor

- Deni Trepak

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.
