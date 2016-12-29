<h1>
    Новини
</h1>

<div>
    <?php foreach ($goods as $good): ?>
        <div class="shopUnit">
            <img src="<?php echo $good['img']; ?>"/>

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php
                    $a=substr($good['desc'],0,64);
                    $b="...";
                    echo $a . $b 
                ?>
            </div>
            <div class="shopUnitPrice">
                Дата: <?php echo $good['date']; ?>
            </div>
            <a href="index.php?page=new&id=<?php echo $good['id']; ?>" class="shopUnitMore">
                Докладніше...
            </a>
        </div>
    <?php endforeach; ?>
</div>