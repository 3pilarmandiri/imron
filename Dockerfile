FROM bitnami/laravel

WORKDIR /app 

COPY myproject /app

# RUN ["php","artisan","serve"]