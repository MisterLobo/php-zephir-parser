--TEST--
zephir_parse_file() - Tests div-assign for variabless
--SKIPIF--
<?php require(__DIR__ . "/../../zephir_parser_skip.inc"); ?>
--FILE--
<?php require(__DIR__ . "/../../zephir_parser_test.inc");

$ir = parse_file("operators/assignments/div.zep");

$statements = $ir[1]["definition"]["methods"][0]["statements"];

array_pop($statements);
array_shift($statements);

var_dump($statements);
--EXPECTF--
array(2) {
  [0]=>
  array(5) {
    ["type"]=>
    string(3) "let"
    ["assignments"]=>
    array(1) {
      [0]=>
      array(7) {
        ["assign-type"]=>
        string(8) "variable"
        ["operator"]=>
        string(6) "assign"
        ["variable"]=>
        string(1) "a"
        ["expr"]=>
        array(5) {
          ["type"]=>
          string(3) "int"
          ["value"]=>
          string(2) "42"
          ["file"]=>
          string(88) "%s"
          ["line"]=>
          int(8)
          ["char"]=>
          int(13)
        }
        ["file"]=>
        string(88) "%s"
        ["line"]=>
        int(8)
        ["char"]=>
        int(13)
      }
    }
    ["file"]=>
    string(88) "%s"
    ["line"]=>
    int(9)
    ["char"]=>
    int(5)
  }
  [1]=>
  array(5) {
    ["type"]=>
    string(3) "let"
    ["assignments"]=>
    array(1) {
      [0]=>
      array(7) {
        ["assign-type"]=>
        string(8) "variable"
        ["operator"]=>
        string(10) "div-assign"
        ["variable"]=>
        string(1) "a"
        ["expr"]=>
        array(5) {
          ["type"]=>
          string(8) "variable"
          ["value"]=>
          string(3) "num"
          ["file"]=>
          string(88) "%s"
          ["line"]=>
          int(9)
          ["char"]=>
          int(14)
        }
        ["file"]=>
        string(88) "%s"
        ["line"]=>
        int(9)
        ["char"]=>
        int(14)
      }
    }
    ["file"]=>
    string(88) "%s"
    ["line"]=>
    int(10)
    ["char"]=>
    int(8)
  }
}
