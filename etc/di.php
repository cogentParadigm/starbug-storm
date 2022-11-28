<?php
namespace Starbug\Storm;

use DI;

return [
  "theme.storm.logo" => "themes/storm/public/images/logo.png",
  "Starbug\Storm\StormLogoHelper" => DI\autowire()
    ->constructorParameter("logo", DI\get("theme.storm.logo")),
  "template.helpers" => DI\add([
    "stormLogo" => StormLogoHelper::class
  ])
];
