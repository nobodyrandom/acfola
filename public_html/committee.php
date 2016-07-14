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
                <h1 class="page-title">Committees</h1>
            </header>
            <p>
                To develop programs, plans and policies, ACFOLA depend on committees who are comprised of volunteers
                from our members and sometimes, non-members. All committees are established by the Board and supervised
                by the ACFOLA Vice President. Most recommendations from the committees are usually sent to the Board of
                Directors for review and approval, if required.
            </p>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/committee-photo/acfola_pic14-300x204.jpg"/>
                </div>
                <div class="col-md-8">
                    <h5>Articles of Committee</h5>
                    <p>
                        ACFOLA Committees are governed through a common Articles of Committee and a Term of Reference,
                        specific to each committee. <a href="#">You can read the Articles of Committee Here.</a>
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/committee-photo/acfola_pic23-300x206.jpg"/>
                </div>
                <div class="col-md-8">
                    <h5>List of ACFOLA Comittees</h5>
                    <ol>
                        <li>Membership Drive Committee</li>
                        <li>Employment and Settlement Committee</li>
                        <li>Research and Proposal Development Committee</li>
                        <li>Events Committee</li>
                        <li>Project Steering Committee</li>
                        <li>Constitution Review and Bylaws Committee (Ad-hoc)</li>
                        <li>Youth Empowerment Committee</li>
                        <li>Website Committee</li>
                    </ol>
                </div>
            </div>
            <div class="clearfix"></div>

            <h3>Join the Committee</h3>
            <p>You can join a committee by clicking here to complete a volunteer form or sending an email to
                vp@acfola.ca with the name of the committee you like to join.</p>
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

<?php
include_once "footer.php";
?>
