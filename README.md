# To Do App

<h3 align="center">

> ![To-Do List](/img/tela-inicio.png)

</h3>

O **To Do** é um app de lista de tarefas desenvolvido em PHP com MySQL. 

O projeto foi construído através do tutorial no YouTube:  
**Vídeo** [Build A PHP To-Do List](https://www.youtube.com/watch?v=wt3txKJCh-4)  
**Canal** [Codecourse](https://www.youtube.com/user/phpacademy)  

Você poderá tentar desenvolver o seu próprio **To Do** assistindo os vídeos, ou poderá fazer o download e utilizar esta versão pronta.

# Como utilizar este repositório?
Primeiramente, você precisará ter um servidor PHP com suporte para o PHP 7. Se isso não for problema pra você, beleza! Mas se você é novato na área, então, sugiro que utilize um servidor pronto, como o XAMPP, por exemplo. No caso do XAMPP, ele já vem com o básico:
- Servidor web HTTP Apache
- Servidor PHP
- Servidor de Banco de Dados MariaDB

# O servidor Web/PHP
Ao finalizar a instalação do XAMPP, você já terá o básico configurado. Você irá mover a pasta deste repositório para dentro da pasta ```htdocs```, que fica dentro da pasta do XAMPP. Se não utilizou o XAMPP e você é um usuário avançado, já sabe onde colocar a pasta, não é verdade?
:wink:

# O servidor de banco de dados
Em seguida, você deverá configurar o arquivo ```init.php```, que está dentro da pasta ```app```. Lá você irá configurar o app para acessar o seu banco de dados (nome do banco, hostname, usuário e senha). Para configurar, basta renomear (ou deixar como está, caso seja idêntico) com as informações de acesso ao seu servidor de banco de dados.  

Finalizando as configurações, é hora de inserir o banco de dados e as tabelas no seu *servidor de banco de dados* (parece redundância, mas não é). Na pasta ```sql```, você encontrará um arquivo chamado ```todo.sql```. Basta você copiar e colar o conteúdo deste arquivo, dentro de uma query do seu banco de dados. Talvez isso seja novidade para você, então, sugiro que peça ajuda, ou dê uma *Googlada* para ver como faz esse processo. É bem simples, mas é complicadinho pra quem está começando na área.

# FAQ
### Como utilizar o To Do App  
Você já instalou o servidor PHP, já instalou o banco de dados, agora é só utilizar. Se você estiver utilizando o XAMPP, basta acessar no seu navegador (web brownser), o seguinte endereço: ```http://localhost/todo-app```, e pronto! Vai abrir a tela inicial do seu To Do.  

### Para adicionar uma nova tarefa?  
Você clica no campo onde está escrito *Digite uma tarefa aqui.* e o texto irá apagar. Comece a digitar a sua primeira tarefa, como: *Ir ao shopping*, *Estudar programação*, *Pagar contas*, *Ir trabalhar*, *Conhecer mais o GitHub* (são só exemplos). Você decide o que vai adicionar aí. Ao terminar de digitar, clique no *botãozão* **Add** ou tecle <kbd>Enter</kbd> no teclado.

<h3 align="center">

> ![Adicionar tarefa](/img/nova-tarefa.png)
</h3>

### Para remover uma tarefa?
Digamos que não deu tempo de você concluir a tarefa, e agora que já passou, você não pode marcar como concluído, já que você não concluiu, ou talvez você simplesmente não queira mais realizar aquela tarefa, ou digitou errado. No momento, o App ainda não conta com uma função **excluir**, até lá, você deverá marcar como concluída mesmo, e ela desaparecerá da sua lista de tarefas.  
Uma [issue #1](https://github.com/brcmesquita/todo-app/issues/1) já foi aberta para tratar este problema.

### Para alterar/editar uma tarefa da lista  
Digamos que você tenha digitado errado e agora queira alterar o que escreveu na tarefa. No momento, o App ainda não possui uma função para alterar os dados de uma tarefa já existente. O usuário deverá marcar a tarefa como concluída, e criar uma nova com o nome correto.
Uma [issue #2](https://github.com/brcmesquita/todo-app/issues/2) já foi aberta para tratar este problema.

### Como marcar uma tarefa como concluída?  
Ao criar uma tarefa, um botão de cor cinza, meio apagado, escrito *Mark as done* irá surgir à direita da tarefa. Basta dar apenas 1 clique neste botão, e a tarefa será marcada como concluída.

<h3 align="center">

> ![Marcar concluida](/img/marcar-concluido.png)
</h3>

### Como que eu desmarco uma tarefa concluída?  
Talvez seja necessário refazer uma tarefa, ou desfazer a tarefa que você não fez, mas marcou como concluída sem querer. As tarefas concluídas, irão ficar *tachadas* (aquele risco no meio das palavras), e o botão na direita irá receber um novo nome: *Mark as undone* (antes *Mark as done*). Basta clicar uma única vez neste botão, que ele irá desmarcar a tarefa.
<h3 align="center">

> ![Desmarcar concluida](/img/desmarcar-concluido.png)
</h3>

### Por que as tarefas que eu conclui não somem?  
A princípio, seria interessante saber as tarefas que você já concluiu, até pra você não as adicionar novamente. Mas uma página separada, para manter as tarefas não conluídas, será criada ([issue #3](https://github.com/brcmesquita/todo-app/issues/3)).

### Por que este App não foi criado para desktop ou mobile, ao invés de Navegador/Internet?*
Este App foi criado a partir de uma séria de 3 vídeos que assisti no YouTube, que foi uma introdução ao PHP 7 e MySQL (utilizei o MariaDB no projeto ao invés do MySQL), para ensinar o básico sobre CRUD (funções Create/Criar, Read/Ler, Update/Atualizar, Delete/Excluir). Resumindo, não houve intenção de criar para utilizá-lo no dia a dia, ou comercializá-lo, a intenção foi puramente acadêmica. Fique livre para transformá-lo em um App para desktop ou mobile.

### Por que tem que fazer toda a configuração no início? Não seria melhor se fosse automatizado, para facilitar o uso de outras pessoas?  
Mais uma vez, a intenção da criação deste App é puramente acadêmica, apesar de ser um App capaz de ser utilizado normalmente no dia a dia de qualquer pessoa. Sim, é possível criar um script de automação para a instalação, mas não é o meu objetivo no momento. Fique livre para criar um processo de automação, e se ficar pronto, por favor, compartilhe comigo.

# Licença
Livre para usar e modificar.