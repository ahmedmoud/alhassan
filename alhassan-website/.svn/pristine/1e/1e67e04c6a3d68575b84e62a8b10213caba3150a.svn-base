<?php
/*
Template Name: Donate Bank Return
*/


/* -----------------------------------------------------------------------------

 Version 2.0

------------------ Disclaimer --------------------------------------------------

Copyright 2004 Dialect Holdings.  All rights reserved.

This document is provided by Dialect Holdings on the basis that you will treat
it as confidential.

No part of this document may be reproduced or copied in any form by any means
without the written permission of Dialect Holdings.  Unless otherwise expressly
agreed in writing, the information contained in this document is subject to
change without notice and Dialect Holdings assumes no responsibility for any
alteration to, or any error or other deficiency, in this document.

All intellectual property rights in the Document and in all extracts and things
derived from any part of the Document are owned by Dialect and will be assigned
to Dialect on their creation. You will protect all the intellectual property
rights relating to the Document in a manner that is equal to the protection
you provide your own intellectual property.  You will notify Dialect
immediately, and in writing where you become aware of a breach of Dialect's
intellectual property rights in relation to the Document.

The names "Dialect", "QSI Payments" and all similar words are trademarks of
Dialect Holdings and you must not use that name or any similar name.

Dialect may at its sole discretion terminate the rights granted in this
document with immediate effect by notifying you in writing and you will
thereupon return (or destroy and certify that destruction to Dialect) all
copies and extracts of the Document in its possession or control.

Dialect does not warrant the accuracy or completeness of the Document or its
content or its usefulness to you or your merchant customers.   To the extent
permitted by law, all conditions and warranties implied by law (whether as to
fitness for any particular purpose or otherwise) are excluded.  Where the
exclusion is not effective, Dialect limits its liability to $100 or the
resupply of the Document (at Dialect's option).

Data used in examples and sample data files are intended to be fictional and
any resemblance to real persons or companies is entirely coincidental.

Dialect does not indemnify you or any third party in relation to the content or
any use of the content as contemplated in these terms and conditions.

Mention of any product not owned by Dialect does not constitute an endorsement
of that product.

This document is governed by the laws of New South Wales, Australia and is
intended to be legally binding.

-------------------------------------------------------------------------------

Following is a copy of the disclaimer / license agreement provided by RSA:

Copyright (C) 1991-2, RSA Data Security, Inc. Created 1991. All rights reserved.

License to copy and use this software is granted provided that it is identified
as the "RSA Data Security, Inc. MD5 Message-Digest Algorithm" in all material
mentioning or referencing this software or this function.

License is also granted to make and use derivative works provided that such
works are identified as "derived from the RSA Data Security, Inc. MD5
Message-Digest Algorithm" in all material mentioning or referencing the
derived work.

RSA Data Security, Inc. makes no representations concerning either the
merchantability of this software or the suitability of this software for any
particular purpose. It is provided "as is" without express or implied warranty
of any kind.

These notices must be retained in any copies of any part of this documentation
and/or software.

--------------------------------------------------------------------------------

This example assumes that a form has been sent to this example with the
required fields. The example then processes the command and displays the
receipt or error to a HTML page in the users web browser.

NOTE:
=====
  You may have installed the libeay32.dll and ssleay32.dll libraries
  into your x:\WINNT\system32 directory to run this example.

--------------------------------------------------------------------------------

 @author Dialect Payment Solutions Pty Ltd Group

------------------------------------------------------------------------------*/

// *********************
// START OF MAIN PROGRAM
// *********************

