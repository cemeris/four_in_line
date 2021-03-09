
<link rel="stylesheet" href="style.css">

<div class="container">
    <?php 
        for ($r=0; $r<=9; $r++) {
            for ($c=0; $c<=9; $c++) {
                $value = '';
                if ($r === 9 && $c === 2) {
                    $value = 'x';
                }
                echo "<a href='?r=$r&c=$c'>$value</a>";
            }
        }
    ?>

</div>