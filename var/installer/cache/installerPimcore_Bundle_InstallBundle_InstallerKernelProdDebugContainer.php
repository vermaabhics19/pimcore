<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMmEywSU\installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMmEywSU/installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer.php') {
    touch(__DIR__.'/ContainerMmEywSU.legacy');

    return;
}

if (!\class_exists(installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer::class, false)) {
    \class_alias(\ContainerMmEywSU\installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer::class, installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer::class, false);
}

return new \ContainerMmEywSU\installerPimcore_Bundle_InstallBundle_InstallerKernelProdDebugContainer([
    'container.build_hash' => 'MmEywSU',
    'container.build_id' => 'b0a1f470',
    'container.build_time' => 1607882700,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMmEywSU');
