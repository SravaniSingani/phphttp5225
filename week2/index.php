<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
   <?php echo '<h1>PHP and Creating Output</h1>'
   ?>

  <?php echo '<p>The PHP echo command can be used to create output.</p>'
  ?>
  
  <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>'
  ?>

  <?php echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>'
  ?>
   
  <?php echo '<h2>More HTML to Convert</h2>'
  ?>
    
  <?php echo '<p>PHP says "Hello World!"</p>'
  ?>
    
  <?php echo '<p>Can you display a sentence with \' and "?</p>'
  ?>


 <img src= "<?php  echo 'php-logo.png' ;?>" alt=>


 <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
  ?>
  

  <?php echo '<h1>'.$linkName.'</h1>'
  ?>

<a href= "<?php echo  $linkURL  ?>">

<?php echo '<p> URL Link </p>'  ?>

</a>

<img src= "<?php echo  $linkImage  ?>">

<?php echo '<p>'.$linkDescription.'</p>'
  ?>

<?php 
$person['first'] = 'Jane';
$person['last'] = 'Doe';

?>

<?php echo '<h3>Hi '.$person['first'] .' '. $person['last']. '</h3>';
?>

<?php
$languages = array( 'PHP', 'HTML', 'JavaScript', 'CSS' );
?>

<?php echo '<h3>Languages</h3>'
?>

<?php
echo '<ul>
<li>'.$languages[0].'</li>
<li>'.$languages[1].'</li>
<li>'.$languages[2].'</li>
<li>'.$languages[3].'</li>
</ul>'
?>


  </body>
</html>
