<header>
    <div class="row">
        <div class="column7" id="header-nav">
<a href="https://libora.000webhostapp.com"><img src="images/logo.png" <?php if (isset($align_logo)) {?>class="al"<?php }?> alt="Libora logo"></a>
        </div>

        <div class="column5">
            <ul>

                <?php
                    $_SESSION['client_id'] = 1;

                    if (!isset($_SESSION['client_id'])) {
                
                    
                ?>

                <li><a href="/login">Login Here</a></li>

                    <?php } else { ?>

                        <li class="inportant-link"><a href="/login">Edit my Barter</a></li>
                        <li><a href="/login">My Account</a></li>
                        <li><a href="/login">Log Out</a></li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</header>