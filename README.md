# Calculatrice API
Va de paire avec le projet calculatrice Front ou peut être utilisé via postman pour faire des calcul simple.

une fois le projet cloner, il faut se rendre dans sa racine avec un terminal et entrer la commande suivante pour l'installation.

```bash
composer install
```

Et enfin pour lancer le serveur local, entrer les commandes suivante.

```bash
symfony server:stop
```
Qui va nous servir à être sur qu'il n'y à pas d'autre serveur symfony qui tourne en fond et empêche la lancer de celui-là.

```bash
symfony server:start --port 8080
```

Afin de lancer le projet sur le lochalhost ayant le port 8080.