// Define Constants
// ----------------
// This is secret for encoding the MD5 hash
// This secret will vary from merchant to merchant
// To not create a secure hash, let SECURE_SECRET be an empty string - ""
// $SECURE_SECRET = "secure-hash-secret";
?>
<script>
    function ConfirmDonation(x, y) {
        var results = document.cookie.match('(^|;) ?' + 'DonateFormInnerDetail' + '=([^;]*)(;|$)');
        results = decodeURIComponent(results[2]);
        results = results.split('<br/>');
        var name1;
        var address1;
        var tel1;
        var email1;
        var amount1;
        var purpose1;
        for (var i = 0; i < results.length; i++) {
            var res2 = results[i].split(':');
            if (res2[0] == 'Name') {
                name1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="Name"]').attr('value', jQuery.trim(res2[1]));
            }
            if (res2[0] == 'Address') {
                address1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="Address"]').attr('value', jQuery.trim(res2[1]));
            }
            if (res2[0] == 'Tel') {
                tel1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="Tel"]').attr('value', jQuery.trim(res2[1]));
            }
            if (res2[0] == 'Email') {
                email1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="Email"]').attr('value', jQuery.trim(res2[1]));
            }
            if (res2[0] == 'Amount') {
                amount1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="Amount"]').attr('value', jQuery.trim(res2[1]));
            }
            if (res2[0] == 'Purpose') {
                purpose1 = jQuery.trim(res2[1]);
                jQuery('.HiddenDonateForm [name="DonationPurpose"]').attr('value', jQuery.trim(res2[1]));
            }
        }
        if (y == 't') {
            jQuery('.HiddenDonateForm .DonateSBTN input[type="submit"]').trigger('click');
            if (x == 'ar') {
                jQuery('.DonateRespondMSG3').html('الاسم: ' + name1 + '<br/>' + 'العنوان: ' + address1 + '<br/>' + 'التليفون: ' + tel1 + '<br/>' + 'البريد الالكترونى: ' + email1 + '<br/>' + 'مبلغ التبرع: ' + amount1 + '<br/>' + 'واجهة الصرف: ' + purpose1 + '<br/>');
            } else {
                jQuery('.DonateRespondMSG3').html('Name: ' + name1 + '<br/>' + 'Address: ' + address1 + '<br/>' + 'Telephone: ' + tel1 + '<br/>' + 'Email: ' + email1 + '<br/>' + 'Donation Amount: ' + amount1 + '<br/>' + 'Donation Purpose: ' + purpose1 + '<br/>');
            }
            jQuery('.DonateRespondMSG2').css('display', 'block');
            jQuery('.DonateRespondMSG3').css('display', 'block');
        }
        jQuery('.DonateRespondMSG').css('display', 'block');
        jQuery('.LoadingContent').css('display', 'none');

    }

</script>
<script>
    var results = document.cookie.match('(^|;) ?' + 'DonateFormInnerDetail' + '=([^;]*)(;|$)');
    results = decodeURIComponent(results[2]);
    results = results.split('<br/>');
    var curr;
    for (var i = 0; i < results.length; i++) {
        var res2 = results[i].split(':');
        if (res2[0] == 'curr') {
            curr = res2[1];
            if (curr == 'EGP') {
                alert('tt');<?php $SECURE_SECRET = "138EA436D864BF9B5A26BF93BAE91480";?>} else {<?php $SECURE_SECRET = "A37CA86C8840BD63D1012E5EACF622A6";?>}
        }
    }
</script>
<?php

// If there has been a merchant secret set then sort and loop through all the
// data in the Virtual Payment Client response. While we have the data, we can
// append all the fields that contain values (except the secure hash) so that
// we can create a hash and validate it against the secure hash in the Virtual
// Payment Client response.

// NOTE: If the vpc_TxnResponseCode in not a single character then
// there was a Virtual Payment Client error and we cannot accurately validate
// the incoming data from the secure hash. */

// get and remove the vpc_TxnResponseCode code from the response fields as we
// do not want to include this field in the hash calculation

$vpc_Txn_Secure_Hash = $_GET["vpc_SecureHash"];
unset($_GET["vpc_SecureHash"]);
// set a flag to indicate if hash has been validated
$errorExists = false;

