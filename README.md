<div align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://i.imgur.com/ELDVaKP.png" alt="Status do Build"></a>
</div>

<h2 align="center">
    Projeto em Laravel solicitado pelo supervisor do departamento de informática.
</h2>

<p>
    O projeto consiste em, primeiramente, criar o front-end de todas as páginas e, em seguida, implementar o back-end. Isso força os estagiários a se familiarizarem com ambos os mundos (front e back). No meu caso, estou desenvolvendo o front-end pensando no back-end, para diminuir as chances de bugs e retrabalhos desnecessários.
</p>

<hr>

# Configuração do Projeto
Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

<h1>Requisitos do Projeto</h1>
    <ul>
        <li>PHP &gt;= 7.3</li>
        <li>Composer</li>
        <li>Node.js &gt;= 12.x</li>
        <li>MySQL ou outro banco de dados compatível</li>
    </ul>

# Instalação

1. Clone o repositório: `https://github.com/Bernardo2801/controle-de-estoque.git`;
2. Instale as dependências PHP: `composer install`;
3. Configure o arquivo .env com suas configurações de banco de dados. Para gerar o arquivo .env, execute: `copy .env.example .env`;
4. Execute as migrações: `php artisan migrate`;
5. Instale as dependências do projeto listadas no arquivo package.json utilizando o gerenciador de pacotes npm: `npm install`;
6. Após a instalação, inicie o processo de desenvolvimento: `npm run dev`;
7. Gere a chave necessária para a execução do sistema: `php artisan key:generate`;
8. Inicie o servidor de desenvolvimento do Laravel: `php artisan serve`;

# Estrutura do Projeto

`app/` - Contém os arquivos principais da aplicação. <br>
`config/` - Contém os arquivos de configuração. <br>
`database/` - Contém migrações, seeders e factories. <br>
`public/` - Contém os arquivos públicos, como o index.php e assets. <br>
`resources/` - Contém as views, arquivos de tradução, etc. <br>
`routes/` - Contém os arquivos de rotas da aplicação. <br>
`tests/` - Contém os testes automatizados.<br>

# Dúvidas?
Qualquer dúvida ou sugestão entre em contato comigo! Obrigado pela atenção. :) <br>
Projeto em andamento.
