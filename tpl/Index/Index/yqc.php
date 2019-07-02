<include file="Public:header"/>
<link rel="stylesheet" type="text/css" href="{$static_path}css/style1.css"/>
<link rel="stylesheet" type="text/css" href="{$static_path}css/bootstrap.min.css"/>
<style>
    a:focus {
        outline: none;
    }

    .pd {
        padding: 20px;
    }

    .title1 h3 {
        font-size: 22px;
        color: #000;
        line-height: 50px;
        letter-spacing: 8px;
        font-weight: bold;
    }

    .title1 h4 {
        font-size: 16px;
        color: #000;
        line-height: 40px;
        font-weight: bold;
    }

    .ny_food_c ul l {
        height: 550px;
    }

    .ny_food_c ul li img {
        height: 550px;
    }

    .ny_banner1 {
        width: 100%;
        height: auto;
        margin: 0 auto;
    }

    .ny_banner1 img {
        margin: 0 auto;
    }

    .t1 {
        width: 100%;
        height: auto;
    }

    .ny_banner1 img {
        width: 100%
    }

    .line {
        border-top: 1px solid red;
        width: 900px;
        text-align: center;
        margin: 20px auto
    }

    .panel-info > .panel-heading {
        color: #fff;
        background-color: #666;
        border-color: #666;
    }

    .panel-info {
        border-color: #666;
    }

    .btn-primary {
        color: #fff;
        background-color: #666;
        border-color: #666;
    }

    .page div > a, .page div > span {
        display: inline;
        position: relative;
        float: left;
        padding: 3px 6px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #666;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .panel-info {
        text-align: left;
    }

    .logo {
        padding: 0
    }

    .dt {
        position: absolute;
        right: 150px;
    }

    .dt1 {
        position: absolute;
        right: 65px;
        top: 150px;
    }

    .dt2 {
        position: absolute;
        right: 120px;
        top: 40px;
    }

    .dt3 {
        position: absolute;
        right: 300px;
        top: 70px;
    }

    /*S banner图切换*/
    .banner_all {
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
        z-index: 2;
        min-width: 980px;
    }

    .banner {
        width: 980px;
        height: 720px;
        margin: 0 auto;
        position: relative;
        zoom: 1;
    }

    .banner_center {
        width: 1920px;
        height: 726px;
        overflow: hidden;
        z-index: 0;
        position: relative;
        left: -470px;
        _display: inline;
    }

    .banner_center ul {
        width: 38400px;
        height: 677px;
        position: absolute;
        top: 0;
        left: 0;
    }

    .banner_center ul li {
        width: 1920px;
        height: 753px;
        float: left;
        overflow: hidden;
        display: block;
    }

    .banner_center ul a {
        width: 1920px;
        height: 659px;
        display: block;
    }

    .banner_btn {
        top: 680px
    }

    .comment_list {
        color: #777;
        text-decoration: none;
    }

    .comment_list ul li {
        color: #777;
        text-decoration: none;
    }

    a {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    a:active {
        text-decoration: none;
    }
</style>
<div class="banner_all">
    <div class="banner">
        <div class="banner_center">
            <ul>
                <li style="background:url({$static_path}images/banner_4.jpg)  "><a href="javascript:void(0)"></a></li>
                <li style="background:url({$static_path}images/banner_1.jpg)  "><a href="javascript:void(0)"></a></li>
                <!-- <li style="background:url({$static_path}images/banner_2.jpg)  "><a href="javascript:void(0)" ></a></li> -->
                <li style="background:url({$static_path}images/banner_3.jpg)  "><a href="javascript:void(0)"></a></li>
            </ul>
        </div>
        <div class="banner_btn">
            <ul>
                <li><a href="javascript:void(0)"></a></li>
                <li class=""><a href="javascript:void(0)"></a></li>
                <li class=""><a href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="dianji1">
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_01.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_02.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_03.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_04.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_05.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_06.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_07.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_08.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_09.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_10.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_11.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_12.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_13.jpg"></div>
     <div class="ny_banner1" style="position: relative;"><a href="javascript:;"><img src="{$static_path}pc6/1_14.jpg">
            <div class="dt1" id="dianji"><img src="{$static_path}images/1.gif" alt=""></div></div>
     <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_15.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_16.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_17.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_18.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_19.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_20.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_21.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_22.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_23.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_24.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_25.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_26.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_27.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_28.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_29.jpg"></div>
     <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_30.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_31.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_32.jpg"></div>
   <div class="ny_banner1" style="position: relative;"><a href="javascript:;"><img src="{$static_path}pc6/1_33.jpg">
            <div class="dt2" id="dianji"><img src="{$static_path}images/1.gif" alt=""></div></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_34.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_35.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_36.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_37.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_38.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_39.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_40.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_41.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_42.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_43.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_44.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_45.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_46.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_47.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_48.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_49.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_50.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_51.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_52.jpg"></div>

    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_53.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_54.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_55.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_56.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_57.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_58.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_59.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_60.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_61.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_62.jpg"></div>
     <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_63.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_64.jpg"></div>
     <div class="ny_banner1" style="position: relative;"><a href="javascript:;"><img src="{$static_path}pc6/1_65.jpg">
            <div class="dt3" id="dianji"><img src="{$static_path}images/1.gif" alt=""></div></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_66.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_67.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_68.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_69.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_70.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_71.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_72.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_73.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_74.jpg"></div>

    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_75.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_76.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_77.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_78.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_79.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_80.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_81.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_82.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_83.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_84.jpg"></div>
     <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_85.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_86.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_87.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_88.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_89.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_90.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_91.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_92.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_93.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_94.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_95.jpg"></div>
    <div class="ny_banner1"><a href="javascript:;"><img src="{$static_path}pc6/1_96.jpg"></div>


    <!--
          <div class="ny_banner1" style="position: relative;" ><a href="javascript:;" ><img src="{$static_path}pc6/1_92.jpg"><div class="dt1" id="dianji"><img src="{$static_path}images/1.gif" alt=""></div></div>
          <div class="ny_banner1" style="position: relative;" ><a href="javascript:;" ><img src="{$static_path}pc6/1_109.jpg"><div class="dt1" id="dianji"><img src="{$static_path}images/1.gif" alt=""></div></div> -->
</div>

<div class="ny_main">
    <div class="ny_about">
        <div class="w16" style="height: 900px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    在线留言
                </div>
                <div class="panel-body">
                    <form class="myform" action="{:U('comment')}" method="post" id="form1">
                        <div class="row form-group">
                            <div class="col-xs-6">
                                <input style="height:34px" class="form-control" type="text" name="name" id="name"
                                       value="" placeholder="请输入您的姓名" required="required"/>
                            </div>
                            <div class="col-xs-6">
                                <input style="height:34px" class="form-control" type="text" name="mobile" id="mobile"
                                       value="" placeholder="请输入您的手机号码" required="required"/>
                            </div>
                        </div>
                        <div class="row form-group ">
                            <div class="col-xs-12">
                                <textarea style="height:118px" class="form-control " name="demand" id="demand"
                                          placeholder="请输入您的留言" required="required" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row form-group ">
                            <div class="col-xs-12">
                                <input class="form-control yanzhenginput"
                                       style="height:34px;width: 180px;padding-left:80px;" type="text" name="verify"
                                       value="" placeholder="请输入验证码" required="required"/><img class="yanzheng"
                                                                                               src="{:U('verify')}"
                                                                                               id="verifyImg"
                                                                                               onclick="fleshVerify('{:U('verify')}')"
                                                                                               title="刷新验证码" alt="刷新验证码"
                                                                                               style="width: 70px;"/>
                            </div>
                        </div>
                        <div class="row form-group ">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-primary form-control">提交留言</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    最新留言
                </div>
                <div class="panel-body">
                    <ul class="list-group" id="list">
                        <div class="comment_list">

                        </div>
                        <li class="page" style="margin-left: 120px;">
                            <!-- <div>
                              <span class="current">1</span><a class="num" href="javascript:ajaxdata(2);">2</a>
                              <a class="num" href="/Touzi-index-p-3.html">3</a>
                              <a class="num" href="/Touzi-index-p-4.html">4</a><a class="num" href="/Touzi-index-p-5.html">5</a><a class="num" href="/Touzi-index-p-6.html">6</a><a class="num" href="/Touzi-index-p-7.html">7</a><a class="num" href="/Touzi-index-p-8.html">8</a><a class="num" href="/Touzi-index-p-9.html">9</a><a class="num" href="/Touzi-index-p-10.html">10</a><a class="num" href="/Touzi-index-p-11.html">11</a><a class="next" href="/Touzi-index-p-2.html">下一页</a><a class="end" href="/Touzi-index-p-165.html">165</a>
                            </div> -->
                            <div class="loadmore">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
<script type="text/javascript">

    $(function () {

        $('#dianji img').click(function () {
            hz6d_is_exist('setIsinvited()%3Bwindow.open(#liyc#https%3A%2F%2Fwww16.53kf.com%2FwebCompany.php%3Farg%3D10170576%26style%3D1%26language%3Dzh-cn%26charset%3Dgbk%26kflist%3Doff%26kf%3D%26zdkf_type%3D1%26lnk_overflow%3D0%26referer%3Dhttp%253A%252F%252Fot.com%252Fyqc.html%26keyword%3D%26tfrom%3D1%26tpl%3Dcrystal_blue%26uid%3Dc60875c6c66a11399b222c2000fe7f33%26is_group%3D%26is_group%3D#liyc#%2C%20#liyc#_blank#liyc#%2C%20#liyc#height%3D600%2Cwidth%3D800%2Ctop%3D50%2Cleft%3D200%2Cstatus%3Dyes%2Ctoolbar%3Dno%2Cmenubar%3Dno%2Cresizable%3Dyes%2Cscrollbars%3Dno%2Clocation%3Dno%2Ctitlebar%3Dno#liyc#)');
        })
    });


    function fleshVerify(url) {
        var time = new Date().getTime();
        $('#verifyImg').attr('src', url + "&time=" + time);
    }

    $(function () {
        /* 提示 */
        $('.btn-primary').on('click', function () {
            $.post("{:U('comment')}", $("#form1").serialize(), function (data) {
                if (data['status'] == 0) {
                    alert(data.info);
                } else {
                    alert(data.info);
                    window.location.reload();
                }
            })
        });
        ajaxdata(1);
    });

    function ajaxdata(page) {
        // 这里可以写些验证代码
        $.get("{:U('ajax_comment')}", {page: page}, function (data) {
            if (data.li == '') {
            } else {
                total = data.total; //总记录数
                pageSize = data.pageSize; //每页显示条数
                curPage = Number(page); //当前页
                totalPage = data.totalpage; //总页数
                $(".comment_list").html(data.li);
                getPageBar();
            }
        }, 'json');
    }

    function getPageBar() {
        var pageStr = '';
        //页码大于最大页数
        if (curPage > totalPage) curPage = totalPage;
        //页码小于1
        if (curPage < 1) curPage = 1;
        //如果是最后页
        if (curPage != 1) {
            pageStr += '<a class="num" href="javascript:ajaxdata(' + (curPage - 1) + ')">上一页</a>';
        }


        for (var i = curPage; i <= curPage + 5; i++) {
            if (i > totalPage) {
                continue;
            }
            pageStr += '<a class="num" href="javascript:ajaxdata(' + i + ')">' + i + '</a>';
        }
        if (curPage < totalPage) {
            pageStr += '<a class="num" href="javascript:ajaxdata(' + (curPage + 1) + ')">下一页</a>';
            // pageStr += '<a class="num" href="javascript:ajaxdata('+totalPage+')">'+totalPage+'</a>';
        }


        $(".loadmore").html(pageStr);
    }
</script>
<include file="Public:footer"/>
