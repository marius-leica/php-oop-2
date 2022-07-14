<?php
require_once 'classi/product.php';
require_once 'classi/alimentaryProducts.php';
require_once 'classi/toysProducts.php';


$product1 = new AlimentaryProduct(
    'PEDIGREE ADULT Mini',
    '7,59€',
    'PEDIGREE ADULT Mini -10kg con pollo e verdure per cani di piccola taglia è un alimento completo per cani adulti di piccola taglia (sotto i 10 kg). PEDIGREE ADULT Mini -10kg Chicken & Vegetable Small Dog Food fornisce al tuo cane un pasto completo ed equilibrato, adatto alla sua taglia ed età, con ingredienti naturali e senza aromi artificiali. È importante nutrire il tuo cane con una dieta specifica per i suoi bisogni. ',
    'https://static.zoomalia.com/prod_img/106041/lm_79635cf8659cfcb13224cbd47863a34fc581656682563.jpg',
    'Crocchette per cani',
    'PEDIGREE',
    '12 mesi',
    '+18',
    'Tenere lontano dalla luce diretta del sole',
    'Con pollo e verdure: Composizione : cereali**, carne e sottoprodotti animali (20%, di cui pollo 4% nelle crocchette marroni*), oli e grassi (di cui olio di girasole 0,5%), sottoprodotti vegetali (di cui polpa di barbabietola disidratata 4%**), verdure** (di cui carote disidratate 0,5% (equivalente al 4% di carote) nelle crocchette arancioni* e piselli disidratati 1% (equivalente al 4% di piselli) nelle crocchette verdi*) sostanze minerali (compreso il tripolifosfato di sodio 0,3% come ingrediente attivo nelle crocchette marroni*), estratti di proteine vegetali, *Le crocchette marroni rappresentano circa l"80% del totale delle crocchette di questo sacchetto, le crocchette arancioni e verdi rappresentano ciascuna circa il 10% del totale delle crocchette di questo sacchetto, **Ingredienti naturali'
);

$product2 = new AlimentaryProduct(
    'Olio di canapa QUALITY SENS',
    '4,99€',
    'Cibo naturale al 100%! Si raccomanda di dare al vostro animale domestico un cucchiaino di olio di canapa ogni giorno o ogni due giorni. Il dosaggio appropriato dipende dallo stato di salute, dalla taglia e dai bisogni dell"animale. È consigliabile chiedere il parere di un veterinario. Molto facile da usare, basta aggiungerlo direttamente al cibo secco o umido abituale del vostro animale.',
    'https://static.zoomalia.com/prod_img/110903/vignette-110903-3_-_Copie.jpeg',
    'Integratori alimentari per gatti',
    'QUALITY SENS',
    '12 mesi',
    '+10',
    'Conservare in luogo fresco ed asciuto',
    '100% olio di canapa;'
);

$product3 = new ToysProducts(
    'Corda da gioco con palla Zolia MaxiPlayer',
    '9,99€',
    'Con MaxiPlayer, il gioco in ocrda per cane Zolia FUN, condividi un eccellente momento di complicità con il tuo compagno preferito! Robusta, resistente, questa corda da gioco divertirà il tuo cane quando gioca. Rifinito da una palla ugualmente in corda, questo giocattolo per cani consente a quest"ultimo di afferrare facilmente l"estremità della corda e anche tu potrai divertirti insieme al tuo cane con questo gioco di trazione!',
    'https://static.zoomalia.com/prod_img/61824/lm_276db8e1af0cb3aca1ae2d00186242045291571142472.jpg',
    'Giochi in corda per cani',
    'Zolia MaxiPlayer',
    'all ages',
    'corda intrecciata',
    'verde, blu e bianco',
    '7,5 x 35 cm',
    '200g',
);
$product4 = new ToysProducts(
    'Canna da pesca erba gatta perle Zolia',
    '1,59€',
    'Con questo giocattolo di erba gatta pearl il tuo gatto avrà la stimolazione, l"esercizio e le sensazioni di cui ha bisogno per il suo benessere quotidiano. Agitare la canna da pesca creerà un"interazione con il tuo gatto stimolando il suo istinto di caccia; il gatto non può resistere alla vista di un oggetto in movimento e vorrà immediatamente prenderlo. Inoltre, l"erba gatta attirerà naturalmente il gattino con un effetto stimolante sul suo comportamento per farlo sbocciare completamente.',
    'https://static.zoomalia.com/prod_img/108295/lm_62842e77b63637ab381e8be5f8318cc28a21640185609.jpg',
    'Canna da pesca per gatto',
    'Zolia',
    'all ages',
    'corda intrecciata',
    'verde, blu e bianco',
    '40 cm',
    '200g',
);


var_dump($product1);
var_dump($product2);
var_dump($product3);
var_dump($product4);