if (strlen($SECURE_SECRET) > 0 && $_GET["vpc_TxnResponseCode"] != "7" && $_GET["vpc_TxnResponseCode"] != "No Value Returned") {

    $md5HashData = $SECURE_SECRET;

    // sort all the incoming vpc response fields and leave out any with no value
    foreach ($_GET as $key => $value) {
        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
            $md5HashData .= $value;
        }
    }

    // Validate the Secure Hash (remember MD5 hashes are not case sensitive)
    // This is just one way of displaying the result of checking the hash.
    // In production, you would work out your own way of presenting the result.
    // The hash check is all about detecting if the data has changed in transit.
    if (strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData))) {
        // Secure Hash validation succeeded, add a data field to be displayed
        // later.
        $hashValidated = "<FONT color='#00AA00'><strong>CORRECT</strong></FONT>";
    } else {
        // Secure Hash validation failed, add a data field to be displayed
        // later.
        $hashValidated = "<FONT color='#FF0066'><strong>INVALID HASH</strong></FONT>";
        $errorExists = true;
    }
} else {
    // Secure Hash was not validated, add a data field to be displayed later.
    $hashValidated = "<FONT color='orange'><strong>Not Calculated - No 'SECURE_SECRET' present.</strong></FONT>";
}

// Define Variables
// ----------------
// Extract the available receipt fields from the VPC Response
// If not present then let the value be equal to 'No Value Returned'

// Standard Receipt Data
$amount = null2unknown($_GET["vpc_Amount"]);
$locale = null2unknown($_GET["vpc_Locale"]);
$batchNo = null2unknown($_GET["vpc_BatchNo"]);
$command = null2unknown($_GET["vpc_Command"]);
$message = null2unknown($_GET["vpc_Message"]);
$version = null2unknown($_GET["vpc_Version"]);
$cardType = null2unknown($_GET["vpc_Card"]);
$orderInfo = null2unknown($_GET["vpc_OrderInfo"]);
$receiptNo = null2unknown($_GET["vpc_ReceiptNo"]);
$merchantID = null2unknown($_GET["vpc_Merchant"]);
$authorizeID = null2unknown($_GET["vpc_AuthorizeId"]);
$merchTxnRef = null2unknown($_GET["vpc_MerchTxnRef"]);
$transactionNo = null2unknown($_GET["vpc_TransactionNo"]);
$acqResponseCode = null2unknown($_GET["vpc_AcqResponseCode"]);
$txnResponseCode = null2unknown($_GET["vpc_TxnResponseCode"]);


// 3-D Secure Data
$verType = array_key_exists("vpc_VerType", $_GET) ? $_GET["vpc_VerType"] : "No Value Returned";
$verStatus = array_key_exists("vpc_VerStatus", $_GET) ? $_GET["vpc_VerStatus"] : "No Value Returned";
$token = array_key_exists("vpc_VerToken", $_GET) ? $_GET["vpc_VerToken"] : "No Value Returned";
$verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $_GET) ? $_GET["vpc_VerSecurityLevel"] : "No Value Returned";
$enrolled = array_key_exists("vpc_3DSenrolled", $_GET) ? $_GET["vpc_3DSenrolled"] : "No Value Returned";
$xid = array_key_exists("vpc_3DSXID", $_GET) ? $_GET["vpc_3DSXID"] : "No Value Returned";
$acqECI = array_key_exists("vpc_3DSECI", $_GET) ? $_GET["vpc_3DSECI"] : "No Value Returned";
$authStatus = array_key_exists("vpc_3DSstatus", $_GET) ? $_GET["vpc_3DSstatus"] : "No Value Returned";

// *******************
// END OF MAIN PROGRAM
// *******************

// FINISH TRANSACTION - Process the VPC Response Data
// =====================================================
// For the purposes of demonstration, we simply display the Result fields on a
// web page.

// Show 'Error' in title if an error condition
$errorTxt = "";
// Show this page as an error page if vpc_TxnResponseCode equals '7'
if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
    $errorTxt = "Error ";
}

// This is the display title for 'Receipt' page
$title = $_GET["Title"];

// The URL link for the receipt to do another transaction.
// Note: This is ONLY used for this example and is not required for
// production code. You would hard code your own URL into your application
// to allow customers to try another transaction.
//TK//$againLink = URLDecode($_GET["AgainLink"]);

