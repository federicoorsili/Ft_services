# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: simonegiovo <simonegiovo@student.42.fr>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/27 12:34:46 by aduregon          #+#    #+#              #
#    Updated: 2021/04/01 20:25:17 by simonegiovo      ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

EXPOSE 21 30000 30020 30021

RUN		apk update && apk add vsftpd
RUN		apk add --no-cache openssl

RUN     mkdir pippo/
COPY    vsftpd.conf /etc/vsftpd/

RUN     openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes  -out /etc/ssl/vsftpd.crt  -keyout /etc/ssl/vsftpd.key -subj "/C=IT"
RUN		adduser -D pippo
RUN		echo "pippo:pluto" | chpasswd
COPY    start.sh ./start.sh
RUN		chmod 755 ./start.sh
CMD		sh start.sh