## Развертывание приложения

Для развертывания приложения нужно выполнить миграции и сидеры

````
php artisan migrate
php artisan db:seed
````

#### [GET] api/users/{users}/cars - получение списка автомобилей, доступных для пользователя

Request

````
{users} - id пользователя

{
    "car_model_id": integer,
    "travel_start": string (format: "2024-07-20 14:00:00"),
    "travel_end": string (format: "2024-07-20 14:00:00")
}
````

Response

````
{
    "data": [
        {
            "id": integer,
            "name": string,
            "car_comfort": string,
            "car_model": string,
            "car_driver": string,
            "travel_start": datetime,
            "travel_end": string
        }, ...
    ],
    "links": {
        "first": string,
        "last": string,
        "prev": string,
        "next": string
    },
    "meta": {
        "current_page": integer,
        "from": integer,
        "last_page": integer,
        "links": [
            {
                "url": string,
                "label": string,
                "active": boolean
            }, ...
        ],
        "path": string,
        "per_page": integer,
        "to": integer,
        "total": integer
    }
}
````
