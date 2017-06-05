<?php

namespace ctrlweb\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class HelperInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return parent::getInstallPath($package);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
    
        return parent::supports($packageType);
    }
}
