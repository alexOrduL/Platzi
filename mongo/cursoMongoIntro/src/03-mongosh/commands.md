## Connect to container

```sh
docker-compose exec mongodb bash
```

## Connect with mongoSh

```sh
mongosh "mongodb://root:root@localhost:27017/?authMechanism=DEFAULT&tls=false"
```

## Instant conecction

```
docker-compose exec mongodb mongosh
```

## Mongosh commands

```sh
show dbs
show collections
```

```sh
use("platzi_store")
db.products.find()
```
