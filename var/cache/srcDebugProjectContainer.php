<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTOwwP3n\srcDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTOwwP3n/srcDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTOwwP3n.legacy');

    return;
}

if (!\class_exists(srcDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTOwwP3n\srcDebugProjectContainer::class, srcDebugProjectContainer::class, false);
}

return new \ContainerTOwwP3n\srcDebugProjectContainer(array(
    'container.build_hash' => 'TOwwP3n',
    'container.build_id' => 'bb7a0563',
    'container.build_time' => 1517231313,
));
