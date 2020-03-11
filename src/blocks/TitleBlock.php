<?php

namespace VENDOR\PACKAGE\blocks;

use luya\cms\base\PhpBlock;

class TitleBlock extends PhpBlock
{
    public $module = null;

    public function config()
    {
        return [];
    }

    public function name()
    {
        return 'Title Block';
    }

    public function frontend()
    {
        return 'Frontend Title Block';
    }

    public function admin()
    {
        return 'Admin Area Title Block';
    }
}