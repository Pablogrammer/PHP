<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin de notas</title>
</head>
<body>
    <h1>Boletin de notas</h1>

    <table class="tftable" border="1">
<tr><th>Asignatura</th><th>Trimestre 1</th><th>Trimestre 2</th><th>Trimestre 3</th><th>Media</th></tr>
<tr><td>Matemáticas </td><td> <?php $rand_m1 = rand(1,10); echo $rand_m1;?></td><td><?php $rand_m2 = rand(1,10); echo $rand_m2;?> </td><td><?php $rand_m3 = rand(1,10); echo $rand_m3;?> </td><td><?php echo $med_m = round(($rand_m1+$rand_m2+$rand_m3)/3,2)?> </td></tr>
<tr><td>Lengua </td><td><?php $rand_ln1 = rand(1,10); echo $rand_ln1;?> </td><td><?php $rand_ln2 = rand(1,10); echo $rand_ln2;?> </td><td><?php $rand_ln3 = rand(1,10); echo $rand_ln3;?> </td><td><?php echo $med_ln = round(($rand_ln1+$rand_ln2+$rand_ln3)/3,2)?> </td></tr>
<tr><td>Física </td><td><?php $rand_f1 = rand(1,10); echo $rand_f1;?> </td><td><?php $rand_f2 = rand(1,10); echo $rand_f2;?> </td><td><?php $rand_f3 = rand(1,10); echo $rand_f3;?> </td><td><?php echo $med_f =  round(($rand_f1+$rand_f2+$rand_f3)/3,2)?> </td></tr>
<tr><td>Latín</td><td> <?php $rand_lt1 = rand(1,10); echo $rand_lt1;?></td><td><?php $rand_lt2 = rand(1,10); echo $rand_lt2;?> </td><td><?php $rand_lt3 = rand(1,10); echo $rand_lt3;?> </td><td><?php echo $med_lt =  round(($rand_lt1+$rand_lt2+$rand_lt3)/3,2)?> </td></tr>
<tr><td>Inglés</td><td> <?php $rand_i1 = rand(1,10); echo $rand_i1;?></td><td><?php $rand_i2 = rand(1,10); echo $rand_i2;?> </td><td><?php $rand_i3 = rand(1,10); echo $rand_i3;?> </td><td><?php echo $med_i = round(($rand_i1+$rand_i2+$rand_i3)/3,2)?> </td></tr>
</table>
<h3>La media total es: <?php echo round(($med_i+$med_lt+$med_f+$med_ln+$med_m)/5,2 )?></h3>


</body>
</html>