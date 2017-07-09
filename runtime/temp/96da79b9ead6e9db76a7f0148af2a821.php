<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:89:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\category\index.html";i:1499590888;s:81:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\layout.html";i:1499591442;s:86:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\common\head.html";i:1499493293;s:88:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\common\navbar.html";i:1499477768;s:89:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\common\sidebar.html";i:1499593192;s:88:"D:\wamp64\www\thinkphp5-study-line\public/../application/backend\view\common\footer.html";i:1499444176;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo \think\Config::get('app_title'); ?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->
　　<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
　　<link rel="shortcut icon" href="__STATIC__/favicon.ico" type="image/x-icon" />

    <link href="__CSS__/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__CSS__/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="__CSS__/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="__CSS__/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="__CSS__/ace.min.css" />
    <link rel="stylesheet" href="__CSS__/ace-rtl.min.css" />
    <link rel="stylesheet" href="__CSS__/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" href="__CSS__/ace-ie.min.css" />-->
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="__JS__/ace-extra.min.js"></script>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='__JS__/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="__JS__/html5shiv.js"></script>
    <script src="__JS__/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    <?php echo \think\Config::get('app_title'); ?>
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            4 Tasks to complete
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Software Update</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Hardware Upgrade</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Unit Testing</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Bug Fixes</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See tasks with details
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8 Notifications
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                Bob just signed up as an editor ...
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5 Messages
                        </li>

                        <li>
                            <a href="#">
                                <img src="__STATIC__/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="__STATIC__/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="__STATIC__/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="__STATIC__/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
									<small>欢迎,</small>
									<?php echo \think\Session::get('admin.username'); ?>
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url('backend/entry/modpass'); ?>">
                                <i class="icon-lock"></i>
                                密码修改
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url('Home/Member/memberCenter'); ?>">
                                <i class="icon-user"></i>
                                个人信息
                            </a>
                        </li>


                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo url('backend/login/logout'); ?>">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="https://www.kancloud.cn/manual/thinkphp5/118003" target="_blank">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 在线开发手册 </span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('backend/category/index'); ?>">
                <i class="icon-text-width"></i>
                <span class="menu-text"> 栏目分类 </span>
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> 支付 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo url('frontend/ali_pay/show',['id'=>3]); ?>" target="_blank">
                        <i class="icon-double-angle-right"></i>
                        支付宝即时到账
                    </a>
                </li>

                <li>
                    <a href="buttons.html">
                        <i class="icon-double-angle-right"></i>
                        Buttons &amp; Icons
                    </a>
                </li>

                <li>
                    <a href="treeview.html">
                        <i class="icon-double-angle-right"></i>
                        Treeview
                    </a>
                </li>

                <li>
                    <a href="jquery-ui.html">
                        <i class="icon-double-angle-right"></i>
                        jQuery UI
                    </a>
                </li>

                <li>
                    <a href="nestable-list.html">
                        <i class="icon-double-angle-right"></i>
                        Nestable Lists
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-double-angle-right"></i>

                        Three Level Menu
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <i class="icon-leaf"></i>
                                Item #1
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-pencil"></i>

                                4th level
                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="icon-plus"></i>
                                        Add Product
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-eye-open"></i>
                                        View Products
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span class="menu-text"> Tables </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="tables.html">
                        <i class="icon-double-angle-right"></i>
                        Simple &amp; Dynamic
                    </a>
                </li>

                <li>
                    <a href="jqgrid.html">
                        <i class="icon-double-angle-right"></i>
                        jqGrid plugin
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-edit"></i>
                <span class="menu-text"> Forms </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="form-elements.html">
                        <i class="icon-double-angle-right"></i>
                        Form Elements
                    </a>
                </li>

                <li>
                    <a href="form-wizard.html">
                        <i class="icon-double-angle-right"></i>
                        Wizard &amp; Validation
                    </a>
                </li>

                <li>
                    <a href="wysiwyg.html">
                        <i class="icon-double-angle-right"></i>
                        Wysiwyg &amp; Markdown
                    </a>
                </li>

                <li>
                    <a href="dropzone.html">
                        <i class="icon-double-angle-right"></i>
                        Dropzone File Upload
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="widgets.html">
                <i class="icon-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>
        </li>

        <li>
            <a href="calendar.html">
                <i class="icon-calendar"></i>

                <span class="menu-text">
									Calendar
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
            </a>
        </li>

        <li>
            <a href="gallery.html">
                <i class="icon-picture"></i>
                <span class="menu-text"> Gallery </span>
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-tag"></i>
                <span class="menu-text"> More Pages </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="profile.html">
                        <i class="icon-double-angle-right"></i>
                        User Profile
                    </a>
                </li>

                <li>
                    <a href="inbox.html">
                        <i class="icon-double-angle-right"></i>
                        Inbox
                    </a>
                </li>

                <li>
                    <a href="pricing.html">
                        <i class="icon-double-angle-right"></i>
                        Pricing Tables
                    </a>
                </li>

                <li>
                    <a href="invoice.html">
                        <i class="icon-double-angle-right"></i>
                        Invoice
                    </a>
                </li>

                <li>
                    <a href="timeline.html">
                        <i class="icon-double-angle-right"></i>
                        Timeline
                    </a>
                </li>

                <li>
                    <a href="login.html">
                        <i class="icon-double-angle-right"></i>
                        Login &amp; Register
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-file-alt"></i>

                <span class="menu-text">
									Other Pages
									<span class="badge badge-primary ">5</span>
								</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="faq.html">
                        <i class="icon-double-angle-right"></i>
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="error-404.html">
                        <i class="icon-double-angle-right"></i>
                        Error 404
                    </a>
                </li>

                <li>
                    <a href="error-500.html">
                        <i class="icon-double-angle-right"></i>
                        Error 500
                    </a>
                </li>

                <li>
                    <a href="grid.html">
                        <i class="icon-double-angle-right"></i>
                        Grid
                    </a>
                </li>

                <li>
                    <a href="blank.html">
                        <i class="icon-double-angle-right"></i>
                        Blank Page
                    </a>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="<?php echo url('backend/index/index'); ?>">当前位置</a>
                    </li>

                    <li class="active"><?php echo (isset($sub_title) && ($sub_title !== '')?$sub_title:"当前位置"); ?></li>
                </ul><!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- #nav-search -->
            </div>

            <div class="page-content">
                <div class="row">
    <div class="col-sm-12">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#category-list">
                        <i class="green icon-home bigger-110"></i>
                        栏目列表
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#category-add">
                        <i class="green icon-home bigger-110"></i>
                        添加栏目
                    </a>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        栏目分类 &nbsp;
                        <i class="icon-caret-down bigger-110 width-auto"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-info">
                        <li>
                            <a data-toggle="tab" href="#dropdown1">@fat</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#dropdown2">@mdo</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="tab-content">
                <div id="category-list" class="tab-pane in active">
                    <table class="table table-border table-bordered table-bg">
                        <thead>
                        <tr class="text-c">
                            <th>ID</th>
                            <th>名称</th>
                            <th>PID</th>
                            <th>排序</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): if( count($categorys)==0 ) : echo "" ;else: foreach($categorys as $key=>$vo): ?>
                            <tr class="text-c">
                                <td><?php echo $vo["id"]; ?></td>
                                <td><?php echo $vo["_name"]; ?></td>
                                <td><?php echo $vo["pid"]; ?></td>
                                <td><?php echo $vo["level"]; ?></td>
                                <td><?php echo $vo["remark"]; ?></td>
                                <td>
                                <a href="<?php echo url('backend/category/subpage',['id'=>$vo['id']]); ?>">
                                    <button class="btn btn-success btn-sm">
                                        <i class="icon-folder-open"></i>添加二级
                                    </button>
                                </a>
                                <a href="<?php echo url('backend/category/edit',['id'=>$vo['id']]); ?>">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="icon-edit"></i>编辑
                                    </button>
                                </a>
                                <a href="<?php echo url('backend/category/del',['id'=>$vo['id']]); ?>">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="icon-trash"></i>删除
                                    </button>
                                </a>

                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>


                <div id="category-add" class="tab-pane">
                    <form action="<?php echo url('/backend/category/store'); ?>" method="post" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名称</label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="分类名称" name="name" class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 所属栏目</label>

                            <div class="col-sm-9">
                                <select name="pid" id="select">
                                    <option value="0">顶级分类</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-2" placeholder="排序" name="level" value="1" class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 详细描述 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-3" placeholder="详细描述" name="remark"
                                       class="col-xs-10 col-sm-5"/>
                            </div>
                        </div>
                        <div class="form-actions center">
                            <button type="submit" class="btn btn-success">提交</button>
                        </div>
                    </form>
                </div>

                <div id="dropdown1" class="tab-pane">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
                        retro fanny pack lo-fi farm-to-table readymade.</p>
                </div>

                <div id="dropdown2" class="tab-pane">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                        master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                        DIY, art party locavore wolf cliche high life echo park Austin.</p>
                </div>
            </div>
        </div>
    </div><!-- /span -->

