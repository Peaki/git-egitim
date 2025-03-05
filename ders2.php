<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   echo $mudur = "<b> naber müdür? şifreni gir. </b>";/* karakter sayı uzunluğu strlen */
 echo  $lmudur = ucfirst($mudur);
echo $bmudur = ucwords($mudur);

$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus laborum corporis culpa assumenda consectetur labore magni pariatur cumque nostrum? Illum maxime provident totam, vero perspiciatis doloremque consequuntur omnis ducimus.";
  echo substr($lorem,0,100);
  echo '<br> <a href="https://www.adu.edu.tr/" target="_blank" > Devamını Oku </a>';
   
   /*. substr($metin,0,10) */ 
   ?> 

</body>
</html>