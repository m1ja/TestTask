<?php
/**
 * Plugin Name: Tegro Payment Plugin
 * Description: Плагин для интеграции Tegro с WooCommerce.
 * Version: 1.0
 * Author: Ваше имя
 * Author URI: https://example.com/
 */

// Подключаем функцию обработки платежа
add_action( 'woocommerce_api_payment', 'tegro_process_payment' );
function tegro_process_payment() {
    // Получаем данные платежа из запроса
    $order_id = $_POST['order_id'];
    $amount = $_POST['amount'];

    // Формируем данные для отправки в Tegro API
    $tegro_data = array(
        'order_id' => $order_id,
        'amount' => $amount,
        // Добавьте другие необходимые данные для Tegro API
    );

    // Выполняем запрос к Tegro API
    $tegro_api_url = 'https://tegro.money/api/endpoint';
    $tegro_token = 'your_tegro_token'; // Замените на ваш реальный токен авторизации
    $tegro_headers = array(
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . $tegro_token,
    );

    $tegro_response = wp_remote_post( $tegro_api_url, array(
        'headers' => $tegro_headers,
        'body' => json_encode( $tegro_data ),
    ) );

    if ( ! is_wp_error( $tegro_response ) ) {
        $tegro_body = json_decode( wp_remote_retrieve_body( $tegro_response ), true );

        // Проверяем статус ответа от Tegro API
        if ( $tegro_response['response']['code'] === 200 && $tegro_body['success'] ) {
            // Платеж успешно обработан

            // Получаем объект заказа
            $order = wc_get_order( $order_id );

            // Помечаем заказ как оплаченный
            $order->payment_complete();

            // Добавляем заметку к заказу
            $order->add_order_note( 'Заказ успешно оплачен через Tegro.' );

            // Очищаем корзину
            WC()->cart->empty_cart();

            // Возвращаем успешный ответ
            wp_send_json_success( array(
                'message' => 'Оплата успешно выполнена.',
            ) );
        } else {
            // Ошибка при обработке платежа

            // Получаем текст ошибки из ответа Tegro API
            $error_message = isset( $tegro_body['error'] ) ? $tegro_body['error'] : 'Произошла ошибка при обработке платежа.';

            // Возвращаем ошибку
            wp_send_json_error( array(
                'message' => $error_message,
            ) );
        }
    } else {
        // Ошибка при выполнении запроса к Tegro API

        // Возвращаем ошибку
        wp_send_json_error( array(
            'message' => 'Произошла ошибка при выполнении запроса к Tegro API.',
        ) );
    }
}
