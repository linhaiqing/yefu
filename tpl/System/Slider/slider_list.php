<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
				<ul>
					<a href="{:U('Slider/index')}">视频分类列表</a>|
					<a href="{:U('Slider/slider_list',array('cat_id'=>$now_category['cat_id']))}" class="on">{$now_category.cat_name} - 视频列表</a>|
					<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Slider/slider_add',array('cat_id'=>$now_category['cat_id']))}','添加资讯',800,460,true,false,false,addbtn,'add',true);">添加资讯</a>
				</ul>
			</div>
			<form name="myqcorm" id="myqcorm" action="" method="post">
				<div class="table-list">
					<table width="100%" cellspacing="0">
						<colgroup>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
							<col width="180" align="center"/>
							<col width="180" align="center"/>
						</colgroup>
						<thead>
							<tr>
								<th>排序</th>
								<th>编号</th>
								<th>名称</th>
								<th>图片(以下为强制小图，点击图片查看大图)</th>
								<th class="textcenter">最后操作时间</th>
								<th class="textcenter">操作</th>
							</tr>
						</thead>
						<tbody>
							<if condition="is_array($slider_list)">
								<volist name="slider_list" id="vo">
									<tr>
										<td>{$vo.sort}</td>
										<td>{$vo.id}</td>
										<td>{$vo.name}</td>
										<td>
											<if condition="$vo['pic']">
												<img src="{$config.site_url}/upload/slider/{$vo.pic}" style="width:50px;height:50px;" class="view_msg"/>
											<else/>
												没有图片
											</if>
										</td>
										<td class="textcenter">{$vo.last_time|date='Y-m-d H:i:s',###}</td>
										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Slider/slider_edit',array('id'=>$vo['id'],'frame_show'=>true))}','查看信息',800,460,true,false,false,false,'add',true);">查看</a> | <a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Slider/slider_edit',array('id'=>$vo['id']))}','编辑信息',800,460,true,false,false,editbtn,'add',true);">编辑</a> | <a href="javascript:void(0);" class="delete_row" parameter="id={$vo.id}" url="{:U('Slider/slider_del')}">删除</a></td>
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