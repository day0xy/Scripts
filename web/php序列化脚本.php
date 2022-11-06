<?php
class Name
{
  private $text = 'welcome to the zjctf';
  private $file='useless.php';
}
$select = new Name();
$res = serialize($select);
echo $res;
