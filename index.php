<?php
  $pageData = [
    'title' => 'Лаби Синєпольського',
    'activeLinks' => []
  ];
  for ($i = 1; $i <= 7; $i++){
    $pageData['activeLinks']['lab' . $i] = "";
  }
  require "header.php";
?>
    <main role="main" class="container">
      Привіт!
    </main>
<?php
  require "footer.php";
?>
