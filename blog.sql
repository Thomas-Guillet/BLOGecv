-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Septembre 2017 à 14:29
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `state` enum('enable','disable','pending') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `media` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tag_article_id` int(11) DEFAULT NULL,
  `comment_article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `state`, `created_at`, `media`, `user_id`, `tag_article_id`, `comment_article_id`) VALUES
(16, 'Test de Destiny 2 - Les premiers retours des joueurs et de la presse sont disponibles', '&lt;p&gt;De sortie aujourd\'hui sur PS4 et Xbox One,&amp;nbsp;Destiny 2 est d&amp;eacute;j&amp;agrave; bond&amp;eacute; de monde avec des serveurs qui ont du mal &amp;agrave; accueillir la masse de joueurs.&amp;nbsp;&lt;a href=&quot;https://playerone.tv/news/v/9800/destiny-2-la-liste-des-codes-erreurs-et-comment-faire-pour-les-resoudre.html&quot;&gt;&lt;strong&gt;Si vous rencontrez quelques bugs ou divers probl&amp;egrave;mes, nous vous conseillons d\'ailleurs la lecture de cet article&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;qui vous en dire plus sur le lancement du FPS de Bungie et Activision.&amp;nbsp;&lt;strong&gt;Ici, nous vous proposons de d&amp;eacute;couvrir les premiers retours de&amp;nbsp;Destiny 2, en attendant les tests qui devraient tomber dans les jours &amp;agrave; venir,&lt;/strong&gt;&amp;nbsp;compte tenu de l\'ouverture tardive des serveurs pour une presse jeu&amp;nbsp;vid&amp;eacute;o qui n\'a pas pu&amp;nbsp;acc&amp;eacute;der&amp;nbsp;au titre avant aujourd\'hui, minuit.&lt;/p&gt;\r\n&lt;p&gt;Avant de vous laisser en compagnie des premiers retours des joueurs et de la presse sur ce&amp;nbsp;Destiny 2, nous souhaitions vous dire que nous ne testerons probablement pas le FPS de Bungie. La raison est simple : il est encore tr&amp;egrave;s difficile pour nous d\'avoir les jeux &amp;eacute;dit&amp;eacute;s par Activision, le service presse fran&amp;ccedil;ais &amp;eacute;tant difficilement joignable. Nous ne couvrirons donc pas la sortie de&amp;nbsp;Destiny 2 sur Playerone.tv par un test et des vid&amp;eacute;os.&lt;/p&gt;\r\n&lt;h2&gt;Destiny 2 - Plus une extension qu\'une suite ?&lt;/h2&gt;\r\n&lt;p&gt;La tendance qui se dessine largement lorsqu\'on sonde la toile pour avoir des avis sur&amp;nbsp;Destiny 2 sur PS4 et Xbox One est que&amp;nbsp;&lt;strong&gt;les r&amp;eacute;dacteurs ayant pass&amp;eacute; quelques heures en compagnie du FPS le trouvent agr&amp;eacute;able, mais tr&amp;egrave;s proche de Destiny premier du nom.&lt;/strong&gt;&amp;nbsp;Que l\'on lise les premiers retours de Destructoid, IGN, Gamespot ou encore Attack of the Fanboy, beaucoup arguent que&amp;nbsp;Destiny 2 ressemble &amp;eacute;norm&amp;eacute;ment &amp;agrave; une extension, avec des testeurs qui peinent &amp;agrave; ressentir une s&amp;eacute;paration entre les deux opus. Bungie ne fait en effet pas de rupture s&amp;egrave;che entre les deux opus, ce qui devrait n&amp;eacute;anmoins ravir les joueurs frustr&amp;eacute;s par le contenu du premier opus qui en d&amp;eacute;couvriront bien plus dans cette suite.&lt;/p&gt;\r\n&lt;h2&gt;Les nouveaut&amp;eacute;s de&amp;nbsp;Destiny 2 qui s&amp;eacute;duisent la presse&lt;/h2&gt;\r\n&lt;p&gt;Malgr&amp;eacute; cet aspect Destiny 1.5, la presse est quasi unanime sur un point tr&amp;egrave;s important :&amp;nbsp;Destiny 2 est tr&amp;egrave;s agr&amp;eacute;able &amp;agrave; jouer et procure&amp;nbsp;de belles sensations.&amp;nbsp;&lt;strong&gt;Les nouveaut&amp;eacute;s (The Farm qui remplace la Tour notamment) ne sont apparemment pas l&amp;eacute;gion, mais la formule propos&amp;eacute;e &amp;agrave; nouveau par Bungie est efficace, pour des heures de jeu plaisantes.&lt;/strong&gt;&amp;nbsp;Les graphismes sont d\'ailleurs bien plus beaux, tout comme la bande son et le contenu &amp;agrave; trouver pendant les parties qui sont de meilleure qualit&amp;eacute; que dans Destiny. En somme, si vous avez aim&amp;eacute; le premier Destiny, vous devriez &amp;ecirc;tre s&amp;eacute;duit par Destiny 2 qui fait au moins aussi bien que son grand fr&amp;egrave;re, en laissant de c&amp;ocirc;t&amp;eacute; certains des plus gros d&amp;eacute;fauts.&lt;/p&gt;', 'enable', '2017-09-06 13:23:56', '/media/8378bb3fba6a2ef654d2d027c3239e19.jpg', 1, NULL, NULL),
(17, 'Critique: des fleurs pour algernon - Daniel Keyes', '&lt;h2&gt;&lt;strong&gt;R&amp;eacute;sum&amp;eacute; du livre :&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;Il s\'appelle Charlie Gordon, c\'est un simple d\'esprit, un minable, employ&amp;eacute; aux plus basses besognes dans une usine. Algernon, elle, est une souris de laboratoire et le traitement du Pr Nemur et du Dr Strauss vient de d&amp;eacute;cupler son intelligence. Les deux savants tentent alors d\'appliquer leur d&amp;eacute;couverte &amp;agrave; Charlie avec l\'assistance de la jeune psychologue Alice Kinnian.&lt;/p&gt;\r\n&lt;p&gt;C\'est bient&amp;ocirc;t l\'extraordinaire &amp;eacute;veil de l\'intelligence de ce cerveau demeur&amp;eacute;. Charlie d&amp;eacute;couvre avec passion un monde dont il avait toujours &amp;eacute;t&amp;eacute; exclu, et l\'amour qui ne tarde pas &amp;agrave; na&amp;icirc;tre entre Alice et lui ach&amp;egrave;ve de le m&amp;eacute;tamorphoser.&lt;/p&gt;\r\n&lt;p&gt;Mais un jour, les facult&amp;eacute;s sup&amp;eacute;rieures de la souris Algernon d&amp;eacute;clinent. Pour Charlie commence alors le drame atroce d\'un homme qui peu &amp;agrave; peu se sent retourner &amp;agrave; l\'&amp;eacute;tat de b&amp;ecirc;te.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;Mon avis :&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;Pour commencer, je tiens &amp;agrave; rattraper les &quot;erreurs&quot; du r&amp;eacute;sum&amp;eacute; du livre : Charlie ne travaille pas dans une usine mais dans une boulangerie et Alice Kinnian n\'est pas vraiment psychologue mais professeur pour adultes attard&amp;eacute;s.&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Ceci fait, je commence donc ma critique.&lt;/p&gt;\r\n&lt;p&gt;Des fleurs pour Algernon est un livre de sciences-fiction particuli&amp;egrave;rement touchant. On y voit un homme attard&amp;eacute; mental heureux dans sa peau mais qui d&amp;eacute;sire une chose : &amp;ecirc;tre &quot;un t&amp;eacute;lijan&quot;. Le livre est compos&amp;eacute; des comptes rendus &amp;eacute;crits par lui-m&amp;ecirc;me, on suit donc bien l\'&amp;eacute;volution de son &amp;eacute;criture (qui est difficile &amp;agrave; lire au d&amp;eacute;but) et de sa mani&amp;egrave;re de penser. Il va subir une op&amp;eacute;ration pour &amp;eacute;lever son quotient intellectuel et au d&amp;eacute;but il est persuad&amp;eacute; que &amp;ccedil;a va se faire du jour au lendemain mais il se rend compte que &amp;ccedil;a prend plus de temps que &amp;ccedil;a.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Son &amp;eacute;volution est quand m&amp;ecirc;me rapide, il apprend &amp;agrave; se souvenir d\'&amp;eacute;v&amp;egrave;nements, &amp;agrave; r&amp;eacute;flechir &amp;agrave; la situation, il a soif de connaissances mais son quotien &amp;eacute;motionnel ne suit pas. Il reste &amp;agrave; ce niveau l&amp;agrave; comme un jeune gar&amp;ccedil;on pr&amp;eacute;pub&amp;egrave;re. Il est attir&amp;eacute; par Alice mais agit avec elle comme un adolescent ; il ne sait pas du tout comment se comporter avec les autres et &amp;ccedil;a donne beaucoup de r&amp;eacute;alisme au roman. Il esp&amp;egrave;re devenir intelligent pour se faire des amis mais comme son QI les d&amp;eacute;passe vite largement et qu\'il ne sait toujours pas comment se comporter, il se retrouve assez vite confront&amp;eacute; &amp;agrave; lui-m&amp;ecirc;me.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Si le livre est touchant et bien r&amp;eacute;alis&amp;eacute;, j\'&amp;eacute;mets quand m&amp;ecirc;me ici un gros coup de gueule sur une id&amp;eacute;e st&amp;eacute;r&amp;eacute;otyp&amp;eacute;e. Avoir un QI &amp;eacute;lev&amp;eacute; donne une grande soif de connaissance, certes je peux l\'imaginer. Mais il est impossible d\'apprendre en 4-5 mois (dont un mois avec un QI en dessous de 100) autant de choses. En &amp;agrave; peine quelques mois, Charlie connait 20 langues et poss&amp;egrave;de des connaissances dans des domaines tels que la g&amp;eacute;ographie, les math&amp;eacute;matiques, la physique, la chimie, la biologie et d\'autres encore. Et pas de maigres connaissances : il surpasse les personnes qui travaillent au labo. Non, juste non. Apprendre une langue se fait sur du long terme. M&amp;ecirc;me un surdou&amp;eacute; avec un QI de 185 ne peut pas &amp;ecirc;tre dou&amp;eacute; dans toutes les mati&amp;egrave;res ni en connaitre autant en si peu de temps, sinon leur vie doit &amp;ecirc;tre bien ennuyante.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Except&amp;eacute; ce gros coup de gueule qui je trouve a &amp;eacute;t&amp;eacute; encore exag&amp;eacute;r&amp;eacute; dans ce livre, l\'&amp;eacute;volution psychologique de Charlie et les r&amp;eacute;actions de ses connaissances autour de lui sont tr&amp;egrave;s int&amp;eacute;ressantes. On peut voir qu\'il d&amp;eacute;couvre qu\'on se moquait de lui avant et il devient hautain et aggressif. Les autres r&amp;eacute;agissent chacun &amp;agrave; leur mani&amp;egrave;re.&lt;/p&gt;\r\n&lt;p&gt;J\'ai aussi aim&amp;eacute; l\'association entre Charlie et Algernon. Si on parle peu de la souris au d&amp;eacute;but, elle devient tr&amp;egrave;s importante par la suite. Charlie se voit dans Algernon et ils se comprennent mutuellement. Ils passent par les m&amp;ecirc;mes &amp;eacute;tapes. Lorsque la souris d&amp;eacute;cline on en est profond&amp;eacute;ment affect&amp;eacute;, aussi parce qu\'on sait que Charlie va d&amp;eacute;cliner aussi.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;La fin est incroyablement &amp;eacute;mouvante, m&amp;ecirc;me si elle &amp;eacute;tait en quelque sorte pr&amp;eacute;vue. La mani&amp;egrave;re dont c\'est &amp;eacute;crit fout un gros coup de poing.&lt;/p&gt;\r\n&lt;p&gt;En bref, un livre qui m\'a touch&amp;eacute; et &amp;eacute;mu. J\'ai vraiment appreci&amp;eacute; ce livre et je suis content que ce challenge me l\'ait fait connaitre.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;&lt;strong&gt;deux citations :&lt;/strong&gt;&lt;/h2&gt;\r\n&lt;p&gt;&lt;em&gt;6 avril. Aujourd\'hui, j\'ai appris&amp;nbsp;la virgule, qui est, virgule (,) un point avec, une queue, Miss Kinnian, dit qu\'elle, est importante, parce qu\'elle permet, de mieux &amp;eacute;crire, et elle dit, quelqu\'un pourrait perdre, beaucoup d\'argent, si une virgule, n\'est pas, &amp;agrave; la bonne place.&lt;/em&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;em&gt;26 avril. Je sais que je ne devrais pas tra&amp;icirc;ner dans le coll&amp;egrave;ge quand j\'ai fini au labo, mais de voir ces gar&amp;ccedil;ons et ces filles qui vont et viennent avec leurs livres, et de les entendre parler de ce qu\'ils apprennent durant leurs cours, cela m\'excite.&lt;/em&gt;&lt;/p&gt;', 'enable', '2017-09-06 13:33:43', '/media/e432e4ad975044c4659bcdafd235bdab.jpg', 1, NULL, NULL),
(18, 'Recette: Doigts &agrave; croquer', '&lt;h2 class=&quot;recipe-tabs--alt-title recipe-tabs--alt-title__ingredients&quot;&gt;Ingr&amp;eacute;dients&lt;/h2&gt;\r\n&lt;div class=&quot;recipe-tabs__tab-content recipe-tabs__tab-content--active recipe-ingredients-tab&quot;&gt;\r\n&lt;div class=&quot;recipe-ingredients__header&quot;&gt;\r\n&lt;h3 class=&quot;recipe-ingredients__qt-title&quot;&gt;Nombre de personnes : &lt;strong&gt;6&lt;/strong&gt;&lt;/h3&gt;\r\n&lt;h3 class=&quot;recipe-ingredients__qt-title&quot;&gt;&lt;img class=&quot;ingredients-list__item__icon&quot; style=&quot;font-family: Lato; font-size: 14px;&quot; src=&quot;https://image.afcdn.com/recipe/20170607/67348_w100h100c1cx258cy258.jpg&quot; /&gt;1&lt;span style=&quot;font-family: Lato; font-size: 14px;&quot;&gt;&amp;nbsp; p&amp;acirc;te feuillet&amp;eacute;e&lt;/span&gt;&lt;/h3&gt;\r\n&lt;h3 class=&quot;recipe-ingredients__qt-title&quot;&gt;&lt;img class=&quot;ingredients-list__item__icon&quot; style=&quot;font-family: Lato; font-size: 14px;&quot; src=&quot;https://image.afcdn.com/recipe/20170607/67684_w100h100c1cx350cy350.jpg&quot; /&gt;1&lt;span style=&quot;font-family: Lato; font-size: 14px;&quot;&gt;&amp;nbsp; amande&lt;/span&gt;&lt;/h3&gt;\r\n&lt;h3 class=&quot;recipe-ingredients__qt-title&quot;&gt;&lt;img class=&quot;ingredients-list__item__icon&quot; style=&quot;font-family: Lato; font-size: 14px;&quot; src=&quot;https://image.afcdn.com/recipe/20170607/67505_w100h100c1cx350cy350.jpg&quot; /&gt;1&lt;span style=&quot;font-family: Lato; font-size: 14px;&quot;&gt;&amp;nbsp; oeuf&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2 id=&quot;prepararion-title&quot; class=&quot;title-2&quot;&gt;Pr&amp;eacute;paration&lt;/h2&gt;\r\n&lt;div class=&quot;recipe-infos__timmings&quot;&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__total-time title-4&quot;&gt;TEMPS TOTAL :&amp;nbsp;30 MIN&lt;/div&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__detail&quot;&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__preparation&quot;&gt;&lt;span class=&quot;desktop-show&quot;&gt;Pr&amp;eacute;paration :&lt;/span&gt;&amp;nbsp;&lt;span class=&quot;recipe-infos__timmings__value&quot;&gt;10 min&lt;/span&gt;&lt;/div&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__cooking&quot;&gt;Cuisson :&amp;nbsp;&lt;span class=&quot;recipe-infos__timmings__value&quot;&gt;20 min&lt;/span&gt;&lt;/div&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__cooking&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;div class=&quot;recipe-infos__timmings__cooking&quot;&gt;&lt;span style=&quot;font-family: aileron; font-size: 26px;&quot;&gt;Etape 1&lt;/span&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p&gt;Faire bouillir vos saucisses puis les couper en deux dans le sens de la longueur. D&amp;eacute;rouler la&amp;nbsp;&lt;a class=&quot;af_al&quot; href=&quot;http://www.marmiton.org/pratique/techniques-culinaires-video-cuisine_faire-la-pate-feuilletee-soi-meme.aspx&quot;&gt;p&amp;acirc;te feuillet&amp;eacute;e&lt;/a&gt;&amp;nbsp;et rouler les demi-saucisses &amp;agrave; l\'int&amp;eacute;rieur, l\'une apr&amp;egrave;s l\'autre, en faire un plus court que les autres pour imiter le pouce. Dessiner en gros les phalanges au couteau. &quot;Peindre&quot; au jaune d\'oeuf chacun des doigts et fixer une demi-amande &amp;agrave; une extr&amp;eacute;mit&amp;eacute; afin d\'imiter un ongle.&lt;/p&gt;\r\n&lt;h3 class=&quot;__secondary&quot;&gt;Etape 2&lt;/h3&gt;\r\n&lt;p&gt;Passer au four &amp;agrave; 200&amp;deg;C (thermostat 6-7) 20 min environ.&lt;/p&gt;\r\n&lt;div class=&quot;recipe-chief-tip mrtn-recipe-bloc &quot;&gt;\r\n&lt;div class=&quot;title-with-icon&quot;&gt;\r\n&lt;h4 class=&quot;mrtn-text--active recipe-chief-tip__title mrtn-recipe-bloc__title title-with-icon__title&quot;&gt;Note de l\'auteur&lt;/h4&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;mrtn-recipe-bloc__content&quot;&gt;J\'ai servi cela &amp;agrave; des bambins de 7 ans pour halloween, dans deux assiettes avec quatre doigts et un pouce, recouvrant l\'endroit o&amp;ugrave; devait se trouver la paume de la main d\'une serviette... Non, non: &amp;ccedil;&amp;agrave; n\'est pas gore! Ils ont ador&amp;eacute; et bien rigol&amp;eacute;...&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', 'enable', '2017-09-06 13:39:57', '/media/dafe5b18cd1154a5b3d8b7fe7902538b.jpg', 1, NULL, NULL),
(19, 'TEST : Knack 2 (ps4)', '&lt;p&gt;Au lancement de la PS4, l\'architecte de la console nous proposait Knack, un titre qui se faisait passer pour un jeu d\'action / plateformes alors qu\'il &amp;eacute;tait finalement beaucoup plus orient&amp;eacute; Beat\'em All. Malgr&amp;eacute; tout, Mark Cerny ne souhaitait pas s\'arr&amp;ecirc;ter &amp;agrave; une premi&amp;egrave;re tentative en demi-teinte et nous propose d&amp;egrave;s maintenant Knack 2, suite directe qui remet en sc&amp;egrave;ne la cr&amp;eacute;ature faite de reliques ancestrales. Une s&amp;eacute;quelle de meilleure qualit&amp;eacute; ? Verdict dans notre test de&amp;nbsp;Knack 2, r&amp;eacute;alis&amp;eacute; sur PS4 Pro via une cl&amp;eacute; PlayStation Store offerte par Sony.&lt;/p&gt;\r\n&lt;p&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-9.jpeg&quot; alt=&quot;Test de Knack 2 sur PS4 Pro&quot; /&gt;&lt;/p&gt;\r\n&lt;h2&gt;Knack 2 - Le retour du g&amp;eacute;ant&lt;/h2&gt;\r\n&lt;p&gt;Suite directe au premier opus de 2013,&amp;nbsp;Knack 2 ne vous imposera toutefois pas de faire ou de refaire son grand fr&amp;egrave;re pour comprendre l\'intrigue du jeu. On retrouvera en effet les m&amp;ecirc;mes personnages principaux que dans Knack, avec l\'arriv&amp;eacute;e de quelques nouveaux (la voix fran&amp;ccedil;aise de Sam Drake est de retour), dans une course folle contre un ennemi pr&amp;ecirc;t &amp;agrave; tout pour r&amp;eacute;veiller une arm&amp;eacute;e ancestrales pour assouvir son pouvoir.&amp;nbsp;&lt;strong&gt;Toujours anim&amp;eacute; par de belles sc&amp;egrave;nes cin&amp;eacute;matiques qui rappellent les productions Pixar,&amp;nbsp;Knack 2 se laisse suivre avec plaisir, pour une histoire qui permettra aux joueurs de tous les &amp;acirc;ges de bien saisir les cl&amp;eacute;s de son sc&amp;eacute;nario.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Ceux qui ont d&amp;eacute;j&amp;agrave; jou&amp;eacute; au premier &amp;eacute;pisode ne seront d\'ailleurs pas vraiment d&amp;eacute;boussol&amp;eacute;s par le maniement du h&amp;eacute;ros dans&amp;nbsp;Knack 2, celui-ci r&amp;eacute;pondant &amp;agrave; peu pr&amp;egrave;s aux m&amp;ecirc;mes sollicitations, m&amp;ecirc;me si des changements ont &amp;eacute;t&amp;eacute; faits pour permettre plus de diversit&amp;eacute; de gameplay pendant l\'aventure, chose que nous d&amp;eacute;taillerons plus loin dans ce test de&amp;nbsp;Knack 2.&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2.jpeg&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2.jpeg&quot; alt=&quot;Coop&amp;eacute;ration Knack II PS4&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n&lt;h2&gt;Des graphismes en dessous des standards de Sony&lt;/h2&gt;\r\n&lt;p&gt;En 2013, notre test de Knack faisait d&amp;eacute;j&amp;agrave; ressortir une r&amp;eacute;alisation technique assez faiblarde pour une nouvelle console qui, &amp;agrave; ce moment l&amp;agrave;, ne donnait vraiment pas le meilleure d\'elle-m&amp;ecirc;me.&amp;nbsp;&lt;strong&gt;En 2017, le constat est moindre, mais force est de constater qu\'en comparaison des derni&amp;egrave;res exclusivit&amp;eacute;s produites par Sony,&amp;nbsp;Knack 2 fait plut&amp;ocirc;t p&amp;acirc;le figure en nous donnant l\'impression de voir un jeu de lancement tourner.&lt;/strong&gt;Sur PS4 Pro, vous pourrez toutefois choisir de faire l\'aventure &amp;agrave; 60 images par seconde, ce qui est une option appr&amp;eacute;ciable, et qui ne d&amp;eacute;grade pas la qualit&amp;eacute; graphique pour autant.&lt;/p&gt;\r\n&lt;p&gt;Une nouvelle fois, la direction artistique de&amp;nbsp;Knack 2, aussi vari&amp;eacute;e soit-elle dans la pr&amp;eacute;sence de niveaux aux environnements toujours pas mal inspir&amp;eacute;s, risque de diviser les joueurs. Que ce soit au niveau des humains ou des ennemis goblins, la sensation d\'un clonage sauvage est bien pr&amp;eacute;sente, avec des visages similaires auxquels les designers ont simplement ajout&amp;eacute; des accessoires pour les diff&amp;eacute;rencier. N&amp;eacute;anmoins, tout n\'est absolument pas &amp;agrave; jeter dans les graphismes de&amp;nbsp;Knack 2, pour un titre qui affiche tr&amp;egrave;s souvent une belle distance d\'affichage, des ennemis souvent &amp;eacute;normes, et qui s\'appuie sur un moteur technique capable de bien faire ressentir les changements de tailles de Knack, pierre angulaire du jeu qui prend ici beaucoup plus de poids que dans le premier opus.&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-5.jpeg&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-5.jpeg&quot; alt=&quot;Goblins Knack 2 PS4&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n&lt;h2&gt;Du beaucoup mieux, dans&amp;nbsp;Knack 2...&lt;/h2&gt;\r\n&lt;p&gt;&lt;strong&gt;Chose agr&amp;eacute;able, l\'&amp;eacute;quipe de Mark Cerny a gomm&amp;eacute; la plupart des plus gros d&amp;eacute;fauts de&amp;nbsp;Knack.&amp;nbsp;&lt;/strong&gt;Adieu la difficult&amp;eacute; parfois trop grande inutilement du premier, pour un&amp;nbsp;Knack 2 qui offre &amp;agrave; pr&amp;eacute;sent une courbe de challenge progressive. Les plus jeunes joueurs pourront d\'ailleurs jouer l\'int&amp;eacute;gralit&amp;eacute; de l\'aventure en coop&amp;eacute;ration, ce qui facilitera grandement l\'avanc&amp;eacute;e, tout en d&amp;eacute;multipliant le fun.&amp;nbsp;&lt;strong&gt;Autre am&amp;eacute;lioration notable, une vari&amp;eacute;t&amp;eacute; des niveaux qui fait oublier la r&amp;eacute;p&amp;eacute;titivit&amp;eacute; outrageuse du premier opus.&lt;/strong&gt;&amp;nbsp;A pr&amp;eacute;sent, les niveaux seront compos&amp;eacute;s d\'un cocktail alternant phases de plateforme en obligeant les joueurs &amp;agrave; appuyer sur R1 pour passer en mode &quot;Micro Knack&quot; de 75cm pour exploiter les reliefs des d&amp;eacute;cors et autres corniches, exploitation des combos de Knack pour erradiquer la menace goblin, quelques puzzles sympathiques &amp;agrave; r&amp;eacute;soudre, et quelques affrontements de boss fr&amp;eacute;n&amp;eacute;tiques entre deux phases de tourelles de d&amp;eacute;fense et autres phases typiquement arcade de shooting.&lt;/p&gt;\r\n&lt;p&gt;Tout au long des niveaux, on retrouvera d\'ailleurs les cachettes qui offrent des orbes utiles pour d&amp;eacute;bloquer des comp&amp;eacute;tences dans un arbre qui prend la forme d\'un sph&amp;eacute;rier, et des fragments de reliques qui pourront vous octroyer des bonus comme par exemple la possibilit&amp;eacute; de r&amp;eacute;appara&amp;icirc;tre une fois &amp;agrave; l\'endroit o&amp;ugrave; vous &amp;ecirc;tes tomb&amp;eacute; d\'une plateforme, sans repartir du dernier checkpoint. En parlant des points de contr&amp;ocirc;les, ils sont d\'ailleurs beaucoup mieux g&amp;eacute;r&amp;eacute;s qu\'en 2013, avec un&amp;nbsp;Knack 2 qui ne vous fera enfin plus perdre de temps en rebattant des ennemis en cas de mort.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Le game design g&amp;eacute;n&amp;eacute;ral de&amp;nbsp;Knack 2 a d\'ailleurs pas mal &amp;eacute;volu&amp;eacute; depuis le premier opus, en exploitant beaucoup plus les diff&amp;eacute;rentes tailles possibles du h&amp;eacute;ros.&lt;/strong&gt;&amp;nbsp;Vous pourrez ainsi, au cours d\'un chapitre, alterner de taille pour vous faufiller dans des endroits exig&amp;uuml;s, tout en massacrant 10 minutes plus tard des dizaines d\'ennemis en atteignant la taille d\'un immeuble. L\'utilisation des pouvoirs est &amp;eacute;galement plus agr&amp;eacute;able, et donne parfois lieu &amp;agrave; des petites prises de t&amp;ecirc;tes minimes pour d&amp;eacute;coincer un &amp;eacute;l&amp;eacute;ment du d&amp;eacute;cors qui sera n&amp;eacute;cessaire &amp;agrave; la progression. Pour les moins patients, un syst&amp;egrave;me d\'indice est d\'ailleurs disponible, en vous montrant quoi faire au bon moment. Un bon point pour les joueurs les plus jeunes.&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-3.jpeg&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-3.jpeg&quot; alt=&quot;Phases arcades Knack 2 PS4&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n&lt;h2&gt;...Mais encore de vilains d&amp;eacute;fauts&lt;/h2&gt;\r\n&lt;p&gt;Malheureusement, si&amp;nbsp;Knack 2 corrige beaucoup de sources d\'irritation du premier volet, cette suite n\'est encore pas exempte de d&amp;eacute;fauts.&amp;nbsp;&lt;strong&gt;Si les moments &amp;eacute;piques ne manquent pas, la frustration est une constante dans&amp;nbsp;Knack 2.&lt;/strong&gt;&amp;nbsp;La cause de cela est simple : &amp;agrave; chaque d&amp;eacute;but de niveau, Knack abandonne toutes ses reliques pour appara&amp;icirc;tre &amp;agrave; nouveau dans une taille &quot;normale&quot;. Au cours d\'un niveau, il est m&amp;ecirc;me courant de subitement redevenir petit, ce qui a pour but de compl&amp;egrave;tement casser la fr&amp;eacute;n&amp;eacute;sie qui s\'&amp;eacute;tait install&amp;eacute;e minutes apr&amp;egrave;s minutes en prenant du poids. Les phases de destruction massive sont certes plus nombreuses que dans Knack, mais la frustration de toujours revenir &amp;agrave; la taille classique du h&amp;eacute;ros est beaucoup trop pr&amp;eacute;sente.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Un peu comme si on vous donnait une Ferrari pour faire Paris-Marseille, et que l\'on vous for&amp;ccedil;ait &amp;agrave; prendre une Fiat 500 tous les 100 kilom&amp;egrave;tres, en somme.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;On notera &amp;eacute;galement toujours des phases qui tra&amp;icirc;nent un peu trop en longueur, que ce soit des morceaux de chapitre orient&amp;eacute;s combats ou exploration, avec des angles de cam&amp;eacute;ra pas toujours optimaux. On ne dirige en effet pas du tout la vue dans&amp;nbsp;Knack 2, le stick analogique droit servant &amp;agrave; esquiver les attaques ennemies en glissant dans 8 directions. En parlant du gameplay, d\'ailleurs, si Knack poss&amp;egrave;de bien plus de combos et de r&amp;eacute;activit&amp;eacute;, on notera toujours certaines approximations et une non exploitation de la taille du personnage qui ne change pas vraiment de moteur physique entre ses diff&amp;eacute;rentes tailles.&lt;/p&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-4.jpeg&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-4.jpeg&quot; alt=&quot;Phases Plateformes Knack 2 PS4 Pro&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n&lt;h2&gt;Une suite meilleure, mais perfectible&lt;/h2&gt;\r\n&lt;p&gt;&lt;strong&gt;Malgr&amp;eacute; des d&amp;eacute;fauts qui pourront agacer, nous avons tout de m&amp;ecirc;me passer de bons moments en compagnie de Knack 2.&amp;nbsp;&lt;/strong&gt;Tout comme le premier opus ne nous avait pas d&amp;eacute;plu, cette suite am&amp;eacute;liore suffisamment les choses pour que nous affirmions qu\'elle est bien meilleure que la premi&amp;egrave;re tentative de 2013. La coop&amp;eacute;ration est un vrai plaisir (on pensera notamment &amp;agrave; l\'exemple familial qui pourra animer quelques belles soir&amp;eacute;es gaming !), le game design beaucoup mieux orient&amp;eacute; autour de Knack, tout comme la dur&amp;eacute;e de vie est &amp;agrave; la hauteur de son petit prix (35&amp;euro; en bo&amp;icirc;te et sur le PlayStation Store) avec une aventure d\'une dizaine d\'heures et des modes compl&amp;eacute;mentaires amusants.&lt;/p&gt;\r\n&lt;p&gt;Le seul r&amp;eacute;el probl&amp;egrave;me, selon nous, est une nouvelle fois cette frustration de toujours r&amp;eacute;trograder &amp;agrave; une taille qui limite les d&amp;eacute;g&amp;acirc;ts, ainsi que des longueurs aussi bien sc&amp;eacute;naristiques que pendant certains combats.&amp;nbsp;&lt;strong&gt;La s&amp;eacute;rie progresse en tout cas sur la bonne voie, avec un Knack 2 qui fait tout mieux que son grand fr&amp;egrave;re, mais qui a encore du chemin pour aller chatouiller la qualit&amp;eacute; g&amp;eacute;n&amp;eacute;rale d\'un Ratchet &amp;amp; Clank, par exemple.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;&lt;a href=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-2.jpeg&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;&lt;img src=&quot;https://images.playerone.tv/source/jeux/knack-2/knack-2-2.jpeg&quot; alt=&quot;Tourelles d&amp;eacute;fense Knack 2 PS4 Pro&quot; /&gt;&lt;/a&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;div class=&quot;flex with-wrap&quot;&gt;&amp;nbsp;&lt;/div&gt;', 'enable', '2017-09-06 13:44:45', '/media/1bc372674c20b43cfe619792f11f8481.jpg', 1, NULL, NULL),
(20, 'Nicalis (Binding of Isaac) tease ses prochains titres sur Nintendo Switch', '&lt;p&gt;&lt;strong&gt;Tr&amp;egrave;s t&amp;ocirc;t,&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/informations/#103183&quot;&gt;Nicalis&lt;/a&gt;&amp;nbsp;s\'est montr&amp;eacute; attach&amp;eacute; &amp;agrave; la&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/nintendo-hybride-nx.htm&quot;&gt;Nintendo Switch&lt;/a&gt;, en publiant plusieurs titres sur cette machine (&lt;a href=&quot;http://www.jeuxvideo.com/jeux/switch/jeu-594167/&quot;&gt;The Binding of Isaac&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/jeux/switch/jeu-597307/&quot;&gt;Cave Story+&lt;/a&gt;...) et en pr&amp;eacute;voyant d\'en sortir d\'autres encore. L\'entreprise tease ses projets &amp;agrave; venir par le biais d\'une image r&amp;eacute;cemment post&amp;eacute;e.&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Il s\'agit tout simplement d\'une photo d\'une console du d&amp;eacute;veloppeur, affichant un menu riche en titres. Certains comme&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/jeux/switch/jeu-594914/&quot;&gt;Redout&lt;/a&gt;&amp;nbsp;sont d&amp;eacute;j&amp;agrave; sortis, d\'autres comme&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/jeux/switch/jeu-668220/&quot;&gt;The End is Nigh&lt;/a&gt;&amp;nbsp;sont sur les rails, et d\'autres encore ont &amp;eacute;t&amp;eacute; flout&amp;eacute;s. On devine peut-&amp;ecirc;tre&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/jeux/pc/00035719-vvvvvv.htm&quot;&gt;VVVVVV&lt;/a&gt;,&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/jeux/nintendo-3ds/00042617-code-of-princess.htm&quot;&gt;Code of Princess&lt;/a&gt;&amp;nbsp;ou encore Knight Terrors, mais il faudra attendre une confirmation officielle et&amp;nbsp;&lt;a href=&quot;http://www.jeuxvideo.com/news/693091/nicalis-binding-of-isaac-a-d-autres-jeux-switch-dans-son-sac.htm&quot;&gt;certains de ces jeux sont probablement inconnus&lt;/a&gt;. Dans tous les cas, le planning de Nicalis est charg&amp;eacute;.&lt;/p&gt;\r\n&lt;p&gt;&lt;em&gt;Source :&lt;/em&gt;&lt;a href=&quot;http://jeuxvideo.digidip.net/visit?url=http%3A%2F%2Fgematsu.com%2F2017%2F09%2Fnicalis-teases-five-new-switch-ports-including-code-princess-vvvvvv&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot;&gt;Gematsu&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'enable', '2017-09-06 13:56:03', '/media/19ca9413a499faddb4014a061ddec40d.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `state` enum('enable','pending','disable') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `pseudo`, `content`, `state`, `created_at`) VALUES
(1, 'toma', 'mon premier commentaire', 'enable', '2017-09-05 13:59:27'),
(2, NULL, 'mon deuxieme commentaire', 'enable', '2017-09-05 14:59:27'),
(3, 'oiioh', 'oiiok', 'disable', '2017-09-06 07:23:08'),
(4, 'guibjl', 'igublnk', 'disable', '2017-09-06 07:25:34'),
(5, 'guibj', 'Ã§guo', 'disable', '2017-09-06 07:25:53'),
(6, 'oih', 'iho', 'enable', '2017-09-06 07:26:56'),
(7, 'iuh', 'uiu', 'enable', '2017-09-06 07:27:19'),
(8, 'oih', 'iuh', 'enable', '2017-09-06 07:27:34'),
(9, '', 'lol', 'disable', '2017-09-06 08:09:14'),
(10, '', 'ygibjnl', 'disable', '2017-09-06 09:59:35');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_article`
--

CREATE TABLE `commentaire_article` (
  `id` int(11) NOT NULL,
  `commentaire_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire_article`
--

INSERT INTO `commentaire_article` (`id`, `commentaire_id`, `article_id`) VALUES
(1, 1, 11),
(2, 2, 11),
(3, 3, 11),
(4, 4, 11),
(5, 5, 11),
(6, 6, 11),
(7, 7, 11),
(8, 8, 11),
(9, 9, 11),
(10, 10, 11);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `nb_article_by_date`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `nb_article_by_date` (
`tag` int(11)
,`nb_article` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id`, `label`, `created_at`) VALUES
(1, 'cuisine', '2017-09-06 08:42:24'),
(2, 'electromenager', '2017-09-06 08:42:24'),
(3, 'Festivals', '2017-09-06 10:34:20'),
(4, 'Gastronomie', '2017-09-06 10:34:20'),
(5, 'jeux videos', '2017-09-06 13:21:52'),
(6, 'Litterature', '2017-09-06 13:30:27'),
(7, 'actualites', '2017-09-06 13:48:42');

