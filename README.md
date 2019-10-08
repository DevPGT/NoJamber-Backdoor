# NoJamber-Backdoor
Sistema de "Backdoor" que concede acesso remoto a nível administrativo no sistema que for executado, com uma engenharia diferenciada mas com mesmo objetivo, controlar remotamente um dispositivo conectado a internet. Mais informações abaixo.

Backdoor convencional

Um backdoor convencional consiste em abrir portas na rede local e entrar em contato com a vitima numa rede externa por esta mesma porta, utilizando protocolos e sockets, oque é conhecidos por sistemas protetores.

Diferencial deste sistema.

Por utilizar um sistema de cliente - servidor, ele é interpretado basicamente por uma conexão a internet, ou seja, participa das conexões do computador na propria porta comum da rede a 80, os dados entram e sai encriptografados por uma criptografia particular, sendo assim nao interpretaveis por outros programas e sistemas, esses mesmos dados não tem nenhuma porta ou socket aberto, ou seja ele é tratado como uma simples conexão inocente, sendo indetectavel por qualquer sistema protetor.

O algoritimo que executa no lado da vitima ( backdoor ).
  Basicamente ele consiste em um loop de a cada x segundos consultar um servidor web hospedado pelo atacante em busca de novos comandos para si, em toda nova consulta é baixado os dados desencriptografados pela E2E do programa e então interpretados , verificados e manipulados, quando esses comandos são encontrados, o codigo interpreta o comando , processa e retorna o resultado encriptografado novamente para o servidor web do atacante por uma requisição POST na porta 80.
  
  O algoritimo de hospedagem web que recebe e envia os dados.
    Algoritimo é escrito em php, ele apenas recebe informações e manipulam essas, armazenando-as até seu uso ser concluido ou requerido.
    
  O algoritimo do atacante ( painel de comandos ).
    Ele consiste em automatizar os processos de enviar comandos para o terminal da vitima pela pagina php ou servidor web.
  Quando é enviado o comando, os dados passam para o servidor web via post encryptografado e são armazenados na web, assim quando seu respectivo recebedor ou vitima solicitar por este dado, sera excluido o comando para que novos comandos sejam executados, logo em seguida do comando enviado o painel fica verificando por novos dados no servidor WEB, quando identificado novos dados, são desincriptografados e processados e exibidos na tela, sendo assim o seu funcionamento final resume-se em um terminal virtual e remoto com um intermediador web.
