<?php

if (!defined('ELK'))
    die('No access...');

// hook bbc_codes_parsing /sources/subs/BBC/Codes.php
function spoiler_modern(&$codes, &$itemcodes)
{
    global  $modSettings, $settings, $txt;

    if (empty($modSettings['enableBBC'])) {
        return;
    }

    if (!empty($modSettings['disabledBBC'])) {
        foreach (explode(',', $modSettings['disabledBBC']) as $tag) {
            if ('spoiler' === $tag) {
                return;
            }
        }
    }

    foreach ($codes as $k => $v) {
        if ('spoiler' === $v[BBC\Codes::ATTR_TAG])
            unset($codes[$k]);
    }

    $ary = array(array(
            BBC\Codes::ATTR_TAG => 'spoiler',
            BBC\Codes::ATTR_TYPE => BBC\Codes::TYPE_PARSED_CONTENT,
            BBC\Codes::ATTR_BEFORE => ''.
                '<div class="spoilerheader"><img src="' . $settings['images_url'] . '/selected.png"> ' . $txt['spoiler'] . '</div>' .
                '<div class="spoiler"><div class="bbc_spoiler" style="display: none;">',
            BBC\Codes::ATTR_AFTER => '</div></div>',
            BBC\Codes::ATTR_BLOCK_LEVEL => true,
            BBC\Codes::ATTR_AUTOLINK => true,
            BBC\Codes::ATTR_LENGTH => 7,
        ),
        array(
            BBC\Codes::ATTR_TAG => 'spoiler',
            BBC\Codes::ATTR_TYPE => BBC\Codes::TYPE_UNPARSED_EQUALS,
            BBC\Codes::ATTR_VALIDATE => function(&$tag, &$data) {
                global $txt;
                if ('' === $data)
                    $data = $txt['spoiler'];
            },
            BBC\Codes::ATTR_BLOCK_LEVEL => true,
            BBC\Codes::ATTR_BEFORE => ''.
                '<div class="spoilerheader"><img src="' . $settings['images_url'] . '/selected.png"> $1</div>' .
                '<div class="spoiler"><div class="bbc_spoiler" style="display: none;">',
            BBC\Codes::ATTR_AFTER => '</div></div>',
            BBC\Codes::ATTR_AUTOLINK => true,
            BBC\Codes::ATTR_LENGTH => 7,
    ));
    $codes = array_merge($codes, $ary);
}
