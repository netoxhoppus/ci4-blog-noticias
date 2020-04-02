# Blog de notícias baseado na documentação do Codeigniter 4

## Projeto didático

Esse projeto foi iniciado com a função didática de apredizado sobre a nova versão do framework Codeigniter, a versão 4
Todos os arquivos estão hospedados no [repositório do projeto](https://github.com/netoxhoppus/ci4-blog-noticias).


## Instalação

**Banco de dados**

Após a clonagem do projeto encontramos o script `tablenews.sql` no diretório `/ci4-blog-noticias/public/SQL`
Nesse script temos a codificação completa de `Criação do Banco` , `Criação da tabela` e `População da tabela news` .

As configurações do banco deverão estar no arquivo `.env` que pode ser obtido motificando o arquivo `env` na raíz do projeto.
Esse arquivo não está pronto e deve ser preenchido de acordo com as configurações do seu host.


## Executando no localhost

Uma das formas de executar o sistema em um host local é com o `spark`, usamos o seguinte comando para isso:

`php spark serve`

Se você usa o php do xampp ou de outro server deverá usar o caminho do mesmo, como por exemplo o xampp: 

`/opt/lampp/bin/php spark serve`

Executando assim o sistema estará rodando no [link local da aplicação](http://localhost:8080/home) localizado em localhost na porta default 8080:

