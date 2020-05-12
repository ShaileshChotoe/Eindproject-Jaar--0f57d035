create database
if not exists bitgame;

use bitgame;

create table
if not exists levels
(
	id int AUTO_INCREMENT,
    titel varchar
(255),
    opdracht text
(800),
    template mediumtext,
    htmluser mediumtext,
    requirments varchar
(255),
code varchar
(255),
    PRIMARY KEY
(id)
);

insert into levels
    (titel, opdracht, template, htmluser, requirments, code)
values
    ('LEVEL1: h1',
        'De inhoud van een HTML bestand wordt omschreven in elementen.
                                Ieder element bestaat uit een openend en sluitend stuk tekst,
                                de zogenoemde "opening tag" en "closing tag".
                                Daar tussen staat de inhoud van het element.
                                <br>
                                Het h1 element staat voor "heading 1".
                                Dit maakt de tekst groot en goed leesbaar als aanhef of titel van een pagina.
                                <br>
                                Voeg een h1 element toe aan de pagina met daarin de text "Flex Academy Course".',
        '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: white;">
    
</body>
</html>', '', 'h1', '&#x3C;h1&#x3E;TEST&#x3C;/h1&#x3E;'),









    ('LEVEL2: P', 'Het p element staat voor "paragraph". in een paragraph geef jee een stukje tekst mee die op de pagina wordt geplaatst


Nu kunnen we ook een paragraaf toevoegen met daarin de text "Ik leer HTML", door middel van het elemet:
<p>', '', '', 'p', '&#x3C;p&#x3E;');

