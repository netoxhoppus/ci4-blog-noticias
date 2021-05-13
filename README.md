# Blog de notícias baseado na documentação do Codeigniter 4

## Projeto didático

Esse projeto foi iniciado com a função didática sobre a nova versão do framework Codeigniter, a versão 4.
Todos os arquivos estão hospedados no [repositório do projeto](https://github.com/netoxhoppus/ci4-blog-noticias).


## Instalação

**Banco de dados**  

Após a clonagem do projeto encontramos o script `newsql.sql` no diretório `/ci4-blog-noticias/public/SQL`
Nesse script temos a codificação completa de `Criação do Banco` , `Criação da tabela` e `População da tabela news` .

As configurações do banco deverão estar no arquivo `.env`.  
Esse arquivo deve ser preenchido de acordo com as configurações do seu host.  

No nosso caso a parte referente a senha e nome do banco está assim:  

database.default.hostname = localhost  
database.default.database = blog_news  
database.default.username = root  
database.default.password =   
database.default.DBDriver = MySQLi  

**Diagrama DER**  
![Link ONLINE da aplicação](https://github.com/netoxhoppus/ci4-blog-noticias/blob/master/public/SQL/diagrama.png) 
  



## Executando no localhost

Uma das formas de executar o sistema em um host local é com o `spark`, usamos o seguinte comando para isso:

`php spark serve`

Se você usa o php do xampp ou outro server deverá usar o caminho do mesmo, como por exemplo o xampp: 

`/opt/lampp/bin/php spark serve`

Executando assim o sistema estará rodando no [link LOCAL da aplicação](http://localhost:8080/home) localizado em localhost na porta default 8080

Caso queira ver o sistema rodando online, acesse o [Link ONLINE da aplicação](http://blogdenoticias.cf/) 

O acesso ao dashboard se dá pelo:  
Login: netox  
Senha: 1q2w3e
