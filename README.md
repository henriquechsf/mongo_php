# Mongo Raiz com PHP

###Trabalho 2ºBIM-1 - Banco de Dados Avançado
<a href="https://github.com/marciock">Prof. Marcio Alves da Costa</a>

### Atividade

CRUD no banco de dados não relacional MongoDB usando a linguagem PHP.


### Principais comandos

Listar registros
```
$db = new \MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery('raiz.academicos', $db);

foreach ($cursor as $c) {
    echo $c->name . " - ";
    echo $c->age . "\n";
}

```

Inserir registros
```
$db = new \MongoDB\Driver\BulkWrite;

$db->insert(['name' => 'Jon', 'age' => 30]);
```

Alterar registros
```
$db = new \MongoDB\Driver\BulkWrite;

$db->update(['name' => 'Jon'], ['$set' => ['name' => 'Jon Doe']]);
```

Apagar registros
```
$db->delete(['name' => 'Jon Doe']);
```

Conexão com o banco
```
$manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
```