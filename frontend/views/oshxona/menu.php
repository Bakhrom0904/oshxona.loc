<!-- ======= Menu section ========== -->
<section class="menu section bd-container" id="menu">
    <h2 class="section-title">Taomlar ro'yhati</h2>
    <div class="menu__container bd-grid">
        <?php foreach ($ovqatlar as $ovqat)
            {
                ?>
        <div class="menu__content">
            <img src="/rasmlar/<?echo $ovqat->rasmi;?>" alt="" class="menu__img">
            <h3 class="menu__name"><?php echo $ovqat->nomi;?></h3>
            <span class="menu__detail"><?php echo $ovqat->turi;?></span>
            <span class="menu__prici"><?php echo $ovqat->narxi;?></span>
            <a href="#" class="button menu__button">
                <i class="bx bxs-cart"></i>
            </a>
        </div>
        <?php  }  ?>
    </div>
    <br>
    <?php

    echo \yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
        'maxButtonCount'=>3,
    ])
    ?>
</section>