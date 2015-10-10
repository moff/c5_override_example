<?php
namespace Concrete\Package\OverrideExample\Src;

use Core;
use Config;
use Concrete\Core\Foundation\Service\Provider;
use Concrete\Package\OverrideExample\Src\Url\Resolver\PageUrlResolver;

class PackageServiceProvider extends Provider
{

    public function register()
    {
        // URL resolving override
        $this->app->bindShared(
            'url/resolver/page',
            function () {
                return new PageUrlResolver(\Core::make('url/resolver/path'));
            });

        // Form helper override
        $this->app->singleton('helper/form', 'Concrete\Package\OverrideExample\Src\Form\Service\Form');
    }
}
