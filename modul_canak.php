<?php
header('Content-Type: text/html; charset=utf-8');
?>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/skyoyun.css">
<link rel="stylesheet" type="text/css" href="css/skyoyun_extra.css">
<link rel="stylesheet" type="text/css" href="css/skyoyun.css">
<link rel="stylesheet" type="text/css" href="css/skyoyun_extra.css">
<style>
    body {
        background: unset;
		margin: 0;
		padding: 0;
		font-family: 'Roboto Slab', Verdana, Arial, Helvetica, sans-serif;
		font-weight: normal;
    }

    .LobiNickListeAnaSec:hover {
        background: darkgray;
    }
    
    #LobiNickContainer {
        height: 100%
    }
	.yonetim{
		padding:10px;
	}
	.yonetim h3{
		margin: 0px;
		background: #bdbdbd;
		padding: 10px;
		font-size: 14px;
		-webkit-border-top-left-radius: 5px;
		-webkit-border-top-right-radius: 5px;
		-moz-border-radius-topleft: 5px;
		-moz-border-radius-topright: 5px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	.yonetim div.yonetim-isim {
		background: #f3f0f0;
		padding: 10px;
		font-size: 14px;
		-webkit-border-bottom-right-radius: 5px;
		-webkit-border-bottom-left-radius: 5px;
		-moz-border-radius-bottomright: 5px;
		-moz-border-radius-bottomleft: 5px;
		border-bottom-right-radius: 5px;
		border-bottom-left-radius: 5px;
		font-weight:bold;
	}
	.yonetim .yonetim-list{
		margin-bottom: 10px;
		box-shadow: 0px 4px 6px -5px #2f2f2f;
		
	}

</style>
<div id="LobiNickContainer" class="IconYaziHHg">
    <div id="LobiNickler" class="yonetim">
        <h3>Çanak okeyinin amacı</h3>
        <p>
            Günlük oynanan puanlı oyunlarda sistem tarafından kesilen Komisyonların burada birikimidir. Bu puan her ayın 1 de yapılan turnuva ile turnuva 1 2 3 ve 4 cü kullanıcılara dağıtılır. <br/>
            Turnuvaya katılmak için BAŞVURU Yapınız
            <strong>Turnuva Kazananları</strong>
            <ul>
                <li>1. %50</li>
                <li>2. %25</li>
                <li>3. ve 4 cü kullanıcılar geri kalan puanı paylaşacaklar.</li>
            </ul>
        </p>
		<?php
        $port = $_GET["odaport"];
        $kull = $_GET["username"];
        $kullanici = $kull;

        //$karakter = mb_convert_encoding($kullanici, "UTF-8", "ISO-8859-9");
		$karakter = urlencode($kullanici);

        $Gelen = $karakter;
        if ((bool) @preg_match("/^misafir-(\d)+/i", $Gelen) == true) { ?>
            <p class="p-3 text-danger">Misafir olduğunuz için <strong>turnuvaya</strong> kayıt yapamassınız. Kayıt olup tekrar deneyin!</p>
        <?php } else { ?>
            <iframe src="https://www.realokey.com/turnuvayeni/turnuva.php?odaport=<?=$port;?>&kull=<?=$karakter;?>" style="width: 100%; border: none;   height: 100%;"></iframe>
        <?php } ?>
    </div>
</div>
