FROM    alpine


EXPOSE  5000


RUN     apk update 
RUN apk add --no-cache nginx
RUN	apk add --no-cache php7
RUN	apk add --no-cache php7-fpm
RUN	apk add --no-cache php7-opcache
RUN	apk add --no-cache php7-gd
RUN	apk add --no-cache php7-mysqli
RUN	apk add --no-cache php7-zlib
RUN	apk add --no-cache php7-curl
RUN	apk add --no-cache php7-mbstring
RUN	apk add --no-cache php7-json
RUN	apk add --no-cache php7-session
RUN	apk add --no-cache php7-xml
RUN	apk add --no-cache php7-iconv

COPY    ./start.sh   ./
RUN     mkdir www
RUN		mkdir /run/nginx
COPY	nginx.conf ./etc/nginx/nginx.conf
COPY    config.inc.php /www
COPY    ./phpMyAdmin-5.1.0-all-languages /www

RUN     chmod 755 www 

#RUN     ln -s /usr/share/webapps/phpmyadmin/ /www/phpmyadmin 

CMD      ./start.sh