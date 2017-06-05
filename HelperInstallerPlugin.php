<?php

namespace ctrlweb\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class HelperInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new HelperInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
