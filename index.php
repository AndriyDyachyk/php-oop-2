<?php 
require_once __DIR__.'/product.php';
require_once __DIR__.'/food.php';
require_once __DIR__.'/accessory.php';
require_once __DIR__.'/toy.php';

    $products= [
        new Food('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621-1800-1800/Mini-Adult.jpg?v=1775473978&quality=1&width=1800&height=1800', 43.99, 'Cane', 545, 'Prosciutto, Riso'),
        new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, 'Cane', 600, 'Manzo, Cereali'),
        new Food('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, 'Gatto', 400, 'Tonno, Pollo, Prosciutto'),
        new Food('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.95, 'Pesce', 30, 'Pesci e sottoprodotti dei pesci, Cereali, Alghe, Lieviti'),
        new Accessory('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 184.99 , 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm'),
        new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 2.29 , 'Pesce', 'Espanso', 'ND'),
        new Toy('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.99 , 'Cane', 'Galleggia e Rimbalza', '8.5cm x 10cm'),
        new Toy('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99 , 'Gatto', 'Morbido con codina in corda', '8.5cm x 10cm')
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product):?>
                <div class="col-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="<?php echo $product->image?>" alt="">
                        <div class="card-body">
                            <h4><?php echo $product->name?></h4>
                            <?php if(get_class($product) === 'Cane'){ ?>
                                <p class="card-text">
                                    <i class="fa-solid fa-dog"></i>
                                    <?php echo $product->category?>
                                </p>
                            <?php } ?>    
                            <?php if(get_class($product) === 'Gatto'){ ?>
                                <p class="card-text">
                                    <i class="fa-solid fa-dog"></i>
                                    <?php echo $product->category?>
                                </p>
                            <?php } ?>    
                            <?php if(get_class($product) === 'Uccello'){ ?>
                                <p class="card-text">
                                    <i class="fa-solid fa-dog"></i>
                                    <?php echo $product->category?>
                                </p>
                            <?php } ?>    
                            <?php if(get_class($product) === 'Pesce'){ ?>
                                <p class="card-text">
                                    <i class="fa-solid fa-dog"></i>
                                    <?php echo $product->category?>
                                </p>
                            <?php } ?>    
                            <p class="card-text">
                            Prezzo: €<?php echo $product->price;?>
                            </p>
                            <?php if(get_class($product)=== 'Food'){ ?>
                                <p class="card-text">
                                Peso Netto: <?php echo $product->weight.'g'?>
                                </p>
                                <p class="card-text">
                                Ingredienti: <?php echo $product->ingredients?>
                                </p>
                            <?php } ?>
                            <?php if(get_class($product)=== 'Accessory'){ ?>
                                <p class="card-text">
                                Peso Netto: <?php echo $product->material?>
                                </p>
                                <p class="card-text">
                                Ingredienti: <?php echo $product->dimension?>
                                </p>
                            <?php } ?>
                            <?php if(get_class($product)=== 'Toy'){ ?>
                                <p class="card-text">
                                Caratteristiche: <?php echo $product->features?>
                                </p>
                                <p class="card-text">
                                Dimensioni: <?php echo $product->size?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>