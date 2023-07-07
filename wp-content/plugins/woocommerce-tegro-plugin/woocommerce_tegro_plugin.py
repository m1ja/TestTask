import requests
import json

from woocommerce import API

# Создаем объект API для работы с WooCommerce
wcapi = API(
    url="http://example.com",
    consumer_key="consumer_key",
    consumer_secret="consumer_secret",
    version="wc/v3"
)

# Функция для выполнения запросов к API Tegro
def make_tegro_request(data):
    api_url = "https://tegro.money/pay/"  # Замените на реальный URL эндпоинта Tegro API
    headers = {
        "Content-Type": "application/json",
        "Authorization": "LHiGotI02Eiui1IJ"  # Замените на ваш реальный токен авторизации
    }
    response = requests.post(api_url, headers=headers, data=json.dumps(data))
    return response.json()

# Функция для обработки завершенных платежей в WooCommerce
def handle_payment_completed(order_id):
    # Получаем информацию о заказе из WooCommerce
    order = wcapi.get(f"orders/{order_id}").json()

    # Создаем объект с данными для отправки в Tegro API
    tegro_data = {
        "order_id": order_id,
        "total_amount": order["total"],
        # Добавьте другие необходимые данные для Tegro API
    }

    # Выполняем запрос к Tegro API
    response = make_tegro_request(tegro_data)

    # Обрабатываем ответ от Tegro API
    if response["success"]:
        print('zaebic')
        # Успешно обработано
        pass
    else:
        print('Pizdec')
        # Возникла ошибка
        pass
