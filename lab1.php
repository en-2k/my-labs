
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
    <script>
window.CP1251 = [
{charName: "NULL", hex: "FFFE"},
{charName: "START OF HEADING", hex: "0001"},
{charName: "START OF TEXT", hex: "0002"},
{charName: "END OF TEXT", hex: "0003"},
{charName: "END OF TRANSMISSION", hex: "0004"},
{charName: "ENQUIRY", hex: "0005"},
{charName: "ACKNOWLEDGE", hex: "0006"},
{charName: "BELL", hex: "0007"},
{charName: "BACKSPACE", hex: "0008"},
{charName: "CHARACTER TABULATION", hex: "0009"},
{charName: "LINE FEED (LF)", hex: "000A"},
{charName: "LINE TABULATION", hex: "000B"},
{charName: "FORM FEED (FF)", hex: "000C"},
{charName: "CARRIAGE RETURN (CR)", hex: "000D"},
{charName: "SHIFT OUT", hex: "000E"},
{charName: "SHIFT IN", hex: "000F"},
{charName: "DATA LINK ESCAPE", hex: "0010"},
{charName: "DEVICE CONTROL ONE", hex: "0011"},
{charName: "DEVICE CONTROL TWO", hex: "0012"},
{charName: "DEVICE CONTROL THREE", hex: "0013"},
{charName: "DEVICE CONTROL FOUR", hex: "0014"},
{charName: "NEGATIVE ACKNOWLEDGE", hex: "0015"},
{charName: "SYNCHRONOUS IDLE", hex: "0016"},
{charName: "END OF TRANSMISSION BLOCK", hex: "0017"},
{charName: "CANCEL", hex: "0018"},
{charName: "END OF MEDIUM", hex: "0019"},
{charName: "SUBSTITUTE", hex: "001A"},
{charName: "ESCAPE", hex: "001B"},
{charName: "INFORMATION SEPARATOR FOUR", hex: "001C"},
{charName: "INFORMATION SEPARATOR THREE", hex: "001D"},
{charName: "INFORMATION SEPARATOR TWO", hex: "001E"},
{charName: "INFORMATION SEPARATOR ONE", hex: "001F"},
{charName: "SPACE", hex: "0020"},
{charName: "EXCLAMATION MARK", hex: "0021"},
{charName: "QUOTATION MARK", hex: "0022"},
{charName: "NUMBER SIGN", hex: "0023"},
{charName: "DOLLAR SIGN", hex: "0024"},
{charName: "PERCENT SIGN", hex: "0025"},
{charName: "AMPERSAND", hex: "0026"},
{charName: "APOSTROPHE", hex: "0027"},
{charName: "LEFT PARENTHESIS", hex: "0028"},
{charName: "RIGHT PARENTHESIS", hex: "0029"},
{charName: "ASTERISK", hex: "002A"},
{charName: "PLUS SIGN", hex: "002B"},
{charName: "COMMA", hex: "002C"},
{charName: "HYPHEN-MINUS", hex: "002D"},
{charName: "FULL STOP", hex: "002E"},
{charName: "SOLIDUS", hex: "002F"},
{charName: "DIGIT ZERO", hex: "0030"},
{charName: "DIGIT ONE", hex: "0031"},
{charName: "DIGIT TWO", hex: "0032"},
{charName: "DIGIT THREE", hex: "0033"},
{charName: "DIGIT FOUR", hex: "0034"},
{charName: "DIGIT FIVE", hex: "0035"},
{charName: "DIGIT SIX", hex: "0036"},
{charName: "DIGIT SEVEN", hex: "0037"},
{charName: "DIGIT EIGHT", hex: "0038"},
{charName: "DIGIT NINE", hex: "0039"},
{charName: "COLON", hex: "003A"},
{charName: "SEMICOLON", hex: "003B"},
{charName: "LESS-THAN SIGN", hex: "003C"},
{charName: "EQUALS SIGN", hex: "003D"},
{charName: "GREATER-THAN SIGN", hex: "003E"},
{charName: "QUESTION MARK", hex: "003F"},
{charName: "COMMERCIAL AT", hex: "0040"},
{charName: "LATIN CAPITAL LETTER A", hex: "0041"},
{charName: "LATIN CAPITAL LETTER B", hex: "0042"},
{charName: "LATIN CAPITAL LETTER C", hex: "0043"},
{charName: "LATIN CAPITAL LETTER D", hex: "0044"},
{charName: "LATIN CAPITAL LETTER E", hex: "0045"},
{charName: "LATIN CAPITAL LETTER F", hex: "0046"},
{charName: "LATIN CAPITAL LETTER G", hex: "0047"},
{charName: "LATIN CAPITAL LETTER H", hex: "0048"},
{charName: "LATIN CAPITAL LETTER I", hex: "0049"},
{charName: "LATIN CAPITAL LETTER J", hex: "004A"},
{charName: "LATIN CAPITAL LETTER K", hex: "004B"},
{charName: "LATIN CAPITAL LETTER L", hex: "004C"},
{charName: "LATIN CAPITAL LETTER M", hex: "004D"},
{charName: "LATIN CAPITAL LETTER N", hex: "004E"},
{charName: "LATIN CAPITAL LETTER O", hex: "004F"},
{charName: "LATIN CAPITAL LETTER P", hex: "0050"},
{charName: "LATIN CAPITAL LETTER Q", hex: "0051"},
{charName: "LATIN CAPITAL LETTER R", hex: "0052"},
{charName: "LATIN CAPITAL LETTER S", hex: "0053"},
{charName: "LATIN CAPITAL LETTER T", hex: "0054"},
{charName: "LATIN CAPITAL LETTER U", hex: "0055"},
{charName: "LATIN CAPITAL LETTER V", hex: "0056"},
{charName: "LATIN CAPITAL LETTER W", hex: "0057"},
{charName: "LATIN CAPITAL LETTER X", hex: "0058"},
{charName: "LATIN CAPITAL LETTER Y", hex: "0059"},
{charName: "LATIN CAPITAL LETTER Z", hex: "005A"},
{charName: "LEFT SQUARE BRACKET", hex: "005B"},
{charName: "REVERSE SOLIDUS", hex: "005C"},
{charName: "RIGHT SQUARE BRACKET", hex: "005D"},
{charName: "CIRCUMFLEX ACCENT", hex: "005E"},
{charName: "LOW LINE", hex: "005F"},
{charName: "GRAVE ACCENT", hex: "0060"},
{charName: "LATIN SMALL LETTER A", hex: "0061"},
{charName: "LATIN SMALL LETTER B", hex: "0062"},
{charName: "LATIN SMALL LETTER C", hex: "0063"},
{charName: "LATIN SMALL LETTER D", hex: "0064"},
{charName: "LATIN SMALL LETTER E", hex: "0065"},
{charName: "LATIN SMALL LETTER F", hex: "0066"},
{charName: "LATIN SMALL LETTER G", hex: "0067"},
{charName: "LATIN SMALL LETTER H", hex: "0068"},
{charName: "LATIN SMALL LETTER I", hex: "0069"},
{charName: "LATIN SMALL LETTER J", hex: "006A"},
{charName: "LATIN SMALL LETTER K", hex: "006B"},
{charName: "LATIN SMALL LETTER L", hex: "006C"},
{charName: "LATIN SMALL LETTER M", hex: "006D"},
{charName: "LATIN SMALL LETTER N", hex: "006E"},
{charName: "LATIN SMALL LETTER O", hex: "006F"},
{charName: "LATIN SMALL LETTER P", hex: "0070"},
{charName: "LATIN SMALL LETTER Q", hex: "0071"},
{charName: "LATIN SMALL LETTER R", hex: "0072"},
{charName: "LATIN SMALL LETTER S", hex: "0073"},
{charName: "LATIN SMALL LETTER T", hex: "0074"},
{charName: "LATIN SMALL LETTER U", hex: "0075"},
{charName: "LATIN SMALL LETTER V", hex: "0076"},
{charName: "LATIN SMALL LETTER W", hex: "0077"},
{charName: "LATIN SMALL LETTER X", hex: "0078"},
{charName: "LATIN SMALL LETTER Y", hex: "0079"},
{charName: "LATIN SMALL LETTER Z", hex: "007A"},
{charName: "LEFT CURLY BRACKET", hex: "007B"},
{charName: "VERTICAL LINE", hex: "007C"},
{charName: "RIGHT CURLY BRACKET", hex: "007D"},
{charName: "TILDE", hex: "007E"},
{charName: "DELETE", hex: "007F"},
{charName: "CYRILLIC CAPITAL LETTER DJE", hex: "0402"},
{charName: "CYRILLIC CAPITAL LETTER GJE", hex: "0403"},
{charName: "SINGLE LOW-9 QUOTATION MARK", hex: "201A"},
{charName: "CYRILLIC SMALL LETTER GJE", hex: "0453"},
{charName: "DOUBLE LOW-9 QUOTATION MARK", hex: "201E"},
{charName: "HORIZONTAL ELLIPSIS", hex: "2026"},
{charName: "DAGGER", hex: "2020"},
{charName: "DOUBLE DAGGER", hex: "2021"},
{charName: "EURO SIGN", hex: "20AC"},
{charName: "PER MILLE SIGN", hex: "2030"},
{charName: "CYRILLIC CAPITAL LETTER LJE", hex: "0409"},
{charName: "SINGLE LEFT-POINTING ANGLE QUOTATION MARK", hex: "2039"},
{charName: "CYRILLIC CAPITAL LETTER NJE", hex: "040A"},
{charName: "CYRILLIC CAPITAL LETTER KJE", hex: "040C"},
{charName: "CYRILLIC CAPITAL LETTER TSHE", hex: "040B"},
{charName: "CYRILLIC CAPITAL LETTER DZHE", hex: "040F"},
{charName: "CYRILLIC SMALL LETTER DJE", hex: "0452"},
{charName: "LEFT SINGLE QUOTATION MARK", hex: "2018"},
{charName: "RIGHT SINGLE QUOTATION MARK", hex: "2019"},
{charName: "LEFT DOUBLE QUOTATION MARK", hex: "201C"},
{charName: "RIGHT DOUBLE QUOTATION MARK", hex: "201D"},
{charName: "BULLET", hex: "2022"},
{charName: "EN DASH", hex: "2013"},
{charName: "EM DASH", hex: "2014"},
{charName: "UNDEFINED", hex: "FFFF"},
{charName: "TRADE MARK SIGN", hex: "2122"},
{charName: "CYRILLIC SMALL LETTER LJE", hex: "0459"},
{charName: "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK", hex: "203A"},
{charName: "CYRILLIC SMALL LETTER NJE", hex: "045A"},
{charName: "CYRILLIC SMALL LETTER KJE", hex: "045C"},
{charName: "CYRILLIC SMALL LETTER TSHE", hex: "045B"},
{charName: "CYRILLIC SMALL LETTER DZHE", hex: "045F"},
{charName: "NO-BREAK SPACE", hex: "00A0"},
{charName: "CYRILLIC CAPITAL LETTER SHORT U", hex: "040E"},
{charName: "CYRILLIC SMALL LETTER SHORT U", hex: "045E"},
{charName: "CYRILLIC CAPITAL LETTER JE", hex: "0408"},
{charName: "CURRENCY SIGN", hex: "00A4"},
{charName: "CYRILLIC CAPITAL LETTER GHE WITH UPTURN", hex: "0490"},
{charName: "BROKEN BAR", hex: "00A6"},
{charName: "SECTION SIGN", hex: "00A7"},
{charName: "CYRILLIC CAPITAL LETTER IO", hex: "0401"},
{charName: "COPYRIGHT SIGN", hex: "00A9"},
{charName: "CYRILLIC CAPITAL LETTER UKRAINIAN IE", hex: "0404"},
{charName: "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK", hex: "00AB"},
{charName: "NOT SIGN", hex: "00AC"},
{charName: "SOFT HYPHEN", hex: "00AD"},
{charName: "REGISTERED SIGN", hex: "00AE"},
{charName: "CYRILLIC CAPITAL LETTER YI", hex: "0407"},
{charName: "DEGREE SIGN", hex: "00B0"},
{charName: "PLUS-MINUS SIGN", hex: "00B1"},
{charName: "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I", hex: "0406"},
{charName: "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I", hex: "0456"},
{charName: "CYRILLIC SMALL LETTER GHE WITH UPTURN", hex: "0491"},
{charName: "MICRO SIGN", hex: "00B5"},
{charName: "PILCROW SIGN", hex: "00B6"},
{charName: "MIDDLE DOT", hex: "00B7"},
{charName: "CYRILLIC SMALL LETTER IO", hex: "0451"},
{charName: "NUMERO SIGN", hex: "2116"},
{charName: "CYRILLIC SMALL LETTER UKRAINIAN IE", hex: "0454"},
{charName: "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK", hex: "00BB"},
{charName: "CYRILLIC SMALL LETTER JE", hex: "0458"},
{charName: "CYRILLIC CAPITAL LETTER DZE", hex: "0405"},
{charName: "CYRILLIC SMALL LETTER DZE", hex: "0455"},
{charName: "CYRILLIC SMALL LETTER YI", hex: "0457"},
{charName: "CYRILLIC CAPITAL LETTER A", hex: "0410"},
{charName: "CYRILLIC CAPITAL LETTER BE", hex: "0411"},
{charName: "CYRILLIC CAPITAL LETTER VE", hex: "0412"},
{charName: "CYRILLIC CAPITAL LETTER GHE", hex: "0413"},
{charName: "CYRILLIC CAPITAL LETTER DE", hex: "0414"},
{charName: "CYRILLIC CAPITAL LETTER IE", hex: "0415"},
{charName: "CYRILLIC CAPITAL LETTER ZHE", hex: "0416"},
{charName: "CYRILLIC CAPITAL LETTER ZE", hex: "0417"},
{charName: "CYRILLIC CAPITAL LETTER I", hex: "0418"},
{charName: "CYRILLIC CAPITAL LETTER SHORT I", hex: "0419"},
{charName: "CYRILLIC CAPITAL LETTER KA", hex: "041A"},
{charName: "CYRILLIC CAPITAL LETTER EL", hex: "041B"},
{charName: "CYRILLIC CAPITAL LETTER EM", hex: "041C"},
{charName: "CYRILLIC CAPITAL LETTER EN", hex: "041D"},
{charName: "CYRILLIC CAPITAL LETTER O", hex: "041E"},
{charName: "CYRILLIC CAPITAL LETTER PE", hex: "041F"},
{charName: "CYRILLIC CAPITAL LETTER ER", hex: "0420"},
{charName: "CYRILLIC CAPITAL LETTER ES", hex: "0421"},
{charName: "CYRILLIC CAPITAL LETTER TE", hex: "0422"},
{charName: "CYRILLIC CAPITAL LETTER U", hex: "0423"},
{charName: "CYRILLIC CAPITAL LETTER EF", hex: "0424"},
{charName: "CYRILLIC CAPITAL LETTER HA", hex: "0425"},
{charName: "CYRILLIC CAPITAL LETTER TSE", hex: "0426"},
{charName: "CYRILLIC CAPITAL LETTER CHE", hex: "0427"},
{charName: "CYRILLIC CAPITAL LETTER SHA", hex: "0428"},
{charName: "CYRILLIC CAPITAL LETTER SHCHA", hex: "0429"},
{charName: "CYRILLIC CAPITAL LETTER HARD SIGN", hex: "042A"},
{charName: "CYRILLIC CAPITAL LETTER YERU", hex: "042B"},
{charName: "CYRILLIC CAPITAL LETTER SOFT SIGN", hex: "042C"},
{charName: "CYRILLIC CAPITAL LETTER E", hex: "042D"},
{charName: "CYRILLIC CAPITAL LETTER YU", hex: "042E"},
{charName: "CYRILLIC CAPITAL LETTER YA", hex: "042F"},
{charName: "CYRILLIC SMALL LETTER A", hex: "0430"},
{charName: "CYRILLIC SMALL LETTER BE", hex: "0431"},
{charName: "CYRILLIC SMALL LETTER VE", hex: "0432"},
{charName: "CYRILLIC SMALL LETTER GHE", hex: "0433"},
{charName: "CYRILLIC SMALL LETTER DE", hex: "0434"},
{charName: "CYRILLIC SMALL LETTER IE", hex: "0435"},
{charName: "CYRILLIC SMALL LETTER ZHE", hex: "0436"},
{charName: "CYRILLIC SMALL LETTER ZE", hex: "0437"},
{charName: "CYRILLIC SMALL LETTER I", hex: "0438"},
{charName: "CYRILLIC SMALL LETTER SHORT I", hex: "0439"},
{charName: "CYRILLIC SMALL LETTER KA", hex: "043A"},
{charName: "CYRILLIC SMALL LETTER EL", hex: "043B"},
{charName: "CYRILLIC SMALL LETTER EM", hex: "043C"},
{charName: "CYRILLIC SMALL LETTER EN", hex: "043D"},
{charName: "CYRILLIC SMALL LETTER O", hex: "043E"},
{charName: "CYRILLIC SMALL LETTER PE", hex: "043F"},
{charName: "CYRILLIC SMALL LETTER ER", hex: "0440"},
{charName: "CYRILLIC SMALL LETTER ES", hex: "0441"},
{charName: "CYRILLIC SMALL LETTER TE", hex: "0442"},
{charName: "CYRILLIC SMALL LETTER U", hex: "0443"},
{charName: "CYRILLIC SMALL LETTER EF", hex: "0444"},
{charName: "CYRILLIC SMALL LETTER HA", hex: "0445"},
{charName: "CYRILLIC SMALL LETTER TSE", hex: "0446"},
{charName: "CYRILLIC SMALL LETTER CHE", hex: "0447"},
{charName: "CYRILLIC SMALL LETTER SHA", hex: "0448"},
{charName: "CYRILLIC SMALL LETTER SHCHA", hex: "0449"},
{charName: "CYRILLIC SMALL LETTER HARD SIGN", hex: "044A"},
{charName: "CYRILLIC SMALL LETTER YERU", hex: "044B"},
{charName: "CYRILLIC SMALL LETTER SOFT SIGN", hex: "044C"},
{charName: "CYRILLIC SMALL LETTER E", hex: "044D"},
{charName: "CYRILLIC SMALL LETTER YU", hex: "044E"},
{charName: "CYRILLIC SMALL LETTER YA", hex: "044F"}
];

window.oCP1251 = {};
for (let i = 0; i < CP1251.length; i++){
  oCP1251[parseInt(CP1251[i].hex,16).toString(10)] = i;
}

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
    if ($(this).val() === "У двійковій системі числення" && $(this).attr("now") === 'hex'){
      charbase = 8;
      oldcharbase = 2;
      base = 2;
      oldbase = 16;
      zerostr = "00000000";
      oldzerostr = "00";
      attrnow = "bin";
    }
    for (let i = 0; i <= str.length; i++){
      if ((i % charbase) === 0 && i > 0){
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
        let x = oCP1251[e.charCodeAt(0).toString(10)].toString(base);
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
