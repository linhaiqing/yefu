<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>七牛云 - JavaScript SDK</title>
    <link href="http://jssdk.demo.qiniu.io/images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="static/phpsdk/qiniuupload/bootstrap.css">
    <link rel="stylesheet" href="static/phpsdk/qiniuupload/main.css">
</head>
<body>
    <div class="container" >
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="demo" aria-labelledby="demo-tab">
                <div class="row" style="margin-top: 20px;">
                    <input type="hidden" id="domain" value="{$demain}">
                    <input type="hidden" id="uptoken_url" value="<?php echo $token ?>">
                    <div class="col-md-12">
                        <div id="container">
                            <a class="btn btn-default btn-lg " id="pickfiles" href="#" >
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>选择文件</span>
                            </a>
                        </div>
                    </div>
                    <div style="display:none" id="success" class="col-md-12">
                        <div class="alert-success">
                            队列全部文件处理完毕
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <table class="table table-striped table-hover text-left"   style="margin-top:40px;display:none">
                            <thead>
                              <tr>
                                <th class="col-md-4">Filename</th>
                                <th class="col-md-2">Size</th>
                                <th class="col-md-6">Detail</th>
                              </tr>
                            </thead>
                            <tbody id="fsUploadProgress">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="static/phpsdk/qiniuupload/jquery.min.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/moxie.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/plupload.dev.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/zh_CN.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/ui.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/qiniu.js"></script>
