<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="{:U('slider_video')}" class="on">视频列表</a>|
					<a href="{:U('slider_videoadd')}" >添加视频</a>
				</ul>
			</div>
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup><col> <col> <col><col>  <col width="180" align="center"> </colgroup>
						<thead>
							<tr>
								<th>视频id</th>
								<th>名称</th>
								<th>类型</th>
								<th>大小/bit</th>
								<th>添加时间</th>
								<th>备注</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($list)">
								<volist name="list" id="vo">
									<tr>
										<td>{$vo.id}</td>
										<td>{$vo.name}</td>
										<td>{$vo.type}</td>
										<td>{$vo.size}</td>
										<td>{$vo.addtime}</td>
										<td>{$vo.beizhu}</td>
										<td class="textcenter">
										<a href="javascript:void(0);"  onclick="window.top.artiframe('{:U('beizhu',array('id'=>$vo['id']))}','添加备注',550,40,true,false,false,addbtn,'add',true);">添加备注</a>
										<a href="{$vo.newurl}" target="_blank">查看</a>
										</td>
									</tr>
								</volist>
							<else/>
								<tr><td class="textcenter red" colspan="8">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>