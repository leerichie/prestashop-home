<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.language.pack.loader.remote' shared service.

return $this->services['prestashop.core.language.pack.loader.remote'] = new \PrestaShop\PrestaShop\Core\Language\Pack\Loader\RemoteLanguagePackLoader(($this->services['prestashop.core.foundation.version'] ?? $this->load('getPrestashop_Core_Foundation_VersionService.php')));