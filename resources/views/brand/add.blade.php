<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加品牌</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/style1.css" />
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link href="/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
    <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/typeahead-bs2.min.js"></script>
    <script src="/assets/layer/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Widget/swfupload/swfupload.js"></script>
    <script type="text/javascript" src="/Widget/swfupload/swfupload.queue.js"></script>
    <script type="text/javascript" src="/Widget/swfupload/swfupload.speed.js"></script>
    <script type="text/javascript" src="/Widget/swfupload/handlers.js"></script>
</head>

<body>
    <div class=" clearfix">
    <form action="{{ route('brand_doadd') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div id="add_brand" class="clearfix">
            <div class="left_add">
                <div class="title_name">添加品牌</div>
                <div class="clearfix cl">
                        <label class="form-label col-2">商品分类：</label>
                </div>
                <ul class="add_conent">
                    <li class=" clearfix"><label class="label_name"><i>*</i>选择分类：</label>
                            <select name="cat_id1" size="10">
                                <option value="" selected="selected">==一级分类==</option>
                                @foreach($topCat as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach
                            </select>
                            <select name="cat_id2" size="10">
                                <option value="" selected="selected">==二级分类==</option>
                            </select>
                            <select name="cat_id3" size="10">
                                <option value="" selected="selected">==三级分类==</option>
                            </select>
                            单击三级分类添加/移除
                            <select id="category_id" name="category_id[]" size="10" multiple="multiple">==选中分类==</select>
                    </li>
                    <li class=" clearfix"><label class="label_name"><i>*</i>品牌名称：</label>
                        <input name="name" type="text" class="add_text" required / >
                    </li>
                    <li class=" clearfix"><label class="label_name">品牌图片：</label>
                        <!-- 预览图片 -->
                        <div class="add-article-box-content">
                            <div class="img-preview" style="display: block; width: 150px; height: 121px;z-index:10"><img src="/images/image.png" width="100px" alt="" height="100px" /></div>
                        </div>
                        <div class="demo l_f">
                            <div class="add-article-box-content">
                                <!-- 保存裁切时的区域信息 -->
                                <input type="hidden" name="x" id="x">
                                <input type="hidden" name="y" id="y">
                                <input type="hidden" name="w" id="w">
                                <input type="hidden" name="h" id="h">
                                <!-- 选择图片 -->
                                <input type="file" class="form-control" placeholder="点击按钮选择图片" id="logo" name="logo" autocomplete="off"
                                required>
                            </div>
                        </div>
                        <div class="prompt">
                            <p>图片大小<b>120px*60px</b>图片大小小于5MB,</p>
                            <p>支持.jpg;.gif;.png;.jpeg格式的图片</p>
                        </div>
                    </li>
                    <li class=" clearfix"><label class="label_name"><i>*</i>产地：</label>
                        <input name="chandi" type="text" class="add_text" style="width:120px" /></li>
                    <li class=" clearfix"><label class="label_name">品牌描述：</label>
                        <textarea name="note" cols="" rows="" class="textarea" onkeyup="checkLength(this);"></textarea>
                        <span class="wordage">品牌描述：
                            <span id="sy" style="color:Red;">500</span>字
                        </span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="button_brand">
            <input name="" type="submit" class="btn btn-warning" value="保存" />
            <input name="" type="reset" value="取消" class="btn btn-warning" />
        </div>
        </form>
    </div>

<!-- 照片裁切显示原图 -->
<div class="cut-img-container">
        <img id="image" src="" alt="Picture">
      </div>
</body>

</html>
<!-- 裁切图片 -->
<link rel="stylesheet" href="/cropper/cropper.css">
<script src="/cropper/cropper.js"></script>
<script>
  var image = $('#image');
  // 原图显示的位置
  var img_container = $('.cut-img-container');
  // 缩略图显示的位置
  var img_preview = $('.img-preview');
  // 坐标
  var x = $('#x');
  var y = $('#y');
  var w = $('#w');
  var h = $('#h');
  // 点击时 停止冒泡事件
  $('.cut-img-container').click(function () {
    event.stopPropagation()
  });
  $(document).on('click', ':not(.cut-img-container)', function () {
    img_container.css('display', 'none');
  })
  // 选择图片的时候调用cropper插件
  $("input[name=logo]").change(function () {
    // console.log(x);
    img_container.css('display', 'block');
    img_preview.css('display', 'block');
    // 先清除一下插件
    image.cropper('destroy');
    // 图片保存的路径
    var url = getObjectUrl(this.files[0]);
    // alert(url);
    image.attr('src', url);

    // 调用插件
    image.cropper({
      aspectRatio: 1,         // 裁切的框形状
      preview: '.img-preview',    // 显示预览的位置
      viewMode: 1,                // 显示模式：图片不能无限缩小，但可以放大
      // 裁切时把参数保存到表单中
      crop: function (event) {
        x.val(event.detail.x);
        y.val(event.detail.y);
        w.val(event.detail.width);
        h.val(event.detail.height);
      }
    })
  });


  // 预览时需要使用下面这个函数转换一下
  function getObjectUrl(file) {
    var url = null;
    if (window.createObjectURL != undefined) {
      url = window.createObjectURL(file)
    } else if (window.URL != undefined) {
      url = window.URL.createObjectURL(file)
    } else if (window.webkitURL != undefined) {
      url = window.webkitURL.createObjectURL(file)
    }
    return url
  }
</script>
 <script>
        // 三级联动
        $('select[name=cat_id1]').change(function(){
            var s2 = $('select[name=cat_id2]');
            var html = '<option value="" selected="selected">==二级分类==</option>';
            // 如果这个值为空就在就获取显示二级分类
            if($(this).val()==''){
                s2.html(html);
            }else{
                    $.ajax({
                        type:"GET",
                        url:"/subcat/"+$(this).val(),
                        dataType:"json",
                        contentType:"application/json",
                        success:function(data)
                        {
                            $(data).each(function(k,v){
                                html += '<option value="'+v.id+'">'+v.name+'</option>';
                            });
                            s2.html(html);
                        }
                    });
            }
        });
        $('select[name=cat_id2]').change(function(){
            var s3 = $('select[name=cat_id3]');
            var html = '<option value="" selected="selected">==三级分类==</option>';
            // 如果这个值为空就在就获取显示二级分类
            if($(this).val()==''){
                s3.html(html);
            }else{
                    $.ajax({
                        type:"GET",
                        url:"/subcat1/"+$(this).val(),
                        dataType:"json",
                        contentType:"application/json",
                        success:function(data)
                        {
                            $(data).each(function(k,v){
                                html += '<option value="'+v.id+'">'+v.name+'</option>';
                            });
                            s3.html(html);
                        }
                    });
            }
        });

        // 实现双击选中的公
        $("select[name=cat_id3]").click(function(){
            var s = $("#category_id");
            if($(this).val()>0)
            {
                s.append($(this).find(":selected").clone().prop('selected',true));
            }
        });
        $("#category_id").click(function(){
            $(this).find(":selected").remove();
            $("#category_id option").prop('selected',true);
        })
    </script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".left_add").height($(window).height() - 60);
        $(".right_add").width($(window).width() - 600);
        $(".right_add").height($(window).height() - 60);
        $(".select").height($(window).height() - 195);
        $("#select_style").height($(window).height() - 220);
        //当文档窗口发生改变时 触发
        $(window).resize(function () {
            $(".right_add").width($(window).width() - 600);
            $(".left_add").height($(window).height() - 60);
            $(".right_add").height($(window).height() - 60);
            $(".select").height($(window).height() - 195);
            $("#select_style").height($(window).height() - 220);
        });
    })
    function checkLength(which) {
        var maxChars = 500;
        if (which.value.length > maxChars) {
            layer.open({
                icon: 2,
                title: '提示框',
                content: '您出入的字数超多限制!',
            });
            // 超过限制的字数了就将 文本框中的内容按规定的字数 截取
            which.value = which.value.substring(0, maxChars);
            return false;
        } else {
            var curr = maxChars - which.value.length; // 减去 当前输入的
            document.getElementById("sy").innerHTML = curr.toString();
            return true;
        }
    }
    //下拉框交换JQuery
    $(function () {
        //移到右边
        $('#add').click(function () {
            //获取选中的选项，删除并追加给对方
            $('#select1 option:selected').appendTo('#select2');
        });
        //移到左边
        $('#remove').click(function () {
            $('#select2 option:selected').appendTo('#select1');
        });
        //全部移到右边
        $('#add_all').click(function () {
            //获取全部的选项,删除并追加给对方
            $('#select1 option').appendTo('#select2');
        });
        //全部移到左边
        $('#remove_all').click(function () {
            $('#select2 option').appendTo('#select1');
        });
        //双击选项
        $('#select1').dblclick(function () { //绑定双击事件
            //获取全部的选项,删除并追加给对方
            $("option:selected", this).appendTo('#select2'); //追加给对方
        });
        //双击选项
        $('#select2').dblclick(function () {
            $("option:selected", this).appendTo('#select1');
        });
    });
    var user = [{ "id": 1, "name": "贝德玛（Bioderma）温和卸妆水净妍/舒妍洁肤液卸妆水 ", "status": "关闭" },
    { "id": 2, "name": "欧诗漫 OSM 奢华金萃臻贵娇宠礼盒", "status": "关闭" },
    { "id": 3, "name": "舒蕾洗发水奢养精油套装", "status": "关闭" },
    { "id": 4, "name": "雅芳小黑裙香体乳150g", "status": "关闭" },
    { "id": 5, "name": "嘉媚乐（CAMENAE）玫瑰之爱保", "status": "启用" },
    { "id": 6, "name": "欧莱雅男士护肤套装 劲能极速活肤液50ml", "status": "启用" },
    { "id": 7, "name": "美即 面膜 净透亮肤套装面膜贴升级版", "status": "启用" },
    { "id": 8, "name": "可悠然（KUYURA）美肌沐浴露（欣怡幽香）550ml ", "status": "启用" },
    { "id": 9, "name": "李施德林漱口水冰蓝口味500ml双包装", "status": "启用" },
    { "id": 10, "name": "吕(Ryo)滋养韧发密集莹韧[滋润型]洗护套装 ", "status": "启用" },
    { "id": 11, "name": "美宝莲（MAYBELLINE）气垫BB", "status": "关闭" },
    { "id": 12, "name": "I'M CONCEALER我爱水润遮瑕液 #02 自然肤色", "status": "启用" },
    { "id": 13, "name": "Apple iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G手机", "status": "启用" },
    { "id": 14, "name": "小米 Max 全网通 高配版 3GB内存 64GB ROM 金色 移动联通电信4G手机 ", "status": "启用" },
    { "id": 15, "name": "OPPO R9 4GB+64GB内存版 玫瑰金 全网通4G手机 双卡双待", "status": "启用" },
    { "id": 16, "name": "华为 P9 全网通 3GB+32GB版 流光金 移动联通电信4G手机 双卡双待 ", "status": "启用" },
    { "id": 17, "name": "华为 Mate 8 3GB+32GB版 月光银 移动联通电信4G手机 双卡双待", "status": "启用" },
    { "id": 18, "name": "努比亚(nubia)【3+64GB】小牛5 Z11mini 白色 移动联通电信4G手机 双卡双待", "status": "启用" },
    { "id": 19, "name": "三星 Galaxy A9 (SM-A9100) 魔幻金 全网通4G手机 双卡双待 ", "status": "启用" },
    { "id": 20, "name": "华为 畅享5 梦幻金 移动联通电信4G手机 双卡双待", "status": "关闭" }];
    $(document).ready(function () {
        var seach = $("#seach");

        seach.keyup(function (event) {
            //获取当前文本框的值
            var seachText = $("#seach").val();
            var product = "<div class='title_name'>产品名称</div><select multiple='multiple' id='select1' class='select'>";
            if (seachText != "") {
                $.each(user, function (id, item) {
                    //如果包含则为select赋值
                    if (item.name.indexOf(seachText) != -1 && item.status.indexOf(seachText) != -1) {
                        product += "<option value=" + item.id + ">" + "(" + item.status + ")" + item.name + "</option>";
                    }
                })
                $("#select_style").html(product);
            }
            else {
                $.each(user, function (id, item) {
                    name = item.name;
                    status = item.status;
                    product += "<option value=" + item.id + ">" + "(" + item.status + ")" + item.name + "</option>";
                })
                $("#select_style").html(product);
            }
            product + "</select>";
        });

        var product = "<div class='title_name'>产品名称</div>";

        product += "<select multiple='multiple' id='select1' class='select'";
        $.each(user, function (id, item) {
            name = item.name;
            status = item.status;
            product += "<option value=" + item.id + " title=" + item.name + ">" + "(" + item.status + ")" + item.name + "</option>";

        })
        product + "</select>";
        $("#select_style").html(product);




    })
