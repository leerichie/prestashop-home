<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDTavjRN\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDTavjRN/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerDTavjRN.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerDTavjRN\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerDTavjRN\appAppKernelProdContainer([
    'container.build_hash' => 'DTavjRN',
    'container.build_id' => '7897eb57',
    'container.build_time' => 1718312380,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDTavjRN');
