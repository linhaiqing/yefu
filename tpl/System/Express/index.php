<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="{:U('Express/index')}" class="on">快递公司列表</a>|
					<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Express/add')}','添加快递公司',520,250,true,false,false,addbtn,'add',true);">添加快递公司</a>
				</ul>
			</div>
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup><col> <col> <col> <col><col><col><col> <col width="140" align="center"> </colgroup>
						<thead>
							<tr>
								<th>排序</th>
								<th>编号</th>
								<th>名称</th>
								<th>编码</th>
								<th>链接地址</th>
								<th>编辑时间</th>
								<th>状态</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($express_list)">
								<volist name="express_list" id="vo">
									<tr>
										<td>{$vo.sort}</td>
										<td>{$vo.id}</td>
										<td>{$vo.name}</td>
										<td>{$vo.code}</td>
										<td><a href="{$vo.url}" target="_blank">{$vo.url}</a></td>
										<td>{$vo.add_time|date='Y-m-d H:i:s',###}</td>
										<td><if condition="$vo['status']"><font color="green">启用</font><else/><font color="red">关闭</font></if></td>
										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Express/edit',array('id'=>$vo['id'],'frame_show'=>true))}','查看详细信息',520,250,true,false,false,false,'add',true);">查看</a> | <a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Express/edit',array('id'=>$vo['id']))}','编辑快递公司信息',520,250,true,false,false,editbtn,'add',true);">编辑</a> | <a href="javascript:void(0);" class="delete_row" parameter="id={$vo.id}" url="{:U('Express/del')}">删除</a></td>
									</tr>
								</volist>
								<tr><td class="textcenter pagebar" colspan="8">{$pagebar}</td></tr>
							<else/>
								<tr><td class="textcenter red" colspan="8">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>