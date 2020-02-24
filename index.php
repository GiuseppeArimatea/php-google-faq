<?php
$articoli = [
    'notizia' => [
      [
        'title' => 'Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?',
        'text' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
        Siamo costantemente al lavoro per garantire un elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
      ],
    ],

    'notizia' => [
      [
        'title' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'text' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'
      ],
    ],

    'notizia' => [
      'title' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
      'text' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell URL referrer potrebbero essere disponibili mediante Google Analytics o un API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all  esatte parole chiave che hanno determinato il clic su un annuncio.'
      ],
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <div class="google_header">
      <img src="https://www.google.it/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png" alt="">
      <h2>Privacy e termini</h2>
    </div>
    <div class="nav_bar">
      <ul>
        <li>Introduzione</li>
        <li>norme sulla Privacy</li>
        <li>termini di servizio</li>
        <li>tecnologie</li>
        <li>domande frequenti</li>
      </ul>
        <span>Account google</span>
    </div>
  </div>
  <ul>
    <?php foreach ($articoli as $key => $value) { ?>
    <?php  echo $key ?>

    <?php  } ?>
  </ul>
</body>
</html>
