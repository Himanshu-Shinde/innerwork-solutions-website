<?php
include_once 'checkAdminSession.php';
include "../DbConnection/DbConnectionHelper.php";
include_once 'Utils.php';
$utils = new Utils();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InnerWork|Admin|Dasboard</title>
    <?php include 'CommonFiles.php'; ?>

    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/menu.js"></script>

</head>
<body>
<style>
@media (min-width: 1200px){
.container {
    width: 1160px;
}
}
@media (max-width: 990px){
  .dashBox{
    width:50%;
  }
  .view{
    width:50%;
    float:none;
  }
  span.circle{
    float:none;
  }

}

.bg5{background-color:#0073e6;}
.bg6{background-color:#00cc99;}
.bg7{background-color: #ff00bf;}
.bg8{background-color:#ff4d4d;}
.col5{color:#0073e6;}
.col6{color:#00cc99;}
.col7{color: #ff00bf;}
.col8{color:#ff4d4d;}


</style>
<div id="main">
    <?php include 'Header.php'; ?>

    <div id="main">
        <div id="mySidenav" class="sidenav">
            <button type="button" id="hideMenu" onclick="closeNav()"><i class="fa fa-close"></i> </button>
            <ul>
                <li><a href="dashboard" id="dashboardPage"><span>Dashboard</span></a></li>
                <li><a href="newsletterSubscriptions" id="newsletterPage"> <span>Contact</span></a></li>
                <li><a href="jobseeker" id="enquiriesPage"><span>JobSeeker</span></a></li>
                  <li><a href="allinterns" id="enquiriesPage"><span>Interns</span></a></li>
                <li><a href="allagency.php" id="agency"> <span>Agency</span></a></li>
                <li><a href="allfreelancer.php" id="freelancer"> <span>Freelancer</span></a></li>
                <li><a href="security" id="securityPage"> <span>Security</span></a></li>
                <li><a href="../login"><span>Log Out</span></a></li>
            </ul>
        </div>
        <section id="banner">
            <div class="container-fluid">
                <div class="col-md-4">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="floatRight">
                        <a href="dashboard">Home</a>
                        <i class="fa fa-angle-double-right"></i>
                        <span>Dashboard</span>
                    </p>
                </div>
            </div>
        </section>

        <section id="dash" >
            <div class="container" style="z-index:-1;">
                <div class="col-md-3 col-xs-12 ">
                    <a href="allJobSeeker">
                        <div class="col-md-12 col-xs-12 dashBox bg3">
                            <div class="col-md-3 col-xs-3 padNone">
                                <img src="img/users.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9 padNone">
                                <h1><?php echo $utils->getTotalJobseekerCnt($conn); ?></h1>
                                <h3>Job Seeker</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor3">
                            <div class="col-md-10 padNone">
                                <p class="col3">View Details</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor3"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 ">
                    <a href="allJobPost">
                        <div class="col-md-12 col-xs-12 dashBox bg1">
                            <div class="col-md-3 col-xs-3 ">
                                <img src="img/reports.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalJobpostCnt($conn); ?></h1>
                                <h3>Job Post</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor1">
                            <div class="col-md-10 padNone">
                                <p class="col1">View Details</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor1"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 ">
                    <a href="viewAllBlogs">
                        <div class="col-md-12 col-xs-12 dashBox bg2">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/assistance.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalBlogsCnt($conn); ?></h1>
                                <h3>All Blogs</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor2">
                            <div class="col-md-10 padNone">
                                <p class="col2">Blog</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor2"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <a href="allinterns">
                        <div class="col-md-12 col-xs-12 dashBox bg4">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/reports.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalinternsCnt($conn); ?></h1>
                                <h3>Internship Applicants</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor4">
                            <div class="col-md-10 padNone">
                                <p class="col4">Interns</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor4"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <a href="allfreelancer">
                        <div class="col-md-12 col-xs-12 dashBox bg5">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/assistance.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalfreelancerCnt($conn); ?></h1>
                                <h3>Freelancer</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor1">
                            <div class="col-md-10 padNone">
                                <p class="col5">Freelancer</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor1"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <a href="allagency">
                        <div class="col-md-12 col-xs-12 dashBox bg6">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/assistance.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalagencyCnt($conn); ?></h1>
                                <h3>Agency</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor2">
                            <div class="col-md-10 padNone">
                                <p class="col6">Agency</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor2"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <a href="allcollege">
                        <div class="col-md-12 col-xs-12 dashBox bg7">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/users.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalcollegeCnt($conn); ?></h1>
                                <h3>College</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor3">
                            <div class="col-md-10 padNone">
                                <p class="col7">College</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor3"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <a href="allbusiness">
                        <div class="col-md-12 col-xs-12 dashBox bg8">
                            <div class="col-md-3 col-xs-3">
                                <img src="img/orders.png" alt="">
                            </div>
                            <div class="col-md-9 col-xs-9">
                                <h1><?php echo $utils->getTotalbusinessCnt($conn); ?></h1>
                                <h3>Business Enquiry</h3>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 view bor4">
                            <div class="col-md-10 padNone">
                                <p class="col8">Business Enquiry</p>
                            </div>
                            <div class="col-md-2 padNone">
                                <span class="circle bor4"></span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </div>
</div>
</body>
</html>