<script type="text/javascript" src="static/phpsdk/qiniuupload/highlight.js"></script>
<script type="text/javascript">
$(function() {
    var uploader = Qiniu.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: 'pickfiles',
        container: 'container',
        drop_element: 'container',
        max_file_size: '10000mb',
        flash_swf_url: 'bower_components/plupload/js/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        multi_selection: !(mOxie.Env.OS.toLowerCase()==="ios"),
        uptoken : $('#uptoken_url').val(),
       
        domain: $('#domain').val(),
        get_new_uptoken: false,
         // unique_names: true,              // 默认false，key为文件名。若开启该选项，JS-SDK会为每个文件自动生成key（文件名）
        
        auto_start: true,
        log_level: 5,
        init: {
            'FilesAdded': function(up, files) {
                $('table').show();
                $('#success').hide();
                plupload.each(files, function(file) {
                    var progress = new FileProgress(file, 'fsUploadProgress');
                    progress.setStatus("等待...");
                    progress.bindUploadCancel(up);
                });
            },
            'BeforeUpload': function(up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                if (up.runtime === 'html5' && chunk_size) {
                    progress.setChunkProgess(chunk_size);
                }
            },
            'UploadProgress': function(up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                progress.setProgress(file.percent + "%", file.speed, chunk_size);
            },
            'UploadComplete': function() {
                $('#success').show();
            },
            'FileUploaded': function(up, file, info) {
                  // 每个文件上传成功后，处理相关的事情
               // 其中info是文件上传成功后，服务端返回的json，形式如：
               // {
               //    "hash": "Fh8xVqod2MQ1mocfI4S4KpRL6D98",
               //    "key": "gogopher.jpg"
               //  }
               // 查看简单反馈
               var domain = up.getOption('domain');
               var res = $.parseJSON(info);
               var sourceLink = domain +"/"+ res.key; //获取上传成功后的文件的Url
               
               
               //PluploadFile {id: "o_1bceugdnv1am4106vadp110iitm9", name: "下载.png", type: "image/png", size: 3993, origSize: 3993…}
               console.log(res);
               $.post("{:U('ajax_videoupload')}",{videoid:file.id,name:res.key,type:file.type,size:file.size,origsize:file.origSize,hash:res.hash,filename:file.name})
                var progress = new FileProgress(file, 'fsUploadProgress');
                progress.setComplete(up, info);
            },
           
            'Error': function(up, err, errTip) {
                $('table').show();
                var progress = new FileProgress(err.file, 'fsUploadProgress');
                progress.setError();
                progress.setStatus(errTip);
            }
            ,
             'Key': function(up, file) {
                var filename=file.name.split('.');
                filename=filename[1];
                var mydate = new Date();
                 var key ="{$time}"+'.'+filename;
                 // do something with key
                 return key
             }

              
        }
    });
    uploader.bind('FileUploaded', function() {
        console.log('hello man,a file is uploaded');
    });
    $('#container').on(
        'dragenter',
        function(e) {
            e.preventDefault();
            $('#container').addClass('draging');
            e.stopPropagation();
        }
    ).on('drop', function(e) {
        e.preventDefault();
        $('#container').removeClass('draging');
        e.stopPropagation();
    }).on('dragleave', function(e) {
        e.preventDefault();
        $('#container').removeClass('draging');
        e.stopPropagation();
    }).on('dragover', function(e) {
        e.preventDefault();
        $('#container').addClass('draging');
        e.stopPropagation();
    });
    $('#show_code').on('click', function() {
        $('#myModal-code').modal();
        $('pre code').each(function(i, e) {
            hljs.highlightBlock(e);
        });
    });
    $('body').on('click', 'table button.btn', function() {
        $(this).parents('tr').next().toggle();
    });
    var getRotate = function(url) {
        if (!url) {
            return 0;
        }
        var arr = url.split('/');
        for (var i = 0, len = arr.length; i < len; i++) {
            if (arr[i] === 'rotate') {
                return parseInt(arr[i + 1], 10);
            }
        }
        return 0;
    };
    $('#myModal-img .modal-body-footer').find('a').on('click', function() {
        var img = $('#myModal-img').find('.modal-body img');
        var key = img.data('key');
        var oldUrl = img.attr('src');
        var originHeight = parseInt(img.data('h'), 10);
        var fopArr = [];
        var rotate = getRotate(oldUrl);
        if (!$(this).hasClass('no-disable-click')) {
            $(this).addClass('disabled').siblings().removeClass('disabled');
            if ($(this).data('imagemogr') !== 'no-rotate') {
                fopArr.push({
                    'fop': 'imageMogr2',
                    'auto-orient': true,
                    'strip': true,
                    'rotate': rotate,
                    'format': 'png'
                });
            }
        } else {
            $(this).siblings().removeClass('disabled');
            var imageMogr = $(this).data('imagemogr');
            if (imageMogr === 'left') {
                rotate = rotate - 90 < 0 ? rotate + 270 : rotate - 90;
            } else if (imageMogr === 'right') {
                rotate = rotate + 90 > 360 ? rotate - 270 : rotate + 90;
            }
            fopArr.push({
                'fop': 'imageMogr2',
                'auto-orient': true,
                'strip': true,
                'rotate': rotate,
                'format': 'png'
            });
        }
        $('#myModal-img .modal-body-footer').find('a.disabled').each(function() {
            var watermark = $(this).data('watermark');
            var imageView = $(this).data('imageview');
            var imageMogr = $(this).data('imagemogr');
            if (watermark) {
                fopArr.push({
                    fop: 'watermark',
                    mode: 1,
                    image: 'http://www.b1.qiniudn.com/images/logo-2.png',
                    dissolve: 100,
                    gravity: watermark,
                    dx: 100,
                    dy: 100
                });
            }
            if (imageView) {
                var height;
                switch (imageView) {
                    case 'large':
                        height = originHeight;
                        break;
                    case 'middle':
                        height = originHeight * 0.5;
                        break;
                    case 'small':
                        height = originHeight * 0.1;
                        break;
                    default:
                        height = originHeight;
                        break;
                }
                fopArr.push({
                    fop: 'imageView2',
                    mode: 3,
                    h: parseInt(height, 10),
                    q: 100,
                    format: 'png'
                });
            }
            if (imageMogr === 'no-rotate') {
                fopArr.push({
                    'fop': 'imageMogr2',
                    'auto-orient': true,
                    'strip': true,
                    'rotate': 0,
                    'format': 'png'
                });
            }
        });
        var newUrl = Qiniu.pipeline(fopArr, key);
        var newImg = new Image();
        img.attr('src', 'images/loading.gif');
        newImg.onload = function() {
            img.attr('src', newUrl);
            img.parent('a').attr('href', newUrl);
        };
        newImg.src = newUrl;
        return false;
    });
});
</script>
<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
<div id="cntvlive2-is-installed"></div></body></html>