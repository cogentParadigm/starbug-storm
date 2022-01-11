<?php
namespace Starbug\Storm;

class StormLogoHelper {
  public function __construct($logo) {
    $this->target = $logo;
  }
  public function helper() {
    return $this->target;
  }
}