get_header();
global $borntogive_options;
borntogive_sidebar_position_module();
$pageSidebarGet = get_post_meta(get_the_ID(), 'borntogive_select_sidebar_from_list', true);
$pageSidebarStrictNo = get_post_meta(get_the_ID(), 'borntogive_strict_no_sidebar', true);
$pageSidebarOpt = $borntogive_options['page_sidebar'];
if ($pageSidebarGet != '') {
    $pageSidebar = $pageSidebarGet;
} elseif ($pageSidebarOpt != '') {
    $pageSidebar = $pageSidebarOpt;
} else {
    $pageSidebar = '';
}
if ($pageSidebarStrictNo == 1) {
    $pageSidebar = '';
}
$sidebar_column = get_post_meta(get_the_ID(), 'borntogive_sidebar_columns_layout', true);
$sidebar_column = ($sidebar_column == '') ? 4 : $sidebar_column;
if (!empty($pageSidebar) && is_active_sidebar($pageSidebar)) {
    $left_col = 12 - $sidebar_column;
    $class = $left_col;
} else {
    $class = 12;
}
$page_header = get_post_meta(get_the_ID(), 'borntogive_pages_Choose_slider_display', true);
if ($page_header == 3 || $page_header == 4) {
    get_template_part('pages', 'flex');
} elseif ($page_header == 5) {
    get_template_part('pages', 'revolution');
} else {
    get_template_part('pages', 'banner');
}
?>

