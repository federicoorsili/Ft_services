kubectl delete -f srcs/loader.yaml 
kubectl delete -f srcs/mysql.yaml
kubectl delete -f srcs/nginx.yaml
kubectl delete -f srcs/phpmyadmin.yaml
kubectl delete -f srcs/wordpress.yaml
kubectl delete -f srcs/ftps.yaml
kubectl delete -f srcs/influxdb.yaml
kubectl delete -f srcs/telegraf.yaml 
kubectl delete -f srcs/grafana.yaml 
#kubectl delete -f srcs/kustomization.yaml
#docker rm $(docker ps -a -f status=exited -f status=created -q)
#docker rmi $(docker images -a -q)