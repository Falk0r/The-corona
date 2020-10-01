# Projet fin de formation

## Code legacy PHP vers framework PHP Laravel

Nous avions comme projet de fin de formation à la IT-Akademy de migrer un site dit "legacy" PHP vers un framework plus moderne => __LARAVEL__.

## Le versionning

Nous étions par équipe de trois personnes afin de saisir le travail d'un développeur en équipe. Pour ce faire nous avons éprouvés nos connaissances sur un programme de versionning de code : __GIT__.

Nous avons pu voir notamment l'utilisation de __Branch__ pour coder les fonctionnalités qui nous sont attribués. Puis d'envoyer les nouvelles fonctionnalités par __Pull Request__ et de __Merge__ les changements sur la __Branch__ principale.

Ce projet était un très bon exercice sur le __versionning__.

## Le code Legacy PHP

La première chose avant d'envoyer du code vers le framework __Laravel__ est d'analyser le code existant et le fonctionnement de celui-ci.

Pour ma part j'ai trouvé beaucoup de similitude avec le concept de __Wordpress__ où tout est géré avec un __Back-office__. A savoir, toutes les modifications sont effectués dans le panel __Admin__ puis envoyés en base de donnée __MySQL__. Les pages appelés récupère via des appels __PHP__ les données à afficher. Tout ceci sera donc géré par __Laravel__ en back-end avec __Eloquent__.

### L'architecture :

Nous pouvons distinguer 3 grands blocs au sein du projet :

* Le site vu par l'utilisateur avec la partie boutique
* l'espace client accessible par mot de passe
* Le panel Admin accessible par mot de passe

Nous devons donc dans un premier temps créer cette architecture sous le framework __Laravel__.

Viendra ensuite la migration de la base de donnée __MySQL__.

Puis la mise en forme du site avec les différentes pages __HTML__, __CSS__, le __javascript__ et le __CRUD__ inhérant à chaque page du projet.

## Le framework Laravel

Mon travail au sein de l'équipe était d'implanter la partie authentification, tant client que admin.

J'ai donc configuré le fichier __auth.php__ comprennant les deux composantes :

```php
<?php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'tblcustomers',
    ],
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'tblcustomers',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ]
    ],
    'providers' => [
        'tblcustomers' => [
            'driver' => 'eloquent',
            'model' => App\TblCustomer::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ]
    ],
    'passwords' => [
        'tblcustomers' => [
            'provider' => 'tblcustomers',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
    'password_timeout' => 10800,
];
```
Ici nous affectons les clients à la table __MySQL__ tblcustomers. Concernant les admins, nous utilisons la table admin dans un souci de simplicité. En effet la base de donnée contenant une seule et unique information, nous choisissons d'utiliser la table par défaut puisque qu'aucune migration de cette table n'est necessaire.

__Eloquent__ est utilisé pour gérer les appels à la base de donnée.

La spécificité est le routage côté Admin, avec l'ajout d'un __prefix__ pour les __Url__ dans le fichier de routage :

```php
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');
```

## Les mises en page

Une fois ce travail d'architecture fait, nous pouvons passer à la mise en page. Mes collègues ont effectués la migration de la base de donnée vers __Laravel__.

Une fois cette opération effectuée, nous prennons la décision de copier les fichiers __CSS__ et __javascript__ vers le dossier public du framework.

Les appels à ces fichiers sont effectués de manière dynamique, par exemple, avec le code suivant :

```html
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
```

Le fait de transférer directement les fichiers nous permet de ne pas toucher au __design__ original du site. Seul la correction de bugs mineurs peut être nécessaire.

### Le CRUD

Chaque page du site dispose d'au moins une intéraction avec la base de donnée. Les données sont transmises via un __controlleur__ dédié :

```php
public function doctors()
{
    return view('admin.doctors', ['name' => 'Doctors', 'button' => 'Add Doctor', 'link' => 'admin.doctors-add' ,'doctors' => TblDoctor::getAll()]);
}
```

Ceci est un exemple simple d'appel d'un __READ__ sur une page du site.

## Conclusion

Ce projet a été très formateur sur le framework __Laravel__ mais également le versionning avec __GIT__.

