<?php
/**
 * Template Name: Camping
 * The template for displaying archive pages
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

get_header(); ?>

    <main id="main">

        <!--==========================
          Content 1 Section
        ============================-->
        <section id="content1">
            <div class="container">

                <header class="section-header">
                    <h3>DUMMY HEADER 1</h3>
                    <h4 class="text-center">Sub Header 1</h4>
                    <p><b>Dummy Description 1 </b>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem
                        Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in
                        the .</p>
                </header>
            </div>
        </section>

        <!--==========================
      Campsite home Section
    ============================-->
        <section id="camping-site-home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <img src="./img/camping/camping10.jpg" class="w-100">
                                </div>
                                <div class="col-md-6 camping-site-home-item">
                                    <div class="card-block p-2">
                                        <h3 class="card-title">CAMPING</h3>
                                        <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="../camp-sites" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <img src="./img/camping/camping11.jpg" class="w-100">
                                </div>
                                <div class="col-md-6 camping-site-home-item">
                                    <div class="card-block p-2">
                                        <h3 class="card-title">GLAMPING</h3>
                                        <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="../glamping-sites" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #end-->

    </main><!-- .main-->

<?php get_footer();