<?php

namespace Tiptap\Nodes;

use Tiptap\Contracts\Node;

class CodeBlockWrapper extends Node
{
    public static function parseHTML($DOMNode)
    {
        return [
            [
                'tag' => 'pre',
            ],
        ];
    }

    public static function data($DOMNode)
    {
        return null;
    }
}
