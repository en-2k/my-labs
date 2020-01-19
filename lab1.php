
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
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <p>Текст для шифрування</p>
          <textarea class="form-control" id="text" style="font-family: 'Courier New';"></textarea>
          <p>
            <select class="form-control" id="text_view">
              <option name="normal">Веведення напряму</option>
              <option name="hex">У шістнадцятковій системі числення</option>
              <option name="bin">У двійковій системі числення</option>
            </select>
          </p>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="save_text">
              Зберегти у файл
            </button>
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p>Ключ</p>
          <textarea class="form-control" id="key" style="font-family: 'Courier New';"></textarea>
          <p>
            <select class="form-control" id="key_view">
              <option name="normal">Веведення напряму</option>
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
            <select class="form-control" id="cipher_view">
              <option name="normal">Веведення напряму</option>
              <option name="hex">У шістнадцятковій системі числення</option>
              <option name="bin">У двійковій системі числення</option>
            </select>
          </p>
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="save_key">
              Зберегти у файл
            </button>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="encrypt">
              Зашифрувати
            </button>
          </p>
        </div>
        <div class="col-sm-6">
          <p>
            <button class="btn btn-outline-primary my-2 my-sm-0" id="decrypt">
              Розшифрувати
            </button>
          </p>
        </div>
      </div>
    </main>
    <script>
