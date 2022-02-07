<?php

$config = require 'config.php';

require 'core/Router.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';


//através da classe QueryBuilder, podemos criar novas requisiçoes tornando o codigo mais enxuto.
//alem de permitir criar funções especificas dentro do querybuilder para chamar ou manipular os dados
return new QueryBuilder(

    //por ser static não precisamos fazer um new Connection e chamar a função dentro desse conection criado, 
    //podemos simplesmente fazer isso:
    Connection::make($config['database'])

);