<!-- Start Body Content -->
<div id="main-container">
    <h2 class="content_heading"><span>
           <?php if (get_locale() == "ar") {
               echo get_the_title(1618);
           } else {
               echo get_the_title(1545);
           } ?>
        </span></h2>
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-<?php echo esc_attr($class); ?>" id="content-col">
                    <div class="col_header">
                        <span class="Logo-icn"></span><span><?php if(get_locale() == "ar") { ?>تأكيد التبرع<?php } else{?>Donation Confirmation<?php }?></span>
                    </div>
                    <div  class="col_content wpcf7-form">
                        <?php if(get_locale() == "ar") { ?>
                            <div class="LoadingContent">Loading ...</div>
                            <div style="display:none" class="HiddenDonateForm"><?php echo do_shortcode('[contact-form-7 id="1704" title="Donate Arabic Return"]');?></div>
                            <div style="display:none" class="DonateRespondMSG"><?=getResponseDescription($txnResponseCode)?>.<br/><br/>

                                لا تتردد في الاتصال بنا للحصول على أي استفسارات أو توضيحات
                            </div>
                            <div style="display:none" class="DonateRespondMSG2">سوف يصلك بريد الكترونى بتفاصيل التبرع</div><br/>
                            <div style="display:none" class="DonateRespondMSG3"></div>
                        <?php } else{ ?>
                            <div class="LoadingContent">Loading ...</div>
                            <div style="display:none" class="HiddenDonateForm"><?php echo do_shortcode('[contact-form-7 id="1703" title="Donate English Return"]');?></div>
                            <div style="display:none" class="DonateRespondMSG">Your <?=getResponseDescription($txnResponseCode)?>.<br/><br/>

                                Please feel free to contact us for any inquires or clarifications</div>
                            <div style="display:none" class="DonateRespondMSG2">You will receive email with donation details</div><br/>
                            <div style="display:none" class="DonateRespondMSG3"></div>
                        <?php }?>

                        <br/><br/>
                        <table width="85%" align="center" cellpadding="5" border="0" style="display:none;">
                            <tr>
                                <td align="right" width="55%"><strong><i>VPC API Version: </i></strong></td>
                                <td width="45%"><?=$version?></td>
                            </tr>
                            <tr class="shade">
                                <td align="right"><strong><i>Command: </i></strong></td>
                                <td><?=$command?></td>
                            </tr>
                            <tr>
                                <td align="right"><strong><i>Merchant Transaction Reference: </i></strong></td>
                                <td><?=$merchTxnRef?></td>
                            </tr>
                            <tr class="shade">
                                <td align="right"><strong><i>Merchant ID: </i></strong></td>
                                <td><?=$merchantID?></td>
                            </tr>
                            <tr>
                                <td align="right"><strong><i>Order Information: </i></strong></td>
                                <td><?=$orderInfo?></td>
                            </tr>
                            <tr class="shade">
                                <td align="right"><strong><i>Purchase Amount: </i></strong></td>
                                <td><?=$amount?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <font color="#C1C1C1">Fields above are the request values returned.<br />
                                        <HR />
                                        Fields below are the response fields for a Standard Transaction.<br /></font>
                                </td>
                            </tr>
                            <tr class="shade">
                                <td align="right"><strong><i>VPC Transaction Response Code: </i></strong></td>
                                <td><?=$txnResponseCode?></td>
                            </tr>
                            <tr>
                                <td align="right"><strong><i>Transaction Response Code Description: </i></strong></td>
                                <td><?=getResponseDescription($txnResponseCode)?></td>
                            </tr>
                            <tr class="shade">
                                <td align="right"><strong><i>Message: </i></strong></td>
                                <td><?=$message?></td>
                            </tr>
                            <?
                            // only display the following fields if not an error condition
                            if ($txnResponseCode != "7" && $txnResponseCode != "No Value Returned") {
                                ?>
                                <tr>
                                    <td align="right"><strong><i>Receipt Number: </i></strong></td>
                                    <td><?=$receiptNo?></td>
                                </tr>
                                <tr class="shade">
                                    <td align="right"><strong><i>Transaction Number: </i></strong></td>
                                    <td><?=$transactionNo?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong><i>Acquirer Response Code: </i></strong></td>
                                    <td><?=$acqResponseCode?></td>
                                </tr>
                                <tr class="shade">
                                    <td align="right"><strong><i>Bank Authorization ID: </i></strong></td>
                                    <td><?=$authorizeID?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong><i>Batch Number: </i></strong></td>
                                    <td><?=$batchNo?></td>
                                </tr>
                                <tr class="shade">
                                    <td align="right"><strong><i>Card Type: </i></strong></td>
                                    <td><?=$cardType?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <font color="#C1C1C1">Fields above are for a Standard Transaction<br />
                                            <HR />
                                            Fields below are additional fields for extra functionality.</font><br />
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><strong><i>Hash Validated Correctly: </i></strong></td>
                                    <td><?=$hashValidated?></td>
                                </tr>
                                <?
                            } ?>    </table>
                    </div>

                </div>
                <?php if (is_active_sidebar($pageSidebar)) { ?>
                    <!-- Sidebar -->
                    <div class="col-md-<?php echo esc_attr($sidebar_column); ?>" id="sidebar-col">
                        <?php dynamic_sidebar($pageSidebar); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php
// End Processing

// This method uses the QSI Response code retrieved from the Digital
// Receipt and returns an appropriate description for the QSI Response Code
//
// @param $responseCode String containing the QSI Response Code
//
// @return String containing the appropriate description
//


function getResponseDescription($responseCode) {

    if(get_locale() == "ar") {
        switch ($responseCode) {
            case "0" : $result = "تبرعك تم بنجاح. سيظهر المبلغ المتبرع به في بيان فواتير بطاقة الائتمان الخاصة بك";
                ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','t')});</script>
                <?php
                break;
            case "?" : $result = "حالة التبرع غير معروفة"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "1" : $result = "حدث خطأ غير معروف"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "2" : $result = "البنك رفض تبرعك"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "3" : $result = "لا يوجد رد من البنك"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "4" : $result = "بطاقة منتهية الصلاحية"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "5" : $result = "اموالك لا تكفى"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "6" : $result = "خطأ فى التواصل مع البنك"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "7" : $result = "حدث خطأ فى نظام الدفع"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "8" : $result = "donation Type Not Supported"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "9" : $result = "Bank declined donation (Do not contact Bank)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "A" : $result = "donation Aborted"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "C" : $result = "donation Cancelled"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "D" : $result = "Deferred donation has been received and is awaiting processing"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "F" : $result = "3D Secure Authentication failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "I" : $result = "Card Security Code verification failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "L" : $result = "Shopping donation Locked (Please try the transaction again later)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "N" : $result = "Cardholder is not enrolled in Authentication scheme"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "P" : $result = "donation has been received by the Payment Adaptor and is being processed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "R" : $result = "donation was not processed - Reached limit of retry attempts allowed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "S" : $result = "Duplicate SessionID (OrderInfo)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "T" : $result = "Address Verification Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "U" : $result = "Card Security Code Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            case "V" : $result = "Address Verification and Card Security Code Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php break;
            default  : $result = "Unable to be determined"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('ar','f')});</script>
                <?php
        }
    } else{

        switch ($responseCode) {
            case "0" : $result = "donation is received. The donated amount will appear at your credit card billing statement";
                ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','t')});</script>
                <?php
                break;
            case "?" : $result = "donation status is unknown"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "1" : $result = "Unknown Error"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "2" : $result = "Bank Declined donation"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "3" : $result = "No Reply from Bank"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "4" : $result = "Expired Card"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "5" : $result = "Insufficient funds"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "6" : $result = "Error Communicating with Bank"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "7" : $result = "Payment Server System Error"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "8" : $result = "donation Type Not Supported"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "9" : $result = "Bank declined donation (Do not contact Bank)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "A" : $result = "donation Aborted"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "C" : $result = "donation Cancelled"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "D" : $result = "Deferred donation has been received and is awaiting processing"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "F" : $result = "3D Secure Authentication failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "I" : $result = "Card Security Code verification failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "L" : $result = "Shopping donation Locked (Please try the transaction again later)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "N" : $result = "Cardholder is not enrolled in Authentication scheme"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "P" : $result = "donation has been received by the Payment Adaptor and is being processed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "R" : $result = "donation was not processed - Reached limit of retry attempts allowed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "S" : $result = "Duplicate SessionID (OrderInfo)"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "T" : $result = "Address Verification Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "U" : $result = "Card Security Code Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            case "V" : $result = "Address Verification and Card Security Code Failed"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php break;
            default  : $result = "Unable to be determined"; ?>
                <script>jQuery(window).load(function(){ConfirmDonation('en','f')});</script>
                <?php
        }
    }
    return $result;
}




