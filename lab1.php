
<?php
  $pageData = [
    'title' => 'Лаби Синєпольського',
    'activeLinks' => []
  ];
  for ($i = 1; $i <= 7; $i++){
    $pageData['activeLinks']['lab' . $i] = "";
  }
  $pageData['activeLinks']['lab1'] = "active";
  require "header.php";
?>
    <main role="main" class="container">
      <h1>Л.р.1. Гамування. Моделювання роботи скремблера</h1>
    </main>
<?php
  require "footer.php";
?>
