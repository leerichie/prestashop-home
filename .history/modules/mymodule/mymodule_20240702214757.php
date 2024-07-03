<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

require_once (__DIR__ . '/weather.php');

class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Lee R';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Ash Carhartt Mod', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Online Carharrt shop.', [], 'Modules.Mymodule.Admin');

        $this->confirmUninstall = $this->trans('Sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('actionFrontControllerSetMedia') &&
            // $this->registerHook('displayRightColumn') &&
            Configuration::updateValue('MYMODULE_NAME', 'my module');
    }

    public function uninstall()
    {
        return (
            parent::uninstall()
            && Configuration::deleteByName('MYMODULE_NAME')
        );
    }


    // public function hookDisplayHome($params)      // my hook
    // {
    //     $this->context->smarty->assign([
    //         'my_module_name' => Configuration::get('MYMODULE_NAME'),
    //         'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
    //     ]);

    //     return $this->display(__FILE__, 'mymodule.tpl');
    // }

    public function hookDisplayHome($params)        // weather API defined OLSZTYN
    {
        $apiKey = '79f4d0dd8d46dedb331b5a20527be020';
        $city = 'Olsztyn';

        $weather = new Weather($apiKey, $city);
        $weatherData = $weather->getWeather();

        if ($weatherData) 
        {
            $temperature = $weatherData['main']['temp'];
            $weatherDescription = $weatherData['weather'][0]['description'];

            $this->context->smarty->assign(array(
                    'temperature' => $temperature,
                    'weatherDescrption' => $weatherDescription,
            ));
        }

        return $this->display(__FILE__, 'views/templates/hook/mymodule.tpl');
    }


    // public function hookDisplayLeftColumn($params)
    // {
    //     $this->context->smarty->assign([
    //         'my_module_name' => Configuration::get('MYMODULE_NAME'),
    //         'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
    //     ]);

    //     return $this->display(__FILE__, 'mymodule.tpl');
    // }

    // public function hookDisplayRightColumn($params)
    // {
    //     return $this->hookDisplayLeftColumn($params);
    // }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'mymodule-style',
            'modules/' . $this->name . '/views/css/mymodule.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'mymodule-javascript',
            'modules/' . $this->name . '/views/js/mymodule.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }

        /**
     * This method handles the module's configuration page
     * @return string The page's HTML content 
     */
    public function getContent()
    {
        $output = '';

        // this part is executed only when the form is submitted
        if (Tools::isSubmit('submit' . $this->name)) {
            // retrieve the value set by the user
            $configValue = (string) Tools::getValue('MYMODULE_CONFIG');

            // check that the value is valid
            if (empty($configValue) || !Validate::isGenericName($configValue)) {
                // invalid value, show an error
                $output = $this->displayError($this->l('Invalid Configuration value'));
            } else {
                // value is ok, update it and display a confirmation message
                Configuration::updateValue('MYMODULE_CONFIG', $configValue);
                $output = $this->displayConfirmation($this->l('Settings updated'));
            }
        }

        // display any message, then the forms
        return $output . $this->displayForm();
    }

        /**
     * Builds the configuration form
     * @return string HTML code
     */
    public function displayForm()
    {
        // Init Fields form array
        $form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Settings'),
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Configuration value'),
                        'name' => 'MYMODULE_CONFIG',
                        'size' => 20,
                        'required' => true,
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default pull-right',
                ],
            ],
        ];

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->table = $this->table;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&' . http_build_query(['configure' => $this->name]);
        $helper->submit_action = 'submit' . $this->name;

        // Default language
        $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');

        // Load current value into the form
        $helper->fields_value['MYMODULE_CONFIG'] = Tools::getValue('MYMODULE_CONFIG', Configuration::get('MYMODULE_CONFIG'));

        return $helper->generateForm([$form]);
    }
}
