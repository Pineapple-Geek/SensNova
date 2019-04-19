<!DOCTYPE php>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=<br>1.0">
	
	<title>SensNova - Connexion</title>

	<link rel="shortcut icon" href="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/css/main.css">

	<!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="./js/php5shiv.js"></script>
	<script src="./js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/images/logo.png" alt="Progressus php5 templates"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.php">Accueil</a></li>
					<li><a href="about.php">Régles du jeu</a></li>
					<li><a href="http://www.kommunauty.fr/forum/xnova/">Forum</a></li>
					<li><a href="login.php">Se Connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
<header id="head" class="secondary"></header>

<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Connexion</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Régles du jeu</h1>
				</header>
				
				<div class="col-md-12 col-sm-12 column-border">
					<h3><br>1. Introduction</h3>
					<p>
1.1. Chaque joueur doit compléter pour accepter les règles du jeu avant la fin de l'inscription. Créer un compte dans le jeu (à n'importe quel univers) revient à dire que l'utilisateur accepte et accepte toutes les dispositions du présent règlement. 
<br>1.2. L’extension de cette réglementation est Table Kar , qui contient une liste de sanctions pour des infractions spécifiques dans le jeu. 
<br>1.3. Chaque joueur doit connaître le règlement, ainsi que tous ses points et sous-points. l'ignorance des règlements et du tableau des pénalités ne vous dégage pas de votre responsabilité pour les actions que vous avez effectuées dans le jeu et pour tout recours. à partir de pénalités dans lesquelles le joueur démontre un manque flagrant de connaissance du Règlement, il sera immédiatement rejeté. 
<br>1.4.1 Les propriétaires de jeux sont des personnes qui disposent de tous les droits sur les serveurs, les domaines, les fichiers et le contenu contenu dans le jeu, ses sous-pages et ses sous-services. (comme Forum ou comptes sur les réseaux sociaux). Le propriétaire du jeu peut agir simultanément en tant qu'administrateur et opérateur de jeu. 
<br>1.4.2 Les administrateurs de jeux sont des personnes qui disposent d'un accès complet à la gestion des jeux afin de préserver l'ordre et de régler les problèmes en suspens grâce à leurs fonctions ou fonctions de jeu. autres solutions techniques. Ils représentent les propriétaires au forum des jeux et au contact des joueurs. 
<br>1.4.3 Supportem Gry sont des personnes occupant un poste de super-opérateur ou d'opérateur de jeux. Ce sont des personnes qui ont eu un accès limité à la gestion du jeu afin de préserver l'ordre et de résoudre les problèmes litigieux grâce aux fonctions de jeu qui leur sont fournies ou à d'autres solutions techniques. Ce sont des intermédiaires en contact entre le joueur et l’administration. 
<br>1.4.4 La hiérarchie de décision dans l'équipe de gestion de la partie (Propriétaires, Administration et Support des jeux) se présente comme suit (le niveau de permission le plus bas commence à gauche): 
Opérateur de jeu »Opérateur de jeu super» Administrateur de jeu »Propriétaire du jeu 
<br>1.4.5 Les responsables de forum (tels que le modérateur ou l'administrateur de forum) ne participent pas à la gestion du jeu, sauf si la personne occupe le même poste en même temps. jeu. 
<br>1.4.6 Les développeurs de jeux sont tous les deux ses administrateurs. Ils ne remplissent pas les fonctions de commande - ils traitent du bon fonctionnement du jeu, en ajoutant de nouvelles fonctions et en réparant les erreurs éventuelles. Leur tâche consiste également à interagir avec la communauté des joueurs afin de créer de meilleurs correctifs et des ajouts plus conviviaux pour les joueurs. <br>1.5. L'administration se réserve le droit de modifier à tout moment le règlement et le tableau des pénalités. Le règlement / tableau de Kar modifié entre en vigueur avec le moment de la publication. 
<br>1.6. Un utilisateur qui n'est pas d'accord avec le règlement modifié ou qui ne veut pas l'accepter est obligé de céder son compte en cassation dans les meilleurs délais. L'utilisation continue du jeu sans statut de suppression de compte revient à accepter les modifications. Dans certains cas particuliers, les propriétaires de jeux et l'administration peuvent activer un système spécial empêchant toute modification ultérieure du jeu sans accepter les modifications apportées au Règlement ou l'activation de l'état de cassation. 
<br>1.7. Si un joueur constate un manque ou un manque de précision dans le Règlement, il doit le signaler au conseil d'administration et attendre une réponse à ce sujet. Si l'Administration juge qu'il est important de noter un point ou une situation donnés, le point concerné peut être ajouté au Règlement. 
<br>1.8. Les règles ne constituent pas la forme finale de la loi sur ce serveur. Dans des cas particuliers, les propriétaires et l'administration décident de la solution du cas. 
<br>1.9. Si l'incident dépasse le cadre du jeu et renvoie à la vie réelle, la principale forme de loi est la loi polonaise. 
<br>1.10. Tous les comptes du jeu appartiennent aux propriétaires. L'utilisateur n'a aucun droit de propriété ou de propriété sur les comptes. Le fait d'avoir un ajout payant au jeu ne signifie pas que le joueur devient propriétaire du compte. 
<br>1.1.1. Les propriétaires et l'administration se réservent le droit de limiter partiellement ou totalement l'accès au jeu aux personnes sélectionnées. 
<br>1.12. Les propriétaires et les administrateurs ne peuvent être tenus responsables de tout blocage ou indisponibilité du jeu pour des raisons aléatoires ou erronées dans le logiciel ou le fonctionnement des serveurs. / span> 
<br>1.13. Les propriétaires de jeux se réservent le droit de stocker des adresses IP et des adresses électroniques à des fins publicitaires et dérivés. Après avoir supprimé le compte, le joueur a le droit de supprimer son adresse IP et son email de la base de données. Pour ce faire, envoyez un email à l’un des propriétaires ou à l’administration du jeu demandant de supprimer des données de la base de données (message, pour vérification, envoyer du même adresse qui figure dans la base de données).</p>	
				</div>
	
				<div class="col-md-12 col-sm-12 column-border Rules">
					<h3><br>2. Comptes</h3>
					<p>
2.1.1. Chaque joueur ne peut avoir qu'un seul compte sur chaque univers. 
<br>2.1.2. Un joueur qui a reçu Bana (blocage de compte) ne peut pas créer un autre compte pour un jeu ultérieur. 
<br>2.1.3. Une seule personne peut jouer sur chaque compte, sauf si la situation est décrite dans les sections suivantes ou si l'Administration a accepté de jouer à plusieurs les gens. 
<br>2.1.4. Il est strictement interdit de diviser le compte entre deux (ou plus) personnes. 
<br>2.1.5. Un joueur peut autoriser une autre personne à se connecter à ce compte pour permettre des vacances si le propriétaire du compte ne peut le faire lui-même: 
<br>- Dans ce cas, vous devez signaler ce fait dans les 24 heures qui suivent votre connexion au forum du jeu dans la section correspondante ou directement à l'administration.
<br>- La personne autorisée à se connecter ne peut qu'exclure: autoriser les jours fériés et (uniquement si cela est nécessaire) arrêter toutes les actions se déroulant sur le compte (construction de bâtiments, étude de la technologie, par exemple) et restituer les flottes en vol.
<br>- Il est interdit de faire d'autres activités sur le compte, par exemple, émettre des matières premières, continuer à se développer, envoyer des flottes.
<br>- Si les vacances ne peuvent pas être activées (par exemple, si la file d'attente dans la cour est pleine, un autre joueur attaque la planète appartenant à ce compte), la personne autorisée doit se déconnecter et (éventuellement) réessayer ultérieurement. 
<br>2.1.6. Une seule personne peut être connectée à un seul ordinateur. Si plusieurs joueurs utilisent un ordinateur donné, chaque joueur doit attendre son tour. 
<br>2.1.7. Lecture sur un ordinateur ou un réseau (par exemple, plusieurs joueurs doivent être signalés à l'administration via la fonction 'Jeu depuis un IP' disponible dans le jeu, au plus tard 24 heures après l'enregistrement du joueur suivant. Veuillez noter que: 
<br>- Les comptes ne peuvent combiner aucune caractéristique commune, sauf appartenir à une alliance
<br>- Le contact de toute flotte entre comptes est interdit (les vols communs en provenance de l'Union sont autorisés dans des cas particuliers par l'Administration)
<br>- Une exception aux deux sous-éléments ci-dessus est la journalisation sporadique au même endroit (par exemple, des cybercafés, une connexion occasionnelle à l'ordinateur du second joueur le week-end). Ensuite, le contact des flottes est interdit uniquement lorsque les joueurs se connectent au même endroit.
<br>2.2.1. L'échange de compte est autorisé, mais ce fait doit être signalé à l'administration. Dans ce cas, l’administration peut remplacer les deux comptes sans qu’il soit nécessaire d’échanger des mots de passe. En cas d'échange sans préavis, l'administration n'est pas tenue de rembourser les pertes éventuelles en cas de fraude ou de vol, pas plus qu'elle ne doit engager de procédure pour clarifier la situation. 
<br>2.2.2. Il est interdit de vendre des comptes (ou l'une de ses parties, par exemple des matières premières) à des fins commerciales. Les propriétaires de jeux reconnaissent toutefois la possibilité de vendre des comptes à des fins caritatives. </p>
				</div>

			<div class="col-md-12 col-sm-12 column-border Rules">
					<h3><br>3. Gameplay</h3>
					<p>
3.1.1. Il n'est pas nécessaire que les échanges soient déclarés sur le forum du jeu ni à aucune personne de l'administration et de l'assistance du jeu. 
<br>3.1.2. Le taux de conversion minimal dans Trade est le rapport 1: 1 pour chaque matière première. La vente ou l'achat de matières premières à des prix déraisonnables (prix constamment sous-évalués ou gonflés) peut être considéré comme une manifestation de Push, visée au point 3.2. 
<br>3.1.3. La transaction doit être complétée 24 heures après le premier joueur envoyant la flotte. Aucun retour de matières premières ne sera considéré comme une poussée ou un vol (selon la situation). 
<br>3.1.4. Il n'y a pas de limite quotidienne pour le négoce de matières premières. 
<br>3.1.5. Tout prêt de matière première doit être signalé sur le forum du jeu ou directement à l’administration. Sinon, ils peuvent être considérés comme une poussée mentionnée au point 3.2. 
<br>3.1.6. La durée maximale du prêt est de 14 jours.
3.2.1. On considère qu'un push soutient un joueur plus fort par un joueur plus faible. 
3.2.2. Les formulaires Push sont: 
<br>- Transport des ressources vers les planètes ou les lunes d’un joueur plus fort.
<br>- Détruire délibérément la flotte avec la planète d'un joueur plus fort, de manière à ce qu'il puisse récupérer les restes après la bataille.
<br>- Stockage délibéré de grandes quantités de matières premières afin qu’un acteur plus fort puisse les prendre.
<br>- Aucune entrée de mercenaire [Prises de lune, de recyclage, de mise au rebut délibérée de la flotte] (si une notification est requise)
<br>- Briser une des règles à partir de point 3.1 du présent règlement
<br>- Tous les autres moyens susceptibles de bénéficier à un compte plus fort. 
<br>3.2.3. Veuillez noter que: 
<br>- Les matières premières indésirables d'un joueur plus faible ne peuvent pas être arrêtées, elles doivent être renvoyées immédiatement et ce fait doit être signalé sur le forum du jeu ou directement à l'administration.
<br>- Si l'administration détecte une impulsion, les joueurs les plus faibles et les plus forts peuvent être punis (si les deux parties ont été impliquées dans l'incident).
<br>- Il est interdit et puni de faire chanter d’autres joueurs. 
<br>3.2.4. L'assistance pour renforcer les acteurs de l'alliance est possible sous la forme d'un prêt, mais doit être signalée sur le Forum des Jeux ou directement à l'Administration.
<br>3.3.1. Formation de la lune ('Moonmaking' - envoi délibéré de flottes afin de les détruire de manière à ce que la lune se forme en orbite) est autorisé sous certaines conditions: 
<br>- Toute perte subie par un joueur à qui on a demandé de l’aider dans la fabrication de la lune devrait être couverte par le joueur qui l’a demandé.
<br>- Les pertes des deux côtés de la bataille doivent être aussi minimes que possible. Dans des cas particuliers, l’utilisation de flottes excessivement grandes (y compris des pertes dépassant largement les exigences relatives à la formation de la Lune) peut être considérée comme une manifestation de Push. 
<br>3.3.2. Il n'est pas nécessaire de signaler la fabrication de la lune. 
<br>3.3.3. La fabrication de la lune est considérée comme un mariage.
<br>3.4.1. Le démantèlement délibéré d'une flotte est autorisé sous certaines conditions: 
<br>- La mise au rebut doit être signalée sur le forum du jeu ou directement à l’administration ou au service d’assistance. Elle ne peut avoir lieu qu’après autorisation.
<br>- Les joueurs qui doivent participer à la démolition doivent fournir une raison valable et raisonnable pour cette action et confirmer clairement leur participation.
<br>- Les déchets résultant de la mise au rebut doivent être divisés en parts égales par pertes de chaque côté de la bataille (il est permis de convertir toutes les pertes en une matière première selon un taux de conversion raisonnable).
<br>3.4.2. La mise au rebut intentionnelle de flottes est considérée comme étant mercenaire.
<br>3.5.1. Les prêts de recyclage (pour récupérer les débris en excès après la bataille) sont autorisés et doivent être signalés sur le forum du jeu ou directement à l'Administration ou équipe de soutien. 
<br>3.5.2. La distribution des matières premières du champ de destruction est libre. 
<br>3.5.3. Le renvoi doit avoir lieu dans les 24 heures suivant la collecte des matières premières dans le champ de destruction. 
<br>3.5.4. Les prêts recyclables sont considérés comme des mercenaires.
<br>3.6.1. Bash est considéré comme représentant plus de 5 attaques par un planète ou lune dans les 24 heures ( compté de 00h00 à 23h59) ou plus de 15 attaques par un joueur dans les 24 heures (compté de 00h00 à 23h59) 
<br>3.6.2. La flotte volant avec la mission Destroy est comptabilisée comme une attaque normale. 
<br>3.6.3. Chaque joueur qui participe à l’attaque syndicale est compté séparément pour la règle Bash (il n’ya pas de responsabilité collective dans ce cas). 
<br>3.6.4. Les règles Bash ne sont pas soumises à: 
<br>- attaques à la roquette
<br>- Détecter les sons espions
<br>- Les attaques qui se terminent par une victoire ou une victoire du (des) défenseur (s) et de la flotte et des biens du ou des protecteurs étaient intactes - aucune perte dans la flotte, la défense et les matières premières du côté du ou des défenseurs
<br>- Batailles entre des membres de l'alliance actuellement en guerre. Pour que le gouvernement Bashu soit aboli pendant la guerre, il doit s'écouler au moins 12 heures à compter du moment de la déclaration de guerre sur le Forum des Jeux (aucun autre rapport n'est pris en compte). L’administration et l’appui du jeu peuvent refuser de déclarer la guerre (par le message du forum et de News in the Game) et, dans ce cas, le principe Bash n’est pas aboli.
<br>- En outre, si une alliance plus forte déclare la guerre à une alliance beaucoup plus faible (celle-ci est déterminée par l'administration ou le soutien), la guerre doit être confirmée par une alliance plus faible.
<br>- Attaques de joueurs inactifs pendant au moins 7 jours (statut marqué avec une lettre correspondante dans l'aperçu galactique) 
<br>3.6.5. Dispositions supplémentaires pour cette règle: 
<br>- Si un Mercenaire injustifié aboutit à un abus (par exemple, un nombre excessif d’attaques par rapport au contrat conclu entre joueurs), le joueur blessé (le défenseur) a le droit de signaler ces abus selon les principes de Bash.
<br>3.7.1. Insecter est l'utilisation ou la dissimulation délibérée d'erreurs dans le logiciel de jeu dans son intérêt personnel ou celui d'autrui et pour ralentir, déstabiliser le jeu. ou rendre difficile l'accès au jeu pour d'autres personnes. 
<br>3.7.2. Tout joueur sanctionné pour avoir utilisé un bug ou ignorant l'erreur est tenu d'assister l'Administration afin de localiser et de rectifier l'erreur, si l'administration le demande. S'il refuse de coopérer, son compte peut être puni, complètement bloqué ou supprimé. 
<br>3.7.3. Chaque joueur doit signaler un bogue découvert, quelle que soit sa gravité. 
<br>3.7.4. Si le joueur dispose d’une aide exceptionnelle pour résoudre le problème en erreurs (ou en rapporte suffisamment), l’Administration peut lui attribuer les suppléments payés correspondants. dans le jeu. Toutefois, toute tentative d'extorsion du prix peut être sanctionnée.
<br>3.8.1 Le mode Quitter a pour but de protéger le compte du joueur lorsqu'il est absent des attaques des autres joueurs. Par conséquent, il est interdit de bloquer la possibilité de passer à un jour férié, quel que soit le mode de blocage utilisé (un exemple de blocage consiste à envoyer des flottes lentes à la planète du joueur). 
<br>3.8.2 Le mode Congé doit durer au moins 3 jours et peut durer au plus 30 jours (à moins que le joueur n’écrit à l’Administration de lui demander de le prolonger avec due à une situation inhabituelle). La durée maximale des vacances permet d'éviter de laisser des comptes inactifs et intouchables dans le jeu. 
Au bout de 30 jours à compter de la date du congé, le système supprimera automatiquement le congé du compte du joueur à la prochaine conversion des statistiques du serveur. 
<br>3.8.3 Après avoir supprimé chaque congé, le système bloquera toute tentative de reprise de vos prochaines vacances pendant les prochaines 24 heures.
<br>3.9.1 Utilisation de bots, autocliqueurs, autosilver et autres programmes ou scripts non acceptés par les propriétaires et l'administration du jeu, mais pour pour faciliter ou automatiser le jeu, sont strictement interdites. 
<br>3.9.2 Il est strictement interdit d'utiliser le jeu avec un logiciel autre qu'un navigateur Web. 
<br>3.9.3 Le navigateur officiellement pris en charge est Mozilla Firefox dans la dernière version stable disponible. Cependant, le jeu est également vérifié sur les dernières versions stables des autres navigateurs, ainsi que sur certaines versions de développement. Les propriétaires de jeux ne garantissent pas le fonctionnement correct du jeu sur les anciens navigateurs (tels qu'Internet Explorer 6) et sur les téléphones mobiles ou les tablettes. 
<br>3.9.4 Dans des cas particuliers, les propriétaires de jeux ou l'administration peuvent (mais ne sont pas obligés) restituer une ressource ou une flotte perdue, qui a été déclenchée par une défaillance du serveur. Dans le même temps, il convient de rappeler que dans ce cas, vous devez fournir autant d'informations que possible pour faciliter le processus de retour.
</p>
</div>

<div class="col-md-12 col-sm-12 column-border Rules">
					<h3><br>4. Communication</h3>
					<p>
4.1.1. Les langues officielles de contact avec les propriétaires, l'administration et l'assistance dans le jeu sont le polonais et l'anglais. 
<br>4.1.2. Dans les messages (privés et discussion), il est interdit: 
<br>- Emprunter l'identité des propriétaires de jeux, de l'administration ou de l'assistance technique.
<br>- Toutes les formes de publicité pour les sites Web ou les jeux concurrents.
<br>- Envoi de spam, annonces indésirables.
<br>- Envoyez des liens malveillants ou du code malveillant pour extorquer des données de lecteur privé.
<br>- Dans des cas particuliers, ils seront également punis: l'infraction et la calomnie commises en public, ainsi que la forte vulgarité dirigée contre d'autres personnes (la pseudocenzure, c'est-à-dire le fait de cacher une partie du blasphème, sera également punie). 
<br>4.1.3. Dans les noms (joueur, planètes, lunes, alliances, etc.), il est interdit de: 
<br>- Utilisation de noms réservés aux propriétaires de jeux, à l’administration ou au support (par exemple, Admin, GameMaster, Opérateur de jeu).
<br>- Emprunter l'identité des propriétaires de jeux, de l'administration ou de l'assistance.
<br>- Utilisation de phrases vulgaires, offensantes ou racistes. 
<br>4.1.4. Les propriétaires de jeux et l'administration se réservent le droit d'afficher les messages envoyés par les joueurs dans le cas où une enquête de crack serait nécessaire.
<br>4.2.1. Il est interdit de tenter d'extorsion sur d'autres joueurs ou propriétaires, sur l'administration ou sur le support du jeu. 
<br>4.2.2. Les menaces liées au jeu (par exemple la menace de destruction d’une flotte) ne seront pas punies si elles ne dépassent pas les limites du bon sens. span> 
<br>4.2.3. L'extorsion ou les menaces qui pèsent sur la vie réelle sont strictement interdites. 
<br>4.2.4. La fraude de jeu est interdite. 
<br>4.2.5. Les tentatives de triche pour les propriétaires de jeux, d’administrations ou de support seront punies. 
<br>4.2.6. Chaque message de masse (messages administratifs) du jeu est une lecture obligatoire pour le joueur. Tout comme l'ignorance du Règlement, l'ignorance du contenu du Message ne dégage de toute responsabilité en ce qui concerne les informations ou les directives qu'il contient pour les joueurs. 
<br>4.2.7. Toutes les entrées, opinions, suggestions sur le jeu doivent être rapportées sur le forum du jeu, via le système de génération de rapports ou directement à l'administration ou au support. Les conversations en vrac via le chat ou une autre communication ne seront pas prises en compte.
<br>4.3.1. Tous les spams et messages publicitaires sans le consentement des propriétaires ou de l'administration sont strictement interdits. 
<br>4.3.2. Si plusieurs personnes participent à l'action d'envoi de SPAM ou d'annonces, elles seront toutes punies 
<br>4.3.3. Tous les messages destinés à annoncer vos propres jeux, sites Web, blogs, forums et contenant également des liens de parrainage sont également considérés comme du SPAM. 
<br>4.3.4. L'envoi multiple de messages vides (contenant par exemple un seul caractère) ou non pertinents (contenant une chaîne aléatoire) est considéré comme du SPAM.
<br>4.3.5. Le SPAM sera également pris en compte pour les envois groupés de Spy Probes ou d’autres Flots (pour remplir la liste des flottes en vol ou la boîte de message du joueur).
</p>
</div>

<div class="col-md-12 col-sm-12 column-border Rules">
					<h3><br>5. Fonctionnalités et compléments de compte payant</h3>
					<p>
5.1. Les ajouts payants qu'un joueur peut acheter pour un compte qui lui est attribué ne sont pas remboursables en cas de violation du Règlement. 
<br>5.2. En cas de blocage ou blocus de l'accès au jeu, les propriétaires ou l'administration du jeu peuvent, mais pas nécessairement, prendre des dispositions gratuites accorder une indemnisation pour tout ou partie des indemnités perdues. 
<br>5.3. Les paiements effectués ne seront pas remboursés, même si vous supprimez votre compte. 
<br>5.4. Toute réclamation ou tout problème lié aux paiements ou aux extras payés doit être signalé au conseil d'administration.						
</p>
</div>

<div class="col-md-12 col-sm-12 column-border Rules">
					<h3><br>6. Dispositions finales</h3>
					<p>
6.1. Tout le contenu publié dans le jeu ne peut pas enfreindre les lois polonaises, ne peut pas enfreindre les règles de déontologie et ne doit pas enfreindre les principes de la culture personnelle. span> 
<br>6.2. Toute pénalité imposée sur le compte du joueur peut être infligée sans explication de la part des propriétaires et de l'administration du jeu. 
<br>6.3. C’est le propriétaire, l’administration et le support du jeu qui détermine si le joueur a enfreint un point donné des règles. 
<br>6.4. La décision de soutien peut être contestée par l'administration et la décision de l'administration par les propriétaires du jeu. Seule la personne qui a imposé la peine ou le poste supérieur peut annuler ou atténuer la peine infligée. 
<br>6.5. Si un joueur estime que la pénalité qui lui a été attribuée est injuste, il peut faire appel dans la section appropriée du forum du jeu. 
<br>6.6. Si une règle n'est pas incluse dans ces règles, le cas est finalement résolu par les propriétaires ou l'administration du jeu.
</p>
</div>
			</article>
			<!-- /Article -->

		</div>
	</div>

	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Accueil</a> | 
								<a href="about.php">Régles du jeu</a> |
								<a href="sidebar-right.php">Forum</a> |
								<a href="contact.php">Se Connecter</a>
								<b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2019, Crée par la Team SENS 🚀
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/<br>1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/headroom.min.js"></script>
	<script src="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/jQuery.headroom.min.js"></script>
	<script src="<?php $url = str_replace('/rules.php', '', $_SERVER['REQUEST_URI']) ;  echo($url); ?>/js/template.js"></script>
</body>
</php>