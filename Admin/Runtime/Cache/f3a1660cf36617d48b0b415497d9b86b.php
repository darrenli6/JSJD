<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
	 
		<title><?php echo ($stuinfo["stuname"]); echo ($title); ?>  </title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/resume/css/style.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/resume/css/new.css" media="all"/>
		<link rel="stylesheet" href="__PUBLIC__/resume/css/bootstrap.min.css?v=2159" />
		<link rel="stylesheet" href="__PUBLIC__/resume/css/zxbj_base.css?v=2818" />
		<link rel="stylesheet" href="__PUBLIC__/resume/css/jm0203.css" />
		<style>
.m-nav-ul .nav_li:nth-child(3) a.erji_a {
	color: #F66000;
}
.m-nav-ul .nav_li:nth-child(3) a.triangle {
	border-color: #F66000;
}
.m-top_user li a {
	box-sizing: content-box;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box;
}
.m-erjinav-ul {
	margin-top: 25px;
}
</style>
</head>

<body style="height:auto;background:#f8f8f8;">
<div class="n_dispage_jm">
          <div class="n_dispage_jm_in resetEditStyle"> 
    
    <!--编辑区域-->
    
    <div class="baseStyle clearfix jm0203_j1" id="resume_body">
              <div class="divLeft clearfix" id="bar"> 
        
        <!--头像-->
        
        <div     class="headDiv" id="resume_head"> 
         
        <?php if(empty($stuinfo['face'])) { ?> 
         <img class="resume_head" src="__PUBLIC__/images/people.png" height="120" width="120" /> </div>
        <?php }else{ ?>
         <img class="resume_head" src="<?php echo ($path); echo ($stuinfo["face"]); ?>" height="120" width="120px" /> </div>
        <?php } ?>
        <div id="bar_sort"></div>
        
        <!--基本信息-->
        
        <div class="msgDiv positonDiv resume_add_area resume_sort" id="resume_msg">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_msg" data-placement="bottom" title="添加一项"></li>
          </ul>
                  <div class="baseAge baseMsg baseDel" id="resume_age">
            <div class="delete resume_hidden" for-id="resume_age"></div>
            <a class="resume_icon_diy icon wbdfont" for-id="age" style="font-size:none"></a>
            <input class="baseBorder resume_msg resume_lang_age" for-key="age" placeholder="年龄/生日"
             value=" <?php echo substr($stuinfo['birthday'],0,10); ?>" />
          </div>
                  <div class="baseAddress baseMsg baseDel" id="resume_address">
            <div class="delete resume_hidden" for-id="resume_address"></div>
            <a class="resume_icon_diy icon wbdfont" for-id="address" style="font-size:none"></a>
            <input class="resume_msg baseBorder resume_lang_address" for-key="address" placeholder="联系地址" 
            value="<?php echo $stuinfo['registarea']; ?>" />
          </div>
                  <div class="baseMobile baseMsg baseDel" id="resume_mobile">
            <div class="delete resume_hidden" for-id="resume_mobile"></div>
            <a class="resume_icon_diy icon wbdfont" for-id="mobile" style="font-size:none"></a>
            <input class="resume_msg baseBorder resume_lang_mobile" for-key="mobile" placeholder="联系电话" 
            value="<?php echo $stuinfo['mobilephone']==null?'未知':$stuinfo['mobilephone']; ?>" />
          </div>
                  <div class="baseEmail baseMsg baseDel" id="resume_email">
            <div class="delete resume_hidden" for-id="resume_email"></div>
            <a class="resume_icon_diy icon wbdfont" for-id="email" style="font-size:none"></a>
            <input class="resume_msg baseBorder resume_lang_email" for-key="email" placeholder="电子邮箱" 
            value="<?php echo $stuinfo['email']=='null'?'未知':$stuinfo['email']; ?>" />
          </div>
                </div>
        
        <!--个人技能-->
        
        <div class="skillDiv positonDiv resume_add_area resume_graph resume_sort" id="resume_graph">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_graph" data-placement="bottom" title="添加一项"></li>
            <li class="btnDel resume_hidden" for-id="resume_graph" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <ul class="skillUl resume_append_area">
            <li class="baseDel resume_delete_area resume_graph_item">
                      <div class="skillTitle">
                <input class="resume_value baseBorder" for-key="resume_skill_graph" placeholder="填写你的技能名称" value="社交能力" />
              </div>
                      <span><i class="resume_line" for-id="resume_skill_graph" style="width:100px;border-top-style:solid;border-top-width:8px;"></i></span>
                      <div class="delete resume_delete"></div>
                    </li>
            
            
                 <li class="baseDel resume_delete_area resume_graph_item">
                      <div class="skillTitle">
                <input class="resume_value baseBorder" for-key="resume_skill_graph" placeholder="填写你的技能名称" value="学习能力" />
              </div>
                      <span><i class="resume_line" for-id="resume_skill_graph" style="width:100px;border-top-style:solid;border-top-width:8px;"></i></span>
                      <div class="delete resume_delete"></div>
                    </li>
          
          </ul>
                </div>
        
        <!--兴趣爱好-->
        
        <div class="hobbyDiv positonDiv resume_add_area resume_icon resume_sort" id="resume_icon">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_icon" data-placement="bottom" title="添加一项"></li>
            <li class="btnDel resume_hidden" for-id="resume_icon" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <dl class="clearfix">
            <dt><span>
              <div class="resume_lang_hobby">兴趣爱好</div>
              </span></dt>
            <dd class="resume_append_area">
                      <div class="hobbyicon baseDel resume_delete_area resume_icon_item"> <a class="resume_icon_diy icon wbdfont" for-id="resume_hobby_icon" style="font-size:none"></a> <span class="hobbyTitle">
                        <input class="resume_value baseBorder" for-key="resume_hobby_icon" placeholder="兴趣爱好" value="篮球" />
                        </span>
                <div class="delete resume_delete"></div>
              </div>
                      <div class="hobbyicon baseDel resume_delete_area resume_icon_item"> <a class="resume_icon_diy icon wbdfont" for-id="9eff2552587f9d5970ebab85696208dc" style="font-size:none"></a> <span class="hobbyTitle">
                        <input class="resume_value baseBorder" for-key="9eff2552587f9d5970ebab85696208dc" placeholder="兴趣爱好" value="足球" />
                        </span>
                <div class="delete resume_delete"></div>
              </div>
                      <div class="hobbyicon baseDel resume_delete_area resume_icon_item"> <a class="resume_icon_diy icon wbdfont" for-id="162b8459a4a82554da5e6a12c2f21c8f" style="font-size:none"></a> <span class="hobbyTitle">
                        <input class="resume_value baseBorder" for-key="162b8459a4a82554da5e6a12c2f21c8f" placeholder="兴趣爱好" value="游戏" />
                        </span>
                <div class="delete resume_delete"></div>
              </div>
                      <div class="hobbyicon baseDel resume_delete_area resume_icon_item"> <a class="resume_icon_diy icon wbdfont" for-id="b3cf5ddaec3cbe67762a2d8d3df17f17" style="font-size:none"></a> <span class="hobbyTitle">
                        <input class="resume_value baseBorder" for-key="b3cf5ddaec3cbe67762a2d8d3df17f17" placeholder="兴趣爱好" value="摄影" />
                        </span>
                <div class="delete resume_delete"></div>
              </div>
                    </dd>
          </dl>
                </div>
      </div>
              <div class="divRight clearfix resume_main" id="foo"> 
        
        <!--姓名、求职意向-->
      
        <div class="nameDiv positonDiv" id="resume_name">
                  <h1>
 <div class="resume_msg baseBorder resume_notice resume_lang_name" notice-key="msg" for-key="name" for-value="html" contenteditable="false">
 <?php echo ($stuinfo["stuname"]); ?> </div>
          </h1>
                  <h2>
            <div class="resume_msg baseBorder resume_notice resume_lang_job" notice-key="job" for-key="job" for-value="html" 
            contenteditable="true">学号:<?php echo $stuinfo['stuid']; ?></div>
          </h2>
                </div>
       
        
        <!--基本信息-->
        
        <div class="eduDiv baseItem positonDiv resume_item resume_add_area resume_sort resume_notice" notice-key="edu" id="resume_edu" for-key="edu">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_item" data-placement="bottom" title="添加一项"></li>
            <li class="btnDel resume_hidden" for-id="resume_edu" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <dl>
            <dt> <a class="resume_icon_diy icon wbdfont" for-id="edu" style="font-size:none"></a> <span>
              <div class="resume_lang_edu">个人基本信息</div>
              <div class="Border resume_line" for-id="edu" style="width:668px;border-top-style:solid;border-top-width:2px;"></div>
              </span> </dt>
            <dd class="resume_append_area">
                      <div class="baseContent baseDel resume_item_items resume_delete_area">
                <div class="delete resume_delete"></div>
                  <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">政治面貌</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true"><?php echo $stuinfo['rolename']; ?></div>
                  </span> 
                  </div>
                <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">性别</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true"><?php echo $stuinfo['sex']==1?'男':'女'; ?></div>
                  </span> 
                  </div>
              
                  <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">名族</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true"><?php echo $stuinfo['nation']; ?></div>
                  </span> 
                  </div>
                  <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">班级</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true"><?php echo $stuinfo['name']; ?></div>
                  </span> 
                  </div>
                  <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">部门</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true">
                  <?php echo empty($stuinfo['departname'])?'未知':$stuinfo['departname']; ?></div>
                  </span> 
                  </div>
              </div>
                    </dd>
          </dl>
                </div>
        
        <!--学科竞赛-->
        
        <div class="workDiv baseItem positonDiv resume_item resume_add_area resume_sort resume_notice" notice-key="work" id="resume_work" for-key="work">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_item" data-placement="bottom" title="添加一项"></li>
            <li class="btnDel resume_hidden" for-id="resume_work" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <dl>
            <dt> <a class="resume_icon_diy icon wbdfont" for-id="work" style="font-size:none"></a> <span>
              <div class="resume_lang_work">学科竞赛</div>
              <div class="Border resume_line" for-id="work" style="width:668px;border-top-style:solid;border-top-width:2px;"></div>
              </span> </dt>
            <dd class="resume_append_area">
                      <div class="baseContent baseDel resume_item_items resume_delete_area">
                <div class="delete resume_delete"></div>
                <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">时间</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true">地方</div>
                  </span> <span class="conTitle_post">
                  <div class="resume_job baseBorder" contenteditable="true">比赛</div>
                  </span> </div>
                <div class="baseDel_ resume_delete_area_">
                          <div class="delete_ resume_delete_"></div>
                          <div class="conDisc baseBorder resume_value" contenteditable="true" data-toggle="tooltip" data-placement="top" title="复制粘贴文字请右键-粘贴为纯文本">
                     <br />
                     <br />
                     <br />
                     <br />
                  </div>
                        </div>
              </div>
                    </dd>
          </dl>
                </div>
        
        <!--素质拓展-->
        
        <div class="outexperDiv baseItem positonDiv resume_item resume_add_area resume_sort resume_notice" notice-key="project" id="resume_project" for-key="project">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus resume_add" for-key="resume_item" data-placement="bottom" title="添加一项"></li>
            <li class="btnDel resume_hidden" for-id="resume_project" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <dl>
            <dt> <a class="resume_icon_diy icon wbdfont" for-id="project" style="font-size:none"></a> <span>
              <div class="resume_lang_project">素质拓展</div>
              <div class="Border resume_line" for-id="project" style="width:668px;border-top-style:solid;border-top-width:2px;"></div>
              </span> </dt>
            <dd class="resume_append_area">
                      <div class="baseContent baseDel resume_item_items resume_delete_area">
                <div class="delete resume_delete"></div>
                <div class="conTitle"> <span class="conTitle_time">
                  <div class="resume_time baseBorder" contenteditable="true">2013.6-2013.9</div>
                  </span> <span class="conTitle_company">
                  <div class="resume_unit baseBorder" contenteditable="true">内容内容内 容 容内容内容</div>
                  </span> <span class="conTitle_post">
                  <div class="resume_job baseBorder" contenteditable="true"></div>
                  </span> </div>
                <div class="baseDel_ resume_delete_area_">
                          <div class="delete_ resume_delete_"></div>
                          <div class="conDisc baseBorder resume_value" contenteditable="true" data-toggle="tooltip" data-placement="top" title="复制粘贴文字请右键-粘贴为纯文本">
                    <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                    <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                  </div>
                        </div>
              </div>
                  
             
               
                    </dd>
          </dl>
                </div>
        
        <!--自我评价-->
        
        <div class="selfDiv baseItem positonDiv resume_item resume_sort resume_notice" notice-key="self" id="resume_self" for-key="self">
                  <ul class="editBtn">
            <li class="btnMove" style="cursor:move;"data-placement="top" title="拖动调整上下位置"></li>
            <li class="btnPlus" data-placement="bottom" title="添加一项" style="display:none;"></li>
            <li class="btnDel resume_hidden" for-id="resume_self" data-placement="bottom" title="隐藏该模块"></li>
          </ul>
                  <dl>
            <dt> <a class="resume_icon_diy icon wbdfont" for-id="self" style="font-size:none"></a> <span>
              <div class="resume_lang_self">自我评价</div>
              <div class="Border resume_line" for-id="self" style="width:668px;border-top-style:solid;border-top-width:2px;"></div>
              </span> </dt>
            <dd>
                      <div class="baseContent">
                <div class="conDisc baseBorder resume_lang_self_value resume_value" contenteditable="true" data-toggle="tooltip" data-placement="top" title="复制粘贴文字请右键-粘贴为纯文本">
                          <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                          <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                          <p>很内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容。</p>
                        </div>
              </div>
                    </dd>
          </dl>
                </div>
      </div>
            </div>
  </div>
        </div>
		<div style="text-align:center;">
 
</div>
</body>
</html>