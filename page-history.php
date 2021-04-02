<?php 
/*
Template Name: Наша история
*/
?>

<?php 
    get_header();
?>
<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('title_history', 2); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-wonder_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-wonder_text', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php  
                    $image = get_field('history-wonder_img', 2);
                    if(!empty($image)): ?>
                        <img
                        class="aboutus__img" 
                        src="<?php echo $image['url']?>" 
                        alt="<?php echo $image['alt']?>">
                    <?php endif; 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php 
                    $image = get_field('history-quality_img', 2);
                    if(!empty($image)): ?>
                        <img
                        class="aboutus__img" 
                        src="<?php echo $image['url'] ?>" 
                        alt="<?php echo $image['alt'] ?>">
                    <?php endif;
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-quality_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-quality_text', 2); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-tech_title', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-tech_text', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php 
                    $image = get_field('history-tech_img', 2);
                    if(!empty($image)): ?>
                        <img
                        class="aboutus__img" 
                        src="<?php echo $image['url'] ?>" 
                        alt="<?php echo $image['alt'] ?>">
                    <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>