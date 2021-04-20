# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: simonegiovo <simonegiovo@student.42.fr>    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/04/03 19:07:43 by sgiovo            #+#    #+#              #
#    Updated: 2021/04/06 18:59:28 by simonegiovo      ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:latest

EXPOSE 8125

RUN apk update

RUN     wget https://dl.influxdata.com/telegraf/releases/telegraf-1.14.5-static_linux_amd64.tar.gz
RUN     tar xf telegraf-1.14.5-static_linux_amd64.tar.gz
RUN     cp telegraf/telegraf /usr/bin

COPY    setup.sh ./setup.sh
RUN		chmod 755 ./setup.sh
COPY ./telegraf.conf etc/telegraf/telegraf.conf


ENTRYPOINT		./setup.sh