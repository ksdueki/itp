<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default template
    |--------------------------------------------------------------------------
    |
    | Template to XML
    |
    | <root xmlns:v1="http://www.site.com/schema"></root>
    |
    */
    'template' => '<channels-find></channels-find>',
    'caseSensitive' => false,
    'showEmptyField' => true, //Show empty field
    'charset' => 'shift_jis',
    // 'charset' => 'utf-8',

    /**
     * line name if it is an array
     *
     * example
     * value null = <row_0></row_0>
     * value name item = <item></item>
     */
    'rowName' => 'item'
];