<?php
require_once 'classi/products/AlimentaryProducts.php';
require_once 'classi/products/ToysProducts.php';
require_once 'classi/Customer.php';
require_once "classi/CreditCard.php";

$metodoPagamento = key_exists("metodo", $_GET) ? (int) $_GET["metodo"] : null;


$customer = new Customer("Mario", "Rossi",); //possiamo registrare un nuovo cliente da subito o in un secondo momento con $customer->register("Mario", "Rossi",);

$customer->paymentHandler->addPaymentMethod(new CreditCard("Visa", "123456789", "789", "12/22")); //possiamo aggiungere un metodo di pagamento alla carta di credito
$customer->paymentHandler->addPaymentMethod(new CreditCard("AmericanExpress", "987654321", "321", "05/22"));

// var_dump($customer);

$product = [
    new AlimentaryProduct(
        'PEDIGREE ADULT Mini',
        '7,59',
        'PEDIGREE ADULT Mini -10kg con pollo e verdure per cani di piccola taglia è un alimento completo per cani adulti di piccola taglia (sotto i 10 kg).',
        'https://static.zoomalia.com/prod_img/106041/lm_79635cf8659cfcb13224cbd47863a34fc581656682563.jpg',
        'Crocchette per cani',
        'PEDIGREE',
        '12 mesi',
        '+18',
        'Tenere lontano dalla luce diretta del sole',
        '[cereali**, carne e sottoprodotti animali (20%, di cui pollo 4% nelle crocchette marroni*), oli e grassi (di cui olio di girasole 0,5%),]'
    ),
    new AlimentaryProduct(
        'Olio di canapa QUALITY SENS',
        '4,99',
        'Cibo naturale al 100%! Si raccomanda di dare al vostro animale domestico un cucchiaino di olio di canapa ogni giorno o ogni due giorni. Il dosaggio appropriato dipende dallo stato di salute, dalla taglia e dai bisogni dell"animale. È consigliabile chiedere il parere di un veterinario. Molto facile da usare, basta aggiungerlo direttamente al cibo secco o umido abituale del vostro animale.',
        'https://static.zoomalia.com/prod_img/110903/vignette-110903-3_-_Copie.jpeg',
        'Integratori alimentari per gatti',
        'QUALITY SENS',
        '12 mesi',
        '+10',
        'Conservare in luogo fresco ed asciuto',
        '100% olio di canapa;'
    ),
    new ToysProducts(
        'Corda da gioco con palla Zolia MaxiPlayer',
        '9,99',
        'Con MaxiPlayer, il gioco in ocrda per cane Zolia FUN, condividi un eccellente momento di complicità con il tuo compagno preferito! Robusta, resistente, questa corda da gioco divertirà il tuo cane quando gioca. Rifinito da una palla ugualmente in corda, questo giocattolo per cani consente a quest"ultimo di afferrare facilmente l"estremità della corda e anche tu potrai divertirti insieme al tuo cane con questo gioco di trazione!',
        'https://static.zoomalia.com/prod_img/61824/lm_276db8e1af0cb3aca1ae2d00186242045291571142472.jpg',
        'Giochi in corda per cani',
        'Zolia MaxiPlayer',
        'all ages',
        'corda intrecciata',
        'verde, blu e bianco',
        '7,5 x 35 cm',
        '200g',
    ),
    new ToysProducts(
        'Canna da pesca erba gatta perle Zolia',
        '1,59',
        'Con questo giocattolo di erba gatta pearl il tuo gatto avrà la stimolazione, l"esercizio e le sensazioni di cui ha bisogno per il suo benessere quotidiano. Agitare la canna da pesca creerà un"interazione con il tuo gatto stimolando il suo istinto di caccia; il gatto non può resistere alla vista di un oggetto in movimento e vorrà immediatamente prenderlo. Inoltre, l"erba gatta attirerà naturalmente il gattino con un effetto stimolante sul suo comportamento per farlo sbocciare completamente.',
        'https://static.zoomalia.com/prod_img/108295/lm_62842e77b63637ab381e8be5f8318cc28a21640185609.jpg',
        'Canna da pesca per gatto',
        'Zolia',
        'all ages',
        'corda intrecciata',
        'verde, blu e bianco',
        '40 cm',
        '200g',
    ),
];

$customer->cart->addProduct($product[0]);
$customer->cart->addProduct($product[3]);

var_dump($customer->cart->getProduct());

$customer->checkout(1);
