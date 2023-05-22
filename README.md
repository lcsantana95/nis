# Projeto de Cadastro de Cidadãos e Consulta de NIS

O projeto consiste no desenvolvimento de uma aplicação que permite cadastrar cidadãos por meio de um formulário. O formulário terá um campo para inserir o nome do cidadão, e ao ser cadastrado, será gerado automaticamente um número NIS exclusivo para essa pessoa. O número NIS será exibido na tela junto com uma mensagem de sucesso.

Além disso, a aplicação possibilitará a pesquisa de registros existentes por meio do número NIS. Se o NIS informado já estiver cadastrado, a aplicação exibirá o nome do cidadão correspondente juntamente com seu número NIS. Caso o NIS não esteja cadastrado, a aplicação exibirá a mensagem "Cidadão não encontrado".
O projeto foi desenvolvido seguindo a arquitetura MVC (Model-View-Controller).. que em três camadas: a camada de interação do usuário (view), a camada de manipulação dos dados (model) e a camada de controle (controller). Essa divisão ajuda a organizar o código e facilita a manutenção e extensibilidade do sistema.

# Tecnologias utilizadas
- PHP
- HTML
- CSS
- JavaScript
- Mysql

# Passo a Passo para Instalação e Execução do Projeto (Linux):

Abra o terminal e execute os seguintes comandos para atualizar e baixar os pacotes necessários:

sudo apt update
sudo apt install apache2
Verifique os aplicativos disponíveis para o Apache:

sudo ufw app list
Serão exibidos os seguintes aplicativos:

Apache
Apache Full
Apache Secure
CUPS
Obtenha informações sobre o aplicativo "Apache Full":

sudo ufw app info "Apache Full"
Serão exibidas as portas utilizadas pelo Apache:

Portas:
  80,443/tcp
Permita o tráfego para o Apache:

sudo ufw allow in "Apache Full"
Abra o navegador e digite "localhost" na barra de endereços. Se a página "Apache 2 Ubuntu Default Page" for exibida, significa que o Apache está funcionando corretamente.

Instale o MySQL:

sudo apt install mysql-server
Durante a instalação, será solicitado que você defina uma senha para o usuário "root". Você pode optar por deixar em branco ou definir uma senha.

Verifique se o MySQL está rodando corretamente:

sudo systemctl status mysql
Se uma indicação de status verde for exibida, significa que o MySQL está funcionando corretamente.

Instale o PHP e os módulos necessários:

sudo apt install php libapache2-mod-php php-mysql
Reinicie o Apache para aplicar as alterações:


sudo systemctl restart apache2
Verifique o status do Apache para garantir que esteja funcionando corretamente:

sudo systemctl status apache2
Se uma indicação de status verde for exibida, significa que o Apache está funcionando corretamente.

Navegue até a pasta do Apache, localizada em "/var/www", e coloque todos os arquivos do projeto.

Defina o usuário como "Dono" da pasta "/var/www" para poder editar os arquivos dentro dela.

Acesse os arquivos do projeto pelo navegador, digitando "localhost" na barra de endereços.

Para configurar o MySQL, defina uma senha para o usuário "root" no localhost. Execute os seguintes comandos, substituindo "SUA-SENHA" pela senha desejada:


ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'SUA-SENHA';
quit
Para instalar o phpMyAdmin, execute o seguinte comando e siga as etapas:

sudo apt install phpmyadmin
ln -s /usr/share/phpmyadmin /var/www
Abra o navegador e digite a URL "http://localhost/html/" para acessar o phpMyAdmin.

Informações para criar o banco de dados:


$server = 'localhost';
$database = 'gesuas';

$user = 'gesuas'; 
$password = '123456';

usar utf8mb4_general_ci na hora de criar sua base de dados


Código para criar a tabela no MySQL:

CREATE TABLE nome_nis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nis VARCHAR(11) NOT NULL
);

# Utilizando o Projeto:

Ao acessar o localhost no navegador, você será apresentado a dois formulários.
O primeiro formulário permite cadastrar um nome válido, que deve começar com uma letra maiúscula e ter mais de 3 letras. Após o cadastro, um número NIS exclusivo será gerado e exibido para a pessoa cadastrada.
As informações fornecidas no primeiro formulário são recebidas e armazenadas no banco de dados.
No segundo formulário, você pode inserir o número de NIS previamente cadastrado.
Ao enviar o formulário, o sistema irá acessar o banco de dados e buscar o número de NIS correspondente.
Se o NIS estiver cadastrado, o sistema irá exibir o nome associado a ele.
Caso o NIS não esteja cadastrado, será exibida a mensagem "Cidadão não encontrado".
Espero que agora o passo a passo esteja mais claro e compreensível. Se você tiver mais alguma dúvida, sinta-se à vontade para perguntar.
