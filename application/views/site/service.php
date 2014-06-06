<!-- Conteudo -->

<div class="content">

    <div class="historico">

        <div id="margin"><div id="padding"><a href="<?=site_url('home');?>">Home</a> > Serviços</div></div>

    </div>

    <div id="margin">

        <div id="titulo-principal">
			<div id="padding">
            	Serviços - <span>Carmaniacs Oil in Home</span>
			</div>
        </div>

        

        <? if($rows){ foreach($rows as $row){ ?>

        

        <div class="list-item">

            <a href="<?=site_url('servicos/detalhes/'.$row['id']);?>">
                <div id="thumb">
    
                    <? if(!empty($row['image'])){ $row['image'] = explode('.', $row['image']);?>
    
                        <img src="<?=site_url('assets/uploads/service/'.$row['image'][0].'_thumb.'.$row['image'][1]);?>" />
    
                    <? }else{ ?>
    
                        <img src="<?=site_url('assets/img/imagem-padrao.jpg');?>" />
    
                    <? } ?>
    
                </div>
            </a>

            <a href="<?=site_url('servicos/detalhes/'.$row['id']);?>"><div id="titulo">Serviços <span>- <?=$row['name'];?> </span></div></a>

            <div id="previa">

                <?=word_limiter($row['description'], 20);?>

            </div>

            <div id="link-leiamais">

                <a href="<?=site_url('servicos/detalhes/'.$row['id']);?>">Leia Mais ></a>

            </div>

        </div>

        

        <? }}else{ ?>

        <div class="list-item">

            <div id="previa">Dados não cadastrados</div>

        </div>

        <? } ?>

    </div>

</div>

<!-- Fim Conteudo -->