<?php

const GENDER = [
    'action' => [
            'label' => 'Action',
            'tw-class' =>'text-white bg-blue-700',
    ],
    'romance' => [
            'label' => 'Romance',
            'tw-class'=> 'text-white bg-pink-400',
    ],
    'horreur' => [
            'label' => 'Horreur',
            'tw-class' => 'text-white bg-neutral-950',
    ],
    'aventure' => [
            'label' => 'Aventure',
            'tw-class'=> 'text-white bg-green-700',
    ],
    'drame' => [
            'label' => 'Drame',
            'tw-class'=> 'text-white bg-orange-700',
    ],
    'school' => [
            'label' => 'School',
            'tw-class'=> 'text-white bg-yellow-400',
    ],
    'surnaturel' => [
            'label' => 'Surnaturel',
            'tw-class'=> 'text-white bg-red-700',
    ],
    'fantastique' => [
            'label' => 'Fantastique',
            'tw-class'=> 'text-white bg-sky-950',
    ],
    'fantasy' => [
            'label' => 'Fantasy',
            'tw-wd' => 'text-white bg-fushia-600',
    ],
];

$books = [

    [
        'id' => 0,
        'title' => "L'Attaque des Titans",
        'author' => 'Isayama Hajime',
        'summary' => "Eren est un petit garçon rêvant de voyager dans le monde extérieur. Mais cela est impossible car il vit dans une ville fortifiée aux murailles dépassant les cinquante mètres de haut. Ces remparts sont nécessaires à la sécurité des habitants car ils sont les derniers représentants de l'humanité, obligés de se cacher pour échapper aux titans qui ont massacré la majeure partie du genre humain un siècle plus tôt. Eren est têtu : il ne se doute pas de la violence des combats qui ont opposé les hommes aux titans. Il décide de poster sa candidature pour devenir éclaireur, car il s'agit des seuls soldats autorisés à sortir de la ville pour en savoir plus sur les titans. Mais un beau jour, un géant parvient à détruire le mur qui protégeait la ville et ouvre la voie à plusieurs dizaines de ses congénères ! Eren assiste impuissant à la mort atroce de sa mère qui finit dévorée. Alors qu'il fuit avec d'autres survivants, il se jure de se venger et de détruire la race des titans jusqu'à ce qu'il n'en reste plus un seul !!",
        'gender' => ['horreur', 'aventure', 'action', 'drame'],
        'date_publication' => 2013,
        'image' => 'attaque_des_titans.webp',
        'tomes' => 31,
    ],
    [
        'id' => 1,
        'title' => 'One Piece',
        'author' => 'Oda Eiichiro',
        'summary' => "Gloire, fortune et puissance, c'est ce que possédait Gold Roger, le tout puissant roi des pirates, avant de mourir sur l'échafaud. Mais ses dernières paroles ont éveillées bien des convoitises, et lança la fabuleuse ère de la piraterie, chacun voulant trouver le fabuleux trésor qu'il disait avoir laissé.

        Bien des années plus tard, Shanks, un redoutable pirate aux cheveux rouges, rencontre Luffy, un jeune garçon d'une dizaine d'années dans un petit port de pêche. Il veut devenir pirate et le rejoindre, mais Shanks lui répond qu'il est trop jeune. Plus tard, Luffy avalera accidentellement le fruit Gomu Gomu qui rendra son corps élastique, mais aussi maudit par les eaux. Incapable de nager, Luffy ne veut pourtant pas renoncer à son rêve. Pour le consoler lorsqu'il part, Shanks lui offre son chapeau. Luffy jure alors de le rejoindre un jour avec son propre équipage.
        
        A 17 ans, Luffy prend la mer dans une petite barque avec pour but de réunir un équipage de pirates, mais de pirates pas comme les autres, qui devront partager sa conception un peu étrange de la piraterie. L'aventure est lancée.",
        'gender' => ['action', 'aventure'],
        'date_publication' => 2000,
        'image' => 'one_piece.webp',
        'tomes' => '107 (en cours)',
    ],
    [
        'id' => 2,
        'title' => 'My Hero Academia',
        'author' => 'Horikoshi Kohei',
        'summary' => "Dans un monde où 80 % de la population possède un super‑pouvoir appelé alter, les héros font partie de la vie quotidienne. Et les super‑vilains aussi ! Face à eux se dresse l'invincible All Might, le plus puissant des héros ! Le jeune Izuku Midoriya en est un fan absolu. Il n'a qu'un rêve : entrer à la Hero Academia pour suivre les traces de son idole. Le problème, c'est qu'il fait partie des 20 % qui n'ont aucun pouvoir... Son destin est bouleversé le jour où sa route croise celle d'All Might en personne ! Ce dernier lui offre une chance inespérée de voir son rêve se réaliser. Pour Izuku, le parcours du combattant ne fait que commencer !",
        'gender' => ['action', 'school'],
        'date_publication' => 2016,
        'image' => 'my_hero_academia.webp',
        'tomes' => '38 (en cours)',
    ],
    [
        'id' => 3,
        'title' => 'Death Note',
        'author' => 'Tsugumi Ōba',
        'summary' => "Light Yagami est un jeune lycéen de 17 ans qui possède toutes les qualités pour devenir un brillant policier comme son père, mais il s'ennuie. Les cours lui semblent trop simple, et la vie trop ennuyeuse. Un jour, il trouve le Death Note d'un Shinigami (un Dieu de la Mort). Il y est écrit que chaque nom de personne inscrit provoquera la mort de celle-ci, par crise cardiaque, ou par accident au choix de l'utilisateur.

        Tout d'abord, Light n'y croit pas, puis il y voit une excellente occasion de débarrasser le monde des malfrats, assassins et autres bandits. Une intention que les gouvernements verront bientôt comme une menace. Ils feront alors appel à L, un célèbre détective, pour démasquer celui que ses fans appellent Kira.",
        'gender' => ['surnaturel', 'drame'],
        'date_publication' => 2007,
        'image' => 'death_note.webp',
        'tomes' => 12,
    ],
    [
        'id' => 4,
        'title' => 'Demon Slayer',
        'author' => 'Gotoge Koyoharu',
        'summary' => "Depuis les temps anciens, il existe des rumeurs concernant des démons mangeurs d'hommes qui se cachent dans les bois. Pour cette raison, les citadins locaux ne s'y aventurent jamais la nuit. La légende raconte aussi qu'un tueur de démons déambule la nuit, chassant ces démons assoiffés de sang. Pour le jeune Tanjirô, ces rumeurs vont bientôt devenir sa dure réalité ...

        Depuis la mort de son père, Tanjirô a pris sur lui pour subvenir aux besoins de sa famille. Malgré cette tragédie, ils réussissent à trouver un peu de bonheur au quotidien.
        
        Cependant, ce peu de bonheur se retrouve détruit le jour où Tanjirô découvre que sa famille s'est faite massacrer et que la seule survivante, sa sœur Nezuko, est devenue un démon. À sa grande surprise, Nezuko montre encore des signes d'émotion et de pensées humaines. Ainsi, commence la dure tâche de Tanjirô, celle de combattre les démons et de faire redevenir sa sœur humaine.",
        'gender' => ['surnaturel', 'aventure', 'fanstatique'],
        'date_publication' => 2017,
        'image' => 'demon_slayer.webp',
        'tomes' => 23,
    ],
    [
        'id' => 5,
        'title' => 'Naruto',
        'author' => 'Kishimoto Masashi',
        'summary' => "Il y a de cela douze ans, Kyūbi, un démon ayant la forme d'un renard à neuf queues, entreprit la destruction du village de Konoha, mais le quatrième Hokage neutralisa ce démon en le scellant dans le corps d'un nouveau-né : Naruto Uzumaki. Le quatrième Hokage se sacrifia ainsi pour sauver le village de Konoha.

        L'histoire commence pendant l'adolescence de Naruto, vers ses douze ans. Orphelin, éternel cancre et grand farceur, il fait toutes les bêtises possibles pour se faire remarquer. Son rêve : devenir Hokage afin d'être reconnu par les habitants de son village. En effet, le démon scellé en lui a attisé la crainte et le mépris des autres villageois, qui, avec le temps, ne font plus de différence entre le Kyūbi et Naruto. Malgré cela, Naruto s'entraîne dur afin de devenir genin, le premier niveau chez les ninjas.",
        'gender' => ['action', 'aventure'],
        'date_publication' => 2002,
        'image' => 'naruto.webp',
        'tomes' => 72,
    ],
    [
        'id' => 6,
        'title' => 'Fairy Tail',
        'author' => 'Mashima Hiro',
        'summary' => "Lucy est une jeune magicienne de 16 ans à la recherche d'une guilde. Fan de magie depuis sa plus tendre enfance, elle lisait régulièrement des magazines sur les guildes, et a finalement voulu en intégrer une. Dans ce but, elle est devenue magicienne des clés stellaires, un mage capable d'appeler des esprits avec qui il a conclu un pacte au moyen de clés.

        Lucy rêverait d'intégrer la glorieuse guilde de Fairy Tail, mais elle n'a aucune idée de leurs méthodes de recrutement, et a un peu peur face à la réputation de guilde à problème qu'elle traîne. Mais bien vite, elle laisse ses remords de côté lorsqu'un mage du feu prétend être de la guilde et l'invite à bord de son bateau. Ce n'est qu'un imposteur, mais elle est sauvée par Natsu, un jeune homme qu'elle avait rencontré peu avant et qui, lui, est un véritable membre de la guilde.",
        'gender' => ['action', 'aventure', 'fantasy'],
        'date_publication' => 2008,
        'image' => 'fairy_tail.webp',
        'tomes' => 63,
    ],
    [
        'id' => 7,
        'title' => 'Jujustu Kaisen',
        'author' => 'Akutami Gege',
        'summary' => "Chaque année au Japon, on recense plus de 10 000 morts inexpliquées et portés disparus.

        Dans la majorité des cas, ce sont les sentiments négatifs des êtres humains qui sont en cause. Souffrance, regrets, humiliation : leur accumulation dans un même endroit provoque des malédictions souvent fatales...
        
        C'est ce que va découvrir à ses dépens Yuji Itadori, lycéen et membre du club de spiritisme. Il ne croit pas aux fantômes, mais sa force physique hors du commun est un précieux atout pour les missions du groupe... jusqu'à ce que l'une d'elles tourne mal. La relique qu'ils dénichent, le doigt sectionné d'une créature millénaire, attire les monstres ! Le jeune homme n'hésite pas une seconde : il avale la relique pour conjurer le mauvais sort !
        
        Le voilà possédé par Ryomen Sukuna, le célèbre démon à deux visages. Contre toute attente, Yuji réussit à reprendre le contrôle de son corps. C'est du jamais vu ! Malgré tout, il est condamné à mort par l'organisation des exorcistes... Une sentence qui ne pourra être repoussée qu'à une seule condition : trouver et ingérer tous les doigts de Sukuna afin d'éliminer la menace une fois pour toutes. Et pour ça, l'adolescent va devoir s'initier à l'art occulte et mystérieux de l'exorcisme !
        
        Monstres assoiffés de sang, combats épiques et magie surpuissante : découvrez la nouvelle bombe dark fantasy ! Au cœur d'une lutte millénaire entre exorcistes et démons, comment garder son humanité alors même que le mal se tapit au plus profond de soi ?",
        'gender' => ['aventure', 'fantastique', 'surnaturel', 'action', 'school'] ,
        'date_publication' => 2020,
        'image' => 'jujutsu_kaisen.webp',
        'tomes' => '23 (en cours)', 
    ],
    [
        'id' => 8,
        'title' => 'Tokyo Ghoul',
        'author' => 'Ishida Sui',
        'summary' => "A Tokyo, de nos jours.
        Plusieurs cadavres mutilés ont été retrouvés par la police qui recherche vainement un coupable. Quelques spécialistes évoquent les goules, créatures monstrueuses qui chassent les humains pour les manger. Kaneki Ken, jeune homme de 18 ans étudiant à l'université, ne se préoccupe pas plus que ça de ces incidents, mais la réalité va le rattraper ! En effet, la jolie fille pour laquelle il a eu le coup de foudre dans un café et avec qui il sort n'est autre que la goule qui sévit dans le quartier ! Celle-ci tente de le dévorer et lui broie l'abdomen, mais elle est achevée par la chute de poutres en métal d'un chantier avant d'avoir pu mettre son sinistre dessein à exécution. Tout pourrait être bien qui finit bien, mais les médecins qui retrouvent Kaneki à moitié mort ne trouvent pas d'autre moyen pour le sauver que de transplanter les organes du monstre dans son corps ! Après son opération, le jeune homme constate avec horreur qu'il se transforme petit à petit en goule... La descente aux enfers de Kaneki commence !!",
        'gender' => ['action', 'horreur', 'surnaturel'],
        'date_publication' => 2013,
        'image' => 'tokyo_ghoul.webp',
        'tomes' => 14,
    ],
    [
        'id' => 9,
        'title' => 'Fullmetal Alchemist',
        'author' => 'Arakawa Hiromu',
        'summary' => "À Amestris, un immense pays, l'armée tient une place très importante puisque son dirigeant, King Bradley, est également le président du pays. Cette armée est soutenue par des alchimistes, les Alchimistes d'État dont le plus jeune, Edward Elric, a pour spécialité le métal. On le surnomme le Fullmetal Alchemist.

        Edward a tout juste 15 ans, et parcourt le pays en compagnie de son frère, Alphonse, à la recherche de la Pierre Philosophale. Il a pour but de rendre son corps à son frère, car Alphonse n'est qu'une âme rattaché à une armure par un sceau de sang. Étant plus jeunes, ils ont essayé de redonner vie à leur mère grâce à l'alchimie, mais la tentative fut un échec cuisant, et Alphonse perdit son corps.
        Edward garde lui aussi des séquelles de leur tentative, puisqu'il a le bras droit et la jambe gauche en métal. Mais la quête des deux frères risque de les mener vers une vérité plus terrible qu'ils ne l'imaginaient.",
        'gender' => ['surnaturel', 'action'],
        'date_publication' => 2005,
        'image' => 'fullmetal_alchemist.webp',
        'tomes' => 27,
    ],
    [
        'id' => 10,
        'title' => 'Black Bulter',
        'author' => 'Toboso Yana',
        'summary' => "Lorsqu'on le regarde au début, ce manoir perdu dans la campagne de Londres parait tout à fait normal.
        Mais ce manoir est habité par des personnes pour le moins étranges : Ciel Phantomhive (Funtomhive) jeune maître de 12 ans, industriel hors-pair à la tête de la famille la plus redoutée de l'Angleterre ; un majordome démoniaque, Sebastian Michaelis, doué pour les tâches ménagères comme pour les arts-martiaux ; un maître d'hôtel, Tanaka, qui ne sait rien faire d'autre que boire du saké et dire oh oh oh ; un cuisinier aux plats douteux, Bard, ne sachant cuisiner sa viande qu'au lance-flammes ; une servante, May Lin, tellement maladroite qu'elle pourrait vous tuer sans le vouloir ; et un jardinier, Finnian, à la force surhumaine, qui se croit à démolition land qui ne sait donc entretenir un jardin qu'en le dévastant.
        Et lorsque tout ce petit monde a affaire à des personnages aussi peu recommandable que Jack L'éventreur, forcément, ça fait tâche...",
        'gender' => ['drame', 'surnaturel'],
        'date_publication' => 2009,
        'image' => 'black_butler.webp',
        'tomes' => '32 (en cours)',
    ],
    [
        'id' => 11,
        'title' => 'Assassination Classroom',
        'author' => 'Matsui Yusei',
        'summary' => "Au lycée Kunugigaoka se trouve la classe 3-E, exclue dans les montagnes pour étudier et surtout pour assassiner leur professeur, Koro-sensei. En effet, cette étrange créature, ressemblant à un smiley avec des tentacules, a réussi à trouer la lune jusqu'à ce que celle-ci en devienne un croissant ! Il posa alors ses conditions au gouvernement : devenir le professeur de la classe 3-E. Cependant, si d'ici une année aucun de ses élèves ne parvient à le tuer, la Terre connaîtra le même sort que celui de la Lune !
        Si une personne y arrive, elle recevra la somme astronomique de 10 milliards de yens !
        
        C'est ainsi que ce groupe d'élèves va apprendre l'art de tuer de différentes manières mais aussi commencer à s'attacher à ce drôle de professeur.",
        'gender' => ['action', 'school'],
        'date_publication' => 2013,
        'image' => 'assassination_classroom.webp',
        'tomes' => 21,
    ],
    [
        'id' => 12,
        'title' => "Les Carnets de l'Apothicaire",
        'author' => 'Hyuga Natsu',
        'summary' => "À 17 ans, Mao Mao a une vie compliquée. Formée dès son jeune âge par un apothicaire du quartier des plaisirs, elle se retrouve enlevée et vendue comme servante dans le quartier des femmes du palais impérial ! Entouré de hauts murs, il est coupé du monde extérieur. Afin de survivre dans cette prison de luxe grouillant de complots et de basses manœuvres, la jeune fille tente de cacher ses connaissances pour se fondre dans la masse.

        Mais, quand les morts suspectes de princes nouveau-nés mettent la cour en émoi, sa passion pour les poisons prend le dessus. Elle observe, enquête... et trouve la solution ! En voulant bien faire, la voilà repérée... Jinshi, haut fonctionnaire aussi beau que calculateur, devine son talent et la promeut goûteuse personnelle d'une des favorites de l'empereur. Au beau milieu de ce nid de serpents, le moindre faux pas peut lui être fatal !",
        'gender' => ['romance', 'drame'],
        'date_publication' => 2021,
        'image' => 'les_carnets_de_lapothicaire.webp',
        'tomes' => '12 (en cours)',
    ],
    [
        'id' => 13,
        'title' => 'Bleach',
        'author' => 'Kubo Tite',
        'summary' => "Ichigo Kurosaki, jeune lycéen de 15 ans dans la ville de Karakura, a l'étonnante capacité de pouvoir voir et communiquer avec les âmes errantes, suite à l'accident qui lui enleva sa mère... Vivant désormais avec son père et ses deux soeurs cadettes, Ichigo parvient tant bien que mal à gérer cet aspect de sa vie. Jusqu'au jour où il croisera le chemin d'une shinigami (déesse de la mort), Rukia Kuchiki, poursuivant une de ces âmes errantes ayant choisi le mauvais chemin vers l'éternité...

        Durant le combat qui s'en suivit, Rukia, à la suite de blessures, se voit obligée de confier une partie de ses pouvoirs à Ichigo afin que la mission puisse être menée à bien. Mais contre toute attente, Ichigo absorbe la totalité des pouvoirs de Rukia et devient à son tour une sorte de shinigami. Une fois cette affaire réglée, il conserve ses nouveaux pouvoirs. Rukia reste alors dans notre monde le temps de se régénérer et lui enseigne les rudiments de la vie de shinigami.
        
        Mais si tout se passe plus ou moins bien sur notre plan d'existence, de l'autre côté de la barrière l'au-delà n'est pas si tranquille...",
        'gender' => ['aventure', 'action', 'fantastique'],
        'date_publication' => 2003,
        'image' => 'bleach.webp',
        'tomes' => 74,
    ],
    [
        'id' => 14,
        'title' => 'Dragon Ball',
        'author' => 'Toriyama Akira',
        'summary' => "Alors qu'elle parcourt les routes de montagnes à moto, Bulma fait une bien étrange rencontre en la personne de Sangoku, un petit garçon étonnamment fort, résistant et possédant une queue, comme les singes. Il possède un trésor qu'elle recherche, une boule de cristal, mais ne veut pas la lui céder, c'est un cadeaux que lui a laissé son grand-père Sangohan. Ils trouvent finalement un compromis, et Sangoku part avec elle à la recherche des 7 boules de cristal dont on dit qu'elles exaucent n'importe quel souhait une fois réunis.",
        'gender' => ['action', 'aventure'],
        'date_publication' => 1993,
        'image' => 'dragon_ball.webp',
        'tomes' => 42,
    ],
    [
        'id' => 15,
        'title' => 'Blue Exorcist',
        'author' => 'Kato Kazue',
        'summary' => "Rin est un garçon qui a été adopté lorsqu'il n'était encore qu'un bébé, par de grands exorcistes. Un jour Satan apparait pour lui révéler qu'il est son père, et l'emmener dans son monde. Mais il est impossible pour Rin d'oublier tout ce que son père adoptif lui a enseigné jusqu'à aujourd'hui... Confronté à un adversaire invincible qui a détruit le seul homme à l'avoir jamais aimé, le jeune garçon choisit alors de combattre aux cotés des exorcistes, quitte à libérer, lorsqu'il dégaine l'épée de son père, la puissance démoniaque qui sommeille en lui.",
        'gender' => ['action', 'surnaturel', 'aventure'],
        'date_publication' => 2010,
        'image' => 'blue_exorcist.webp',
        'tomes' => '29 (en cours)',
    ],
    [
        'id' => 16,
        'title' => 'Pandora Hearts',
        'author' => 'Mochizuki Jun',
        'summary' => "Oz Vessalius, 15 ans, est l'héritier d'une des quatre grandes familles de duchés. Il mène une vie paisible accompagné de sa sœur Ada et de son serviteur Gilbert. C'est lors de sa cérémonie de passage à l'âge adulte que tout bascule. Il est envoyé dans une prison hors de l'espace temps, qui était un mythe jusqu'à présent, l'Abyss.
        Il rencontre Alice, une chain connue sous le nom de B-Rabbit, le lapin immaculé de sang. Elle lui propose un pacte pour le sortir de là, et en échange il doit l'aider à retrouver ses souvenirs.
        À son retour, l'organisation Pandora l'attend de pied ferme pour le questionner sur le mystère qu'est l'abyss.",
        'gender' => ['romance', 'surnaturel', 'horreur', 'fantasy'],
        'date_publication' => 2010,
        'image' => 'pandora_hearts.webp',
        'tomes' => 24,
    ],
    [
        'id' => 17,
        'title' => 'Tokyo Revengers',
        'author' => 'Wakui Ken',
        'summary' => "En regardant les informations, Takemichi Hanagaki apprend que sa petite amie, Hinata Tachibana, qui était à l'école avec lui, est décédée. La seule petite amie qu'il ait eu vient d'être tuée par un groupe infâme connu sous le nom de Tokyo Manjikai.
        Au plus fort de sa vie, il fait un bond dans le temps, de douze ans en arrière, au moment où il était dans la même école qu'Hinata...",
        'gender' => ['action', 'drame', 'romance', 'school'],
        'date_publication' => 2019,
        'image' => 'tokyo_revengers.webp',
        'tomes' => '29 (en cours)',
    ],
    [
        'id' => 18,
        'title' => 'Solo Leveling',
        'author' => 'Chu Gong',
        'summary' => "Dix ans auparavant, des portails ont commencé à apparaître un peu partout dans le monde. Ces portails ont la particularité de connecter le monde à d'autres dimensions, donjons ou mondes parallèles. En même temps, certaines personnes ont développé des capacités afin de pouvoir chasser ces portails. On appelle ceux qui reçoivent un Éveil, des Chasseurs.

        Sung Jin Woo est considéré comme le plus faible des Chasseurs de rang E... Autrement dit le plus faible parmi les faibles. Il est tellement faible qu'il est surnommé par ses confrères, le « Faible ». Avec une équipe de Chasseurs, il se rend dans un donjon de rang D. Malheureusement, l'équipe se retrouve piégée dans une salle avec des monstres qui ne sont pas du tout du niveau du donjon... S'en suit un massacre... Et Sung Jin Woo, aux portes de la mort arrive à acquérir une capacité pour le moins étrange...
        
        Sung Jin Woo va-t-il réussir à devenir le plus puissant des Chasseurs tout en surmontant les épreuves et conspirations ?",
        'gender' => ['action', 'fantasy'],
        'date_publication' => 2021,
        'image' => 'solo_leveling.webp',
        'tomes' => '12 (en cours)',
    ],
    [
        'id' => 19,
        'title' => 'Fire Force',
        'author' => 'Ohkubo Atsushi',
        'summary' => "Suite à un phénomène inexplicable et surnaturel, certaines personnes se consument dans les flammes et s'attaquent à l'humanité. Pour faire face à ce danger, des brigades ont été mises sur pied : les Fire Brigade of Flames. Shinra Kusakabe, qui possède des compétences quelque peu particulières, est sur le point d'intégrer la huitième brigade !",
        'gender' => ['surnaturel', 'action'],
        'date_publication' => 2017,
        'image' => 'fire_force.webp',
        'tomes' => '33 (en cours)',
    ],
];

$members = [
    [
        'id'=> 0,
        'name'=> 'Céline',
        'firstname'=> 'Mira',
        'email'=> 'celinemira@gmail.com',
        'password'=> '1cf26Geg585EE',
        'pseudo'=> 'Poki',

    ],
];