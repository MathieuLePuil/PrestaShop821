<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5SfTpQl\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5SfTpQl/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container5SfTpQl.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container5SfTpQl\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container5SfTpQl\appAppKernelProdContainer([
    'container.build_hash' => '5SfTpQl',
    'container.build_id' => 'dd1757e3',
    'container.build_time' => 1740826338,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5SfTpQl');
