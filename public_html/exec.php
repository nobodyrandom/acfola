<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/13/16
 * Time: 2:03 AM
 */

include_once "header.php";
?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">About</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Meet Our Executive Team</h1>
            </header>
            <p>
                The African Canadian Federation of London and Area (ACFOLA) is registered and operates as a Nonprofit
                organization in the Canadian Province of Ontario. ACFOLA is an organization that serves and advocates
                for the inclusion, engagement and integration of African Canadians in community life and development of
                London and area. The Federation also acts as an umbrella organization for several organizations in the
                London area. The Federation is governed by its 9 volunteer member board of directors who are elected
                from its individual and association members. The executive committee members are subsequently elected or
                appointed from members of the board. The current members of the board and/or executive committee with
                their positions are shown below.
            </p>
            <br>
            <h3>Executive Committee and Board Members</h3>
            <div class="exec-grid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="exec-item">
                            <img class="exec-photo img-circle" src="assets/images/exec-photo/adamG.jpg"/>
                            <p class="exec-name">Adam Garba</p>
                            <p class="exec-postion">President and Chair of Board</p>
                            <p class="exec-desc">Adam is the President/CEO of A & B Print Inc., Smart Choice
                                Communications Inc. and a Community Support Activist.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="exec-item">
                            <img class="exec-photo img-circle" src="assets/images/exec-photo/adamG.jpg"/>
                            <p class="exec-name">Adam Garba</p>
                            <p class="exec-postion">President and Chair of Board</p>
                            <p class="exec-desc">Adam is the President/CEO of A & B Print Inc., Smart Choice
                                Communications Inc. and a Community Support Activist.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="exec-item">
                            <img class="exec-photo img-circle" src="assets/images/exec-photo/adamG.jpg"/>
                            <p class="exec-name">Adam Garba</p>
                            <p class="exec-postion">President and Chair of Board</p>
                            <p class="exec-desc">Adam is the President/CEO of A & B Print Inc., Smart Choice
                                Communications Inc. and a Community Support Activist.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-3 sidebar sidebar-right">

            <div class="widget">
                <h4>Address</h4>
                <address>
                    2002 Holcombe Boulevard, Houston, TX 77030, USA
                </address>
                <h4>Phone:</h4>
                <address>
                    (713) 791-1414
                </address>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>    <!-- /container -->

<section class="container-full top-space">
    <div id="map"></div>
</section>

<?php
include_once "footer.php";
?>
