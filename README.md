### Requirements:

[docker](https://docs.docker.com/v1.11/engine/installation/linux/ubuntulinux/) v1.1+ e [docker-compose](https://docs.docker.com/compose/install/) v1.6+.
 
### Install


```git clone git@github.com:keviocastro/netlearn.git```

```docker-compose up -d```

```docker exec netlearn_web_1 /elgg-docker/elgg-install.sh```
	
Ready, go to http://localhost:8080, with user `admin` and password `secret`

### To reset:

```docker-compose rm -f && docker-compose up -d && docker exec netlearn_web_1 /elgg-docker/elgg-install.sh```
