projeto-php/banco de dados-noite-2023-2024

Repositório para subir os projetos de php

Crie um sistema de controle de usuários.

crie em arquivos separados o cabeçalho e o rodapé do seu sistema.

Página de login: O usuário deverá logar em seu sistema, se as credenciais estiverem corretas, deverá ir para a página inicial do sistema. Lembrando que no login, 
o usuário ainda não pode ver nenhuma informação do sistema.

Cabeçalho: Deve conter o logo do sistema, caso queira pode inserir outras informações e o menu de navegação.

Rodapé: Deve conter as informações institucionais do seu sistema (as informações podem ser fictícias).

Menu: O usuário deverár ir e vir dentro do sistema, navegar em todas as páginas e conseguir voltar as anteriores através do menu.

Página inicial: Deverá conter o nome do usuário e o seu tipo de usuário (essas informações deverão aparecer em todas as outras páginas), 
também as informações do seu sistema, uma breve explicação de como ele funciona e como deve ser operado.

Demais páginas:

Pagina de cadastro de usuário.

    Nome usuario, endereço completo, tipo de usuario.

Relatórios.

  Gerar um relatório/ferramenta de usuário e ao final de cada row da tabela, tenha dois botões um para inativar um usuário e um para atualizar as informações do usuário
  
  Gerar um relatório com um filtro tivo ou inativo de acordo com o filtro escolhido deve-se realizar a operação solicitada.

-------------------------------------------------------------------------------------------------------------------------------------

Bando de dados 

Criar uma base de dados chamada prj_php_db

tb_usuarios

id, nome_usuario, cpf, data_ascimento, telefone, endereço, num_cada, bairro, fk_id_tb_cidades, ativo, created_at, disabled_at
------------------------------------------------
tb_cidades

id, nome_cidade, fk_id_tb_estados
------------------------------------------------
tb_estados

id, nome_estado, sigla
