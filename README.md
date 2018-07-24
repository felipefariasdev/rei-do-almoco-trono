# Rei do Almoço (Trono)
    
    Mapa mental: https://mm.tt/1124927426?t=NMdv69PFTi
    
    Tarefas: https://trello.com/b/Q88T02AO
    
    Configuração da conexão: config/app.php
    
    Importar Banco de dados: database/rei-do-almoco-trono.sql

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