window.CP1251 = [
{charName: "NULL", hexNCR: "&#x0000"},
{charName: "START OF HEADING", hexNCR: "&#x0001"},
{charName: "START OF TEXT", hexNCR: "&#x0002"},
{charName: "END OF TEXT", hexNCR: "&#x0003"},
{charName: "END OF TRANSMISSION", hexNCR: "&#x0004"},
{charName: "ENQUIRY", hexNCR: "&#x0005"},
{charName: "ACKNOWLEDGE", hexNCR: "&#x0006"},
{charName: "BELL", hexNCR: "&#x0007"},
{charName: "BACKSPACE", hexNCR: "&#x0008"},
{charName: "CHARACTER TABULATION", hexNCR: "&#x0009"},
{charName: "LINE FEED (LF)", hexNCR: "&#x000A"},
{charName: "LINE TABULATION", hexNCR: "&#x000B"},
{charName: "FORM FEED (FF)", hexNCR: "&#x000C"},
{charName: "CARRIAGE RETURN (CR)", hexNCR: "&#x000D"},
{charName: "SHIFT OUT", hexNCR: "&#x000E"},
{charName: "SHIFT IN", hexNCR: "&#x000F"},
{charName: "DATA LINK ESCAPE", hexNCR: "&#x0010"},
{charName: "DEVICE CONTROL ONE", hexNCR: "&#x0011"},
{charName: "DEVICE CONTROL TWO", hexNCR: "&#x0012"},
{charName: "DEVICE CONTROL THREE", hexNCR: "&#x0013"},
{charName: "DEVICE CONTROL FOUR", hexNCR: "&#x0014"},
{charName: "NEGATIVE ACKNOWLEDGE", hexNCR: "&#x0015"},
{charName: "SYNCHRONOUS IDLE", hexNCR: "&#x0016"},
{charName: "END OF TRANSMISSION BLOCK", hexNCR: "&#x0017"},
{charName: "CANCEL", hexNCR: "&#x0018"},
{charName: "END OF MEDIUM", hexNCR: "&#x0019"},
{charName: "SUBSTITUTE", hexNCR: "&#x001A"},
{charName: "ESCAPE", hexNCR: "&#x001B"},
{charName: "INFORMATION SEPARATOR FOUR", hexNCR: "&#x001C"},
{charName: "INFORMATION SEPARATOR THREE", hexNCR: "&#x001D"},
{charName: "INFORMATION SEPARATOR TWO", hexNCR: "&#x001E"},
{charName: "INFORMATION SEPARATOR ONE", hexNCR: "&#x001F"},
{charName: "SPACE", hexNCR: "&#x0020"},
{charName: "EXCLAMATION MARK", hexNCR: "&#x0021"},
{charName: "QUOTATION MARK", hexNCR: "&#x0022"},
{charName: "NUMBER SIGN", hexNCR: "&#x0023"},
{charName: "DOLLAR SIGN", hexNCR: "&#x0024"},
{charName: "PERCENT SIGN", hexNCR: "&#x0025"},
{charName: "AMPERSAND", hexNCR: "&#x0026"},
{charName: "APOSTROPHE", hexNCR: "&#x0027"},
{charName: "LEFT PARENTHESIS", hexNCR: "&#x0028"},
{charName: "RIGHT PARENTHESIS", hexNCR: "&#x0029"},
{charName: "ASTERISK", hexNCR: "&#x002A"},
{charName: "PLUS SIGN", hexNCR: "&#x002B"},
{charName: "COMMA", hexNCR: "&#x002C"},
{charName: "HYPHEN-MINUS", hexNCR: "&#x002D"},
{charName: "FULL STOP", hexNCR: "&#x002E"},
{charName: "SOLIDUS", hexNCR: "&#x002F"},
{charName: "DIGIT ZERO", hexNCR: "&#x0030"},
{charName: "DIGIT ONE", hexNCR: "&#x0031"},
{charName: "DIGIT TWO", hexNCR: "&#x0032"},
{charName: "DIGIT THREE", hexNCR: "&#x0033"},
{charName: "DIGIT FOUR", hexNCR: "&#x0034"},
{charName: "DIGIT FIVE", hexNCR: "&#x0035"},
{charName: "DIGIT SIX", hexNCR: "&#x0036"},
{charName: "DIGIT SEVEN", hexNCR: "&#x0037"},
{charName: "DIGIT EIGHT", hexNCR: "&#x0038"},
{charName: "DIGIT NINE", hexNCR: "&#x0039"},
{charName: "COLON", hexNCR: "&#x003A"},
{charName: "SEMICOLON", hexNCR: "&#x003B"},
{charName: "LESS-THAN SIGN", hexNCR: "&#x003C"},
{charName: "EQUALS SIGN", hexNCR: "&#x003D"},
{charName: "GREATER-THAN SIGN", hexNCR: "&#x003E"},
{charName: "QUESTION MARK", hexNCR: "&#x003F"},
{charName: "COMMERCIAL AT", hexNCR: "&#x0040"},
{charName: "LATIN CAPITAL LETTER A", hexNCR: "&#x0041"},
{charName: "LATIN CAPITAL LETTER B", hexNCR: "&#x0042"},
{charName: "LATIN CAPITAL LETTER C", hexNCR: "&#x0043"},
{charName: "LATIN CAPITAL LETTER D", hexNCR: "&#x0044"},
{charName: "LATIN CAPITAL LETTER E", hexNCR: "&#x0045"},
{charName: "LATIN CAPITAL LETTER F", hexNCR: "&#x0046"},
{charName: "LATIN CAPITAL LETTER G", hexNCR: "&#x0047"},
{charName: "LATIN CAPITAL LETTER H", hexNCR: "&#x0048"},
{charName: "LATIN CAPITAL LETTER I", hexNCR: "&#x0049"},
{charName: "LATIN CAPITAL LETTER J", hexNCR: "&#x004A"},
{charName: "LATIN CAPITAL LETTER K", hexNCR: "&#x004B"},
{charName: "LATIN CAPITAL LETTER L", hexNCR: "&#x004C"},
{charName: "LATIN CAPITAL LETTER M", hexNCR: "&#x004D"},
{charName: "LATIN CAPITAL LETTER N", hexNCR: "&#x004E"},
{charName: "LATIN CAPITAL LETTER O", hexNCR: "&#x004F"},
{charName: "LATIN CAPITAL LETTER P", hexNCR: "&#x0050"},
{charName: "LATIN CAPITAL LETTER Q", hexNCR: "&#x0051"},
{charName: "LATIN CAPITAL LETTER R", hexNCR: "&#x0052"},
{charName: "LATIN CAPITAL LETTER S", hexNCR: "&#x0053"},
{charName: "LATIN CAPITAL LETTER T", hexNCR: "&#x0054"},
{charName: "LATIN CAPITAL LETTER U", hexNCR: "&#x0055"},
{charName: "LATIN CAPITAL LETTER V", hexNCR: "&#x0056"},
{charName: "LATIN CAPITAL LETTER W", hexNCR: "&#x0057"},
{charName: "LATIN CAPITAL LETTER X", hexNCR: "&#x0058"},
{charName: "LATIN CAPITAL LETTER Y", hexNCR: "&#x0059"},
{charName: "LATIN CAPITAL LETTER Z", hexNCR: "&#x005A"},
{charName: "LEFT SQUARE BRACKET", hexNCR: "&#x005B"},
{charName: "REVERSE SOLIDUS", hexNCR: "&#x005C"},
{charName: "RIGHT SQUARE BRACKET", hexNCR: "&#x005D"},
{charName: "CIRCUMFLEX ACCENT", hexNCR: "&#x005E"},
{charName: "LOW LINE", hexNCR: "&#x005F"},
{charName: "GRAVE ACCENT", hexNCR: "&#x0060"},
{charName: "LATIN SMALL LETTER A", hexNCR: "&#x0061"},
{charName: "LATIN SMALL LETTER B", hexNCR: "&#x0062"},
{charName: "LATIN SMALL LETTER C", hexNCR: "&#x0063"},
{charName: "LATIN SMALL LETTER D", hexNCR: "&#x0064"},
{charName: "LATIN SMALL LETTER E", hexNCR: "&#x0065"},
{charName: "LATIN SMALL LETTER F", hexNCR: "&#x0066"},
{charName: "LATIN SMALL LETTER G", hexNCR: "&#x0067"},
{charName: "LATIN SMALL LETTER H", hexNCR: "&#x0068"},
{charName: "LATIN SMALL LETTER I", hexNCR: "&#x0069"},
{charName: "LATIN SMALL LETTER J", hexNCR: "&#x006A"},
{charName: "LATIN SMALL LETTER K", hexNCR: "&#x006B"},
{charName: "LATIN SMALL LETTER L", hexNCR: "&#x006C"},
{charName: "LATIN SMALL LETTER M", hexNCR: "&#x006D"},
{charName: "LATIN SMALL LETTER N", hexNCR: "&#x006E"},
{charName: "LATIN SMALL LETTER O", hexNCR: "&#x006F"},
{charName: "LATIN SMALL LETTER P", hexNCR: "&#x0070"},
{charName: "LATIN SMALL LETTER Q", hexNCR: "&#x0071"},
{charName: "LATIN SMALL LETTER R", hexNCR: "&#x0072"},
{charName: "LATIN SMALL LETTER S", hexNCR: "&#x0073"},
{charName: "LATIN SMALL LETTER T", hexNCR: "&#x0074"},
{charName: "LATIN SMALL LETTER U", hexNCR: "&#x0075"},
{charName: "LATIN SMALL LETTER V", hexNCR: "&#x0076"},
{charName: "LATIN SMALL LETTER W", hexNCR: "&#x0077"},
{charName: "LATIN SMALL LETTER X", hexNCR: "&#x0078"},
{charName: "LATIN SMALL LETTER Y", hexNCR: "&#x0079"},
{charName: "LATIN SMALL LETTER Z", hexNCR: "&#x007A"},
{charName: "LEFT CURLY BRACKET", hexNCR: "&#x007B"},
{charName: "VERTICAL LINE", hexNCR: "&#x007C"},
{charName: "RIGHT CURLY BRACKET", hexNCR: "&#x007D"},
{charName: "TILDE", hexNCR: "&#x007E"},
{charName: "DELETE", hexNCR: "&#x007F"},
{charName: "CYRILLIC CAPITAL LETTER DJE", hexNCR: "&#x0402"},
{charName: "CYRILLIC CAPITAL LETTER GJE", hexNCR: "&#x0403"},
{charName: "SINGLE LOW-9 QUOTATION MARK", hexNCR: "&#x201A"},
{charName: "CYRILLIC SMALL LETTER GJE", hexNCR: "&#x0453"},
{charName: "DOUBLE LOW-9 QUOTATION MARK", hexNCR: "&#x201E"},
{charName: "HORIZONTAL ELLIPSIS", hexNCR: "&#x2026"},
{charName: "DAGGER", hexNCR: "&#x2020"},
{charName: "DOUBLE DAGGER", hexNCR: "&#x2021"},
{charName: "EURO SIGN", hexNCR: "&#x20AC"},
{charName: "PER MILLE SIGN", hexNCR: "&#x2030"},
{charName: "CYRILLIC CAPITAL LETTER LJE", hexNCR: "&#x0409"},
{charName: "SINGLE LEFT-POINTING ANGLE QUOTATION MARK", hexNCR: "&#x2039"},
{charName: "CYRILLIC CAPITAL LETTER NJE", hexNCR: "&#x040A"},
{charName: "CYRILLIC CAPITAL LETTER KJE", hexNCR: "&#x040C"},
{charName: "CYRILLIC CAPITAL LETTER TSHE", hexNCR: "&#x040B"},
{charName: "CYRILLIC CAPITAL LETTER DZHE", hexNCR: "&#x040F"},
{charName: "CYRILLIC SMALL LETTER DJE", hexNCR: "&#x0452"},
{charName: "LEFT SINGLE QUOTATION MARK", hexNCR: "&#x2018"},
{charName: "RIGHT SINGLE QUOTATION MARK", hexNCR: "&#x2019"},
{charName: "LEFT DOUBLE QUOTATION MARK", hexNCR: "&#x201C"},
{charName: "RIGHT DOUBLE QUOTATION MARK", hexNCR: "&#x201D"},
{charName: "BULLET", hexNCR: "&#x2022"},
{charName: "EN DASH", hexNCR: "&#x2013"},
{charName: "EM DASH", hexNCR: "&#x2014"},
{charName: "TRADE MARK SIGN", hexNCR: "&#x2122"},
{charName: "CYRILLIC SMALL LETTER LJE", hexNCR: "&#x0459"},
{charName: "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK", hexNCR: "&#x203A"},
{charName: "CYRILLIC SMALL LETTER NJE", hexNCR: "&#x045A"},
{charName: "CYRILLIC SMALL LETTER KJE", hexNCR: "&#x045C"},
{charName: "CYRILLIC SMALL LETTER TSHE", hexNCR: "&#x045B"},
{charName: "CYRILLIC SMALL LETTER DZHE", hexNCR: "&#x045F"},
{charName: "NO-BREAK SPACE", hexNCR: "&#x00A0"},
{charName: "CYRILLIC CAPITAL LETTER SHORT U", hexNCR: "&#x040E"},
{charName: "CYRILLIC SMALL LETTER SHORT U", hexNCR: "&#x045E"},
{charName: "CYRILLIC CAPITAL LETTER JE", hexNCR: "&#x0408"},
{charName: "CURRENCY SIGN", hexNCR: "&#x00A4"},
{charName: "CYRILLIC CAPITAL LETTER GHE WITH UPTURN", hexNCR: "&#x0490"},
{charName: "BROKEN BAR", hexNCR: "&#x00A6"},
{charName: "SECTION SIGN", hexNCR: "&#x00A7"},
{charName: "CYRILLIC CAPITAL LETTER IO", hexNCR: "&#x0401"},
{charName: "COPYRIGHT SIGN", hexNCR: "&#x00A9"},
{charName: "CYRILLIC CAPITAL LETTER UKRAINIAN IE", hexNCR: "&#x0404"},
{charName: "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK", hexNCR: "&#x00AB"},
{charName: "NOT SIGN", hexNCR: "&#x00AC"},
{charName: "SOFT HYPHEN", hexNCR: "&#x00AD"},
{charName: "REGISTERED SIGN", hexNCR: "&#x00AE"},
{charName: "CYRILLIC CAPITAL LETTER YI", hexNCR: "&#x0407"},
{charName: "DEGREE SIGN", hexNCR: "&#x00B0"},
{charName: "PLUS-MINUS SIGN", hexNCR: "&#x00B1"},
{charName: "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I", hexNCR: "&#x0406"},
{charName: "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I", hexNCR: "&#x0456"},
{charName: "CYRILLIC SMALL LETTER GHE WITH UPTURN", hexNCR: "&#x0491"},
{charName: "MICRO SIGN", hexNCR: "&#x00B5"},
{charName: "PILCROW SIGN", hexNCR: "&#x00B6"},
{charName: "MIDDLE DOT", hexNCR: "&#x00B7"},
{charName: "CYRILLIC SMALL LETTER IO", hexNCR: "&#x0451"},
{charName: "NUMERO SIGN", hexNCR: "&#x2116"},
{charName: "CYRILLIC SMALL LETTER UKRAINIAN IE", hexNCR: "&#x0454"},
{charName: "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK", hexNCR: "&#x00BB"},
{charName: "CYRILLIC SMALL LETTER JE", hexNCR: "&#x0458"},
{charName: "CYRILLIC CAPITAL LETTER DZE", hexNCR: "&#x0405"},
{charName: "CYRILLIC SMALL LETTER DZE", hexNCR: "&#x0455"},
{charName: "CYRILLIC SMALL LETTER YI", hexNCR: "&#x0457"},
{charName: "CYRILLIC CAPITAL LETTER A", hexNCR: "&#x0410"},
{charName: "CYRILLIC CAPITAL LETTER BE", hexNCR: "&#x0411"},
{charName: "CYRILLIC CAPITAL LETTER VE", hexNCR: "&#x0412"},
{charName: "CYRILLIC CAPITAL LETTER GHE", hexNCR: "&#x0413"},
{charName: "CYRILLIC CAPITAL LETTER DE", hexNCR: "&#x0414"},
{charName: "CYRILLIC CAPITAL LETTER IE", hexNCR: "&#x0415"},
{charName: "CYRILLIC CAPITAL LETTER ZHE", hexNCR: "&#x0416"},
{charName: "CYRILLIC CAPITAL LETTER ZE", hexNCR: "&#x0417"},
{charName: "CYRILLIC CAPITAL LETTER I", hexNCR: "&#x0418"},
{charName: "CYRILLIC CAPITAL LETTER SHORT I", hexNCR: "&#x0419"},
{charName: "CYRILLIC CAPITAL LETTER KA", hexNCR: "&#x041A"},
{charName: "CYRILLIC CAPITAL LETTER EL", hexNCR: "&#x041B"},
{charName: "CYRILLIC CAPITAL LETTER EM", hexNCR: "&#x041C"},
{charName: "CYRILLIC CAPITAL LETTER EN", hexNCR: "&#x041D"},
{charName: "CYRILLIC CAPITAL LETTER O", hexNCR: "&#x041E"},
{charName: "CYRILLIC CAPITAL LETTER PE", hexNCR: "&#x041F"},
{charName: "CYRILLIC CAPITAL LETTER ER", hexNCR: "&#x0420"},
{charName: "CYRILLIC CAPITAL LETTER ES", hexNCR: "&#x0421"},
{charName: "CYRILLIC CAPITAL LETTER TE", hexNCR: "&#x0422"},
{charName: "CYRILLIC CAPITAL LETTER U", hexNCR: "&#x0423"},
{charName: "CYRILLIC CAPITAL LETTER EF", hexNCR: "&#x0424"},
{charName: "CYRILLIC CAPITAL LETTER HA", hexNCR: "&#x0425"},
{charName: "CYRILLIC CAPITAL LETTER TSE", hexNCR: "&#x0426"},
{charName: "CYRILLIC CAPITAL LETTER CHE", hexNCR: "&#x0427"},
{charName: "CYRILLIC CAPITAL LETTER SHA", hexNCR: "&#x0428"},
{charName: "CYRILLIC CAPITAL LETTER SHCHA", hexNCR: "&#x0429"},
{charName: "CYRILLIC CAPITAL LETTER HARD SIGN", hexNCR: "&#x042A"},
{charName: "CYRILLIC CAPITAL LETTER YERU", hexNCR: "&#x042B"},
{charName: "CYRILLIC CAPITAL LETTER SOFT SIGN", hexNCR: "&#x042C"},
{charName: "CYRILLIC CAPITAL LETTER E", hexNCR: "&#x042D"},
{charName: "CYRILLIC CAPITAL LETTER YU", hexNCR: "&#x042E"},
{charName: "CYRILLIC CAPITAL LETTER YA", hexNCR: "&#x042F"},
{charName: "CYRILLIC SMALL LETTER A", hexNCR: "&#x0430"},
{charName: "CYRILLIC SMALL LETTER BE", hexNCR: "&#x0431"},
{charName: "CYRILLIC SMALL LETTER VE", hexNCR: "&#x0432"},
{charName: "CYRILLIC SMALL LETTER GHE", hexNCR: "&#x0433"},
{charName: "CYRILLIC SMALL LETTER DE", hexNCR: "&#x0434"},
{charName: "CYRILLIC SMALL LETTER IE", hexNCR: "&#x0435"},
{charName: "CYRILLIC SMALL LETTER ZHE", hexNCR: "&#x0436"},
{charName: "CYRILLIC SMALL LETTER ZE", hexNCR: "&#x0437"},
{charName: "CYRILLIC SMALL LETTER I", hexNCR: "&#x0438"},
{charName: "CYRILLIC SMALL LETTER SHORT I", hexNCR: "&#x0439"},
{charName: "CYRILLIC SMALL LETTER KA", hexNCR: "&#x043A"},
{charName: "CYRILLIC SMALL LETTER EL", hexNCR: "&#x043B"},
{charName: "CYRILLIC SMALL LETTER EM", hexNCR: "&#x043C"},
{charName: "CYRILLIC SMALL LETTER EN", hexNCR: "&#x043D"},
{charName: "CYRILLIC SMALL LETTER O", hexNCR: "&#x043E"},
{charName: "CYRILLIC SMALL LETTER PE", hexNCR: "&#x043F"},
{charName: "CYRILLIC SMALL LETTER ER", hexNCR: "&#x0440"},
{charName: "CYRILLIC SMALL LETTER ES", hexNCR: "&#x0441"},
{charName: "CYRILLIC SMALL LETTER TE", hexNCR: "&#x0442"},
{charName: "CYRILLIC SMALL LETTER U", hexNCR: "&#x0443"},
{charName: "CYRILLIC SMALL LETTER EF", hexNCR: "&#x0444"},
{charName: "CYRILLIC SMALL LETTER HA", hexNCR: "&#x0445"},
{charName: "CYRILLIC SMALL LETTER TSE", hexNCR: "&#x0446"},
{charName: "CYRILLIC SMALL LETTER CHE", hexNCR: "&#x0447"},
{charName: "CYRILLIC SMALL LETTER SHA", hexNCR: "&#x0448"},
{charName: "CYRILLIC SMALL LETTER SHCHA", hexNCR: "&#x0449"},
{charName: "CYRILLIC SMALL LETTER HARD SIGN", hexNCR: "&#x044A"},
{charName: "CYRILLIC SMALL LETTER YERU", hexNCR: "&#x044B"},
{charName: "CYRILLIC SMALL LETTER SOFT SIGN", hexNCR: "&#x044C"},
{charName: "CYRILLIC SMALL LETTER E", hexNCR: "&#x044D"},
{charName: "CYRILLIC SMALL LETTER YU", hexNCR: "&#x044E"},
{charName: "CYRILLIC SMALL LETTER YA", hexNCR: "&#x044F"}
];


    </script>
<?php
  require "footer.php";
?>
