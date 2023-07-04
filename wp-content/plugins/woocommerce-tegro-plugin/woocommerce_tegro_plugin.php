<?php
/*
Plugin Name: WooCommerce Tegro Plugin
Description: Плагин для интеграции Tegro с WooCommerce.
Version: 1.0
Author: Ваше имя
Author URI: https://example.com/
*/

// Обработчик события завершения платежа в WooCommerce
function handle_payment_completed($order_id, $total_amount) {
    $python_script = "C:\xampp\htdocs\TestTask\wp-content\plugins\woocommerce-tegro-plugin\woocommerce_tegro_plugin.py";
    $command = "python3 {$python_script} {$order_id} {$total_amount}";
    exec($command, $output, $return_code);

    // Обработка вывода и кода возврата, если необходимо
}

// Регистрируем обработчик события завершения платежа в WooCommerce
add_action('woocommerce_payment_complete', 'handle_payment_completed', 10, 2);
?>
