
<?php require("../controller/libraryController.php");
      $object= new libraryController();?>
      <!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from bionick.kwst.net/site/contact  by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2015 04:35:53 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Contacts - BioNick - Responsive Personal  Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <?php $object->addSection('../sections/css.php');?>
    </head>
    <body>
        <!--================= loader start ================-->
        <div class="loader-holder">
            <div class="loader-inner loader-vis">
                <div class="loader"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <?php $object->addSection('../sections/header.php');?>
            <!-- header  end -->
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== content-holder ===============-->
                <div class="content-holder scale-bg2">
                    <!--=============== navigation ===============-->
                    <?php $object->addSection('../sections/nav.php');?>
                    <!-- navigation  end -->
                    <!--=============== fixed-column ===============-->
                    <div class="fixed-column">
                        <div class="bg-wrapper">
                            <div class="bg" style="background-image:url(../images/bg/long/9.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="bg-title"><span>Contact Us </span></div>
                        </div>
                    </div>
                    <!-- fixed-column end -->
                    <!--=============== wrapper-inner  ===============-->
                    <div class="wrapper-inner">
                        <!--=============== content ===============-->
                        <div class="content">
                            <!--=============== section contacts ===============-->
                            <section>
                                <div class="container">
                                    <div class="section-title">
                                        <div class="sect-subtitle" data-top-bottom="transform: translateY(-300px);" data-bottom-top="transform: translateY(300px);"><span>Contacts</span></div>
                                        <h3>Get in touch </h3>
                                        <h2>Contacts</h2>
                                        <div class="st-separator"></div>
                                    </div>
									<div class="row">
									<div class="col-md-12">	
                                    <div class="align-text">
                                    </div>
                                    <!-- contact info -->
                                    <div class="contact-info">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-phone"></i> +2348137990656</a></li>
                                            <li><a href="#"><i class="fa fa-motorcycle"></i>Obafemi Awolowo University, Ile-Ife.</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i> info@choicepoll.com</a></li>
                                        </ul>
                                    </div>
                                    <!-- contact form -->


                                    <script type="text/javascript">
                                                 function validateForm(){
                                                var name=document.forms['contactForm']['name'];
                                                var email=document.forms['contactForm']['email'];
                                                var comment=document.forms['contactForm']['comment'];
                                                var nameerror=document.getElementById('nameerror');
                                                var commenterror=document.getElementById('commenterror');
                                                var mailerror=document.getElementById('mailerror');
                                                var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                                
                                               // var output=null;
                                               

                                                if(name.value=="")
                                                {
                                                   // window.alert("Name must not be empty");
                                                    output="*Name must not be empty";
                                                    name.focus();
                                                    nameerror.innerHTML=output;
                                                    return false;
                                                

                                                }
                                                 if(comment.value=="")
                                                {
                                                   // window.alert("Name must not be empty");
                                                    output="*Commnet must not be empty";
                                                    comment.focus();
                                                    commenterror.innerHTML=output;
                                                    return false;
                                                
                                                

                                                }

                                                if(!email.value.match(mailformat))
                                                {
                                                    output="* Invalid email format";
                                                    email.focus();
                                                    nameerror.innerHTML=null;commenterror.innerHTML=null;emailerror.innerHTML=output;
                                                    return false;

                                                }

                                            

                                            }
                                    </script>


                                    <div id="contact-form">
                                     <h3 class="text-title" >Fill a form</h3>
                                        <div id="message" style="color:green; text-transform:uppercase; float:left;">
                                            <?php if(isset($_GET['status'])){echo base64_decode($_GET['status']);}?>
                                        </div>
                                        <form  method="post" action="../controller/contactController" onsubmit="return validateForm()" 
                                        name="contactForm" id="contactForm">
                                            <div id="nameerror" style="color:red;float:left;"></div>
                                            <input name="name" type="text" id="name"  class="inputForm2" placeholder="Name" >
                                            <div id="emailerror" style="color:red;float:left;"></div>
                                            <input name="email" type="text" id="email"  placeholder="E-mail" >
                                            <div id="commenterror" style="color:red;float:left;"></div>
                                            <textarea name="comment"  id="comments"  placeholder="message"></textarea>

                                            <input type="submit" value="Submit" id="submit" placeholder="Send Message" />
                                        </form>
                                    </div>
                                </div>
							      </div>
                                </div>			
                            </section>
                            <!-- section end -->
                        </div>
                        <!-- content end  -->
                    </div>
                    <!-- wrapper-inner end  -->
                    <!-- ================footer ==================== -->
                   <?php $object->addSection('../sections/footer.php');?>
                    <!-- footer end -->
                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <?php $object->addSection('../sections/scripts.php');?>
    </body>

<!-- Mirrored from bionick.kwst.net/site/contact  by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2015 04:36:11 GMT -->
</html>