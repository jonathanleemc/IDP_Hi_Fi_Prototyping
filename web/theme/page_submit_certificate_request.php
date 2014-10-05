<?php
include '../../lib/model/CertificationRequestDAO.php';
include '../../lib/model/CourseDAO.php';
session_start();
$_SESSION['userid'] = "U1";
?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!--INCLUDE SIDEBAR-->
    <?php include 'page_sidebar.php'; ?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span>
                            THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-original-title="Default">
                            </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-original-title="Dark Blue">
                            </li>
                            <li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
                            </li>
                            <li class="color-light tooltips" data-style="light" data-original-title="Light">
                            </li>
                            <li class="color-light2 tooltips" data-style="light2" data-html="true" data-original-title="Light 2">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span>
                            Layout </span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Header </span>
                        <select class="page-header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar </span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span>
                            Footer </span>
                        <select class="page-footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Editable Datatables <small>editable datatable samples</small>
                    </h3>
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="btn-group">
                            <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                <span>
                                    Actions </span>
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">
                                        Action </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Another action </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Something else here </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">
                                        Separated link </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">
                                Home </a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                Data Tables </a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                Editable Datatables </a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                    <tr>
                        <th>
                            UserID (NRIC/FIN)
                        </th>
                        <th>
                            Citizenship
                        </th>
                        <th>
                            Gender
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Course Title
                        </th>     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $current_sessionID = session_id();
                    $coach_id = "U2";
                    $tempCertificateRequests = CertificationRequestDAO::getAllCertificationRequestsBatchIDCoachID($current_sessionID,$coach_id);
                    foreach($tempCertificateRequests as $tempCR){
                        echo "<tr>";
                        echo "<td>" . $tempCR->getMember_id() . "</td>";
                        echo "<td>" . $tempCR->getCitizenship() . "</td>";
                        echo "<td>" . $tempCR->getGender() . "</td>";
                        echo "<td>" . $tempCR->getFirst_name() . "</td>";
                        echo "<td>" . $tempCR->getLast_name() . "</td>";
                        //Convert Course_id into course title 
                        $tempCourse = CourseDAO::getCourseByID($tempCR->getCourse_id());
                        echo "<td>" . $tempCourse->getTitle() . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <!-- END EXAMPLE TABLE PORTLET-->
            <!--************************START OF SUMBIT FORM**************************-->
            <h3>Submit new Certificate Request</h3>
            <?php 
            if(isset($_SESSION["system_message"])){
               $systemMessage = $_SESSION["system_message"];
               $systemMessageColour = $_SESSION["system_message_colour"];
               echo "<font color='".$systemMessageColour."'>".$systemMessage."</font>";
            }
            unset($_SESSION["system_message"]);
            unset($_SESSION["system_message_colour"]);
            
            //SET ALL FIELDS FOR ERROR BACK  
            $tempUserID = "";
            $tempCitizenship = "";
            $tempGender = "";
            $tempFirstName = "";
            $tempLastName = "";
            $tempEmail = "";
            $tempCourseID = "";
            
            if(isset($_SESSION["user_id"])){
                $tempUserID = $_SESSION["user_id"];
            }
            if(isset($_SESSION["citizenship"])){
                $tempCitizenship = $_SESSION["citizenship"];
            }
            if(isset($_SESSION["gender"])){
                $tempGender = $_SESSION["gender"];
            }
            if(isset($_SESSION["first_name"])){
                $tempFirstName = $_SESSION["first_name"];
            }
            if(isset($_SESSION["last_name"])){
                $tempLastName = $_SESSION["last_name"];
            }
            if(isset($_SESSION["email"])){
                $tempEmail = $_SESSION["email"];
            }
            if(isset($_SESSION["course_id"])){
                $tempCourseID = $_SESSION["course_id"];
            }
            
            
            
            ?>
            <form action="../../lib/controller/CertificateRequestController.php" method="get">
                <table>
                    <tr>
                        <td>UserId:</td>
                        <td>&nbsp<input type="text" name="user_id" value="<?php echo $tempUserID;?>"></td>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>Citizenship: </td>
                        <td>&nbsp<select name="citizenship">
                                <option value="">Country...</option>
                                <option value="AF" <?php if($tempCitizenship == "AF"){ echo "selected"; }?> >Afghanistan</option>
                                <option value="AL"<?php if($tempCitizenship == "AL"){ echo "selected"; }?>>Albania</option>
                                <option value="DZ" <?php if($tempCitizenship == "DZ"){ echo "selected"; }?> >Algeria</option>
                                <option value="AS"<?php if($tempCitizenship == "AS"){ echo "selected"; }?>>American Samoa</option>
                                <option value="AD"<?php if($tempCitizenship == "AD"){ echo "selected"; }?> >Andorra</option>
                                <option value="AG"<?php if($tempCitizenship == "AG"){ echo "selected"; }?>>Angola</option>
                                <option value="AI"<?php if($tempCitizenship == "AI"){ echo "selected"; }?>>Anguilla</option>
                                <option value="AG"<?php if($tempCitizenship == "AG"){ echo "selected"; }?>>Antigua &amp; Barbuda</option>
                                <option value="AR"<?php if($tempCitizenship == "AR"){ echo "selected"; }?>>Argentina</option>
                                <option value="AA"<?php if($tempCitizenship == "AA"){ echo "selected"; }?>>Armenia</option>
                                <option value="AW"<?php if($tempCitizenship == "AW"){ echo "selected"; }?>>Aruba</option>
                                <option value="AU"<?php if($tempCitizenship == "AF"){ echo "selected"; }?>>Australia</option>
                                <option value="AT"<?php if($tempCitizenship == "AT"){ echo "selected"; }?>>Austria</option>
                                <option value="AZ"<?php if($tempCitizenship == "AZ"){ echo "selected"; }?>>Azerbaijan</option>
                                <option value="BS"<?php if($tempCitizenship == "BS"){ echo "selected"; }?>>Bahamas</option>
                                <option value="BH"<?php if($tempCitizenship == "BH"){ echo "selected"; }?>>Bahrain</option>
                                <option value="BD"<?php if($tempCitizenship == "BD"){ echo "selected"; }?>>Bangladesh</option>
                                <option value="BB"<?php if($tempCitizenship == "BB"){ echo "selected"; }?>>Barbados</option>
                                <option value="BY" <?php if($tempCitizenship == "BY"){ echo "selected"; }?> >Belarus</option>
                                <option value="BE" <?php if($tempCitizenship == "BE"){ echo "selected"; }?> >Belgium</option>
                                <option value="BZ"<?php if($tempCitizenship == "BZ"){ echo "selected"; }?>>Belize</option>
                                <option value="BJ"<?php if($tempCitizenship == "BJ"){ echo "selected"; }?>>Benin</option>
                                <option value="BM"<?php if($tempCitizenship == "BM"){ echo "selected"; }?>>Bermuda</option>
                                <option value="BT"<?php if($tempCitizenship == "BT"){ echo "selected"; }?>>Bhutan</option>
                                <option value="BO"<?php if($tempCitizenship == "BO"){ echo "selected"; }?>>Bolivia</option>
                                <option value="BL"<?php if($tempCitizenship == "BL"){ echo "selected"; }?>>Bonaire</option>
                                <option value="BA"<?php if($tempCitizenship == "BA"){ echo "selected"; }?>>Bosnia &amp; Herzegovina</option>
                                <option value="BW"<?php if($tempCitizenship == "BW"){ echo "selected"; }?>>Botswana</option>
                                <option value="BR"<?php if($tempCitizenship == "BR"){ echo "selected"; }?>>Brazil</option>
                                <option value="BC"<?php if($tempCitizenship == "BC"){ echo "selected"; }?>>British Indian Ocean Ter</option>
                                <option value="BN"<?php if($tempCitizenship == "BN"){ echo "selected"; }?>>Brunei</option>
                                <option value="BG"<?php if($tempCitizenship == "BG"){ echo "selected"; }?>>Bulgaria</option>
                                <option value="BF"<?php if($tempCitizenship == "BF"){ echo "selected"; }?>>Burkina Faso</option>
                                <option value="BI"<?php if($tempCitizenship == "BI"){ echo "selected"; }?>>Burundi</option>
                                <option value="KH"<?php if($tempCitizenship == "KH"){ echo "selected"; }?>>Cambodia</option>
                                <option value="CM"<?php if($tempCitizenship == "CM"){ echo "selected"; }?>>Cameroon</option>
                                <option value="CA"<?php if($tempCitizenship == "CA"){ echo "selected"; }?>>Canada</option>
                                <option value="IC"<?php if($tempCitizenship == "IC"){ echo "selected"; }?>>Canary Islands</option>
                                <option value="CV"<?php if($tempCitizenship == "CV"){ echo "selected"; }?>>Cape Verde</option>
                                <option value="KY"<?php if($tempCitizenship == "KY"){ echo "selected"; }?>>Cayman Islands</option>
                                <option value="CF"<?php if($tempCitizenship == "CF"){ echo "selected"; }?>>Central African Republic</option>
                                <option value="TD"<?php if($tempCitizenship == "TD"){ echo "selected"; }?>>Chad</option>
                                <option value="CD"<?php if($tempCitizenship == "CD"){ echo "selected"; }?>>Channel Islands</option>
                                <option value="CL"<?php if($tempCitizenship == "CL"){ echo "selected"; }?>>Chile</option>
                                <option value="CN"<?php if($tempCitizenship == "CN"){ echo "selected"; }?>>China</option>
                                <option value="CI"<?php if($tempCitizenship == "CI"){ echo "selected"; }?>>Christmas Island</option>
                                <option value="CS"<?php if($tempCitizenship == "CS"){ echo "selected"; }?>>Cocos Island</option>
                                <option value="CO"<?php if($tempCitizenship == "CO"){ echo "selected"; }?>>Colombia</option>
                                <option value="CC"<?php if($tempCitizenship == "CC"){ echo "selected"; }?>>Comoros</option>
                                <option value="CG"<?php if($tempCitizenship == "CG"){ echo "selected"; }?>>Congo</option>
                                <option value="CK"<?php if($tempCitizenship == "CK"){ echo "selected"; }?>>Cook Islands</option>
                                <option value="CR"<?php if($tempCitizenship == "CR"){ echo "selected"; }?>>Costa Rica</option>
                                <option value="CT"<?php if($tempCitizenship == "CT"){ echo "selected"; }?>>Cote D'Ivoire</option>
                                <option value="HR"<?php if($tempCitizenship == "HR"){ echo "selected"; }?>>Croatia</option>
                                <option value="CU"<?php if($tempCitizenship == "CU"){ echo "selected"; }?>>Cuba</option>
                                <option value="CB"<?php if($tempCitizenship == "CB"){ echo "selected"; }?>>Curacao</option>
                                <option value="CY"<?php if($tempCitizenship == "CY"){ echo "selected"; }?>>Cyprus</option>
                                <option value="CZ"<?php if($tempCitizenship == "CZ"){ echo "selected"; }?>>Czech Republic</option>
                                <option value="DK"<?php if($tempCitizenship == "DK"){ echo "selected"; }?>>Denmark</option>
                                <option value="DJ"<?php if($tempCitizenship == "DJ"){ echo "selected"; }?>>Djibouti</option>
                                <option value="DM"<?php if($tempCitizenship == "DM"){ echo "selected"; }?>>Dominica</option>
                                <option value="DO"<?php if($tempCitizenship == "DO"){ echo "selected"; }?>>Dominican Republic</option>
                                <option value="TM"<?php if($tempCitizenship == "TM"){ echo "selected"; }?>>East Timor</option>
                                <option value="EC"<?php if($tempCitizenship == "EC"){ echo "selected"; }?>>Ecuador</option>
                                <option value="EG"<?php if($tempCitizenship == "EG"){ echo "selected"; }?>>Egypt</option>
                                <option value="SV"<?php if($tempCitizenship == "SV"){ echo "selected"; }?>>El Salvador</option>
                                <option value="GQ"<?php if($tempCitizenship == "GQ"){ echo "selected"; }?>>Equatorial Guinea</option>
                                <option value="ER"<?php if($tempCitizenship == "ER"){ echo "selected"; }?>>Eritrea</option>
                                <option value="EE"<?php if($tempCitizenship == "EE"){ echo "selected"; }?>>Estonia</option>
                                <option value="ET"<?php if($tempCitizenship == "ET"){ echo "selected"; }?>>Ethiopia</option>
                                <option value="FA"<?php if($tempCitizenship == "FA"){ echo "selected"; }?>>Falkland Islands</option>
                                <option value="FO"<?php if($tempCitizenship == "FO"){ echo "selected"; }?>>Faroe Islands</option>
                                <option value="FJ"<?php if($tempCitizenship == "FJ"){ echo "selected"; }?>>Fiji</option>
                                <option value="FI"<?php if($tempCitizenship == "FI"){ echo "selected"; }?>>Finland</option>
                                <option value="FR"<?php if($tempCitizenship == "FR"){ echo "selected"; }?>>France</option>
                                <option value="GF"<?php if($tempCitizenship == "GF"){ echo "selected"; }?>>French Guiana</option>
                                <option value="PF"<?php if($tempCitizenship == "PF"){ echo "selected"; }?>>French Polynesia</option>
                                <option value="FS"<?php if($tempCitizenship == "FS"){ echo "selected"; }?>>French Southern Ter</option>
                                <option value="GA"<?php if($tempCitizenship == "GA"){ echo "selected"; }?>>Gabon</option>
                                <option value="GM"<?php if($tempCitizenship == "GM"){ echo "selected"; }?>>Gambia</option>
                                <option value="GE"<?php if($tempCitizenship == "GE"){ echo "selected"; }?>>Georgia</option>
                                <option value="DE"<?php if($tempCitizenship == "DE"){ echo "selected"; }?>>Germany</option>
                                <option value="GH"<?php if($tempCitizenship == "GH"){ echo "selected"; }?>>Ghana</option>
                                <option value="GI"<?php if($tempCitizenship == "GI"){ echo "selected"; }?>>Gibraltar</option>
                                <option value="GB"<?php if($tempCitizenship == "GB"){ echo "selected"; }?>>Great Britain</option>
                                <option value="GR"<?php if($tempCitizenship == "GR"){ echo "selected"; }?>>Greece</option>
                                <option value="GL"<?php if($tempCitizenship == "GL"){ echo "selected"; }?>>Greenland</option>
                                <option value="GD"<?php if($tempCitizenship == "GD"){ echo "selected"; }?>>Grenada</option>
                                <option value="GP"<?php if($tempCitizenship == "GP"){ echo "selected"; }?>>Guadeloupe</option>
                                <option value="GU"<?php if($tempCitizenship == "GU"){ echo "selected"; }?>>Guam</option>
                                <option value="GT"<?php if($tempCitizenship == "GT"){ echo "selected"; }?>>Guatemala</option>
                                <option value="GN"<?php if($tempCitizenship == "GN"){ echo "selected"; }?>>Guinea</option>
                                <option value="GY"<?php if($tempCitizenship == "GY"){ echo "selected"; }?>>Guyana</option>
                                <option value="HT"<?php if($tempCitizenship == "HT"){ echo "selected"; }?>>Haiti</option>
                                <option value="HW"<?php if($tempCitizenship == "HW"){ echo "selected"; }?>>Hawaii</option>
                                <option value="HN"<?php if($tempCitizenship == "HN"){ echo "selected"; }?>>Honduras</option>
                                <option value="HK"<?php if($tempCitizenship == "HK"){ echo "selected"; }?>>Hong Kong</option>
                                <option value="HU"<?php if($tempCitizenship == "HU"){ echo "selected"; }?>>Hungary</option>
                                <option value="IS"<?php if($tempCitizenship == "IS"){ echo "selected"; }?>>Iceland</option>
                                <option value="IN"<?php if($tempCitizenship == "IN"){ echo "selected"; }?>>India</option>
                                <option value="ID"<?php if($tempCitizenship == "ID"){ echo "selected"; }?>>Indonesia</option>
                                <option value="IA"<?php if($tempCitizenship == "IA"){ echo "selected"; }?>>Iran</option>
                                <option value="IQ"<?php if($tempCitizenship == "IQ"){ echo "selected"; }?>>Iraq</option>
                                <option value="IR"<?php if($tempCitizenship == "IR"){ echo "selected"; }?>>Ireland</option>
                                <option value="IM"<?php if($tempCitizenship == "IM"){ echo "selected"; }?>>Isle of Man</option>
                                <option value="IL"<?php if($tempCitizenship == "IL"){ echo "selected"; }?>>Israel</option>
                                <option value="IT"<?php if($tempCitizenship == "IT"){ echo "selected"; }?>>Italy</option>
                                <option value="JM"<?php if($tempCitizenship == "JM"){ echo "selected"; }?>>Jamaica</option>
                                <option value="JP"<?php if($tempCitizenship == "JP"){ echo "selected"; }?>>Japan</option>
                                <option value="JO"<?php if($tempCitizenship == "JO"){ echo "selected"; }?>>Jordan</option>
                                <option value="KZ"<?php if($tempCitizenship == "KZ"){ echo "selected"; }?>>Kazakhstan</option>
                                <option value="KE"<?php if($tempCitizenship == "KE"){ echo "selected"; }?>>Kenya</option>
                                <option value="KI"<?php if($tempCitizenship == "KI"){ echo "selected"; }?>>Kiribati</option>
                                <option value="NK"<?php if($tempCitizenship == "NK"){ echo "selected"; }?>>Korea North</option>
                                <option value="KS"<?php if($tempCitizenship == "KS"){ echo "selected"; }?>>Korea South</option>
                                <option value="KW"<?php if($tempCitizenship == "KW"){ echo "selected"; }?>>Kuwait</option>
                                <option value="KG"<?php if($tempCitizenship == "KG"){ echo "selected"; }?>>Kyrgyzstan</option>
                                <option value="LA"<?php if($tempCitizenship == "LA"){ echo "selected"; }?>>Laos</option>
                                <option value="LV"<?php if($tempCitizenship == "LV"){ echo "selected"; }?>>Latvia</option>
                                <option value="LB"<?php if($tempCitizenship == "LB"){ echo "selected"; }?>>Lebanon</option>
                                <option value="LS"<?php if($tempCitizenship == "LS"){ echo "selected"; }?>>Lesotho</option>
                                <option value="LR"<?php if($tempCitizenship == "LR"){ echo "selected"; }?>>Liberia</option>
                                <option value="LY"<?php if($tempCitizenship == "LY"){ echo "selected"; }?>>Libya</option>
                                <option value="LI"<?php if($tempCitizenship == "LI"){ echo "selected"; }?>>Liechtenstein</option>
                                <option value="LT"<?php if($tempCitizenship == "LT"){ echo "selected"; }?>>Lithuania</option>
                                <option value="MO"<?php if($tempCitizenship == "MO"){ echo "selected"; }?>>Macau</option>
                                <option value="MK"<?php if($tempCitizenship == "MK"){ echo "selected"; }?>>Macedonia</option>
                                <option value="MG"<?php if($tempCitizenship == "MG"){ echo "selected"; }?>>Madagascar</option>
                                <option value="MY"<?php if($tempCitizenship == "MY"){ echo "selected"; }?>>Malaysia</option>
                                <option value="MW"<?php if($tempCitizenship == "MW"){ echo "selected"; }?>>Malawi</option>
                                <option value="MV"<?php if($tempCitizenship == "MV"){ echo "selected"; }?>>Maldives</option>
                                <option value="ML"<?php if($tempCitizenship == "ML"){ echo "selected"; }?>>Mali</option>
                                <option value="MT"<?php if($tempCitizenship == "MT"){ echo "selected"; }?>>Malta</option>
                                <option value="MH"<?php if($tempCitizenship == "MH"){ echo "selected"; }?>>Marshall Islands</option>
                                <option value="MQ"<?php if($tempCitizenship == "MQ"){ echo "selected"; }?>>Martinique</option>
                                <option value="MR"<?php if($tempCitizenship == "MR"){ echo "selected"; }?>>Mauritania</option>
                                <option value="MU"<?php if($tempCitizenship == "MU"){ echo "selected"; }?>>Mauritius</option>
                                <option value="ME"<?php if($tempCitizenship == "ME"){ echo "selected"; }?>>Mayotte</option>
                                <option value="MX"<?php if($tempCitizenship == "MX"){ echo "selected"; }?>>Mexico</option>
                                <option value="MI"<?php if($tempCitizenship == "MI"){ echo "selected"; }?>>Midway Islands</option>
                                <option value="MD"<?php if($tempCitizenship == "MD"){ echo "selected"; }?>>Moldova</option>
                                <option value="MC"<?php if($tempCitizenship == "MC"){ echo "selected"; }?>>Monaco</option>
                                <option value="MN"<?php if($tempCitizenship == "MN"){ echo "selected"; }?>>Mongolia</option>
                                <option value="MS"<?php if($tempCitizenship == "MS"){ echo "selected"; }?>>Montserrat</option>
                                <option value="MA"<?php if($tempCitizenship == "MA"){ echo "selected"; }?>>Morocco</option>
                                <option value="MZ"<?php if($tempCitizenship == "MZ"){ echo "selected"; }?>>Mozambique</option>
                                <option value="MM"<?php if($tempCitizenship == "MM"){ echo "selected"; }?>>Myanmar</option>
                                <option value="NA"<?php if($tempCitizenship == "NA"){ echo "selected"; }?>>Nambia</option>
                                <option value="NU"<?php if($tempCitizenship == "NU"){ echo "selected"; }?>>Nauru</option>
                                <option value="NP"<?php if($tempCitizenship == "NP"){ echo "selected"; }?>>Nepal</option>
                                <option value="AN"<?php if($tempCitizenship == "AN"){ echo "selected"; }?>>Netherland Antilles</option>
                                <option value="NL"<?php if($tempCitizenship == "NL"){ echo "selected"; }?>>Netherlands (Holland, Europe)</option>
                                <option value="NV"<?php if($tempCitizenship == "NV"){ echo "selected"; }?>>Nevis</option>
                                <option value="NC"<?php if($tempCitizenship == "NC"){ echo "selected"; }?>>New Caledonia</option>
                                <option value="NZ"<?php if($tempCitizenship == "NZ"){ echo "selected"; }?>>New Zealand</option>
                                <option value="NI"<?php if($tempCitizenship == "NI"){ echo "selected"; }?>>Nicaragua</option>
                                <option value="NE"<?php if($tempCitizenship == "NE"){ echo "selected"; }?>>Niger</option>
                                <option value="NG"<?php if($tempCitizenship == "NG"){ echo "selected"; }?>>Nigeria</option>
                                <option value="NW"<?php if($tempCitizenship == "NW"){ echo "selected"; }?>>Niue</option>
                                <option value="NF"<?php if($tempCitizenship == "NF"){ echo "selected"; }?>>Norfolk Island</option>
                                <option value="NO"<?php if($tempCitizenship == "NO"){ echo "selected"; }?>>Norway</option>
                                <option value="OM"<?php if($tempCitizenship == "OM"){ echo "selected"; }?>>Oman</option>
                                <option value="PK"<?php if($tempCitizenship == "PK"){ echo "selected"; }?>>Pakistan</option>
                                <option value="PW"<?php if($tempCitizenship == "PW"){ echo "selected"; }?>>Palau Island</option>
                                <option value="PS"<?php if($tempCitizenship == "PS"){ echo "selected"; }?>>Palestine</option>
                                <option value="PA"<?php if($tempCitizenship == "PA"){ echo "selected"; }?>>Panama</option>
                                <option value="PG"<?php if($tempCitizenship == "PG"){ echo "selected"; }?>>Papua New Guinea</option>
                                <option value="PY"<?php if($tempCitizenship == "PY"){ echo "selected"; }?>>Paraguay</option>
                                <option value="PE"<?php if($tempCitizenship == "PE"){ echo "selected"; }?>>Peru</option>
                                <option value="PH"<?php if($tempCitizenship == "PH"){ echo "selected"; }?>>Philippines</option>
                                <option value="PO"<?php if($tempCitizenship == "PO"){ echo "selected"; }?>>Pitcairn Island</option>
                                <option value="PL"<?php if($tempCitizenship == "PL"){ echo "selected"; }?>>Poland</option>
                                <option value="PT"<?php if($tempCitizenship == "PT"){ echo "selected"; }?>>Portugal</option>
                                <option value="PR"<?php if($tempCitizenship == "PR"){ echo "selected"; }?>>Puerto Rico</option>
                                <option value="QA"<?php if($tempCitizenship == "QA"){ echo "selected"; }?>>Qatar</option>
                                <option value="ME"<?php if($tempCitizenship == "ME"){ echo "selected"; }?>>Republic of Montenegro</option>
                                <option value="RS"<?php if($tempCitizenship == "RS"){ echo "selected"; }?>>Republic of Serbia</option>
                                <option value="RE"<?php if($tempCitizenship == "RE"){ echo "selected"; }?>>Reunion</option>
                                <option value="RO"<?php if($tempCitizenship == "RO"){ echo "selected"; }?>>Romania</option>
                                <option value="RU"<?php if($tempCitizenship == "RU"){ echo "selected"; }?>>Russia</option>
                                <option value="RW"<?php if($tempCitizenship == "RW"){ echo "selected"; }?>>Rwanda</option>
                                <option value="NT"<?php if($tempCitizenship == "NT"){ echo "selected"; }?>>St Barthelemy</option>
                                <option value="EU"<?php if($tempCitizenship == "EU"){ echo "selected"; }?>>St Eustatius</option>
                                <option value="HE"<?php if($tempCitizenship == "HE"){ echo "selected"; }?>>St Helena</option>
                                <option value="KN"<?php if($tempCitizenship == "KN"){ echo "selected"; }?>>St Kitts-Nevis</option>
                                <option value="LC"<?php if($tempCitizenship == "LC"){ echo "selected"; }?>>St Lucia</option>
                                <option value="MB"<?php if($tempCitizenship == "MB"){ echo "selected"; }?>>St Maarten</option>
                                <option value="PM"<?php if($tempCitizenship == "PM"){ echo "selected"; }?>>St Pierre &amp; Miquelon</option>
                                <option value="VC"<?php if($tempCitizenship == "VC"){ echo "selected"; }?>>St Vincent &amp; Grenadines</option>
                                <option value="SP"<?php if($tempCitizenship == "SP"){ echo "selected"; }?>>Saipan</option>
                                <option value="SO"<?php if($tempCitizenship == "SO"){ echo "selected"; }?>>Samoa</option>
                                <option value="AS"<?php if($tempCitizenship == "AS"){ echo "selected"; }?>>Samoa American</option>
                                <option value="SM"<?php if($tempCitizenship == "SM"){ echo "selected"; }?>>San Marino</option>
                                <option value="ST"<?php if($tempCitizenship == "ST"){ echo "selected"; }?>>Sao Tome &amp; Principe</option>
                                <option value="SA"<?php if($tempCitizenship == "SA"){ echo "selected"; }?>>Saudi Arabia</option>
                                <option value="SN"<?php if($tempCitizenship == "SN"){ echo "selected"; }?>>Senegal</option>
                                <option value="RS"<?php if($tempCitizenship == "RS"){ echo "selected"; }?>>Serbia</option>
                                <option value="SC"<?php if($tempCitizenship == "SC"){ echo "selected"; }?>>Seychelles</option>
                                <option value="SL"<?php if($tempCitizenship == "SL"){ echo "selected"; }?>>Sierra Leone</option>
                                <option value="SG"<?php if($tempCitizenship == "SG"){ echo "selected"; }?>>Singapore</option>
                                <option value="SK"<?php if($tempCitizenship == "SK"){ echo "selected"; }?>>Slovakia</option>
                                <option value="SI"<?php if($tempCitizenship == "SI"){ echo "selected"; }?>>Slovenia</option>
                                <option value="SB"<?php if($tempCitizenship == "SB"){ echo "selected"; }?>>Solomon Islands</option>
                                <option value="OI"<?php if($tempCitizenship == "OI"){ echo "selected"; }?>>Somalia</option>
                                <option value="ZA"<?php if($tempCitizenship == "ZA"){ echo "selected"; }?>>South Africa</option>
                                <option value="ES"<?php if($tempCitizenship == "ES"){ echo "selected"; }?>>Spain</option>
                                <option value="LK"<?php if($tempCitizenship == "LK"){ echo "selected"; }?>>Sri Lanka</option>
                                <option value="SD"<?php if($tempCitizenship == "SD"){ echo "selected"; }?>>Sudan</option>
                                <option value="SR"<?php if($tempCitizenship == "SR"){ echo "selected"; }?>>Suriname</option>
                                <option value="SZ"<?php if($tempCitizenship == "SZ"){ echo "selected"; }?>>Swaziland</option>
                                <option value="SE"<?php if($tempCitizenship == "SE"){ echo "selected"; }?>>Sweden</option>
                                <option value="CH"<?php if($tempCitizenship == "CH"){ echo "selected"; }?>>Switzerland</option>
                                <option value="SY"<?php if($tempCitizenship == "SY"){ echo "selected"; }?>>Syria</option>
                                <option value="TA"<?php if($tempCitizenship == "TA"){ echo "selected"; }?>>Tahiti</option>
                                <option value="TW"<?php if($tempCitizenship == "TW"){ echo "selected"; }?>>Taiwan</option>
                                <option value="TJ"<?php if($tempCitizenship == "TJ"){ echo "selected"; }?>>Tajikistan</option>
                                <option value="TZ"<?php if($tempCitizenship == "TZ"){ echo "selected"; }?>>Tanzania</option>
                                <option value="TH"<?php if($tempCitizenship == "TH"){ echo "selected"; }?>>Thailand</option>
                                <option value="TG"<?php if($tempCitizenship == "TG"){ echo "selected"; }?>>Togo</option>
                                <option value="TK"<?php if($tempCitizenship == "TK"){ echo "selected"; }?>>Tokelau</option>
                                <option value="TO"<?php if($tempCitizenship == "TO"){ echo "selected"; }?>>Tonga</option>
                                <option value="TT"<?php if($tempCitizenship == "TT"){ echo "selected"; }?>>Trinidad &amp; Tobago</option>
                                <option value="TN"<?php if($tempCitizenship == "TN"){ echo "selected"; }?>>Tunisia</option>
                                <option value="TR"<?php if($tempCitizenship == "TR"){ echo "selected"; }?>>Turkey</option>
                                <option value="TU"<?php if($tempCitizenship == "TU"){ echo "selected"; }?>>Turkmenistan</option>
                                <option value="TC"<?php if($tempCitizenship == "TC"){ echo "selected"; }?>>Turks &amp; Caicos Is</option>
                                <option value="TV"<?php if($tempCitizenship == "TV"){ echo "selected"; }?>>Tuvalu</option>
                                <option value="UG"<?php if($tempCitizenship == "UG"){ echo "selected"; }?>>Uganda</option>
                                <option value="UA"<?php if($tempCitizenship == "UA"){ echo "selected"; }?>>Ukraine</option>
                                <option value="AE"<?php if($tempCitizenship == "AE"){ echo "selected"; }?>>United Arab Emirates</option>
                                <option value="GB"<?php if($tempCitizenship == "GB"){ echo "selected"; }?>>United Kingdom</option>
                                <option value="US"<?php if($tempCitizenship == "US"){ echo "selected"; }?>>United States of America</option>
                                <option value="UY"<?php if($tempCitizenship == "UY"){ echo "selected"; }?>>Uruguay</option>
                                <option value="UZ"<?php if($tempCitizenship == "UZ"){ echo "selected"; }?>>Uzbekistan</option>
                                <option value="VU"<?php if($tempCitizenship == "VU"){ echo "selected"; }?>>Vanuatu</option>
                                <option value="VS"<?php if($tempCitizenship == "VS"){ echo "selected"; }?>>Vatican City State</option>
                                <option value="VE"<?php if($tempCitizenship == "VE"){ echo "selected"; }?>>Venezuela</option>
                                <option value="VN"<?php if($tempCitizenship == "VN"){ echo "selected"; }?>>Vietnam</option>
                                <option value="VB"<?php if($tempCitizenship == "VB"){ echo "selected"; }?>>Virgin Islands (Brit)</option>
                                <option value="VA"<?php if($tempCitizenship == "VA"){ echo "selected"; }?>>Virgin Islands (USA)</option>
                                <option value="WK"<?php if($tempCitizenship == "WK"){ echo "selected"; }?>>Wake Island</option>
                                <option value="WF"<?php if($tempCitizenship == "WF"){ echo "selected"; }?>>Wallis &amp; Futana Is</option>
                                <option value="YE"<?php if($tempCitizenship == "YE"){ echo "selected"; }?>>Yemen</option>
                                <option value="ZR"<?php if($tempCitizenship == "ZR"){ echo "selected"; }?>>Zaire</option>
                                <option value="ZM"<?php if($tempCitizenship == "ZM"){ echo "selected"; }?>>Zambia</option>
                                <option value="ZW"<?php if($tempCitizenship == "ZW"){ echo "selected"; }?>>Zimbabwe</option>
                            </select>
                        </td>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>Gender</td>
                        <td>&nbsp<select name="gender">
                                <option value="M"<?php if($tempGender == "M"){ echo "selected"; }?>>Male</option>
                                <option value="F"<?php if($tempGender == "F"){ echo "selected"; }?>>Female</option>
                            </select>
                    </tr>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>First Name:</td>
                        <td>&nbsp<input type="text" name="first_name" value="<?php echo $tempFirstName;?>" ></td>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>Last Name:</td>
                        <td>&nbsp<input type="text" name="last_name" value="<?php echo $tempLastName;?>" ></td>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>Email:</td>
                        <td>&nbsp<input type="text" name="email" value="<?php echo $tempEmail;?>" ></td>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td>Course ID:</td>
                        <td>&nbsp
                            <select name="course_id">
                            <?php
                            $tempCourseList = CourseDAO::getAllAvailableCourses();
                            foreach($tempCourseList as $tempCourse){
                                
                                if($tempCourse->getCourse_id()==$tempCourseID){
                                     echo "<option value='" . $tempCourse->getCourse_id() . "' selected>" . $tempCourse->getTitle() . "</option>";
                                }else{
                                echo "<option value='" . $tempCourse->getCourse_id() . "'>" . $tempCourse->getTitle() . "</option>";
                                }
                                
                            }
                            ?>
                        </select>
                        </td>
                    </tr>
                    <tr style="background-color: transparent;"><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <td><input type="submit" value="Register"></td>
                    </tr>


                </table>
            </form>
            <!-- END PAGE CONTENT -->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="page-footer-tools">
        <span class="go-top">
            <i class="fa fa-angle-up"></i>
        </span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo URL ?>/theme/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo URL ?>/theme/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL ?>/theme/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo URL ?>/theme/assets/global/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL ?>/theme/assets/global/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL ?>/theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo URL ?>/theme/assets/admin/pages/scripts/table-editable.js"></script>
<script>
    jQuery(document).ready(function() {       
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        TableEditable.init();
    });
</script>
</body>
<!-- END BODY -->
</html>