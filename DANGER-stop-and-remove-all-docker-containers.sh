sudo docker rm -f $(sudo docker ps -a -q) && sudo docker rmi $(sudo docker images -q)
