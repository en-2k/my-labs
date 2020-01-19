
<?php
  $pageData = [
    'title' => 'Лаби Синєпольського',
    'activeLinks' => []
  ];
  for ($i = 1; $i <= 7; $i++){
    $pageData['activeLinks']['lab' . $i] = "";
  }
  $pageData['activeLinks']['lab1'] = "active";
  var_dump($pageData);
  require "header.php";
?>
    <main role="main" class="container">
      <h1>Л.р.1. Гамування. Моделювання роботи скремблера</h1>
      <div class="row">
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12"></div>
      </div>
    </main>
<?php
  require "footer.php";
?>
