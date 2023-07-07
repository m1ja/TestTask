<?php
/**
 * Plugin Name: WooCommerce Tegro Plugin
 * Description: Плагин для интеграции Tegro с WooCommerce.
 * Version: 1.0
 * Author: Ваше имя
 * Author URI: https://example.com/
 */

// Регистрация метода оплаты в WooCommerce
add_filter('woocommerce_payment_gateways', 'add_tegro_payment_gateway');
function add_tegro_payment_gateway($gateways)
{
    $gateways[] = 'WC_Tegro_Payment_Gateway';
    return $gateways;
}

// Класс для обработки оплаты через Tegro
require_once( ABSPATH . 'wp-content/plugins/woocommerce/includes/abstracts/abstract-wc-payment-gateway.php' );
require_once( ABSPATH . 'wp-content\plugins\woocommerce\includes\abstracts\abstract-wc-settings-api.php');

class WC_Tegro_Payment_Gateway extends WC_Payment_Gateway
{
    public function __construct()
    {
        $this->id = 'tegro_payment_gateway';
        $this->method_title = 'Tegro Payment Gateway'; // Название метода оплаты, которое будет отображаться в настройках
        $this->method_description = 'Оплата через Tegro API'; // Описание метода оплаты
        $this->has_fields = false;

        // Добавьте здесь дополнительные настройки для вашего метода оплаты (например, настройки API и другие)

        $this->init_form_fields();
        $this->init_settings();

        $this->title = $this->get_option('title'); // Название метода оплаты, которое будет отображаться для покупателя
        $this->description = $this->get_option('description'); // Описание метода оплаты, которое будет отображаться для покупателя

        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }

    public function init_form_fields()
    {
        $this->form_fields = array(
            'enabled' => array(
                'title' => 'Включить/Выключить',
                'type' => 'checkbox',
                'label' => 'Включить оплату через Tegro',
                'default' => 'yes'
            ),
            'title' => array(
                'title' => 'Название',
                'type' => 'text',
                'description' => 'Название метода оплаты, отображаемое для покупателя',
                'default' => 'Tegro Payment',
                'desc_tip' => true
            ),
            'description' => array(
                'title' => 'Описание',
                'type' => 'textarea',
                'description' => 'Описание метода оплаты, отображаемое для покупателя',
                'default' => 'Оплата через Tegro API'
            )
        );
    }

    public function process_payment($order_id)
    {
        // Обработка оплаты через Tegro API
        // Здесь вы можете добавить код для обработки платежа через Tegro

        // Вызываем функцию обработки платежей из файла Python
        exec('C:\xampp\htdocs\TestTask\wp-content\plugins\woocommerce-tegro-plugin\woocommerce_tegro_plugin.py' . $order_id);

        $order = wc_get_order($order_id);
        $order->update_status('on-hold', 'Ожидание оплаты'); // Установка статуса заказа

        return array(
            'result' => 'success',
            'redirect' => $this->get_return_url($order)
        );
    }
}
