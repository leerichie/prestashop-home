<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.shop.logo_uploader' shared service.

return $this->services['prestashop.core.shop.logo_uploader'] = new \PrestaShop\PrestaShop\Core\Shop\LogoUploader(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop, ($this->services['PrestaShop\\PrestaShop\\Core\\Image\\ImageFormatConfiguration'] ?? $this->load('getImageFormatConfigurationService.php')), ($this->services['PrestaShopBundle\\Entity\\Repository\\FeatureFlagRepository'] ?? $this->getFeatureFlagRepositoryService()), (\dirname(__DIR__, 4).'/img/'));
