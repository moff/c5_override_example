<?php
namespace Concrete\Package\OverrideExample\Block\OverrideExample;

use Core;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    public function getBlockTypeName()
    {
        return t('UserName');
    }

    public function getBlockTypeDescription()
    {
        return t('This block shows name of the current user.');
    }

    public function view()
    {
        //$this->set('something', $something);
    }
}