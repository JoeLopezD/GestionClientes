<?= $this->extend('layouts/generalLayout') ?>




<?= $this->section('news_boot_css') ?>
<style type="text/css">
    a {
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-right: 5px;
    }

    .pagination li.active {
        background: deepskyblue;
        color: white;
    }

    .pagination li.active a {
        color: white;
        text-decoration: none;
    }
</style>
<?= $this->endSection() ?>








<?= $this->section('contingut') ?>



<div class="container">
<!-- <div class="row">


    <form method='get' action="<?//= base_url('/'); ?>" id="searchForm">
        <input type='text' name='q' value='<?//php $search ?>' placeholder="Search here...">
        <input type='button' id='btnsearch' value='Cercar' onclick='document.getElementById("searchForm").submit();'>
    </form>
   <div class="col">
<a href="<//?=base_url('/')?>?order=id&tipusDeOrdre=ASC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per id asc</a>
</div>
<div class="col">
<a href="<//?=base_url('/')?>?order=id&tipusDeOrdre=DESC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per id desc</a>
</div>

<div class="col">
<a href="<//?=base_url('/')?>?order=title&tipusDeOrdre=ASC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per titol asc</a>
</div>


<div class="col">
<a href="<//?=base_url('/')?>?order=title&tipusDeOrdre=DESC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per titol desc</a>
</div>
<div class="col">
<a href="<//?=base_url('/')?>?order=text&tipusDeOrdre=ASC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per body asc</a>
</div>
<div class="col">
<a href="<//?=base_url('/')?>?order=text&tipusDeOrdre=DESC&q=<?//=$search?>&page=<?//=$activepage?>" class="btn btn-outline-primary">Ordenar per body desc</a>
</div>
</div> -->
</div>
</br>


    <?//php if (! empty($noticies) && is_array($noticies)): ?>
        <div class="container">
        <div class="row">

        <?//php foreach ($noticies as $news_item): ?>
            
            <!-- <div class="col col-sm-12 col-md-6 col-lg-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title"><?//= esc($news_item['title']) ?></h5>
                        <p class="card-text"><?//= esc($news_item['text']) ?></p>

                        <?//php  if(session()->get('loggedIn')){?>
                        <a href="/noticies/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-primary">Veure</a>

                        <?//php if(session()->get('rol')>=5){?>
                        <a href="/noticies/update/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-warning">Update</a>
                        <a href="/noticies/delete/<?//= esc($news_item['id']) ?>" class="btn btn-danger">Delete</a>
                        <?//php } ?>
                        <?//php } ?>


                        <?php
                        ?>
                    </div>
                </div>
        </br>
            </div> -->





<!-- ------------PRUEBA------------- -->

<div class="col col-sm-12 col-md-6 col-lg-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">Texto</p>

                        <a href="/noticies/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-primary">Veure</a>

                        <a href="/noticies/update/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-warning">Update</a>
                        <a href="/noticies/delete/<?//= esc($news_item['id']) ?>" class="btn btn-danger">Delete</a>


                        <?php
                        ?>
                    </div>
                </div>
        </br>
            </div>




            <div class="col col-sm-12 col-md-6 col-lg-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">Texto</p>

                        <a href="/noticies/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-primary">Veure</a>

                        <a href="/noticies/update/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-warning">Update</a>
                        <a href="/noticies/delete/<?//= esc($news_item['id']) ?>" class="btn btn-danger">Delete</a>


                        <?php
                        ?>
                    </div>
                </div>
        </br>
            </div>





            <div class="col col-sm-12 col-md-6 col-lg-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">Texto</p>

                        <a href="/noticies/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-primary">Veure</a>

                        <a href="/noticies/update/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-warning">Update</a>
                        <a href="/noticies/delete/<?//= esc($news_item['id']) ?>" class="btn btn-danger">Delete</a>


                        <?php
                        ?>
                    </div>
                </div>
        </br>
            </div>




            <div class="col col-sm-12 col-md-6 col-lg-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Titulo</h5>
                        <p class="card-text">Texto</p>

                        <a href="/noticies/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-primary">Veure</a>

                        <a href="/noticies/update/<?//= esc($news_item['url'], 'url') ?>" class="btn btn-warning">Update</a>
                        <a href="/noticies/delete/<?//= esc($news_item['id']) ?>" class="btn btn-danger">Delete</a>


                        <?php
                        ?>
                    </div>
                </div>
        </br>
            </div>

                            

    <!----------------- FIN PRUEBA ------------------ -->




















        </br>

        <?//php endforeach; ?>
        </div>

        </div>

    <?//php else: ?>

        <!-- <h3>No se han trobat clients.</h3>
        <p>No ha estat posible trobar clients ja registrats.</p> -->

    <?//php endif; ?>


    <div class="d-flex justify-content-center">

    <!-- <p><?//= $pager->links('default', 'daw_template'); ?></p> -->

    </div>
<?= $this->endSection() ?>