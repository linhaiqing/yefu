<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="{:U('User/importlist')}" class="on">导入用户列表</a>
				</ul>
			</div>
			<!--<table class="search_table" width="100%">
				<tr>
					<td>
						<form action="{:U('User/index')}" method="get">
							<input type="hidden" name="c" value="User"/>
							<input type="hidden" name="a" value="index"/>
							筛选: <input type="text" name="keyword" class="input-text" value="{$_GET['keyword']}"/>
							<select name="searchtype">
								<option value="uid" <if condition="$_GET['searchtype'] eq 'uid'">selected="selected"</if>>用户ID</option>
								<option value="nickname" <if condition="$_GET['searchtype'] eq 'nickname'">selected="selected"</if>>昵称</option>
								<option value="phone" <if condition="$_GET['searchtype'] eq 'phone'">selected="selected"</if>>手机号</option>
							</select>
							<input type="submit" value="查询" class="button"/>
						</form>
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
							<col width="180" align="center"/>
						</colgroup>
						<thead>
							<tr>
								<th>ID</th>
								<th>姓名</th>
								<th>手机号</th>
								<th>通讯地址</th>
								<th>商户ID</th>
								<th>会员卡号</th>
								<th>等级</th>
								<th>QQ</th>
								<th>Email</th>
								<th>余额</th>
								<th>积分</th>
								<th>账号</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($userimport)">
								<volist name="userimport" id="vo">
									<tr>
										<td>{$vo.id}</td>
										<td>{$vo.ppname}</td>
										<td>{$vo.telphone}</td>
										<td><php>echo str_replace('|',' ',$vo['address']);</php></td>
										<td>{$vo.mer_id}</td>
										<td>{$vo.memberid}</td>
										<td>{$vo.level}</td>
										<td>{$vo.qq}</td>
										<td>{$vo.email}</td>
										<td>{$vo.money} 元</td>
										<td>{$vo.integral}</td>
										<td>{$vo.useraccount}</td>
										<td class="textcenter"><a href="javascript:void(0);" onclick="">删除</a></td>
									</tr>
								</volist>
								<tr><td class="textcenter pagebar" colspan="13">{$pagebar}</td></tr>
							<else/>
								<tr><td class="textcenter red" colspan="13">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>