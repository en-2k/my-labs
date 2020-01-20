
<?php
  $pageData = [
    'title' => 'Л.р.1',
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
      <h2>1) гамування (кодування WINDOWS-1251) </h2>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <p>Текст для шифрування</p>
          <textarea class="form-control" id="text" style="font-family: 'Courier New';"></textarea>
          <p>
            <select class="form-control" id="text_view" now="plain">
              <option name="normal">Виведення напряму</option>
              <option name="hex">У шістнадцятковій системі числення</option>
              <option name="bin">У двійковій системі числення</option>
            </select>
          </p>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="save_text">
              Зберегти у файл
            </button>
          </p>
          <p>
            <button class="btn btn-outline-success my-2 my-sm-0" id="encrypt">
              Зашифрувати
            </button>
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p>Ключ</p>
          <textarea class="form-control" id="key" style="font-family: 'Courier New';"></textarea>
          <p>
            <select class="form-control" id="key_view" now="plain">
              <option name="normal">Виведення напряму</option>
              <option name="hex">У шістнадцятковій системі числення</option>
              <option name="bin">У двійковій системі числення</option>
            </select>
          </p>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="genkey">
              Згенерувати випадковий ключ
            </button>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="save_key">
              Зберегти у файл
            </button>
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p>Зашифрований текст</p>
          <textarea class="form-control" id="cipher" style="font-family: 'Courier New';"></textarea>
          <p>
            <select class="form-control" id="cipher_view" now="plain">
              <option name="normal">Виведення напряму</option>
              <option name="hex">У шістнадцятковій системі числення</option>
              <option name="bin">У двійковій системі числення</option>
            </select>
          </p>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="save_key">
              Зберегти у файл
            </button>
          </p>
          <p>
            <button class="btn btn-outline-success my-2 my-sm-0" id="decrypt">
              Розшифрувати
            </button>
          </p>
        </div>
      </div>
      
    </main>
    <script src="cp1251.js"></script>
    <script>
$("#text_view").change(function(){
  let $ta = $(this).parent().parent().find("textarea");
  let str = $ta.val();
  
  if ( ($(this).val() === "У шістнадцятковій системі числення" && $(this).attr("now") === 'bin') 
      || ($(this).val() === "У двійковій системі числення" && $(this).attr("now") === 'hex') ){
    let b = "";
    let str1 = "";
    let charbase = 2;
    let oldcharbase = 8;
    let base = 16;
    let oldbase = 2;
    let zerostr = "00";
    let oldzerostr = "00000000";
    let attrnow = "hex";
    if ($(this).val() === "У двійковій системі числення" && $(this).attr("now") === 'hex') {
      charbase = 8;
      oldcharbase = 2;
      base = 2;
      oldbase = 16;
      zerostr = "00000000";
      oldzerostr = "00";
      attrnow = "bin";
    }
    for (let i = 0; i <= str.length; i++){
      if ((i % oldcharbase) === 0 && i > 0){
        let x = parseInt(b,oldbase).toString(base).toUpperCase();
        let l = x.length;
        for (let j = 0; j < charbase - l; j++){
          x = "0"+x;
        }
        str1 += x;
        b = "";
      }
      if (i < str.length){
        let e = str[i];
        b += e;
      }
    }
    let l = b.length;
    for (let j = 0; j < oldcharbase - l; j++){
      b += "0";
    }
    if (b !== oldzerostr){
        let x = parseInt(b,oldbase).toString(base).toUpperCase();
        let l = x.length;
        for (let j = 0; j < charbase - l; j++){
          x = "0"+x;
        }
        str1 += x;
    }
    $(this).attr("now", attrnow);
    $ta.val(str1); 
  }
  /****************************/
  if ($(this).val() === "Виведення напряму" && $(this).attr("now") !== 'plain'){
    let b = "";
    let str1 = '"';
    let charbase = 2;
    let base = 16;
    let zerostr = "00";
    if ($(this).attr("now") === 'bin'){
      charbase = 8;
      base = 2;
      zerostr = "00000000";
    }
    try {
      for (let i = 0; i <= str.length; i++){
        if ((i % charbase) === 0 && i > 0){
          let x = CP1251[parseInt(b,base)].hex;
          str1 += "\\u"+x;
          b = "";
        }
        if (i < str.length){
          let e = str[i];
          b += e;
        }
      }
    } catch(exc){
      alert("Помилка конвертації");
      return false;
    }
    let l = b.length;
    for (let j = 0; j < charbase - l; j++){
      b += "0";
    }
    if (b !== zerostr){
        let x = CP1251[parseInt(b,base)].hex;
        str1 += "\\u"+x;
    }
    str1 += '"';
    $(this).attr("now","plain");
    $ta.val(JSON.parse(str1));
  }
  /****************************/
  if ($(this).attr("now") === 'plain' && $(this).val() !== "Виведення напряму"){
    let base = 16;
    let charbase = 2;
    let attrnow = "hex";
    if ($(this).val() === "У двійковій системі числення"){
      base = 2;
      charbase = 8;
      attrnow = "bin";
    }
    try {
      str = str.split('').map((e,i)=>{
        let x = oCP1251[e.charCodeAt(0).toString(10)].toString(base).toUpperCase();
        let l = x.length;
        for (let j = 0; j < charbase - l; j++){
          x = "0"+x;
        }
        return x;
      }).join('');
      $(this).attr("now",attrnow);
      $ta.val(str); 
    } catch(exc){
      alert("Помилка конвертації");
      return false;
    }
  }
});
    </script>
<?php
  require "footer.php";
?>
