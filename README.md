Projeto de Login envolvendo PHP - Programação para Internet / Aluno: Mateus da Silva Marinho   Turma: INFO 4M / Professor: Thiago Theiry 

1. conexao.php
   
   O arquivo conexao.php é responsável por fazer a conexão do sistema com o banco de dados MySQL. Nele ficam as informações do servidor, usuário, senha e o nome do banco que criamos pelo Shell do XAMPP. A parte mais importante é o new mysqli, que é o responsável por tentar estabelecer essa conexão. Também existe uma verificação para saber se ocorreu algum erro. Eu entendi que esse arquivo é necessário para que os outros arquivos consigam acessar o banco de dados.
   
2. index.php
   
   O index.php é responsável pelo login. É nele que o usuário coloca o e-mail e a senha, e o sistema verifica se essas informações estão cadastradas no banco. A parte mais importante é a consulta SELECT, que procura na tabela usuarios um usuário que tenha o e-mail e a senha informados. Se encontrar, o sistema cria uma sessão com o ID e o nome do usuário e direciona para o painel. Eu entendi que essa sessão é importante porque permite que o sistema saiba quem está logado.
   
3. protect.php
   
   O protect.php serve para proteger o acesso ao painel. Ele verifica se existe uma sessão e se existe um ID de usuário nela. A parte importante é o if(!isset($_SESSION['id'])), porque é ele que verifica se existe um usuário identificado na sessão. Se não existir, o acesso é bloqueado. Eu entendi que esse arquivo funciona como uma segurança para impedir que alguém entre no painel sem fazer login.
   
4. painel.php
   
   O painel.php é a página acessada depois que o usuário faz login. Ele inclui o protect.php, então a proteção é verificada antes de mostrar o conteúdo. A parte importante é o uso de $_SESSION['nome'], que permite mostrar o nome do usuário que fez login. Por exemplo, o sistema consegue mostrar "Bem-vindo ao painel, Mateus" usando o nome que foi armazenado na sessão.
   
5. logout.php
   O logout.php é responsável por encerrar a conta do usuário. A parte mais importante é o session_destroy(), que destrói a sessão atual. Isso faz com que o sistema deixe de considerar aquele usuário como conectado. Depois disso, o usuário é direcionado novamente para o index.php. Eu entendi que o logout não é apenas voltar para a página de login, mas realmente encerrar a sessão que estava mantendo o usuário conectado.

   No geral, eu entendi que os arquivos funcionam juntos para formar o sistema de login. O banco e a tabela armazenam os usuários, o conexao.php faz a ligação com o banco, o index.php verifica o login, o protect.php controla o acesso, o painel.php mostra a área do usuário e o logout.php encerra a sessão. O projeto me ajudou a entender melhor como o PHP, banco de dados e sessões trabalham juntos em um sistema.
