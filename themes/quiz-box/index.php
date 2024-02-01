<?
/*
Template Name: Welcome
Template Post Type: post, page, product
*/

?>
<? wp_head();?>
<body class="main-body">
    <div class="wrapper welcome">
        <div class="welcome__content">
            <a href="#" class="logo welcome__logo"><? the_field('privetstvennaya_stranicza')?>
            </a>
            <a href="<?echo(get_page_link(10))?>" class=" btn welcome__btn"><?the_field('privetstvennaya_knopka')?></a>
        </div>

    </div>
</body>
<?wp_footer()?>