</script>
<script type="text/javascript">
    function updateProgress(file) {
        $('.progress-box .progress-bar > div').css('width', parseInt(file.percentUploaded) + '%');
        $('.progress-box .progress-num > b').html(SWFUpload.speed.formatPercent(file.percentUploaded));
        if (parseInt(file.percentUploaded) == 100) {
            // 如果上传完成了
            $('.progress-box').hide();
        }
    }

    function initProgress() {
        $('.progress-box').show();
        $('.progress-box .progress-bar > div').css('width', '0%');
        $('.progress-box .progress-num > b').html('0%');
    }

    function successAction(fileInfo) {
        var up_path = fileInfo.path;
        var up_width = fileInfo.width;
        var up_height = fileInfo.height;
        var _up_width, _up_height;
        if (up_width > 120) {
            _up_width = 120;
            _up_height = _up_width * up_height / up_width;
        }
        $(".logobox .resizebox").css({ width: _up_width, height: _up_height });
        $(".logobox .resizebox > img").attr('src', up_path);
        $(".logobox .resizebox > img").attr('width', _up_width);
        $(".logobox .resizebox > img").attr('height', _up_height);
    }

    var swfImageUpload;
    $(document).ready(function () {
        var settings = {
            flash_url: "/Widget/swfupload/swfupload.swf",
            flash9_url: "/Widget/swfupload/swfupload_fp9.swf",
            upload_url: "upload.php",// 接受上传的地址
            file_size_limit: "5MB",// 文件大小限制
            file_types: "*.jpg;*.gif;*.png;*.jpeg;",// 限制文件类型
            file_types_description: "图片",// 说明，自己定义
            file_upload_limit: 100,
            file_queue_limit: 0,
            custom_settings: {},
            debug: false,
            // Button settings
            button_image_url: "/Widget/swfupload/upload-btn.png",
            button_width: "95",
            button_height: "30 ",
            button_placeholder_id: 'uploadBtnHolder',
            button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
            button_cursor: SWFUpload.CURSOR.HAND,
            button_action: SWFUpload.BUTTON_ACTION.SELECT_FILE,

            moving_average_history_size: 40,

            // The event handler functions are defined in handlers.js
            swfupload_preload_handler: preLoad,
            swfupload_load_failed_handler: loadFailed,
            file_queued_handler: fileQueued,
            file_dialog_complete_handler: fileDialogComplete,
            upload_start_handler: function (file) {
                initProgress();
                updateProgress(file);
            },
            upload_progress_handler: function (file, bytesComplete, bytesTotal) {
                updateProgress(file);
            },
            upload_success_handler: function (file, data, response) {
                // 上传成功后处理函数
                var fileInfo = eval("(" + data + ")");
                successAction(fileInfo);
            },
            upload_error_handler: function (file, errorCode, message) {
                alert('上传发生了错误！');
            },
            file_queue_error_handler: function (file, errorCode, message) {
                if (errorCode == -110) {
                    alert('您选择的文件太大了。');
                }
            }
        };
        swfImageUpload = new SWFUpload(settings);
    });
</script>
