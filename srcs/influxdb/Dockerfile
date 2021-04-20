# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: sgiovo <sgiovo@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/04/03 17:03:30 by sgiovo            #+#    #+#              #
#    Updated: 2021/04/03 17:55:46 by sgiovo           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    alpine

EXPOSE 8086

RUN		apk add --update
RUN     apk add --upgrade influxdb

COPY    setup.sh ./setup.sh
RUN		chmod 755 ./setup.sh

CMD     ./setup.sh

