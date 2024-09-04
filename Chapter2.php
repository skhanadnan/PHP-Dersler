<?php
$sayfa_baslik="A'dan Z'ye PHP";
$baslik="Makale Basligim";
$detay="Makale İcerigim, Makale Detayim.";
$baslik= mb_convert_case($baslik, MB_CASE_UPPER , "UTF-8");
$detay1= mb_convert_case($detay, MB_CASE_TITLE ,"UTF-8");
$detay2= mb_convert_case($detay,MB_CASE_LOWER, "UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sayfa_baslik?></title>
    <style>
        .makale{
            margin:4px;padding:6px;border-bottom:1px solid silver;
        }
        .baslik{
            margin:0px;border-bottom:1px dashed red; color:orange;
        }
    </style>
</head>
<body>
 <div class="makale">
    <h3 class="baslik"><?php echo $baslik?></h3>
    <?php echo $detay1?>
</div>
<div class="makale">
<h3 class="baslik"><?php?></h3>
<?php echo$detay2?>
</div>   
</body>
</html>