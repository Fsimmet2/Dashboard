<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.warmer' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('translator' => function () {
    return ($this->services['translator'] ?? $this->getTranslatorService());
})))->withContext('translation.warmer', $this));
