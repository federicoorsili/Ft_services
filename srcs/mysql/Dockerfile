# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: aduregon <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/28 17:50:56 by aduregon          #+#    #+#              #
#    Updated: 2021/04/09 14:43:57 by aduregon         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

EXPOSE	3306

RUN		apk add --update
RUN		apk add mysql mysql-client

COPY	wordpress.sql my.cnf init_file ./


RUN     mkdir /run/mysqld
RUN		mv my.cnf /etc/

COPY    setup.sh    ./setup.sh
COPY    staff.sh    ./staff.sh

RUN		chmod 755 ./setup.sh
RUN		chmod 755 ./staff.sh

ENTRYPOINT		./setup.sh