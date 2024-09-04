<?php
$sayfa_baslik="A'dan Z'ye PHP";
$baslik="Makale Basligim";
$detay="Makale İceriğim, Makale detayim";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .makale{
            margin:4px; padding:6px; border-bottom:1px solid silver;
        }
        .baslik{
            margin:0px; border-bottom: 1px dahsed red; color:orange;
        }

    </style>
</head>
<body>
    <div class="makale">
        <h3 class="baslik"><?php echo $baslik?></h3>
        <?php echo $detay; ?>
</div><div class="makale">
    <h3 class="baslik">
        <?php echo $baslik;?></h3>
        <?php echo $detay; ?>
    </div>
</body>
</html>