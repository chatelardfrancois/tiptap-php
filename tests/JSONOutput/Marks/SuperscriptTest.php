<?php

namespace Tiptap\Tests\JSONOutput\Marks;

use Tiptap\Editor;
use Tiptap\Tests\JSONOutput\TestCase;

class SuperscriptTest extends TestCase
{
    /** @test */
    public function superscript_gets_rendered_correctly()
    {
        $html = '<p><sup>Example Text</sup></p>';

        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                            'marks' => [
                                [
                                    'type' => 'superscript',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->assertEquals($json, (new Editor)->setContent($html)->getDocument());
    }
}