create database webdesign;
\c webdesign;

create table categorie(
id serial not null primary key, 
nom varchar(50)
);


insert into categorie(nom) values('empreinte carbone');
insert into categorie(nom) values('actualites');
insert into categorie(nom) values('comprendre');



create table contenu(
    id serial not null primary key,  
    titre varchar(100),
    idcategorie int,
    soustitre1 varchar(100),
    article1 varchar(1000),
    soustitre2 varchar(100),
    article2 varchar(1000),
    soustitre3 varchar(100),
    article3 varchar(1000),
    images varchar(200),
    datearticle date,
    foreign key(idcategorie) references categorie(id) ON DELETE CASCADE
);
insert into contenu(titre,idcategorie,soustitre1,article1,
soustitre2,article2,soustitre3,article3,images,datearticle
)values('calculer réduire et agir pour le climat',
1,'Empreinte carbone : définition','L empreinte carbone est un indicateur qui mesure la quantité de gaz à effet de serre relâchée dans l atmosphère par une activité. Elle permet ainsi d évaluer 
l impact des activités humaines sur l environnement. Mesurer son impact 
environnemental est la première étape avant d agir contre le réchauffement climatique.',
'Le Bilan Carbone Personnel et émissions de CO2',
'On parle de Bilan Carbone Personnel pour la mesure de l impact des activités d un individu sur la planète. Il permet ainsi de calculer l empreinte carbone du sujet concerné et l amener à réduire ou optimiser sa consommation énergétique, voire son mode de vie pour minimiser son impact CO2 sur l environnement.
Depuis 2019, un Français émet en moyenne dans l atmosphère 9 tonnes par an de CO2 équivalent (noté CO2eq), unité scientifique pour désigner la quantité de l ensemble des gaz à effet de serre.'
,'Le Bilan Carbone d entreprise',
'L expression "empreinte carbone" est un terme générique concernant aussi bien les particuliers que les entreprises. Ainsi, pour évoquer l impact environnemental des activités d une entreprise, on parle plutôt de Bilan Carbone.
Le Bilan Carbone est un outil de comptabilisation innovant développé par l ADEME (Agence de la transition écologique) et aujourdhui diffusée par l Association Bilan Carbone (A.B.C.) servant à mesurer l ensemble des émissions, directes et indirectes, de Gaz à Effet de Serre (GES) d une organisation, d un évènement ou d un pays.'
,'images/demo/contenu1.png','2022-04-12');


insert into contenu(titre,idcategorie,soustitre1,article1,
soustitre2,article2,soustitre3,article3,images,datearticle
)values('arbre absorbe CO2',2,'L arbre, un puits de carbone',
'Le réchauffement climatique est un problème urgent dont la cause principale est la concentration croissante de gaz à effet de serre dans l atmosphère. 
Grâce à leur capacité d absorption du carbone, 
les arbres semblent être un bon moyen pour ralentir ce phénomène planétaire.
En effet, les arbres stockent du CO2 via la photosynthèse. 
C est un mécanisme qui permet aux arbres de capter le gaz carbonique présent dans l atmosphère 
tout au long de leur croissance. Les arbres sont ainsi qualifiés de "puits de carbone".',
'Quelle est la capacité d absorption de CO2 d un arbre ?',
'Bien que sa capacité d absorption de carbone puisse varier, on peut considérer qu un 
arbre stocke environ 167 kg de CO2 par an, soit 1 tonne de CO2 par an pour 
6 arbres arrivés à maturité. Cela signifie qu il faudrait planter plus de 67 arbres chaque année pour compenser 
les émissions de CO2 d un seul français.Il est important de distinguer les pollutions de l 
air et les gaz à effet de serre. Tous deux sont responsables du changement climatique, 
cependant les polluants atmosphériques (monoxyde de carbone, oxydes d azote...) ont 
souvent des effets négatifs sur la santé alors que les gaz à effet de serre, 
comme le dioxyde de carbone, n ont pas forcément d impact direct sur la santé.'
,'','','images/demo/contenu2.png','2022-01-25'
);


insert into contenu(titre,idcategorie,soustitre1,article1,
soustitre2,article2,soustitre3,article3,images,datearticle
)values('Energie solaire : fonctionnement, types, avantages',
3,'Qu est-ce que l énergie solaire ?',
'L énergie solaire est une énergie générée grâce aux rayonnements électromagnétiques produits par 
le soleil qui sont ensuite captés, puis transformés en chaleur ou en électricité utilisable.
Alors que la plupart de l 
électricité est produite en brûlant des combustibles fossiles 
qui dégagent du dioxyde de carbone (CO2) et polluent, l énergie 
solaire ne dégage rien dans l air. 
Elle constitue donc une source d énergie 
renouvelable et propre, qui ne nuit pas à l environnement.
','Comment produire de l énergie solaire ?',
'L énergie solaire peut être exploitée à partir de panneaux et de réflecteurs (miroirs)
    Les systèmes photovoltaïques (PV) : dispositifs électroniques qui convertissent directement la lumière du soleil en électricité grâce à l effet dit "photoélectrique" par lequel certains matériaux sont capables d absorber des photons et des électrons libres, générant ainsi un courant électrique.
    Les capteurs solaires thermiques : les capteurs solaires utilisent des miroirs ou des panneaux pour concentrer les rayons du soleil. Ces rayons chauffent un fluide qui crée de la vapeur pour actionner une turbine et produire de l électricité.
','Quels sont les avantages de l énergie solaire ?',
'Alors qu elle a été largement critiquée pour son coût ou son inefficacité à ses débuts, l énergie solaire s est avérée extrêmement bénéfique en termes d impact économique et environnemental. Grâce aux subventions disponibles pour l installation de panneaux solaires, ainsi qu aux prix de plus en plus compétitifs sur le marché, l énergie solaire est devenue la principale source d énergie pour de plus en plus de familles. La technologie s est considérablement améliorée ces dernières années et a été complétée par des systèmes de stockage de batteries solaires, faisant du solaire une source d énergie propre beaucoup plus efficace.',
'images/demo/contenu3.png','2022-05-15');



create table contenuslug(
    id serial not null primary key,
    idcontenu int,
    catslug varchar(200),
    titreslug varchar(200),
    foreign key(idcontenu) references contenu(id) ON DELETE CASCADE
);
insert into contenuslug(idcontenu,catslug,titreslug) values(1,'empreintes-carbones','calculer-réduire-et-agir-pour-le-climat');
insert into contenuslug(idcontenu,catslug,titreslug) values(2,'actualites','arbre-absorbe-CO2');
insert into contenuslug(idcontenu,catslug,titreslug) values(3,'comprendre','Energie-solaire-fonctionnement-types-avantages');




create table administrateur(
    id serial not null primary key,
    identifiant varchar(100),
    mdp varchar(100)
);

insert into administrateur(identifiant,mdp) values('admin1','admin');
insert into administrateur(identifiant,mdp) values('admin2','admin');




