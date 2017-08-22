### Requisitos:

[docker](https://docs.docker.com/v1.11/engine/installation/linux/ubuntulinux/) v1.1+ e [docker-compose](https://docs.docker.com/compose/install/) v1.6+.
 
### Para iniciar


```git clone git@github.com:keviocastro/netlearn.git```

```docker-compose up -d```

```docker exec resap_web_1 /elgg-docker/elgg-install.sh```

Pronto, acesse em http://localhost:8080, com usuário `admin` e senha `secret`

### Para resetar com configurações iniciais:

```docker-compose rm -f && docker-compose up -d && docker exec resap_web_1 /elgg-docker/elgg-install.sh```