-- --------------------------------------------------------

--
-- Structure de la table `tag_article`
--

CREATE TABLE `tag_article` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tag_article`
--

INSERT INTO `tag_article` (`id`, `tag_id`, `article_id`) VALUES
(18, 1, 18),
(15, 5, 16),
(19, 5, 19),
(26, 5, 20),
(16, 6, 17),
(27, 7, 20);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`) VALUES
(1, 'Thomas', 'admin@admin.com', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la vue `nb_article_by_date`
--
DROP TABLE IF EXISTS `nb_article_by_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nb_article_by_date`  AS  select `tag`.`id` AS `tag`,count(`article`.`id`) AS `nb_article` from ((`article` join `tag_article` on((`tag_article`.`article_id` = `article`.`id`))) join `tag` on((`tag_article`.`tag_id` = `tag`.`id`))) group by `tag`.`id` order by `tag`.`id` ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`tag_article_id`,`comment_article_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire_article`
--
ALTER TABLE `commentaire_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire_id` (`commentaire_id`,`article_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_article`
--
ALTER TABLE `tag_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`,`article_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `commentaire_article`
--
ALTER TABLE `commentaire_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tag_article`
--
ALTER TABLE `tag_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `commentaire_article`
--
ALTER TABLE `commentaire_article`
  ADD CONSTRAINT `commentaire_article_ibfk_1` FOREIGN KEY (`commentaire_id`) REFERENCES `commentaire` (`id`),
  ADD CONSTRAINT `commentaire_article_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `tag_article`
--
ALTER TABLE `tag_article`
  ADD CONSTRAINT `tag_article_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `tag_article_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
