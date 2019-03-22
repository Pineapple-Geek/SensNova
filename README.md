# Projet SensNova

Documentation Développeur

1 - Partage des ressources documentaires

[https://drive.google.com/open?id=1kO-Nh-QPxI0S-Q0Um6\_OpaaOV1dbHHB\_](https://drive.google.com/open?id=1kO-Nh-QPxI0S-Q0Um6_OpaaOV1dbHHB_)

2 - Installation en local d&#39;un environnement de développement

Création de l&#39;environnement de développement

En ligne de commande, entrez la commande suivante :

| git clone https://github.com/estoclet/sens-dev-env.git %userprofile%\sens-dev-env |
| --- |

Cette commande va créer, dans votre répertoire utilisateur Windows, l&#39;arborescence suivante :

| sens-dev-env├── docker│   ├── apache│   │   └── vhosts│   ├── mysql│   ├── php└── www |
| --- |

Toujours en ligne de commande, déplacez vous jusqu&#39;à ce répertoire :

| cd %userprofile%\sens-dev-env |
| --- |

et lancez l&#39;installation de votre environnement de développement :

| docker-compose up -d |
| --- |

Un série de téléchargements seront lancés, patientez…

Création d&#39;un vhost pour apache

Editez le fichier **c:\Windows\System32\Drivers\etc\hosts** en administrateur avec NotePad et y ajouter la ligne :

| 127.0.0.1   sensnova.loc |
| --- |

Téléchargement des sources du projet SensNova :

Assurez vous d&#39;être dans le bon répertoire :

| cd %userprofile%\sens-dev-env\www |
| --- |

Et copiez les sources depuis notre répertoire Github :

| git clone https://github.com/Pineapple-Geek/SensNova.git sensnova |
| --- |

3 - Prise en charge d&#39;un carte Trello

Chaque carte porte un numéro unique (exemple : FEAT006).

Voici la procédure GIT pour commencer votre développement :

A - Assurez vous d&#39;être sur la branche &quot;master&quot; de votre dépôt local :

| git checkout master |
| --- |



B - Assurez vous d&#39;être à jour :

| git fetch |
| --- |



C - Créez la branche correspondant à votre carte Trello

| git checkout -b FEAT006 |
| --- |



D - Modifiez et/ou créez les fichiers nécessaires à la fonctionnalité développée

E - Validez vos changements :

| git add -p |
| --- |

F- Procédez au commit :

| git commit -m &quot;FEAT006 : tapez votre commentaire&quot; |
| --- |
