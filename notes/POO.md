# Qu'est ce que la POO ?

La programmation orientée objet (POO) est un paradigme de programmation qui repose sur le concept d'objets. Les objets sont des entités qui regroupent des données (appelées attributs ou propriétés) et des fonctions (appelées méthodes) qui agissent sur ces données.

## Class et instance :

- class : Une classe est un modèle ou un plan à partir duquel les objets sont créés. Elle définit les attributs et les méthodes que chaque objet de cette classe possèdera. Lorsqu'on modélise un problème sous la forme d'objets, on crée des définitions abstraites qui représentent les types d'objet qui existent dans le système. Par exemple, si on modélise une école, on pourra avoir des objets pour représenter les enseignants. Les enseignants auront certaines caractéristiques communes : un nom et un sujet d'enseignement. De plus, chaque enseignant pourra réaliser des actions similaires comme noter un devoir ou se présenter au début de l'année.

- instance ou object : Un objet est une instance d'une classe. Il est créé à partir de la classe et possède ses propres données et méthodes.

## Héritages :

Il s'agit d'un mécanisme qui permet à une classe (appelée classe dérivée ou sous-classe) d'hériter des attributs et des méthodes d'une autre classe (appelée classe de base ou classe mère). Cela favorise la réutilisation du code et permet de créer une hiérarchie entre les classes.

## Encapsulation

C'est le principe qui consiste à regrouper les données (attributs) et les méthodes qui les manipulent au sein d'un même objet. Cela permet de restreindre l'accès aux données et de les protéger, ainsi que de garantir une manipulation cohérente des données.

Les objets fournissent une interface au reste du code qui voudrait les utiliser et ils maintiennent leur propre état interne. L'état interne d'un objet est privé, et peut uniquement être manipulé par les méthodes de l'objet (mais pas par celles des autres objets). Séparer l'état privé interne d'un objet et son interface publique est ce qu'on appelle l'encapsulation.

## Polymorphisme :

C'est la capacité à traiter des objets de différentes classes de manière uniforme. Par exemple, une méthode peut avoir plusieurs implémentations dans différentes classes, mais le même nom et la même signature.

Le polymorphisme est un concept important en programmation orientée objet qui permet à des objets de différentes classes d'être traités de manière uniforme. Cela signifie que vous pouvez utiliser une interface commune pour manipuler des objets de classes différentes sans se soucier de leur type spécifique.

Le polymorphisme permet une meilleure modularité et une plus grande flexibilité dans la conception des programmes, car il favorise le développement de code générique et réutilisable.