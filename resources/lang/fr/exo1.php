<?php

return [
    "First, create a folder for this exercise. From your text editor, click at the top left on 'File' then 'Open a folder' indicating the folder you have previously created. Create an HTML file, add the basic HTML body. You can now import GSAP as well as the two plugins." => "Tout d’abord, créer un dossier pour cet exercice. Depuis votre éditeur de texte, cliquer en haut à gauche sur 'Fichier' puis 'Ouvrir un dossier' en indiquant le dossier que vous aurez préalablement créé. Créer un fichier HTML, ajouter le corps HTML de base. Vous pouvez maintenant importer GSAP ainsi que les deux plugins. À noter que le plugin DrawSVG fait partie des plugins payant GSAP, le lien fourni ici ne fonctionnera qu’en local, ou sur un codepen par exemple.",
    "Note that the DrawSVG plugin is part of the GSAP paid plugins, the link provided here will only work locally, or on a codepen for example." => "Notez que le plugin DrawSVG fait partie des plugins payants GSAP, le lien fourni ici ne fonctionnera qu’en local, ou sur un codepen par exemple.",
    "We will start by creating our curve which will be an svg. In your HTML, insert these lines inside your body tag:" => "Nous allons commencer par créé notre courbe qui sera un svg. Dans votre HTML, insérez ces lignes à l'intérieur de votre balise body :",
    "Import SVG" => "Importer SVG",
    "You noticed that in this svg tag, there are two <b>path</b>. Indeed, one curve will be in gray, and one in purple here in the example, it adds a nicer effect to reveal the curve. It will already be present in gray, and will be highlighted in purple when scrolling. Each curve has its own class, to better target them during the animation. We could also have put IDs. The viewBox of the svg tag corresponds to the display window of the svg. You can have fun changing these values, but the values shown are the most optimized for the display of this curve. Since it is an svg, we can change its size later without losing quality. <b>Warning:</b> view box =/ width & height of svg! The curve is placed in a <b>div</b> class <b>svgbox</b>. This class will be useful later on, with regard to animation. It will also serve us in CSS." => "Vous avez remarqué que dans cette balise svg, on trouve deux <b>path</b>. En effet, une courbe sera en grise, et une en violet ici dans l’exemple, ça rajoute un effet plus sympa pour révéler la courbe. Elle sera déjà donc présente en grise, et sera surlignée en violet au scroll. Chaque courbe a sa classe, pour mieux les cibler pendant l’animation. On aurait aussi pu mettre des IDs.<br><br> La viewBox de la balise svg correspond à la fenêtre d’affichage du svg. Vous pouvez vous amuser a changer ces valeurs, néanmoins les valeurs indiquées reste les plus optimisées pour l’affichage de cette courbe. Etant donné que c’est un svg, on pourra changer sa taille plus tard sans perdre en qualité. <br><br><b>Attention :</b> view box =/ width & height du svg ! La courbe est placée dans une <b>div</b> de classe <b>svgbox</b>. Cette classe nous servira plus tard, vis à vis de l’animation. Elle va également nous servir en CSS.",
    "This function makes it possible to round the end of the two curves in svg" => "Cette fonction permet d’arrondir le bout des deux courbes en svg",
    "We adjust the size of our div, itself containing our svg" => "Nous ajustons la taille de notre div, elle contient notre svg",
    "Normally if you have followed this far, you have a nice purple curve that appears on your screen in the middle. Good job." => "Normalement si vous avez suivi jusque-là, vous avez une belle courbe violette qui s’affiche sur votre écran en plein milieu. Bien ouèj.",
    "Several solutions: A script tag in your HTML file to place the javascript code, Create a separate file, link it to your file and write your javascript in it. I recommend the second option: it is better to have files with different functions, a matter of organization." => "Plusieurs solutions : Une balise script dans votre fichier HTML pour y placer le code javascript, Créer un fichier à part, le lier à fichier HTML et écrire votre javascript à l'intérieur. Je vous recommande la seconde option : il est mieux d’avoir des fichiers avec des fonctions différentes, question d’organisation.",
    "This line ensures that gsap uses these two plugins. They are “registered” in a certain way. It is not mandatory, but often without this clause there can be bugs." => "Cette ligne permet d’assurer vis-à-vis de gsap qu’on utilise ces deux plugins. On les « enregistre » d’une certaine manière. Ce n’est pas obligatoire, mais souvent sans cette clause, il peut y avoir des bugs",
    "These few lines help animate our curve. We create a constant <b>main</b>, which will correspond to a gsap timeline. Timeline can be translated as 'chronology', which means that we speaks of a beginning, an end, and potentially of events occurring between this beginning and this end. To this chronology, we give it a duration of 1. This duration is indicative because this animation will be animated at the scroll, it has no real duration in itself. But this duration value will be useful for placing points on the curve next. To this timeline, we add a scrolltrigger. I mentioned it before, the Scrolltrigger allows to interact with the scroll of the page, in a direct way with the user. Here, we initializes it, and tells it that our trigger, our interactive scroll 'trigger', will be the <b>svgbox</b> div. This indicates that our animation will concern this div, and will be triggered at the this tag. What you see to the left of the ':' are the parameters, and to the right are the values of these parameters. There are a lot of possible parameters, the GSAP documentation and the forums are very well supplied for this. The <b>scrub: true</b> parameter means that the animation is coordinated with the scroll, it does is not activated only once, it follows the scroll. The <b>true</b> value for the pin parameter allows the element to be pinned fixedly in the viewport the time of the animation. The viewport is everything that is displayed on the screen at a given time of the scroll. Without this value, the animation will be triggered according to the other parameters, but the element will not remain fixed during the animation. It is noted that this parameter can be disabled depending on the screen size, for example on mobile, it is not necessary to pin the animation until it is finished, you can let it animate while you scroll." => "Ces quelques lignes permettent d’animer notre courbe. On créé une constante <b>main</b>, qui correspondra à une timeline de gsap. Timeline peut se traduire par « chronologie », c’est à dire qu’on parle d’un début, d’une fin, et potentiellement d’événements arrivant entre ce début et cette fin. A cette chronologie, on lui donne une durée de 1. Cette durée est à titre indicative car cette animation sera animée au scroll, elle n’a pas réellement de durée en soi. Mais cette valeur de durée sera utile pour placer des points sur la courbe ensuite. <br /><br /> A cette timeline, on ajoute un scrolltrigger. J’en ai parlé précédemment, le Scrolltrigger permet d’avoir une interaction avec le scroll de la page, de manière directe avec l’utilisateur. Ici, on l’initialise, et lui indique que notre trigger, notre « déclencheur » de scroll interactif, sera la div <b>svgbox</b>. Cela indique que notre animation concernera cette div, et se déclenchera au niveau de cette balise. <br /><br /> Ce que vous voyez à gauche des « : » sont les paramètres, et à droite sont les valeurs de ces paramètres. Il existe énormément de paramètres possibles, la documentation GSAP et les forums sont très fournis pour cela. Le paramètre <b>scrub : true</b> signifie que l'animation est coordonnée avec le scroll, elle ne s’active pas qu’une seule fois, elle suit le scroll. La valeur <b>true</b> pour le paramètre pin permet d’épingler l’élément de manière fixe dans le viewport le temps de l’animation. Le viewport c’est tout ce qui s’affiche à l’écran a un moment donné du scroll. Sans cette valeur, l’animation se déclencherai bien selon les autres paramètres, mais l’élément ne resterai pas fixe le temps de l’animation. Il est a noté que ce paramètre peut être désactivé en fonction de la taille d’écran, par exemple sur mobile, il n’est pas nécessaire d’épingler l’animation jusqu’à ce qu’elle soit finie, on peut la laisser s’animer en même temps qu’on scroll.",

];