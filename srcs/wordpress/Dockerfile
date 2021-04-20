# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: simonegiovo <simonegiovo@student.42.fr>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/27 12:43:18 by aduregon          #+#    #+#              #
#    Updated: 2021/04/05 15:53:46 by simonegiovo      ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

EXPOSE	5050

COPY	start.sh ./

RUN     apk update
RUN apk add --no-cache bash
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
RUN		apk add wget

COPY	wordpress /www/
COPY	wp-config.php /www/

RUN		chmod -R 777 var/www/*
RUN		mkdir /run/nginx

COPY	nginx.conf ./etc/nginx/nginx.conf

RUN     chmod 755 /start.sh
CMD		./start.sh



