# Knowledge Bank (KBank)

**Autores:** *João Pedro Fernandes e Matheus Ramos*

**Data:** *Maio de 2014*

**Versão:** *1.0* 


## Introdução

O KBANK (Knowledge Bank) servirá para organizar e facilitar a consulta de informações dos produtos da empresa, evitando a consulta em fóruns, site do fornecedor, outros e-commerces e contato por telefone, gastando um tempo que poderia ser melhor aproveitado.
Com este sistema, todas as informações já buscadas, serão cadastradas em seus respectivos produtos, assim, quando alguém precisar atender um cliente, basta consultar este grande manual, economizando tempo, agilizando o atendimento e qualificando cada vez mais o SAC da empresa.

* [Download](https://github.com/teteusix/knowledge-bank)
* [Instalação](https://github.com/teteusix/knowledge-bank)
* [Documentação](https://github.com/teteusix/knowledge-bank)

## Equipe responsável

O sistema será desenvolvido por:

* **Matheus Ramos**, responsável pelo desenvolvimento da aplicação;
* **João Pedro Fernandes e Matheus Ramos**, responsável pela organização do projeto, documentação e inovação.

Por ser uma aplicação open-source, pode haver contribuidores

## Resumo do Projeto

Após o download e a instalação da aplicação, o usuário responsável geral deverá gerar os acessos dos demais usuários, podendo escolher até três níveis de acesso:

1. Visualizador
2. Gerenciador
2. Gerenciador gereal
3. Administrador geral

**Visualizador**
Nesse nível o usuário poderá visualizar as perguntas e respostas, sem poder criar, editar ou excluir nenhuma pergunta, resposta ou usuário;

**Gerenciador**
Nesse nível o usuário poderá visualizar, criar, editar ou excluir perguntas, respostas. Ficando de fora o gerenciamento dos usuários;

**Administrado Geral**
Nesse nível o usuário poderá visualizar, criar, editar ou excluir perguntas, respostas e usuários;

## Estrutura Básica

Estrutura básica do sitema, apenas com as seções.

1. Instalação
	* Conexão com o Banco de dados
	* Informações da empresa
	* Gerenciador de usuários;
	* Finalizar
2. Página de login
3. Página inicial
4. Página de gerenciamento de usuarios, perguntas, produtos e respostas
	* Página de cadastro/editar de produtos
	* Página de cadastro/editar de perguntas
	* Página de cadastro/editar de usuarios
5. Página de gerenciamento de usuários
	* Página de cadastro
	* Página de editar
6. Página de Contato
	* Contato ao administrador
	* Contato ao suporte

## Estrutura Completa

Estrutura completa do sitema, com todas as informações que vão estar presentes

### 1. Instalação
Tela de instalação da aplicação, explicando quais serão os passos que o usuario vai fazer.

* Texto explicativo


#### 1-2. Conexão com o Banco de dados
Tela de conexão com o banco de Dados, onde o usuario preenche com os detalhes de conexão com o banco.

* Texto explicativo
* Nome do Banco
* Nome do Usuario
* Senha
* Servidor do bd
* Prefixo das tabelas
* Botão de enviar dados

Se não houver conexão aparece um erro, explicando o motivo

#### 1-4. Informações da empresa;
Tela onde o usuario nivel 4 preenche e/ou edita as informações da empresa

* Nome da empresa
* Logo da empresa
* Responsavel
* E-mail responsavel
* E-mail do suporte
* E-mail do adm
* Botão de enviar dados

#### 1-4. Gerenciador de usuários;
Tela onde o usuario nivel 4 preenche e/ou edita suas informações

* Adm Geral
	* Nome completo
	* e-mail
	* username (já vem como admin mas podendo editar)
	* Senha
	* Foto
	* Botão de enviar dados
* Novo Usuario
	* Nome completo
	* e-mail
	* username
	* Nivel
	* Senha
	* Foto
	* Botão de enviar dados


#### 1-5. Finalizar
Tela onde exibe todas as informações cadastradas

* Mensagem de agradecimento
* Informações da empresa
	* Nome da empresa
	* Logo da empresa
	* Responsavel
	* E-mail responsavel
	* E-mail do suporte
	* E-mail do adm
* Informação do banco de dados
	* Texto explicativo
	* Nome do Banco
	* Nome do Usuario
	* Servidor do bd
	* Prefixo das tabelas
* Usuarios
	* Adm Geral
		* Nome completo
		* e-mail
		* username (já vem como admin mas podendo editar)
		* Foto
	* Outros
		* Nome completo
		* e-mail
		* username
		* Nivel
		* Foto

### 2. Página de login
Será exigido login e senha, para restringir o acesso ao sistema. Caso a pessoa não possua no momento, haverá a opção de receber por e-mail. Cliando nessa opção o usuario vai preencher um formulario com Nome completo e e-mail, porém só será enviada avisando ao usuario nivel 3 e nivel 4 (também por e-mail) quem solicitou, o e-mail informado e a data.

* Acesso
	* Login
	* Senha
	* Botão de enviar dados
* Solicitar acesso/ Esqueci minha senha
	* Nome
	* E-mail
	* Botão de enviar dados

### 3. Página inicial
Após o acesso, o usuário será direcionado para a página de consulta, sendo possível efetuá-la das seguintes formas, pelo código, nome, parte do nome, pergunta ou resposta. Também pode ver a lista das ultimas respostas e perguntas cadastradas.

* Busca
	* Campo de busca
	* Botão de enviar
	* Alertas
* Tabela Resultados da Busca
	* Codigo do produto
	* Nome
	* Total de perguntas
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Enquanto não efetuar nenhuma pesquisa, mostra todos
	* Produto visualizado via modal
		* Codigo do produto
		* Nome
		* Total de perguntas
		* Listagem das perguntas
			* Titulo da Pergunta
			* Data da Pergunta
			* Resposta da Pergunta
* Produtos com perguntas cadastradas/editadas recentemente
	* Codigo do produto
	* Nome
	* Total de perguntas
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Mostrar os ultimos 10
	* Produto visualizado via modal
		* Codigo do produto
		* Nome
		* Total de perguntas
		* Listagem das perguntas
			* Titulo da Pergunta
			* Data da Pergunta
			* Resposta da Pergunta
* Link para cadastro de produtos
* Link para cadastro de perguntas
* Link para cadastro de usuarios



### 4. Página de gerenciamento de usuarios, perguntas, produtos e respostas
A partir daqui o usuario cadastra novos usuarios, perguntas, produtos e respostas


* Cadastrar novo produto
* Cadastrar nova resposta
* Busca
	* Campo de busca
	* Botão de enviar
	* Alertas
* Tabela Resultados da Busca
	* Codigo do produto
	* Nome
	* Total de perguntas
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Enquanto não efetuar nenhuma pesquisa, mostra todos

#### 4-1. Página de cadastro/editar de produtos
Na página de cadastro/editar de produtos, o usuario preenche os seguintes dados
*Apenas usuarios nivel 2, nivel 3 e 4 tem acesso*

* Cadastro de produtos
	* Nome do produto
	* Codigo (Se não preencher continua a sequencia, ex: #2094)
	* Botão de enviar
	* Mensagens de alerta
* Tabela Resultados da Busca
	* Codigo do produto
	* Nome
	* Total de perguntas
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Enquanto não efetuar nenhuma pesquisa, mostra todos

#### 4-2. Página de cadastro/editar de perguntas
Na página de cadastro/editar de perguntas, o usuario preenche os seguintes dados.
*Apenas usuarios nivel 3 e 4 tem acesso*

* Cadastro de perguntas
	* Campo de busca para o produto
		* Lista de resultados
		* Seleciona um
	* Titulo da pergunta
	* Resposta da pergunta
	* Botão de enviar
	* Mensagens de alerta
* Tabela Resultados da Busca
	* Codigo do produto
	* Nome
	* Total de perguntas
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Enquanto não efetuar nenhuma pesquisa, mostra todos

#### 4-3. Página de cadastro/editar de usuarios
Na página de cadastro/editar de usuarios, o usuario preenche os seguintes dados

* Cadastro de usuarios
	* Nome completo
	* e-mail
	* username
	* Nivel
	* Senha
	* Foto
	* Botão de enviar dados
* Tabela Resultados da Busca
	* Nome completo
	* e-mail
	* username
	* Nivel
	* Botão de veja mais
	* Botão de excluir
	* Botão de editar
	* Enquanto não efetuar nenhuma pesquisa, mostra todos

### 5. Página de contato
Nessa area o usuario envia contato ao administrador e ao suporte

* Formulario de e-mail para administrador
	* Assunto
	* Mensagem
	* Botão de enviar
	* Alertas
* Formulario de e-mail para suporte
	* Assunto
	* Mensagem
	* Botão de enviar
	* Alertas
