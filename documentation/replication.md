# Activer la réplication MariaDB

**A faire à chaque redémarrage de conteneur**

# **Sur les deux machines :**

Se connecter aux 2 serveurs en SSH :

<aside>
💡 ssh user@192.168.1.101 (maitre)
ssh user@192.168.1.102 (esclave)

</aside>

se connecter en tant que root :

<aside>
💡 sudo -i

</aside>

Se connecter aux conteneurs mariadb :

<aside>
💡 docker exec -it mariadb_master sh
docker exec -it mariadb_slave sh

</aside>

se connecter au moteur de base de données :

<aside>
💡 mariadb -u root -p

</aside>

# **Sur le Maître :**

Bloquer les tables en lecture :

<aside>
💡 FLUSH TABLES WITH READ LOCK;

</aside>

Afficher le status du Master :

<aside>
💡 SHOW MASTER STATUS;

![Untitled](https://prod-files-secure.s3.us-west-2.amazonaws.com/d0c45b17-e719-493f-85a1-d7b113b7fc75/778b11f9-f190-4556-81b7-62e3bfa7e22e/Untitled.png)

On note le nom du fichier (1) et la position (2)

</aside>

# **Sur l’esclave :**

Arrêter l’esclave :

<aside>
💡 STOP SLAVE;

</aside>

Lancer la réplication, en remplaçant le MASTER_LOG_FILE par le fichier récupéré sur le maître (1), et le MASTER_LOG_POS par la position récupérée sur le maître (2) :

<aside>
💡 CHANGE MASTER TO MASTER_HOST='192.168.1.101', MASTER_PORT=3307, MASTER_USER='replicator', MASTER_PASSWORD='replica_password', MASTER_LOG_FILE='mysql-bin.0000xx', MASTER_LOG_POS=Position;

</aside>

Démarrer l’esclave :

<aside>
💡 START SLAVE;

</aside>

# **Sur le maître :**

Débloquer les tables :

<aside>
💡 UNLOCK TABLES;

</aside>
