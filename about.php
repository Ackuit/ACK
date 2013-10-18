<?php include('perch/runtime.php');

perch_layout('global.top', array(
    'title' => 'About Ackuit',
));

perch_layout('global.nav', array(
    'profile-toggle' => 'current-menu-item current_page_item active',
));

perch_layout('global.bottom');
?>


<div class="span8 offset4 wrapper">


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// MAIN PAGE -->

    <section id="about-me" class="main show">

        <h1 class="h1">About Us</h1>

        <div class="row-fluid">
            <div class="offset2 span10 wrapper">
                <h2 class=" h2">Brand and Technology Strategists</h2>
            </div>
        </div>

        <div class="content">

            <div class="row-fluid">

                <div class="span6">
                    <p>
                        <strong>We are a leading full service brand<br>
                            and technology company with expertise<br>
                            across all digital channels.</strong>
                    </p>

                    <?php perch_content ('Profile1'); ?>


                    <?php perch_content ('Profile2'); ?>

                </div>

                <div class="span6">
                    <?php perch_content ('Profile3'); ?>
                </div>

            </div>

        </div>

    </section>

</div>
</div>
</div>
</html>