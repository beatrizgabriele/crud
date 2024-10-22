<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="jumbotron">
                    <div class="row">
                        <h2>Aula De PDE - CRUD <span class="badge text-bg-secondary">v 1.0.0 - SENAI - Aula PBE</span></h2>
                    </div>

                </div>

                <div class="row">
                    <p>
                        <a class="btn btn-success" href="create.php">Add</a>
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">ENDEREÇO</th>
                                <th scope="col">TELEFONE</th>
                                <th scope="col">E-MAIL</th>
                                <th scope="col">IDADE</th>
                                <th scope="col">AÇÃO</th>
                                
                            </tr>
                        </thead>
                        <Tbody>
                            <?php

                            include 'banco.php';
                            $pdo = Banco::conectar();
                            $sql = 'SELECT * FROM tb_alunos ORDER BY codigo DESC';

                            foreach ($pdo->query($sql) as $row) {
                                echo '<str>';
                                echo '<th scope="row">' . $row['codigo'] . '</th>';
                                echo '<th>' . $row['nome'] . '</th>';
                                echo '<th>' . $row['endereco'] . '</th>';
                                echo '<th>' . $row['fone'] . '</th>';
                                echo '<th>' . $row['email'] . '</th>';
                                echo '<th>' . $row['idade'] . '</th>';
                                echo '<td width-205>';
                                echo '<a class="btn btn-primary" hreaf="read.php?codigo' . $row['codigo'] . '">INFO</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" hreaf="update.php?codigo' . $row['codigo'] . '">ATUALIZAR</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" hreaf="delete.php?codigo' . $row['codigo'] . '">EXCLUIR</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Banco::desconectar();
                            ?>
                        </Tbody>

                    </table>
                </div>
            </div>

        </div>
     </section>
     <div class="d-flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-x1-5 bg-primary">
        <div class="text-white mb-3 mb-md-0">
             Copyright 2024. All rights reserved
        </div>
     </div>
</body>

</html>