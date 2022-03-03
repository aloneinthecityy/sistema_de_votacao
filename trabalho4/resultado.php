<!DOCTYPE html> 

<html lang="PT-BR"> 

    <head> 

        <title> Resultado </title> 

        <link rel="stylesheet" type="text/css" href="resultado.css"> 

        <meta charset="utf-8"> 
    </head>
<?php
session_start();
    $arquivo="votos.txt";
    $count=0;
    $cont_ada=0;
    $cont_edger=0;
    $cont_grace=0;
    $cont_tim=0;
    $cont_branco=0;

    if(file_exists($arquivo)){
        $arquivo =  fopen("votos.txt", "r");
while(($linha = fgets($arquivo)) !== false){
$count++;
if(strcmp($linha, "Ada Lovelace\n")==0){
    $cont_ada++;
}
if(strcmp($linha, "Edsger Dijkstra\n")==0){
    $cont_edger++;
}
if(strcmp($linha, "Grace Murray Hopper\n")==0){
    $cont_grace++;
}
if(strcmp($linha, "Tim BernersLee\n")==0){
    $cont_tim++;
}
if(strcmp($linha, "VOTO BRANCO\n")==0){
    $cont_branco++;
        }
    }
}
echo" <table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>";
echo "<tr class='dif'>
<td></td>
<td>Ada Lovelace</td>
<td>Edsger Dijkstra</td>
<td>Grace Murray Hopper</td>
<td>Tim BernersLee</td>
<td>Brancos</td>
</tr>";

echo "<tr>
<td>Total de Votos</td>

<td>$cont_ada</td>
<td>$cont_edger</td>
<td>$cont_grace</td>
<td>$cont_tim</td>
<td>$cont_branco</td>
</tr>";
echo "<tr class='dif'>";
echo "<td>%</td>
<td>".($cont_ada*100)/$count."%</td>
<td>".($cont_edger*100)/$count."%</td>
<td>".($cont_grace*100)/$count."%</td>
<td>".($cont_tim*100)/$count."%</td>
<td>".($cont_branco*100)/$count."%</td>
</tr>";
echo "<tr class='dif'>";
echo "<td>Colocação</td>";

$colocacao = array($cont_ada, $cont_edger, $cont_grace, $cont_tim);
$cont=0;
$empate = 0;
for($i=0; $i<count($colocacao);$i++){
    for($k=0; $k<count($colocacao);$k++){
        if($colocacao[0]>$colocacao[$i]){
            $cont++;
        }
        if($colocacao[0]==$colocacao[$i]){
            $empate++;
        }
    }
    if($cont == 3){
        if($empate>1){
            echo "<td> Empate</td>";
        }
        else{
            echo "<td><h3>Primeiro lugar</h3></td>";
        }
    }
    if($cont == 2){
        if($empate>1){
            echo "<td>Empate</td>";
        }
        else{
            echo "<td><h3>Segundo lugar</h3></td>";
        }
    }
        if($cont == 1){
            if($empate>1){
            echo "<td>Empate</td>";
            }
            else{
                echo "<td><h3>Terceiro lugar</h3></td>";
            }
        }
        if($cont == 0){
            if($empate>1){
            echo "<td>Empate</td>";
            }
            else{
                echo "<td><h3>Quarto lugar</h3></td>";
            }
        }
        $cont1 = 0;
        $empate1 = 0;
        for($i=0; $i<count($colocacao);$i++){
            if($colocacao[1] > $colocacao[$i]){
                $cont1++;
            }
            if($colocacao[1]==$colocacao[$i]){
                $empate1++;
            }
            if($cont1 == 3){
                if($empate1>1){
                    echo "<td> Empate</td>";
                }
                else{
                    echo "<td><h3>Primeiro lugar</h3></td>";
                }
            }
            if($cont1 == 2){
                if($empate1>1){
                    echo "<td>Empate</td>";
                }
                else{
                    echo "<td><h3>Segundo lugar</h3></td>";
                }
            }
                if($cont1 == 1){
                    if($empate1>1){
                    echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Terceiro lugar</h3></td>";
                    }
                }
                if($cont1 == 0){
                    if($empate1>1){
                    echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Quarto lugar</h3></td>";
                    }
                }
        $cont2=0;
        $empate2=0;
        for($i=0; $i<count($colocacao); $i++){
            if($colocacao[2] > $colocacao[$i]){
                $cont2++;
            }
            if($colocacao[2]==$colocacao[$i]){
                $empate2++;
            }
        }
            if($cont2 == 3){
                if($empate2>1){
                    echo "<td> Empate</td>";
                }
                else{
                    echo "<td><h3>Primeiro lugar</h3></td>";
                }
            }
            if($cont2 == 2){
                if($empate2>1){
                    echo "<td>Empate</td>";
                }
                else{
                    echo "<td><h3>Segundo lugar</h3></td>";
                }
            }
                if($cont2 == 1){
                    if($empate2>1){
                    echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Terceiro lugar</h3></td>";
                    }
                }
                if($cont2 == 0){
                    if($empate2>1){
                    echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Quarto lugar</h3></td>";
                    }
                }
        $cont3=0;
        $empate3=0;
        for($i=0; $i<count($colocacao); $i++){
            if($colocacao[3] > $colocacao[$i]){
                $cont3++;
            }
            if($colocacao[3]==$colocacao[$i]){
                $empate3++;
            }
            if($cont3 == 3){
                if($empate3>1){
                    echo "<td> Empate</td>";
                }
                else{
                    echo "<td><h3>Primeiro lugar</h3></td>";
                }
            }
            if($cont3 == 2){
                if($empate3>1){
                    echo "<td>Empate</td>";
                }
                else{
                    echo "<td><h3>Segundo lugar</h3></td>";
                }
            }
                if($cont3 == 1){
                    if($empate3>1){
                    echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Terceiro lugar</h3></td>";
                    }
                }
                if($cont3 == 0){
                    if($empate3>1){
                        echo "<td>Empate</td>";
                    }
                    else{
                        echo "<td><h3>Quarto lugar</h3></td>";
                    }
                }
            }
        }
    }   
echo "</tr>";
echo "</table>";
?>
</html>