# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: simonegiovo <simonegiovo@student.42.fr>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/26 10:59:39 by aduregon          #+#    #+#              #
#    Updated: 2021/04/08 02:18:56 by simonegiovo      ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

EXPOSE	80 443 22

RUN		apk update
RUN		apk add --no-cache nginx
RUN		apk add --no-cache openssl
RUN		apk add --no-cache openssh 

RUN		mkdir /www
COPY    pics/dureg.png /www
COPY    pics/dmal.png /www
COPY    pics/sgio.png /www
COPY    pics/fors.png /www
RUN		mkdir /run/nginx
RUN		mkdir /etc/nginx/ssl
COPY	nginx.conf ./etc/nginx/nginx.conf

RUN 	ssh-keygen -A
RUN		adduser -D paperino
RUN		echo "paperino:pluto" | chpasswd

RUN		openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=IT"

COPY	index.html /www/
COPY	style.css /www/


COPY    setup.sh ./setup.sh
RUN		chmod 777 ./setup.sh
CMD		./setup.sh

