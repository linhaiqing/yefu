<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
					<a href="#" class="on"><span>{$mainname}</span> > <span> 信息更新列表</span></a>
					 | <a href="javascript:history.back();">返回上级目录</a>
			</div>

			
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
						</colgroup>
						<thead>
							<tr>
								<th>ID</th>
								<th>分类名称</th>
								<th>上次更新时间</th>
								<th>上次更新条数</th>
								<th>是否可更新</th>
								<th>去设置更新字段</th>
								<th>开始更新</th>
							</tr>
						</thead>
						<tbody>
							<if condition="!empty($listdata)">
								<volist name="listdata" id="vo">
								<php>$param=array('cid'=>$vo['cid'],'fcid'=>$vo['fcid'],'count'=>$vo['needcount'],'mcid'=>$vo['mcid'],'mscid'=>$vo['mscid']);$param=base64_encode(json_encode($param));</php>
									<tr>
									   <td>{$vo['cid']}</td>
										<td>{$vo['subname']}</td>
										<td><if condition="!empty($vo['updatetime'])">{$vo['updatetime']|date='Y-m-d H:i:s',###}<else/>无</if></td>
										<td>{$vo['total']}</td>
										<td><if condition="$vo['needcount'] gt 0">有数据可更新<else/>没有数据可更新</if></td>
										<td><a class="btn" href="{:U('Classify/updateFiield',array('cid'=>$vo['cid'],'fcid'=>$vo['fcid']))}">设置字段对应</a></td>

										<td><a class="btn" <if condition="$vo['updatetimestr'] eq $todaystr">href="javascript:alert('今天您已经更新过了！');"<else/> href="{:U('Classify/execupdate',array('param'=>$param))}"</if>>立刻更新</a></td>
									</tr>
								</volist>
								<!--<tr><td class="textcenter pagebar" colspan="10">{$pagebar}</td></tr>-->
							<else/>
								<tr><td class="textcenter red" colspan="5">没有可更新项！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>