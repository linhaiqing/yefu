<include file="Public:header"/>
		<div class="mainbox">
			
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
							<col width="180" align="center"/>
						</colgroup>
						<thead>
							<tr>
								<th>ID</th>
								<th>用户名</th>
								<th>手机号</th>
								<th>留言内容</th>
								<th>留言时间</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($user_list)">
								<volist name="user_list" id="vo">
									<tr>
										<td>{$vo.id}</td>
										<td>{$vo.username}</td>
										<td>{$vo.mobile}</td>
										<td>{$vo.content}</td>
										<td>{$vo.addtime}</td>
										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('User/edit',array('id'=>$vo['id']))}','编辑留言信息',680,560,true,false,false,editbtn,'edit',true);">编辑</a></td>
									</tr>
								</volist>
								<tr><td class="textcenter pagebar" colspan="9">{$pagebar}</td></tr>
							<else/>
								<tr><td class="textcenter red" colspan="8">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>