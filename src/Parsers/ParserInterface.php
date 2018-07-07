<?php
namespace Maiorano\Shortcodes\Parsers;

use Closure;

/**
 * Interface ParserInterface
 * @package Maiorano\Shortcodes\Parsers
 */
interface ParserInterface
{

    /**
     * Scan all content for possible shortcode
     * @param string $content
     * @param array $tags
     * @param Closure $callback
     * @return mixed
     */
    public function parseShortcode(string $content, array $tags, Closure $callback = null);
}
