<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:97:"D:\Apache24\htdocs\数据库\THINKPHP\public/../application/index\view\display\displayer_rbs.html";i:1535176047;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\base.html";i:1534298764;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\meta.html";i:1534727951;s:79:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\header.html";i:1534917482;s:77:"D:\Apache24\htdocs\数据库\THINKPHP\application\index\view\public\foot.html";i:1534136683;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/style.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/style_2.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
<script type="text/javascript" src="/数据库/THINKPHP/public/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/cytoscape.js"></script>
<script type="text/javascript" src="/数据库/THINKPHP/public/static/js/cytoscape.min.js"></script>

<!--/_footer /作为公共模版分离出去-->
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="mynavbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
         <span class="sr-only">切换导航</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        
      </button>

                <a class="navbar-brand" href="#">Version:1.0</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">LOGIN</a></li>

                    <li><a href="#">REGISTER</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mymenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-3">
                    <span><a href="<?php echo url('index/index/index'); ?>">Bio-Master</a></span>
                </div>
                <div class="col-lg-4 col-lg-offset-5 col-md-5 col-md-offset-5 col-sm-7 col-sm-offset-1" id="menu-r">
                    <ul>
                        <li><a href="<?php echo url('index/search/by_id'); ?>">Search</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Preview</a></li>
                        <li><a href="#">My Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<div class="mycontainer-1">
    <div class="container">
        <div class="row">
            <nav id="clu">
                <ul class="nav">
                    <li class="active"><a href="#">Rbs</a></li><hr>
                     <li class="active"><a href="#Component">Component</a></li><hr>
                           
                </ul>
            </nav>
            <?php if(!empty($a)): ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 ">
                <div id="cy" style="z-index: 11;height: 600px;width: 100%;"></div>
            </div>
            <?php endif; ?>
            <div class="col-lg-10 col-md-10 col-sm-9 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 con-r-1">

                <div class="title_1">
                <span><?php echo $res_4_0['iGEM_ID']; ?></span>
                <p>Rbs</p></div>
                <div id="Coding" class="hz">
                    
                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            
                            <tr>
                                <th class="col-1">Description</th>
                                <td class="col-2"><?php echo $res_4_0['Desciption']; ?></td>
                            </tr>
                           
                            <tr>
                                <th>Efficiency</th>
                                <td><?php echo $res_4_0['Efficiency']; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Submit_team</th>
                                <td><a href="<?php echo url('index/display/team_1',array('$t'=>$res_4_0['Submit_team'])); ?>"><?php echo $res_4_0['Submit_team']; ?></a></td>
                            </tr>
                            
                            <tr>
                                <th>Sequence</th>
                                <?php if(strlen($res_4_0['sequence']) >500): ?>
                                <td title="<?php echo $res_4_0['sequence']; ?>">
                                    <?php echo substr($res_4_0['sequence'],0,500); ?>...<span style="font-size: 15px;color:cornsilk">(mouseover to show all)</span></td>
                                <?php else: ?>
                                <td><?php echo $res_4_0['sequence']; ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <th>Sample_Statu</th>
                                <td><?php echo $res_4_0['Sample_Statu']; ?></td>
                            </tr>
                            <tr>
                                <th>Uses</th>
                                <td><?php echo $res_4_0['Uses']; ?></td>
                            </tr>
                            <tr>
                                <th>Twin</th>
                                <td><?php echo $res_4_0['Twin']; ?></td>
                            </tr>
                            <tr>
                                <th>Nickname</th>
                                <td><?php echo $res_4_0['Nickname']; ?></td>
                            </tr>
                            <tr>
                                <th>Designer</th>
                                <td><?php echo $res_4_0['Designer']; ?></td>
                            </tr>
                            <tr>
                                <th>Categories</th>
                                <td><?php echo $res_4_0['Categories']; ?></td>
                            </tr>
                            <tr>
                                <th>Green</th>
                                <td><?php echo $res_4_0['Green']; ?></td>
                            </tr>
                            <tr>
                                <th>Red</th>
                                <td><?php echo $res_4_0['Red']; ?></td>
                            </tr>
                            <tr>
                                <th>iGEM_Link</th>
                                <td><a href="<?php echo $res_4_0['iGEM_Link']; ?>"><?php echo $res_4_0['iGEM_Link']; ?></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php if(!empty($res_4_1)): ?>
                <div class="title">
                    <p>Component</p>
                </div>
                <div id="Component" class="hz">

                    <table class="table table-bordered" style="border: solid 2px #ffee99;box-shadow: inset 0 0 10px #CCC;">
                        <tbody>
                            <?php if(is_array($res_4_1) || $res_4_1 instanceof \think\Collection || $res_4_1 instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($res_4_1) ? array_slice($res_4_1,0,100, true) : $res_4_1->slice(0,100, true); if( count($__LIST__)==0 ) : echo "Have no data" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                            <tr>
                                <th class="col-1">Composition</th>
                                <td class="col-2"><a href="<?php echo $vo['composition']; ?>"><?php echo $vo['composition']; ?></a></td>
                            </tr>
                            <tr>
                                <th>Locus</th>
                                <td><?php echo $vo['Locus']; ?></td>
                            </tr>

                            <tr>
                                <th>Type</th>
                                <td><?php echo $vo['Type']; ?></td>
                            </tr>
                            <?php endforeach; endif; else: echo "Have no data" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>

                

            </div>
        </div>
    </div>
</div>



<footer>
    <div class="foot-bg">

    </div>
</footer>



<script>
    $(function() {
        var h = $(document).height();
        h = h - 1000;
        $('.foot-bg').css({
            'top': h
        }, {
            'position': 'absolute'
        });
       
        $('#clu ul li a').click(function() {
            $(this).closest('li').siblings().removeClass("active");
            $(this).closest('li').addClass("active");
            $('html, body').stop().animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
            return false;

        });
        cytoscape({
            container: document.getElementById('cy'),
            style: [{
                    selector: 'node[label = "Start"]',
                    css: {
                        'content': 'data(name)',
                        "font-size": "12px",
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#00FA9A",
                        "text-outline-color": "#00CED1",
                        "text-outline-width": "2px",
                        "color": "#fff",
                        "overlay-padding": "6px",
                        "z-index": "10",
                        "border-width": "4px",
                        "border-color": "#98FB98",
                        "border-opacity": "0.6",
                    }
                },
                {
                    selector: 'node[label = "End"]',
                    css: {
                        'content': 'data(name)',
                        "font-size": "6px",
                        "text-valign": "center",
                        "text-halign": "center",
                        "background-color": "#DDA0DD",
                        "text-outline-color": "#BC8F8F",
                        "text-outline-width": "1px",
                        "color": "#fff",
                        "overlay-padding": "3px",
                        "z-index": "10",
                    }
                },
                {
                    selector: 'edge',
                    css: {
                        'content': 'data(point)',
                        "curve-style": "haystack",
                        "haystack-radius": "0.3",
                        "opacity": "0.4",
                        "line-color": "yellow",
                        "width": "mapData(weight, 0, 1, 1, 8)",
                        "overlay-padding": "3px",
                    }
                }
            ],
            elements: {
                nodes: [
                    <?php 
                    $i=2;
                    echo '{ data:{id:"1",name:\''.$id.'\',lable:"Start"}},';
                    foreach ($a as $value1) {
                      echo '{ data: { id: \''.$i.'\', name: \''.$value1.'\', label: "End"} },' ;
                      $i=$i+1;
                    }
                ?>
                ],

                edges: [
                    <?php
                $i=2;
                foreach ($b as $value2) {
                  echo '{ data: {source: "1", target: \''.$i.'\', point: \''.$value2.'\'} },' ;
                  $i=$i+1;
                }
                ?>
                ]
                      },
            layout: {
                name: 'cose'
            }
        });
        
    })
    

</script>
    
</body>

</html>