<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cart.command_handler.update_cart_addresses_handler' shared service.

return $this->services['prestashop.adapter.cart.command_handler.update_cart_addresses_handler'] = new \PrestaShop\PrestaShop\Adapter\Cart\CommandHandler\UpdateCartAddressesHandler(($this->services['prestashop.adapter.command_handler.update_cart_carrier_handler'] ?? $this->load('getPrestashop_Adapter_CommandHandler_UpdateCartCarrierHandlerService.php')));