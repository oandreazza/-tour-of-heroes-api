FROM mauricioweb/laravel-env

ENV HOME /var/www/api

WORKDIR $HOME

COPY . $HOME

RUN composer install

EXPOSE 80

CMD php -S 0.0.0.0:80 -t public
