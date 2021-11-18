
<style>
    * {
        padding: 0;
        margin: 0;
    }
    ul {
        border-top: 5px solid rgba(0,0,0,0.2);
        margin-top: 10px;
        list-style-type: none;
    }
    a { 
        color: grey;
        font-weight: 700;
        text-transform: none;
    }
    li {
        margin-top: 5px;
    }
    a:hover {
        text-decoration: underline;
        font-weight: 500;
        color: green;
    }

    .recursos{
        display: inline-block;
        margin-top: 30px;
        color:rgba(200,212,225,0.9);
    }

    .recursos:hover {
        text-shadow: 5px 3px 15px rgba(255, 255,255,.5);
    }

    .texto {
        margin-top: 50px;
        color: orange;
        font-weight: 800;
        font-size: 12pt;

    }
   
</style>

<body>
    <p>
        Este projeto é um modelo padrão de desenvolvimento de sitema web com o objetivo de aumentar a produtividade do desenvolvimento do solftware o modelo pode ser utilizado para criar qual tipo de sitemas web e de forma personalizavel. 
    </p>

</body>
    <span class="recursos">Tecnologias Utilizadas em Desenvolvimento:</span>
<ul> 
    <li ><a targer="_blank" href="https://www.mysql.com">MySql</a></li>
    <li><a targer="_blank" href="https://php.net">PHP</a></li>
    <li><a targer="_blank" href="https://www.w3schools.com/html">HTML5</a></li>
    <li><a targer="_blank" href="https://www.w3schools.com/css">CSS3</a></li>
    <li><a targer="_blank" href="https://www.w3schools.com/js/DEFAULT.asp">JAVASCRIPT</a></li>
    <li>
        <span class="recursos">BLIBLIOTECAS/FRAMWORKS:</span>
        <ul>
          <li><a targer="_blank" href="https://jquery.com">JQUERY</a></li>
          <li><a targer="_blank" href="https://getbootstrap.com">BOOTSTRAP</a></li>
        </ul>
    </li>
    <li>
        <span class="recursos">COMPONENTES:</span>
        <ul>
            <li><a href="https://packagist.org/packages/coffeecode/datalayer" targer="_blank">CoffeeCode/DataLayer</a></li>
            <li><a href="https://packagist.org/packages/coffeecode/router" targer="_blank">CoffeeCode/Router</a></li>
            <li><a href="https://platesphp.com" targer="_blank">Legue Plates</a></li>
        </ul>
    </li>
</ul>

<p class="texto">
    Um arquivo .htaccess deve ser criado e carregado na raiz do projeto para que o servidor possa fazer validações e o gerenciamento de rotas que necessita dessa configuração.    
</p>

<span class="recursos">caso não tenha o conteúdo do arquivo `.htaccess` acesse o link `https://packagist.org/packages/coffeecode/router` la você encontrará um exemplo que poderá usar sem problemas.</span>

