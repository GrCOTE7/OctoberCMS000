<head>
  <title>A</title>
</head>


<?php

/**
 * Created by PhpStorm.
 * User: cote
 * Date: 16/05/2016
 * Time: 07:54
 */
class Cote {

  /**
   * @var int
   */
  public $kkk = 159;

  public function setKkk($kkk) {
    $this->kkk = $kkk;
  }
}

$pseudo = 'Constructor';
echo '<h2>You\'re a great ' . $pseudo . '.</h2>';

$a = new Cote();

$a->setKkk([123, 456, 789]);

$n = $a->kkk;

/*$n = ($v > 999 || count(explode('.', $v)) - 1) ? $n = 1 : 0;*/


echo "\n\n" . '<pre>' . "\n";
//echo $v . '<hr>';
var_dump($n);
echo '</pre>';

//echo '<hr><a href="/themes/gc000/a/tsconfig.json">YouTube Key</a>';

//phpinfo(INFO_ENVIRONMENT | INFO_VARIABLES);
