<?php


namespace Src\Controllers;

use League\Plates\Engine;

abstract class Controller
{
  /** @var Engine[$views] */
  protected $views = null;

  /** @var array[$data] */
  protected $data = null;
 

  /**
   * @return Engine
   */
  protected function getTemplate() {
    return $this->views;
  }
  /**
   * @return array
   */
  protected function getData() {
    return $this->data;
  }

  /**
   * @param string[$key]
   * @param [$value]
   * @return void
   */
  protected function setData(string $key, $value):void {
    $this->data[$key] = $value;
  }

  protected function __construct()
  {
    $this->views = new Engine('../Src/view/pages', 'php');
    $this->data = [];
  }

}
