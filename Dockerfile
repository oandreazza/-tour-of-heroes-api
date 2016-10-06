FROM mauricioweb/laravel-env

ENV HOME /var/www/api

COPY . $HOME

WORKDIR $HOME

EXPOSE 80

CMD php -S 0.0.0.0:80 -t public
