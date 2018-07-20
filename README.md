# Rei do Almoço (Trono)
    
    Objetivo principal é deixar no trono a opção de maior relevância para os consumidores.

    https://mm.tt/1124927426?t=NMdv69PFTi

# CakePHP 3.6.7 (Requisitos)

HTTP Server. Por exemplo: Apache. De preferência com mod_rewrite ativo, mas não é obrigatório.
PHP 5.6.0 ou superior.
extensão mbstring
extensão intl

Tanto no XAMPP quanto no WAMP, as extensões mcrypt e mbstring são setadas por padrão.

# Permissões

O CakePHP utiliza o diretório tmp para diversas operações. Descrição de models, views armazenadas em cache e informações de sessão são apenas alguns exemplos. O diretório logs é utilizado para escrever arquivos de log pelo mecanismo padrão FileLog.

Como tal, certifique-se que os diretórios logs, tmp e todos os seus sub-diretórios em sua instalação CakePHP são graváveis pelo usuário relacionado ao servidor web. O processo de instalação do Composer faz tmp e seus sub-diretórios globalmente graváveis para obter as coisas funcionando rapidamente, mas você pode atualizar as permissões para melhor segurança e mantê-los graváveis apenas para o usuário relacionado ao servidor web.

Um problema comum é que os diretórios e sub-diretórios de logs e tmp devem ser graváveis tanto pelo servidor quanto pelo usuário da linha de comando. Em um sistema UNIX, se seu usuário relacionado ao servidor web é diferente do seu usuário da linha de comando, você pode executar somente uma vez os seguintes comandos a partir do diretório da sua aplicação para assegurar que as permissões serão configuradas corretamente.

# Servidor de Desenvolvimento

Uma instalação de desenvolvimento é o método mais rápido de configurar o CakePHP. Neste exemplo, nós vamos utilizar o console CakePHP para executar o servidor integrado do PHP que vai tornar sua aplicação disponível em http://host:port. A partir do diretório da aplicação, execute:


    bin/cake server

    Por padrão, sem nenhum argumento fornecido, isso vai disponibilizar a sua aplicação em http://localhost:8765/.

Se você tem algo conflitante com localhost ou porta 8765, você pode dizer ao console CakePHP para executar o servidor web em um host e/ou porta específica utilizando os seguintes argumentos:

    bin/cake server -H 192.168.13.37 -p 5673

    Isto irá disponibilizar sua aplicação em http://192.168.13.37:5673/

# Instalação

https://book.cakephp.org/3.0/pt/installation.html

# Guia de Início Rápido

https://book.cakephp.org/3.0/pt/quickstart.html

# Tutorial - Criando um Blog - Parte 1

https://book.cakephp.org/3.0/pt/tutorials-and-examples/blog/blog.html