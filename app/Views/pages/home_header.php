<header class="masthead"
        style="background-image:url('<?php echo base_url('tema_assets/img/home-bg.jpg') ?>?h=ed6236475a1226b743bf65e6f1bebb34');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Site de Notícias</h1><span class="subheading">Um site em construção</span></div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row mb-2">
        <form class="form-inline d-flex list-group-horizontal justify-content-end  mt-0"
              action="<?php echo base_url('buscar#input_busca') ?>" method="get">
            <div class="input-group " id="input_busca">
                <div class="active-cyan-3 active-cyan-4 ml-3">
                    <input name="valor" class="form-control mt-2 w-100" type="text" placeholder="Search"
                           aria-label="Search">
                </div>
                <button class="btn btn-outline-primary btn-sm" type="submit">buscar</button>
            </div>
        </form>
    </div>
    <div style="font-weight: bolder" class="label mt-4 "><?php echo isset($stringBusca) ? $stringBusca :'' ?></div>

    <div class="row">
        <div class="col-md-10 col-lg-8">