<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="#" class="on">信息已审核列表</a>
				</ul>
			</div>
			<table class="search_table" width="100%">
				<tr>
					<td>
						<form action="/admin.php?g=System&c=Classify&a=infoList" method="get">
						<input type="hidden" value="Classify" name="c"></input>
						<input type="hidden" value="infoList" name="a"></input>
						<span>ID：
						<input type="text" value="{$id}" name="id" style="height: 22px;width: 70px;"></input>
						</span>&nbsp;&nbsp;&nbsp;
						<span>
						标题：
						<input type="text" value="{$title}" name="title" style="height: 22px;width: 250px;"></input>
						</span>&nbsp;&nbsp;&nbsp;
							选择城市：
							<select name="city_id" style="width:200px;">
								<option value="0">全部城市</option>
								<if condition="!empty($city_list)">
								<volist name="city_list" id="vo">
								<option value="{$vo['area_id']}"  <if condition="$vo['area_id'] eq $city_id">selected="selected"</if>>{$vo['area_name']}</option>
								</volist>
								<else/>
								<option value="">无</option>
								</if>
							</select>&nbsp;&nbsp;&nbsp;
							分类列表：
							<select name="cid" style="width:200px;" onchange="getSubdir(this.value);">
							<option value="">请选择！</option>
							<if condition="!empty($subdir1)">
							<volist name="subdir1" id="vo">
							<option value="{$vo['cid']}"  <if condition="$vo['cid'] eq $cid">selected="selected"</if>>{$vo['cat_name']}</option>
							</volist>
							<else/>
							<option value="">无</option>
							</if>
							</select>
							<span id="erjisubdir" style="margin:0px 15px;">
							<if condition="!empty($subdir2Arr)">
							<select name="subdir2" style="width:200px;" id="subdir2">
							<volist name="subdir2Arr" id="v2o">
							<option value="{$v2o['cid']}" <if condition="$v2o['cid'] eq $subdir2cid">selected="selected"</if>>{$v2o['cat_name']}</option>
							</volist>
							</select>
							<else/>
							<select name="subdir2" style="width:200px; display: none;" id="subdir2">
							</select>
							</if>
							</span>
							<input type="submit" value="查询" class="button"/>
						</form>
					</td>
				</tr>
			</table>

			
			<!--<table class="search_table" width="100%">
				<tr>
					<td>
					</td>
				</tr>
			</table>-->
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
						</colgroup>
						<thead>
							<tr>
								<th>ID</th>
								<th>一级分类</th>
								<th>二级分类</th>
								<th>标题</th>
								<th>联系人姓名</th>
								<th>联系人电话</th>
								<th>最后更改时间</th>
								<th width="70">是否置顶</th>
								<th width="190" style="text-align:center;">状态</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="!empty($listdatas)">
								<volist name="listdatas" id="vo">
									<tr>
									   <td>{$vo.id}</td>
										<td>{$ClassifyArr[$vo['fcid']]}</td>
										<td>{$ClassifyArr[$vo['cid']]}</td>
										<td><if condition="!empty($title)"> {$vo['title']|str_replace=$title,'<b style="color: red;">'.$title.'</b>',###}<else/>{$vo.title}</if></td>
										<td>{$vo.lxname}</td>
										<td><if condition="strpos($vo['lxtel'], 'load/telimages')"><img src="{$config['site_url']}/{$vo['lxtel']}"><else/>{$vo.lxtel}</if></td>
										
										<td>{$vo.updatetime|date='Y-m-d H:i:s',###}</td>
										<td style="color: red;"><if condition="$vo['toptime'] gt 0"><a style="color: green;" href="{:U('Classify/topList',array('cid'=>$vo['fcid'],'subdir2'=>$vo['cid']))}">已置顶</a><else/>未置顶</if></td>
										<td class="red">已审核&nbsp;&nbsp;&nbsp;<input type="button" value="更新成未审核" style="" class="button" onclick="upStatus({$vo.id})"></td>
										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Classify/infodetail',array('vid'=>$vo['id']))}','查看信息详情',680,560,true,false,false,closebtn,'edit',true);">查看详细</a>&nbsp; | <a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Classify/attrSet',array('vid'=>$vo['id']))}','设置操作',550,350,true,false,false,confirmbtn,'add',true);">设置操作</a>&nbsp; | &nbsp;<a href="javascript:void(0);" onclick="toDelItem({$vo.id});">删除</a></td>
									</tr>
								</volist>
								<tr><td class="textcenter pagebar" colspan="10">{$pagebar}</td></tr>
							<else/>
								<tr><td class="textcenter red" colspan="10">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<script type="text/javascript">
/***删除***/
function toDelItem(id){
    if(confirm('您确定删除此项吗？')){
    $.post("{:U('Classify/delItem')}",{vid:id},function(data){
	  data=parseInt(data);
	  if(!data){
          window.location.reload();
	   }
     },'JSON');
   }else{
     return false;
   }
}

function getSubdir(cid){
	cid=parseInt(cid);
	if(cid>0){
  $.post("{:U('Classify/get2Subdir')}",{cid:cid},function(data){
     if(data){
		 var shtml='<option value="">请选择！</option>';
	    $.each(data,function(kk,vv){
		    shtml+='<option value="'+vv.cid+'">'+vv.cat_name+'</option>';
		});
		$('#subdir2').html(shtml).show();
	 }
  },'JSON');
	}else{
	  $('#subdir2').html('').hide();
	}
}
function upStatus(id){
   if(confirm('您确定将此项信息打入未审核状态吗？')){
    $.post("{:U('Classify/toNoVerify')}",{vid:id,sv:0},function(data){
	  data=parseInt(data);
	  if(!data){
          window.location.reload();
	   }
     },'JSON');
   }else{
     return false;
   }
}
</script>
<include file="Public:footer"/>