Nous avons pû voir que la migration d'un projet en code __legacy php__ vers un __framework__ type __Laravel__ ou autre n'est pas une chose aisée et demande une gestion fine en amont. 

Le __travail en équipe__ et la __communication__ sur ce projet ont été un facteur essentiel à sa mise en oeuvre. Nous avons pris le temps de planifier nos tâches, affecter les tâches de chacun au travers du __projects__ de __Github__.

Faute de temps, ce projet n'est pas encore terminé.

## Sujet du projet

Je vous mets ci-dessous les sujets du projet donnée par la IT-Akademy. Bonne lecture !

<a href="https://www.it-akademy.fr/">
    <img src="https://www.it-akademy.fr/img/logo.png" alt="IT-Akademy logo" title="IT-Akademy" align="right" height="60" />
</a>

# BOOTCAMP 2020.1

### " Reprise urgente d'un site web en cours de développement "

Ce bootcamp consiste en une mise en situation professionnelle simulée, basée sur un cas réel rencontré en entreprise, et adapté aux besoins pédagogiques de cette fin d'année.

Si tu es déjà à l'aise pour travailler avec Git et GitHub, nous te conseillons de travailler avec la version CLI de Git. Dans le cas contraire, nous t'invitons à utiliser [GitHub Desktop](https://desktop.github.com/), le temps de bien comprendre les concepts fondamentaux de Git.

_______


#### Contexte

Cela fait maintenant quelques mois que tu as rejoint l'équipe et nous sommes très heureux de notre collaboration. Tu as déjà fait tes preuves et il est temps pour nous de te confier une mission à la hauteur des compétences que tu as su démontrer !

Nous avons justement un projet en cours qui nous met dans l'embarras : TheCorona. Il s'agit d'un site web marchand dédié à la vente de produits d'hygiène dans le cadre de la crise COVID-19 que nous traversons. Le développement de cette plateforme pour un de nos clients important a débuté il y a plusieurs semaines, mais vient d'être stoppé car tous les membres de l'équipe projet sont tombés malades et sont arrêtés. Les délais imposés par le contrat ne nous permettent pas d'attendre le rétablissement de nos collègues et il nous faut donc recréer une équipe en urgence afin de terminer le produit dans un délai de 3 semaines. C'est dans ce but que nous te sollicitons.

Pour ton information, l'équipe précédente n'a pas respecté nos process internes et n'a pas réalisé de documentation technique pour ce produit.

Nous comptons sur toi pour donner le meilleur de toi même et, avec ta nouvelle équipe, nous tirer de ce mauvais pas.

Cette équipe étant toute nouvelle, nous laissons le champ libre à l'organisation entre les membres. Nous demandons en revanche que les outils habituels soient utilisés, à savoir :

* les issues GitHub pour les bugs et les ajouts de fonctionnalités (répartition du travail dans l'équipe),
* la gestion de projet GitHub Kanban pour le suivi de l'exécution des tâches.

Enfin, si d'autres demandes sont formulées par le client final, tu en sera informé, ainsi que ton équipe, par les issues GitHub.

#### Objectifs pédagogiques

Ce bootcamp repose sur le principe d'une mise en situation professionnelle, certes simulée, mais très proche de la réalité. Ainsi, en plus d'être amené.e à utiliser les concepts et savoir-faire techniques que tu as acquis au cours de l'année écoulée, tu vas être confronté.e à de nombreuses nouveautés, voire certaines difficultés, pour lesquelles tu devras faire preuve d'ingéniosité, de persévérance et d'organisation.

À l'issue de ce Bootcamp :

* Tu sauras explorer, analyser et comprendre l'architecture d'un site web en PHP dit '*legacy*', c'est à dire qui ne correspond plus aux standards et bonnes pratiques actuels. C'est un cas de figure très courant en début de carrière (ou même après) et qui donne souvent des sueurs froides. C'est une expérience et un savoir-faire qui te sera très utile pour la suite.

* Tu sauras reprendre du code informatique produit par d'autres développeurs. Ce n'est pas toujours évident, surtout lorsque le code n'est pas commenté, qu'il n'y a pas de documentation et que le code ne reprend aucun des standards que tu connais.

* En conséquence, tu comprendras l'importance des bonnes pratiques de code (organisation, commentaires, versionning, documentation, ...) et des standards.

* Tu sauras également travailler en équipe avec Git et GitHub.

* Tu découvriras la puissance et la souplesse de Docker.

#### Consignes

##### Itération 1 : Lancement et découverte de l'environnement de développement

Notre équipe DevOps a mis en place un environnement de développement dans le cloud, dont la mise en service est totalement automatisée. Tu n'as donc pas à perdre de temps avec la configuration et tu peux te concentrer sur ta mission.

Cet environnement repose sur [GitPod](https://gitpod.io/#https://github.com/it-akademy-students/dwm13-bootcamp-team1-dwm13). Pour l'utiliser, il te suffit de te connecter avec ton compte GitHub @it-students.fr. Le plan dont nous disposons pour tous nos collaborateurs te permet 100 heures d'utilisation du service.

Il s'agit d'un service très complet qui est intégré avec GitHub. Tu disposeras ainsi, dans une seule fenêtre :
* D'un accès au dépôt GitHub que tu partages avec ton équipe
* D'un éditeur de code en ligne
* D'une machine virtuelle hébergeant le site (Docker)
* D'une prévisualisation du site en cours de développement

**Pour lancer ton environnement de développement, il te suffit de cliquer sur le bouton ci-dessous :**

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/it-akademy-students/dwm13-bootcamp-team1-dwm13)

Une fois l'environnement lancé, il te suffira d'installer la base de données en lançant la commande `mysql -uroot < ../database/thecorona.sql`.

Comme tu pourras le constater, le site est loin d'être fonctionnel et il faudra, pour ton équipe et toi, effectuer certaines corrections pour obtenir un affichage "normal" de l'interface.


##### Itération 2 : Apport des finitions au site web, correction des bugs, intégration des visuels

Comme tu pourras le constater, le site est loin d'être terminé. Malheureusement, notre client est pressé
et il est urgent de mettre en ligne une première version (même *beta*). Nous comptons donc sur ton équipe et toi pour :

* Analyser et comprendre la conception du site (pour lequel nous ne disposons d'aucune documentation)
* Apporter les modifications nécessaires pour le rendre fonctionnel et sécurisé
* Ajouter des images (nous n'avons plus le temps de faire appel à un graphiste, nous comptons donc sur ton ingéniosité et ta créativité)

##### Itération 3 : Mise en ligne la boutique et configuration du paiement en ligne

Une fois la partie information / vitrine du site créée, tu devras mettre en service la partie e-commerce du site :
* Saisie des produits
* Configuration et intégration d'un compte de test [Stripe](https://stripe.com/fr).
* Configuration de l'envoi des emails transactionnels
* Test du fonctionnement du paiement

##### Itération 4 : Mise en production et déploiement automatisé

Une fois le produit prêt à être publié, un membre de ton équipe ou toi même devra
faire une demande auprès de [l'équipe support](mailto:support@it-akademy.fr) (DevOps) pour la mise à disposition du serveur de production qui hébergera le site.

Ton équipe et toi devrez alors mettre en place un système de déploiement automatisé à l'aide de
l'outil que nous utilisons en interne : [Rocketeer](http://rocketeer.autopergamene.eu/).

L'objectif de cette itération est de configurer Rocketeer de telle sorte qu'une simple commande
`rocketeer deploy` lancée dans l'environnement de développement permettra de mettre en ligne la
dernière version du site.

##### Itération 5 : Générer la documentation du produit

Tu as pu te rendre compte, à travers ce bootcamp, qu'il est parfois complexe de reprendre le développement d'un produit pour lequel aucune documentation technique n'est fournie. C'est pourquoi nous te demandons de créer une documentation pour ce développement et ainsi assurer la continuité de service autour de ce produit.

Pour cela, nous te laissons totalement libre de juger ce qui est, selon toi, pertinent
de faire figurer dans une documentation technique pour un site web.

Nous te demandons, en revanche d'utiliser pour cela https://www.mkdocs.org/, qui est l'outil
validé en interne par la cellule R&D.

Tu placeras la documentation générée dans le répertoire `./docs` du projet.

### Fin du bootcamp

L'un des membres de l'équipe devra faire un push avec les dernières modifications apportées au
projet avant la deadline fixée :

```shell
git commit -am "Last commit, job is done !"
git push
```
