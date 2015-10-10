<?php
namespace Concrete\Package\OverrideExample;

defined('C5_EXECUTE') or die(_("Access Denied."));

use Core;
use Concrete\Core\Package\Package;
use Concrete\Package\OverrideExample\Src\PackageServiceProvider;

class Controller extends Package
{

    protected $pkgHandle = 'override_example';
    protected $appVersionRequired = '5.7';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t("Override example");
    }

    public function getPackageDescription()
    {
        return t("This package overrides URL and changes inputs to button tags.");
    }

    public function install()
    {
        parent::install();
    }

    public function on_start()
    {
        $app = Core::getFacadeApplication();
        $sp = new PackageServiceProvider($app);
        $sp->register();
    }
}