<?php
    include __DIR__ . './Models/product.php';
    include __DIR__ . './Models/food.php';
    include __DIR__ . './Models/kennel.php';
    include __DIR__ . './Models/toy.php';

    //food
    $food1 = new food("https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg", "Royal Canin Mini Adult", "€ 43,99", "Cane", "545g", "prosciutto, riso");
    $food2 = new food("https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/800/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg", "Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "€ 44,99", "Cane", "600g", "manzo, cereali");
    $food3 = new food("https://egress.storeden.net/gallery/6061da4c00f22031a72a54a4", "Almo Nature Cat Daily Lattina", "€ 34,99", "Gatto", "400g", "tonno, pollo, prosciutto");
    $food4 = new food("https://m.media-amazon.com/images/I/81xMwYGLYjL._AC_SL1500_.jpg", "Mangime Per Pesci Guppy in Fiocchi", "€ 2,95", "Pesce", "30g", "Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe");
    $foodArray = [$food1, $food2, $food3, $food4];

    //kennel
    $kennel1 = new kennel("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610", "Voliera Wilma in Legno", "184,99", "Uccello", "Legno", "M: L 83 x P 67 x H 153 cm");
    $kennel2 = new kennel("https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg", "Cartucce Filtranti per Filtro EasyCrystal", "2,29", "Pesce", "Materiale Espanso", "ND");
    $kennelArray = [$kennel1, $kennel2];

    //toy
    $toy1 = new toy("https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg", "Kong Classic", "13,49", "Cane", "Galleggia e rimbalza", "8,5 x 10 cm");
    $toy2 = new toy("https://cdn.shopify.com/s/files/1/0615/2159/2563/products/set-di-6-topolini-in-peluche-trixie-trixie-4011905045030-37712487121139_512x512.jpg?v=1657704965", "Topini di peluche Trixie", "4,99", "Gatto", "Morbido con codina in corda", "8,5 cm x 10 cm");
    $toyArray = [$toy1, $toy2];
?>