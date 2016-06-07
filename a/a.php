<head><title>A</title></head>
<body>

<main>
<?php
// Exemple de closure simple
// Closure
$double = function ($v = 7) {
  return $v * 2;
};
$n      = 125;
$p1     = 'Le double de ' . $n . ' est ' . $double($n);

echo 'Closure<br/>' . $p1;
?>

  <!--
  /*
   * A class Cote
  class Cote {
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
  echo "\n\n" . '<pre>' . "\n";
  var_dump($n);
  echo '</pre><hr/>';
  */


  //echo '<hr><a href="/themes/gc000/a/tsconfig.json">YouTube Key</a>';
  //phpinfo(INFO_ENVIRONMENT | INFO_VARIABLES);
  -->

</main>
</body>
