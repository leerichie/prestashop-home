<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.customer_preferences.data_provider' shared service.

return $this->services['prestashop.admin.customer_preferences.data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\CustomerPreferences\CustomerPreferencesDataProvider(($this->services['prestashop.adapter.customer.customer_configuration'] ?? $this->load('getPrestashop_Adapter_Customer_CustomerConfigurationService.php')));