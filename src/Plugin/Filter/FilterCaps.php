<?php

namespace Drupal\caps_filter\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;


/**
 * @Filter(
 *   id = "filter_celebrate",
 *   title = @Translation("Caps to Bold text Filter"),
 *   description = @Translation("Formats CAPS as <b>CAPS</b>"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class FilterCaps extends FilterBase {

  public function process($text, $langcode) {
      $text = preg_replace('/\b([A-Z]+)\b/', '<b>$1</b>', $text);
      return new FilterProcessResult($text);
  }
}