<section class="formation" id="formation">
    <h2 class="title">Formations</h2>
    <?php

    $dateDiplomas = [
            ['historyDate'=>'1400 ANS AVANT JScript',
            'school'=>'Université de Karadoc',
            'diploma'=>'Doctorat de la botte secrète de Karadoc est pas faux',
            ],
            ['historyDate'=>'1400 ANS AVANT JScript',
            'school'=>'Université Le Gallois',
            'diploma'=>'Master de la technique du Rebrousse-Chemin',
            ],
            ['historyDate'=>'10 ANS après JScript',
            'school'=>'Stargate',
            'diploma'=>'Testeur de Porte Dimmensionnelles Stargate',
            ],
            ['historyDate'=>'1400 ANS AVANT JScript',
             'school'=>'Université Cul de Chouette',
             'diploma'=>'Perceval chante le Sloubi',

            ]
        ];


         foreach ($dateDiplomas as $title => $dateDiploma) {
            ?>
    <div class="containers">

        <div class="containersDate">
            <div class="date">
                <div class="historyDate"><?= $dateDiploma['historyDate'];?></div>
            </div>
        </div>

            <div class="cadre"><?php ?>

            <div class="dateDiploma"><h3><?= $dateDiploma['school']; ?></h3>
                <p><?= $dateDiploma['diploma'];?></p></div>
        </div>
    </div><?php };?>


</section>