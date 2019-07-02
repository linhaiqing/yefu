<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="{:U('Diymenu/index')}" class="on">自定义菜单列表</a>|
					<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Diymenu/class_add')}','添加自定义菜单',560,350,true,false,false,addbtn,'add',true);">添加自定义菜单</a>
				</ul>
			</div>
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup><col> <col> <col><col>  <col width="180" align="center"> </colgroup>
						<thead>
							<tr>
								<th>编号</th>
								<th>主菜单名称</th>
								<th>菜单类型</th>
								<th>类型数值</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($class)">
								<volist name="class" id="vo">
									<tr>
										<td>{$vo.sort}</td>
										<td>{$vo.title}</td>
										<td>
											<if condition="$vo.keyword neq ''">
								        		顶级菜单-【关键词回复菜单】
								        	<elseif condition="$vo.url neq ''"/>
								        		顶级菜单-【url外链菜单】
								        	<elseif condition="$vo.wxsys neq ''"/>
								        		顶级菜单-【微信扩展菜单】
								        	<else/>
								        		父级菜单
								        	</if>
										</td>
										<td>
											<if condition="$vo.keyword neq ''">
								        		{$vo.keyword}
								        	<elseif condition="$vo.url neq ''"/>
								        		<a href="{$vo.url}" target="_blank" title="{$vo.url}" style="color:blue;">链接预览(鼠标悬浮可显示)</a>
								        	<elseif condition="$vo.wxsys neq ''"/>
								        		{$vo.wxsys}
								        	<else/>
								        		无
								        	</if>
										</td>
										<td class="textcenter">
											<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Diymenu/class_edit',array('id'=>$vo['id']))}','编辑菜单',560,350,true,false,false,editbtn,'add',true);">编辑</a> | 
											<a href="javascript:void(0);" class="delete_row" parameter="id={$vo.id}" url="{:U('Diymenu/class_del')}">删除</a>
										</td>
									</tr>
									<volist name="vo['class']" id="vo1">
									<tr>
										<td>{$vo1.sort}</td>
										<td>|----　{$vo1.title}</td>
										<td>
											<if condition="$vo1.keyword neq ''">
								        		关键词回复菜单
								        	<elseif condition="$vo1.url neq ''"/>
								        		url外链菜单
								        	<elseif condition="$vo1.wxsys neq ''"/>
								        		微信扩展菜单
								        	</if>
										</td>
										<td>
											<if condition="$vo1.keyword neq ''">
								        		{$vo1.keyword}
								        	<elseif condition="$vo1.url neq ''"/>
								        		<a href="{$vo1.url}" target="_blank" title="{$vo1.url}" style="color:blue;">链接预览(鼠标悬浮可显示)</a>
								        	<elseif condition="$vo1.wxsys neq ''"/>
								        		{$vo1.wxsys}
								        	<else/>
								        		无
								        	</if>
										</td>
										<td class="textcenter">
											<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Diymenu/class_edit',array('id'=>$vo1['id']))}','编辑菜单',560,350,true,false,false,editbtn,'add',true);">编辑</a> | 
											<a href="javascript:void(0);" class="delete_row" parameter="id={$vo1.id}" url="{:U('Diymenu/class_del')}">删除</a>
										</td>
									</tr>
									</volist>
								</volist>
							<else/>
								<tr><td class="textcenter red" colspan="5">列表为空！</td></tr>
							</if>
							<tr>
								<td>
									<div class="mainnav_title"><ul><a class="on" url="{:U('Diymenu/class_send')}" id="class_send" style="background-color:#44b549;cursor:pointer;">生成自定义菜单</a></ul></div>
								</td>
								<td class="red" colspan="4">注意：1级菜单最多只能开启3个，2级子菜单最多开启5个<br/>官方说明：修改后，需要重新关注，或者最迟隔天才会看到修改后的效果！</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<script type="text/javascript">
$(document).ready(function(){

	$('#class_send').click(function(){
		var now_dom = $(this);
		window.top.art.dialog({
			icon: 'question',
			title: '请确认',
			id: 'msg' + Math.random(),
			lock: true,
			fixed: true,
			opacity:'0.4',
			resize: false,
			content: '自定义菜单最多勾选3个，每个菜单的子菜单最多5个，请确认!',
			ok:function (){
				$.get(now_dom.attr('url'),function(result){
					if(result.status == 1){
						window.top.msg(1,'自定义菜单生成成功！');
						window.top.main_refresh();
					}else{
						window.top.msg(0,result.info);
					}
				});
			},
			cancel:true
		});
		return false;
	});
});
</script>
<include file="Public:footer"/>