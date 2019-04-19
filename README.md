---------------------------------------------------------FRANCAIS ------------------------------------------------------------------
# SensNova

[![Build Status](https://travis-ci.org/mdziekon/UniEngine.svg?branch=master)](https://travis-ci.org/mdziekon/UniEngine)
[![Release: Stable (latest)](https://img.shields.io/github/release/mdziekon/UniEngine.svg?label=release%3Astable&logo=github&logoColor=FFFFFF)](https://github.com/mdziekon/UniEngine/releases)

C'est un clone d'un jeu Ogame basé sur le même moteur graphique et le même gameplay. 

- [Pré-requis](#pre-requis)
- [Installation](#installation)
- [Mise à jour à partir d'anciennes versions](#MAJ-a-partir-autres-versions)
- [Guide de développement](#guide-developpement)
- [Remerciements](#remerciements)
- [Licence](#licence)


## Pré-requis

- PHP
    - ``>= 7.0 && < 7.3``
    - ``>= 5.4`` (deprecated)
- Composer
    - ``>= 1.6``
- MySQL
    - ``>= 5``
-Webserver (Wampserver 3.0.6)

### (Additionnel) Pré-requis de développement

- Node.js
    - ``>= 11``

## Installation

1. Installer un webserveur capable de faire tourner des scripts PHP
    - Le fichier `` php.ini`` devrait avoir la génération de rapports `` E_NOTICE`` désactivée, par exemple:
        - - ``error_reporting = E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED``
        
    - PHP doit avoir des droits en écriture sur ces fichiers / répertoires:
        - ``config.php``
        - ``includes/constants.php``
        - ``tmp/``
            - (permanent, exemple : cache Smarty)
            
2. Installer un server MySQL
    - Désactiver le mode ``STRICT_TRANS_TABLES`` .
    
3. Créer une base de données et un utilisateur dans la base pour le serveur du jeu    

4. Déplacez les fichiers source du projet dans le répertoire de votre serveur Web.

5. Installer des dépendances PHP
    - ``composer install --no-dev``

6. Exécutez l'assistant d'installation: http://votre_adresse_serveur:port/install

7. Supprimer le dossier ``install/``


## Mise à jour à partir d'anciennes versions

1. Consultez la section [__Releases__] (https://github.com/mdziekon/UniEngine/releases) pour voir si des scripts de migration ont été fournis entre votre version actuelle et la dernière version à mettre à niveau.
    - Si des scripts de migration sont manquants, ** n'essayez pas d'utiliser la fonctionnalité de migration automatique! ** Cela pourrait endommager complètement votre serveur de jeu.
    - En cas de changements importants (qui pour une raison quelconque ne pouvaient pas migrer automatiquement), une note de version expliquant pourquoi et quelles actions manuelles doivent être effectuées pour procéder à la migration.
	
2. Fermez votre serveur de jeu (empêchez les joueurs d’accéder au jeu).

3. Effectuez une sauvegarde complète de l'état de votre serveur de jeu (base de données, configuration, fichiers, etc.).

4. Assurez-vous que votre serveur PHP a un accès en écriture aux fichiers du serveur de jeu (au cas où l'un des scripts de migration en aurait besoin).

5. Mettez à jour les fichiers vers la version souhaitée.

6. Mettez à jour les dépendances PHP.

    - `` composer install --no-dev``
7. Exécutez le script de migration à partir du répertoire racine du projet:

    - `` composer run-script migrate: run``
    - Pour plus de détails, voir la section [Scripts disponibles] (# scripts disponibles).
	
8. Redémarrez le serveur PHP.


## Guides de développement

### Les préparatifs

1. Installez les dépendances PHP (normal et dev):

    - `composer install --dev``
	
2. Installez les dépendances Node.js:
    - `` npm ci``

### Scripts disponibles

- Lancez le code PHP linting (propulsé par PHP Code Sniffer)
    - `` composer run-script ci-php-phpcs``
	
- Exécuter toutes les migrations non encore appliquées
    - `` composer run-script migrate: lancer [- --confirm-manual-action] ``
    - Script appliquera automatiquement toutes les migrations en attente.
    - Une interaction manuelle peut être nécessaire. Si c'est le cas, suivez les instructions imprimées sur la ligne de commande, puis réexécutez le script avec l'indicateur `` --confirm-manual-action``.
    - Une fois la migration réussie, un fichier marqueur sera créé (`` config / latest-apply-migration``) pour les migrations futures.
	
- Générer un nouveau fichier de migration à l'aide d'un modèle
    - `` composer le script d'exécution migrer: make - <MIGRATION_FILE_NAME> ``
    - Un nouveau fichier de migration avec un ID généré automatiquement (date) sera créé dans le répertoire `utils / migrator / migrations /` `.
	
- Exécuter le linting de code JavaScript (optimisé par ESLint):
    - `` npm run ci-js-eslint``
	
- Exécutez le code CSS lintant (propulsé par stylelint):
    - `` npm run ci-css-stylelint``
	
- Reconstruire (minification + cachebusting) fichiers JS & CSS:
    - `` npm run build-minify``
    - Tous les fichiers des répertoires `` js / `` et `` css / `` seront re-minifiés (uniquement s'ils sont réellement modifiés) et sauvegardés dans leurs répertoires `` dist / `` respectifs.
    - _Remarque: _ lorsqu'un fichier ne contient aucune modification, ce script ne supprime pas l'ancien fichier minified & cachebusted de `` dist / ``. Le remplacement de fichier n'a lieu que si un fichier source a été modifié ou s'il n'y a pas encore de fichier de résultat.
    - _Note: _ ce script ne ** remplace pas automatiquement les chemins de fichiers dans les modèles. Pour l'instant, cela doit être fait manuellement par un développeur.
    - _Note: _ pour des raisons héritées, tous les fichiers de `` dist / `` sont stockés dans le référentiel.

---

## Remerciements

### Auteurs

- Michał Dziekoński (https://github.com/mdziekon)

### Contributeurs

- Alessio <nicoales@live.it> (https://github.com/XxidroxX)

## Licence

GPL-2.0

Voir le fichier `` LICENSE`` pour plus de détails sur la licence de ce projet.

Voir `` OTHERLICENS`` pour les licences des ressources externes incluses.

---------------------------------------------------------ENGLISH-------------------------------------------------------------------

# SensNova

[![Build Status](https://travis-ci.org/mdziekon/UniEngine.svg?branch=master)](https://travis-ci.org/mdziekon/UniEngine)
[![Release: Stable (latest)](https://img.shields.io/github/release/mdziekon/UniEngine.svg?label=release%3Astable&logo=github&logoColor=FFFFFF)](https://github.com/mdziekon/UniEngine/releases)
 
OGame-clone browser based game engine.

- [Requirements](#requirements)
- [Installation](#installation)
- [Updating from older versions](#updating-from-older-versions)
- [Development guides](#development-guides)
- [Credits](#credits)
- [License](#license)

## Requirements

- PHP
    - ``>= 7.0 && < 7.3``
    - ``>= 5.4`` (deprecated)
- Composer
    - ``>= 1.6``
- MySQL
    - ``>= 5``
- A webserver (eg. nginx)

### (Additional) Development requirements

- Node.js
    - ``>= 11``

## Installation

1. Setup a webserver capable of running PHP scripts.
    - ``php.ini`` file should have ``E_NOTICE`` reporting disabled, eg.:
        - ``error_reporting = E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED``
    - PHP needs to have write permissions to these files / directories:
        - ``config.php``
            - (one-off, installation purposes)
        - ``includes/constants.php``
            - (one-off, installation purposes)
        - ``tmp/``
            - (permanent, eg. for Smarty cache)
1. Setup a MySQL server.
    - Disable ``STRICT_TRANS_TABLES`` mode.
1. Create a DB user and DB database for your game server.
1. Move source files of the project to your webserver's directory.
1. Install PHP dependencies.
    - ``composer install --no-dev``
1. Run installation wizard: http://your_server_address:port/install
1. Remove ``install/`` directory

## Updating from older versions

1. Check [__Releases__ section](https://github.com/mdziekon/UniEngine/releases) to see if migration scripts have been provided between your current version and the latest version you want to upgrade to.
    - In case of missing migration scripts, **do not try to use the auto-migrate functionality!** It may completely break your game server.
    - In case of major breaking changes (which for some reason were not possible to auto-migrate), there should be a release note explaining why and what manual actions have to be performed to proceed with migration.
1. Close your game server (prevent players from accessing the game).
1. Perform a full backup of your game server's state (database, configuration, files, etc...).
1. Make sure that your PHP server has write access to game server's files (in case if one of the migration scripts might need this).
1. Update files to the desired version.
1. Update PHP dependencies.
    - ``composer install --no-dev``
1. Run migration script from project's root directory:
    - ``composer run-script migrate:run``
    - For more details go to [Available scripts](#available-scripts) section.
1. Restart PHP server.

## Development guides

### Preparations

1. Install PHP dependencies (normal & dev):
    - ``composer install --dev``
1. Install Node.js dependencies:
    - ``npm ci``

### Available scripts

- Run PHP code linting (powered by PHP Code Sniffer)
    - ``composer run-script ci-php-phpcs``
- Run all not-yet-applied migrations
    - ``composer run-script migrate:run [-- --confirm-manual-action]``
    - Script will automatically apply all outstanding migrations.
    - A manual interaction might be required. If that's the case, follow the instructions printed to the command line and then run the script again with ``--confirm-manual-action`` flag.
    - After successful migration, a marker file will be created (``config/latest-applied-migration``) for future migrations.
- Generate new migration file using a template
    - ``composer run-script migrate:make -- <MIGRATION_FILE_NAME>``
    - New migration file with autogenerated ID (date) will be created in ``utils/migrator/migrations/`` directory.
- Run JavaScript code linting (powered by ESLint):
    - ``npm run ci-js-eslint``
- Run CSS code linting (powered by stylelint):
    - ``npm run ci-css-stylelint``
- Rebuild (minification + cachebusting) JS & CSS files:
    - ``npm run build-minify``
    - All files from ``js/`` and ``css/`` directories will be re-minified (only when actually changed) and saved in their respective ``dist/`` directories.
    - _Note:_ when a file has no changes, this script **won't** remove the old minified & cachebusted file from ``dist/``. File replacement happens only if a source file has changes, or there is no result file yet.
    - _Note:_ this script does **not** automatically replace filepaths in templates. For now, this has to be done manually by a developer.
    - _Note:_ due to legacy reasons, all files in ``dist/`` are stored in the repo.

---

## Credits

### Authors

- Michał Dziekoński (https://github.com/mdziekon)

### Contributors

- Alessio <nicoales@live.it> (https://github.com/XxidroxX)

## License

GPL-2.0

See ``LICENSE`` file for this project's license details.

See ``OTHERLICENSES`` for the licenses of included external resources.