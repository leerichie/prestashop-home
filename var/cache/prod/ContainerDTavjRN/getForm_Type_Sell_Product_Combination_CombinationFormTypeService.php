<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.combination.combination_form_type' shared service.

return $this->services['form.type.sell.product.combination.combination_form_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationFormType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['form.type.sell.product.event_listener.combination_listener'] ?? ($this->services['form.type.sell.product.event_listener.combination_listener'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\CombinationListener())));
