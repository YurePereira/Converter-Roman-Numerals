<?php

class ConverterToRomanTest extends PHPUnit_Framework_TestCase
{

  public function testConverterNumberZero()
  {

    $u = new Unit();
    $output = $u->convert(0);
    $this->assertEquals($output, 'Not exists in roman.');

  }

  public function testConverterNumberOne()
  {

    $u = new Unit();
    $output = $u->convert(1);
    $this->assertEquals($output, 'I');

  }

}
