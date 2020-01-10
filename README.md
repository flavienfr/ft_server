# ft_server

#DOCKER INSTALL

mv /Users/froussel/Library/Containers/com.docker.docker/Data/com.docker.driver.amd64-linux/Docker.qcow2 /sgoinfre/goinfre/Perso/froussel

ln -s /sgoinfre/goinfre/Perso/froussel/Docker.qcow2 /Users/froussel/Library/Containers/com.docker.docker/Data/com.docker.driver.amd64-linux/Docker.qcow2 
or
ln -s com.docker.driver.amd64-linux /Users/froussel/Library/Containers/com.docker.docker/Data

#DOCKER COMMAND

docker build -t froussel/test1 .
docker run --rm -it -p 80:80 -p 443:443 froussel/test1
docker run --rm -it -p 80:80 -p 443:443 froussel/test1 /bin/bash -c "bash /tmp/launcher_no_index && bash"
docker kill dc5618ce910b
docker rm dc5618ce910b
docker ps -a
