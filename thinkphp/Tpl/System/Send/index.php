<include file="Public:header"/>
		<div class="mainbox">
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup><col> <col> <col><col>  <col width="180" align="center"> </colgroup>
						<thead>
							<tr>
								<th>编号</th>
								<th>商家名称</th>
								<th>内容</th>
								<th>发送对象</th>
								<th class="textcenter">审核</th>
							</tr>
						</thead>
						<tbody>
							<if condition="$list">
								<volist name="list" id="vo">
									<tr>
										<td>{$vo.pigcms_id}</td>
										<td>{$vo.name}</td>
										<td><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Send/txtinfo',array('id'=>$vo['c_id']))}','内容详情',560,350,true,false,false,editbtn,'add',true);">内容详情</a></td>
										<td><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Send/info',array('id'=>$vo['pigcms_id']))}','发送对象',560,350,true,false,false,editbtn,'add',true);">对象列表</a></td>
										<td class="textcenter">
											<if condition="$vo['status'] eq 0">
											<a href="{:U('Send/send',array('send'=>$vo['pigcms_id']))}" >通过</a> | 
											<a href="javascript:void(0);" class="delete_row" parameter="id={$vo.pigcms_id}" url="{:U('Send/send_del')}">拒绝</a>
											<elseif condition="$vo['status'] eq 1"/>
											<a style="color: green">审核通过</a>
											<else />
											<a style="color: red">拒绝通过</a>
											</if>
										</td>
									</tr>
								</volist>
							<else/>
								<tr><td class="textcenter red" colspan="5">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>