//  -----------------------------------------------------------------------------

// This method uses the verRes status code retrieved from the Digital
// Receipt and returns an appropriate description for the QSI Response Code

// @param statusResponse String containing the 3DS Authentication Status Code
// @return String containing the appropriate description

function getStatusDescription($statusResponse) {
    if ($statusResponse == "" || $statusResponse == "No Value Returned") {
        $result = "3DS not supported or there was no 3DS data provided";
    } else {
        switch ($statusResponse) {
            Case "Y"  : $result = "The cardholder was successfully authenticated."; break;
            Case "E"  : $result = "The cardholder is not enrolled."; break;
            Case "N"  : $result = "The cardholder was not verified."; break;
            Case "U"  : $result = "The cardholder's Issuer was unable to authenticate due to some system error at the Issuer."; break;
            Case "F"  : $result = "There was an error in the format of the request from the merchant."; break;
            Case "A"  : $result = "Authentication of your Merchant ID and Password to the ACS Directory Failed."; break;
            Case "D"  : $result = "Error communicating with the Directory Server."; break;
            Case "C"  : $result = "The card type is not supported for authentication."; break;
            Case "S"  : $result = "The signature on the response received from the Issuer could not be validated."; break;
            Case "P"  : $result = "Error parsing input from Issuer."; break;
            Case "I"  : $result = "Internal Payment Server system error."; break;
            default   : $result = "Unable to be determined"; break;
        }
    }
    return $result;
}



// If input is null, returns string "No Value Returned", else returns input
function null2unknown($data) {
    if ($data == "") {
        return "No Value Returned";
    } else {

        return $data;
    }
}

?>
