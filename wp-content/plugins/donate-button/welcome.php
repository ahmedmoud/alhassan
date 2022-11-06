<style>

    .sidemenu {
        right: 0;
        top: 50%;
        position: fixed;
        z-index: 99;
    }

    .sidemenu li {
        list-style-type: none;
        border-radius: 10px 0 0 10px;
        border: 1px solid #DDDDDD;
        padding: 10px;
        width: 80px;
        background-color: #FFF;
        z-index: 999;
    }

    li {
        line-height: 24px;
    }

    .sidemenu p {
        margin: 0;
        text-transform: uppercase;
    }

    .sidemenu a {
        color: #535353;
        text-decoration: none;
        /* text-shadow: 1px 1px 5px #000; */
    }

    .sidemenu a:hover {
        color: #f58320;
    }

    .donation-btn {
        background-color: #f58320 !important;
    }
</style>
<ul class="sidemenu" style="z-index:999;">
    <li>
        <p align="center">
            <?php if (get_locale() == "ar") {
                $url = "/?page_id=1618&lang=ar/";
                $lang='تبرع';
                $lang1='الان';

            } else {
                $url = "/?page_id=1545/";
                $lang='Donate';
                $lang1='Now';


            } ?>
            <a href="<?php echo $url; ?>" class="btn donation-btn">
                <img
                    src="<?php echo plugins_url(); ?>/donate-button/hand132.png" width="100%"></a> <a
                href="/?page_id=169/"><b>
                    <?php echo $lang;?> </b>
                <?php echo $lang1;?> </a> <img src="<?php echo plugins_url(); ?>/donate-button/visa.png" width="60px"
                              class="visa">
        </p>
    </li>
</ul>
