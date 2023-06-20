<?php
require_once '_header.php';
require_once '_utilities.php';

//Receiving the data via GET, checking if the file exists and creating a card_content
$file_name = sanitizeFileName($_GET['name']);

if (file_exists("cards/$file_name")){
  $card_content = file_get_contents("cards/$file_name");
}
?>

<h1 class="my-4">Card Preview</h1>
<pre class="bg-light p-3">
  <?php if (isset($card_content)) : ?>
  
  <h1> <?= htmlspecialchars($card_content); ?> </h1>
  
  <?php else :
    echo "Oops! Something went wrong..."?>
</pre>
  <?php endif; ?>

<?php
require_once '_footer.php';