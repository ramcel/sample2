<?php
$qinfo = $con->query("select * from teacher where fid = '$fid'");
$rinfo = $qinfo->fetch_array();

$fbname = $rinfo['fdname'];
$fbimg = $rinfo['fdimg'];
$fbcover = $rinfo['fdcover'];

if($rinfo['setprofile'] == 'no')
{
    header("location:setprofile.php");
}
?>

<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->

<body  id="body">
<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">

        <li class="sidebar-brand">

        </li>

        <li><a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li><a href="profile.php"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
        <li><a href="chat.php"><i class="glyphicon glyphicon-envelope"></i> Message</a></li>
        <li><a href="connections.php"><i class="glyphicon glyphicon-resize-small"></i> Connections &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="badge connectionrequest">0</span></a></li>
        <li><a href="recommendations.php"><i class="glyphicon glyphicon-certificate"></i> Recommendations</a></li>
        <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>

    </ul>
</div>
<!-- /#sidebar-wrapper -->


<div class="row navbar-fixed-top" style="background: #337AB7;padding: 10px;margin-right: 0px;">

    <div class="col-xs-2 col-md-1 col-lg-1 ">
        <button style="background:#337AB7;border-color:transparent;color:white;outline: none;" class="btn btn-default" id="menu-toggle"><span class="menu glyphicon glyphicon-menu-hamburger"></span></button>
    </div>

    <div class="col-xs-10 col-md-11 col-lg-11 ">
        <input type="text" class="form-control" id="searchbox" placeholder="Search Co-Teacher Here. . . " style="border-radius: 0px;padding: 10px;border-radius:5px;" />
        <div id="display" class="col-md-12 col-xs-12"></div>
    </div>
</div>

<input type="hidden" id="fbimg" value="<?php echo $fbimg ?>">
<input type="hidden" id="fbname" value="<?php echo $fbname ?>">
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript" src="js/side-nav.js"></script>

<style type="text/css">

#display
{
    z-index: 5;
    position: absolute;
    display:none;
    border-left:solid 1px #dedede;
    border-right:solid 1px #dedede;
    border-bottom:solid 1px #dedede;
    overflow:hidden;
    background: #ccc;
    padding-left: 0px;
    padding-right: 2px;
    margin-left: -1px;
}
.display_box
{
    padding:10px;
    border-top:solid 1px #dedede;
    font-size:20px;
    height:60px;
    background:white;
}

.display_box:hover
{
    background:#3b5998;
    color:#FFFFFF;
}
#shade
{
    background-color:#00CCFF;
}

.badge
{
    display: inline-block;
    min-width: 10px;
    padding: 10px 10px 10px 0px;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    color: #337AB7;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #F2FFFF;
    border-radius: 10px;
    padding-left: 0px;
    padding-top: 5px;
    padding-bottom: 5px;
}
</style>
</body>
