<style >
    #promo {
    background: url('<?
        echo $main['img'];
        ?>') no-repeat;
    width: 100%;
    height: 600px;
    background-size: cover;
    margin-top: -71px;
    float: left;
}
</style>
<div id="promo">
    <h1 id="promoText">
        Новина тижня
    </h1>
</div>

<div id="mainTextWrap">
    <div id="mainText">
        <?
            echo $main['desc'];
        ?>
    </div>
</div>