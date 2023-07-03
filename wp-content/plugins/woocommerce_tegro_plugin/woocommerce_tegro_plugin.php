<?php
/**
 * Plugin Name: WooCommerce Tegro Plugin
 * Description: Плагин для интеграции Tegro с WooCommerce.
 * Version: 1.0
 * Author: Коваленко Михаил
 */

// Обработчик события завершения платежа в WooCommerce
function handle_payment_completed($order_id) {
    // Получаем информацию о заказе из WooCommerce
    $order = wc_get_order($order_id);

    // Создаем объект с данными для отправки в Tegro API
    $tegro_data = array(
        'order_id' => $order_id,
        'total_amount' => $order->get_total(),
        // Добавьте другие необходимые данные для Tegro API
    );

    // Выполняем запрос к Tegro API
    $response = make_tegro_request($tegro_data);

    // Обрабатываем ответ от Tegro API
    if ($response['success']) {
        // Успешно обработано
    } else {
        // Возникла ошибка
    }
}

// Регистрируем обработчик события завершения платежа в WooCommerce
add_action('woocommerce_payment_complete', 'handle_payment_completed');

// Функция для выполнения запросов к API Tegro
function make_tegro_request($data) {
    $api_url = 'https://tegro.money/api/endpoint'; // Замените на реальный URL эндпоинта Tegro API
    $headers = array(
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer your_token' // Замените на ваш реальный токен авторизации
    );
    $args = array(
        'headers' => $headers,
        'body' => json_encode($data),
    );
    $response = wp_remote_post($api_url, $args);
    $response_body = wp_remote_retrieve_body($response);
    return json_decode($response_body, true);
}