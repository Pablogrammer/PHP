<?php


require_once "../Layout/header.php";
use Models\Teatro;


?>

<body>
    <h1 class="title">BUTACAS</h1>
<table>
    <tr>
        <?php
        foreach($sala as $butaca){
            echo "<td>" . $butaca->ocupado . "</td>";
        }
        ?>
    </tr>

</table>
    <!-- <table class="tabla">


<tr>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>

</tr>

<tr>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>

</tr>

<tr>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>

</tr>

<tr>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>
    <td><button></button></td>

</tr>


</table> -->


<?php
require_once "views/layout/footer.php";
?>


