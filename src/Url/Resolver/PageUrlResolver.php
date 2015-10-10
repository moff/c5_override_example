<?php
namespace Concrete\Package\OverrideExample\Src\Url\Resolver;

class PageUrlResolver extends \Concrete\Core\Url\Resolver\PageUrlResolver
{
    public function resolve(array $arguments, $resolved = null)
    {
        $url = parent::resolve($arguments, $resolved);
        if (is_null($url)) {
            return null;
        } else {
            return $url . '#hello-world';
        }
    }
}