# Установка

После клонирования репозитория выполнить команду:

$ composer install

Изменить настройки доступа к Redis и RabbitMQ в /config.php

Настроить nginx(на апаче не успел проверить) на index.php в корневой дирректории:

    location / {
        try_files $uri /index.php$is_args$args;
    }

# Использование

**Пример запроса на получение курса**:

    GET /?date=2023-10-12&currency=usd&base=rur 

Параметры:

_date_ - Дата в формате yyyy-mm-dd (обязательный)

_currency_ - Код валюты курс которой требуется получить (обязательный)

_base_ - Код базовой валюты (по умолчанию RUR)


**Запуск воркера:**

$ php console.php fetch:currency-rates 
