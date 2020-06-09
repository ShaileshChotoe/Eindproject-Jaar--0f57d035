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
        ' De inhoud van een HTML bestand wordt omschreven in elementen. 
                                Ieder element bestaat uit een openend en sluitend stuk tekst, 
                                de zogenoemde "opening tag" en "closing tag".
                                Daar tussen staat de inhoud van het element. 
                                <br>
                                Het h1 element staat voor "heading 1". 
                                Dit maakt de tekst groot en goed leesbaar als aanhef of titel van een pagina.
                                <br>
                                Voeg een h1 element toe aan de pagina met daarin je naam.',
        '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>', '', 'h1', '&#x3C;h1&#x3E;TEST&#x3C;/h1&#x3E;'),




    ('LEVEL2: P', 'Het p element staat voor "paragraph". 
                                in een paragraph geef je een stukje tekst mee die op de pagina wordt geplaatst. 
                                <br>
                                Nu kunnen we ook een paragraaf toevoegen met daarin een korte introductie over jezelf.
                                ', '', '', 'p', '&#x3C;p&#x3E;&#x3C;/p&#x3E;'),


    ('LEVEL3: img', 'Afbeeldingen in HTML toevoegen gaat door middel van het IMG element. 
                                Een IMG element heeft een "src" attribuut waar een link naar een afbeelding kan worden meegegeven(bijv. door de link van een foto op google). 
                                Deze afbeelding wordt dan weergegeven als inhoud van dit element.
                                <br>
                                De website willen we mooier maken dus, voeg een mooi plaatje toe aan de hand van het element: 
                                <br>', '', '', 'img', '&#x3C;img src=&#x22;&#x22;&#x3E;'),


    ('LEVEL4: a', 'Als je gebruikers door wilt sturen op je website kan je gebruik maken van links. Voeg een link to aan je website naar een van je social media. Het anchor element maakt van de inhoud van het element een link. Deze link verwijst naar de locatie aangegeven met het "href" attribuut. Het anchor element ziet er zo uit:', '', '', 'a', '&#x3C;a href=&#x22;&#x22;&#x3E;&#x3C;/a&#x3E;'),

    ('LEVEL5: li', 'Een lijst element in HTML zorgt voor een gestructureerde weergave van een lijst. Dit kan met bullet points in een unordered list of met een genummerde lijst in een ordered list. Voor elk punt in de lijst moet je opniuw het ul element in je li element gebruken. 
    Maak nu een top 3 lijst van je favoriete films.', '', '', '<li>', '&#x3C;li&#x3E;<br>&#x3C;ul&#x3E;test&#x3C;/ul&#x3E;<br>
    &#x3C;ul&#x3E;test&#x3C;/ul&#x3E;<br>&#x3C;ul&#x3E;test&#x3C;/ul&#x3E;<br>&#x3C;/li&#x3E;'),


    ('LEVEL6: input&button', 'Input is een element waarmee de gebruiker informatie in kan vullen in de browser. 
                                Voor deze opdracht heb je het input type text nodig.
                                <br>Voor een button gebruiken we ook een input element. 
                                    In plaats van het type text, kan je ook het type submit gebruiken.
                                    <br>Voeg een input veld toe met daaronder een button.', '', '', '<input>', '&#x3C;input type=&#x22;submit&#x22;&#x3E;'),


    ('LEVEL7: h1 kleur', 'We zijn nu klaar met het HTML gedeelte, we gaan nu naar het CSS deel.
                                Je eigen webpagina bevat nu informatie. 
                                Maar behalve de verschillende headings is er nog niet veel met de opmaak van de webpagina gedaan. 
                                Je gaat nu je webpagina styling met behulp van CSS.<br>
                                Hier gaan we het eerder geplaatste h1 element een kleur geven. Op de plek van blue kan je ook een andere kleur zetten of je kan een kleucode gebruiken bijvoorbeeld #22FFE9.', '', 'body 
{
    background: white;
}

.end{}', 'color', 'h1{
                                    <br>
                                        color: blue;
                                    <br>
                                }'),

    ('LEVEL8: achtergrond kleur', 'Hier gaan we de achtergrond een kleur geven door de "body" aan te passen met css. Op de plek van blue kan je ook een andere kleur zetten of je kan een kleucode gebruiken bijvoorbeeld #22FFE9.', '', '', 'background-color', 'body{
                                    <br>
                                    background-color: blue;
                                    <br>
                                }'),


    ('LEVEL9: img op maat', 'Hier gaan we de eerder toegevoegde foto op maat maken, 
                                dat doen we door de hoogte en breedte van de foto aan te passen. Je kan de px(pixels) zo aanpassen dat het bij jouw foto past. ', '', '', 'img', 'img{
                                    <br>
                                    width: 300px;
                                    <br>
                                    height: 200px;
                                    <br>
                                }'),


    ('LEVEL10: text style', ' Hier gaan we onde paragrphs een style geven door ze schuingedrukt te maken.
                                dat doe je zo: ', '', '', 'style', 'p{
                                    <br>
                                    font-style: italic;
                                    <br>
                                }');