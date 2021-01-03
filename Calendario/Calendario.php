<h1><?php echo "Calendário de um mês"; ?></h1>
<br />

<?php

function linha($semana)
{
    echo "<tr>";

    for ($i = 0; $i <= 6; $i++) {

        if (isset($semana[$i])) {
            echo "<td>{$semana[$i]}</td>";
        } else {
            echo "<td></td>";
        }
    }

    echo "</tr>";
}

function calendario()
{
    // variavel
    $dia = 1;
    $semana = array();
    

    while ($dia <= 31) {
        //adiciona mais um valor em nosso array
        array_push($semana, $dia);

        //a conta a quantidade de itens do nosso array
        if (count($semana) == 7) {
            linha($semana);
            $semana = array();
        }

        $dia++;
    }

    linha($semana);
}


?>

<table border="1">
    <tr>

        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>

    </tr>

    <?php calendario(); ?>



</table>