</div><!-- /row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->
</div>
<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='__JS__/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='__JS__/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='__JS__/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="__JS__/bootstrap.min.js"></script>
<script src="__JS__/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="__JS__/excanvas.min.js"></script>
<![endif]-->

<script src="__JS__/jquery-ui-1.10.3.custom.min.js"></script>
<script src="__JS__/jquery.ui.touch-punch.min.js"></script>
<script src="__JS__/jquery.slimscroll.min.js"></script>
<script src="__JS__/jquery.easy-pie-chart.min.js"></script>
<script src="__JS__/jquery.sparkline.min.js"></script>
<script src="__JS__/flot/jquery.flot.min.js"></script>
<script src="__JS__/flot/jquery.flot.pie.min.js"></script>
<script src="__JS__/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->

<script src="__JS__/ace-elements.min.js"></script>
<script src="__JS__/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
        });




        var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
        var data = [
            { label: "social networks",  data: 38.7, color: "#68BC31"},
            { label: "search engines",  data: 24.5, color: "#2091CF"},
            { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
            { label: "direct traffic",  data: 18.6, color: "#DA5430"},
            { label: "other",  data: 10, color: "#FEE074"}
        ]
        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt:0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin:[-30,15]
                }
                ,
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }
        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);



        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if(item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent']+'%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });






        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }


        $('.dialogs,.comments').slimScroll({
            height: '300px'
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
            $('#tasks').on('touchstart', function(e){
                var li = $(e.target).closest('#tasks li');
                if(li.length == 0)return;
                var label = li.find('label.inline').get(0);
                if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
            });

        $('#tasks').sortable({
                opacity:0.8,
                revert:true,
                forceHelperSize:true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize:true,
                tolerance:'pointer',
                stop: function( event, ui ) 
            }
        );
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
            if(this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });


    })
</script>
</body>
</html>