<include file="Public:header"/>
		<div class="mainbox">
			<div id="nav" class="mainnav_title">
					<a href="#" class="on"><span>{$pfcategory['cat_name']}</span> > <span>{$now_category['cat_name']}</span> >  <span>设置对应更新字段</span></a>
					 | <a href="{:U('Classify/pickList',array('fcid'=>$now_category['fcid'],'pfcid'=>0))}">返回上级目录</a>
					 <span class="red" style="font-size: 16px; margin-left: 100px;">提示：请务必要将所有的字段设置对应上，没设置的对应上的字段将无法更新其值</span>
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
								<th>字段名</th>
								<th>对应字段名</th>
								<th>对应分类</th>
								<th>选择对应字段设置</th>
							</tr>
						</thead>
						<tbody>
							<if condition="!empty($now_category['cat_field'])">
								<volist name="now_category['cat_field']" id="vo">
								<php>$param=array('cid'=>$now_category['cid'],'fcid'=>$now_category['fcid'],'fieldid'=>$key,'fieldname'=>$vo['name']);if(isset($vo['pickset'])){$param['id']=$vo['pickset']['id'];}else{$param['id']=$picksetarr['id'];} $param=base64_encode(json_encode($param));</php>
									<tr>
									   <td>{$key}</td>
										<td>{$vo['name']}</td>
										<td><if condition="isset($vo['pickset'])">{$vo['pickset']['kvalue']}</if></td>
										<td><if condition="isset($vo['pickset'])">{$vo['pickset']['mcidname']}--{$vo['pickset']['mscidname']}</if></td>
										<td><a class="btn" href="javascript:void(0);" onclick="window.top.artiframe('{:U('Classify/getServerField',array('cid'=>$now_category['cid'],'fcid'=>$now_category['fcid'],'param'=>$param))}','设置字段对应',800,550,true,false,false,submitbtn,'Csubmit',true);">设置字段对应</a></td>
									</tr>
								</volist>
								<tr><td class="textcenter pagebar" colspan="10">{$pagebar}</td></tr>
							<else/>
								<tr><td class="textcenter red" colspan="5">列表为空！</td></tr>
							</if>
						</tbody>
					</table>
				</div>
			</form>
		</div>
<include file="Public:footer"/>