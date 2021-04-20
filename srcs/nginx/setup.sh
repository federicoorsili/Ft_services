/usr/sbin/sshd
adduser -D paperino
echo "paperino:pluto" | chpasswd

/usr/sbin/nginx -g "daemon off;"