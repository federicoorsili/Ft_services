# dashboard installation

# Config for Load Balancer

# see what changes would be made, returns nonzero returncode if different
kubectl get configmap kube-proxy -n kube-system -o yaml | \
sed -e "s/strictARP: false/strictARP: true/" | \
kubectl diff -f - -n kube-system
# actually apply the changes, returns nonzero returncode on errors only
kubectl get configmap kube-proxy -n kube-system -o yaml | \
sed -e "s/strictARP: false/strictARP: true/" | \
kubectl apply -f - -n kube-system


kubectl apply -f https://raw.githubusercontent.com/kubernetes/dashboard/v2.0.0/aio/deploy/recommended.yaml

cat <<EOF | kubectl apply -f -
apiVersion: v1
kind: ServiceAccount
metadata:
  name: admin-user
  namespace: kubernetes-dashboard
EOF

kubectl -n kubernetes-dashboard get secret $(kubectl -n kubernetes-dashboard get sa/admin-user -o jsonpath="{.secrets[0].name}") -o go-template="{{.data.token | base64decode}}"

# load balancer installation
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/metallb.yaml
kubectl apply -f ./srcs/loader.yaml
docker build --tag nginx-img ./srcs/nginx && kubectl apply -f ./srcs/nginx.yaml
docker build --tag mysql-img ./srcs/mysql && kubectl apply -f ./srcs/mysql.yaml 
docker build --tag phpmyadmin-img ./srcs/phpmyadmin && kubectl apply -f ./srcs/phpmyadmin.yaml
docker build --tag wordpress-img ./srcs/wordpress  && kubectl apply -f ./srcs/wordpress.yaml
docker build --tag ftps-img ./srcs/ftps  && kubectl apply -f ./srcs/ftps.yaml
docker build --tag influxdb-img ./srcs/influxdb  && kubectl apply -f ./srcs/influxdb.yaml
docker build --tag telegraf-img srcs/telegraf && kubectl apply -f srcs/telegraf.yaml
docker build --tag grafana-img srcs/grafana && kubectl apply -f srcs/grafana.yaml

grandfinal=`kubectl get pods | grep mysql | tr ' ' '\n' | head -n 1`
kubectl exec -it $grandfinal -- sh < srcs/mysql/staff.sh 
# run dahboard
kubectl proxy
#http://localhost:8001/api/v1/namespaces/kubernetes-dashboard/services/https:kubernetes-dashboard:/proxy/    

#kubectl exec --stdin --tty mysql -- sh