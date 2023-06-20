<?php
require_once '_header.php';
require_once '_utilities.php';

//makeGreetingCard
function makeGreetingCard($sender, $recipient, $template){
  $file_name = sanitizeFileName("$sender-$recipient.txt");

  $message = file_get_contents($template);

  file_put_contents("cards/$file_name", "Dear $recipient \n $message \n Sincerely, \n $sender");

  return $file_name;
}

//Recieving data via POST, calling the makeGreetingCard and redirecting to preview the card
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sender = $_POST['sender'];
    $recipient = $_POST['recipient'];
    $template = $_POST['template'];

    $file_name = makeGreetingCard($sender, $recipient, $template);

    header('Location: card.php?name=' . urlencode($file_name));
    exit;
  }
?>


<h1 class="my-4">Create a Greeting Card</h1>
<form method="post">
    <div class="my-3">
        <label for="sender" class="form-label">Sender Name</label>
        <input type="text" name="sender" class="form-control" required>
    </div>

    <div class="my-3">
        <label for="sender" class="form-label">Recipient Name</label>
        <input type="text" name="recipient" class="form-control" required>
    </div>

    <div class="my-3">
        <label for="template" class="form-label">Template</label>
        <select name="template" class="form-select" required>
            <option value="">Choose a Template</option>
            <option value="birthday.txt">Birthday</option>
            <option value="thank_you.txt">Thank You</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-1">Create Card</button>
</form>


<?php
require_once '_footer.php';