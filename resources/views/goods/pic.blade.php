<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<script type="text/javascript" src="js/PIE_IE678.js"></script>
<![endif]-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
    <link href="/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="/Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/simditor-2.3.6/styles/simditor.css" />
    <title>新增图片</title>
</head>

<body>
        <div class="clearfix" id="add_picture">
                <div class="page_right_style">
                    <div class="type_title">商品图片</div>
                    <form action="{{ route('dopic',['id'=>$goods_id]) }}" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
                        @csrf
                        <div class=" clearfix cl">
                                <label class="form-label col-2">选择规格sku：</label>
                                <div id="goods-sku">
                                    <select name="sku_id" id="">
                                        <option value="0">==选择规格==</option>
                                        @foreach ($sku as $v)
                                            <option value="{{ $v->sku_id }}">{{$v->goods_attr_list}}</option>
                                        @endforeach
                                    </select>
                                    <div style="clear: both;"></div>
                                </div>
                        </div>
                        {{-- <div class=" clearfix cl">
                            <label class="form-label col-2">商品图片：</label>
                            <div id="goods-stock-container">
                                    <input id="btn-upload" type="button" value="上传图片"> --}}
                                    {{-- <img src="" alt=""> --}}
                                    {{-- <ul id="pic-list" goods_id="{{$goods_id}}" csrf_token="{{csrf_token()}}">
                                        @foreach($data as $v)
                                        <li>
                                            <img src="{{'/upload/'.$v->mid_pic}}" alt="" width="150px" height="150px">
                                            <a href="javascript:" onclick="del(this,{{$v->id}})">删除</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div style="clear: both;"></div>
                            </div>
                        </div> --}}

                        <div class=" clearfix cl">
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
                                    <input type="file" class="form-control" placeholder="点击按钮选择图片" id="fileList" name="fileList" autocomplete="off"
                                    required>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix cl">
                            <div class="Button_operation">
                                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存并提交审核</button>
                                <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i class="icon-save"></i>保存草稿</button>
                                <button onclick="history.go(-1)" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                            </div>
                        </div>
                        <!-- 照片裁切显示原图 -->
                        <div class="cut-img-container">
                                <img id="image" src="" alt="Picture">
                        </div>
                    </form>
                </div>
            </div>

    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/typeahead-bs2.min.js"></script>
    <script src="/assets/layer/layer.js" type="text/javascript"></script>
    <script src="/assets/laydate/laydate.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Widget/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="/Widget/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
    <script type="text/javascript" src="/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script type="text/javascript" src="/Widget/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="/simditor-2.3.6/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="/simditor-2.3.6/scripts/module.js"></script>
    <script type="text/javascript" src="/simditor-2.3.6/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="/simditor-2.3.6/scripts/uploader.js"></script>
    <script type="text/javascript" src="/simditor-2.3.6/scripts/simditor.js"></script>
    <script src="/js/lrtk.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/H-ui.js"></script>
    <script type="text/javascript" src="/js/H-ui.admin.js"></script>
    <script src="/Js/jquery-3.2.1.min.js"></script>
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
  $("input[name=fileList]").change(function () {
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
    // $('#btn-upload').on('click', function(){
    //     layer.open({
    //     type: 2,
    //     title: '上传新图片',
    //     area: ['850px', '650px'],
    //     content: '/goods/uploader'
    //     });
    // });
    function del(a,id)
    {
        if(confirm('确定要删除吗?'))
        {
            $.ajax({
                type:"GET",
                url:"/goods/del_pic/"+id,
                success:function(data)
                {
                    $(a).parent().remove();
                }
            });
        }
    }
    </script>
    <script>
        $(function () {
            $("#add_picture").fix({
                float: 'left',
                skin: 'green',
                durationTime: false,
                stylewidth: '220',
                spacingw: 0,
                spacingh: 260,
            });
        });
        $(document).ready(function () {
            //初始化宽度、高度

            $(".widget-box").height($(window).height());
            $(".page_right_style").height($(window).height());
            $(".page_right_style").width($(window).width() - 70);
            //当文档窗口发生改变时 触发
            $(window).resize(function () {

                $(".widget-box").height($(window).height());
                $(".page_right_style").height($(window).height());
                $(".page_right_style").width($(window).width() - 70);
            });
        });
        $(function () {
            var ue = UE.getEditor('editor');
        });
        /******树状图********/
        var setting = {
            view: {
                dblClickExpand: false,
                showLine: false,
                selectedMulti: false
            },
            data: {
                simpleData: {
                    enable: true,
                    idKey: "id",
                    pIdKey: "pId",
                    rootPId: ""
                }
            },
            callback: {
                beforeClick: function (treeId, treeNode) {
                    var zTree = $.fn.zTree.getZTreeObj("tree");
                    if (treeNode.isParent) {
                        zTree.expandNode(treeNode);
                        return false;
                    } else {
                        demoIframe.attr("src", treeNode.file + ".html");
                        return true;
                    }
                }
            }
        };

        var zNodes = [
            { id: 1, pId: 0, name: "商城分类列表", open: true },
            { id: 11, pId: 1, name: "蔬菜水果" },
            { id: 111, pId: 11, name: "蔬菜" },
            { id: 112, pId: 11, name: "苹果" },
            { id: 113, pId: 11, name: "大蒜" },
            { id: 114, pId: 11, name: "白菜" },
            { id: 115, pId: 11, name: "青菜" },
            { id: 12, pId: 1, name: "手机数码" },
            { id: 121, pId: 12, name: "手机 " },
            { id: 122, pId: 12, name: "照相机 " },
            { id: 13, pId: 1, name: "电脑配件" },
            { id: 131, pId: 13, name: "手机 " },
            { id: 122, pId: 13, name: "照相机 " },
            { id: 14, pId: 1, name: "服装鞋帽" },
            { id: 141, pId: 14, name: "手机 " },
            { id: 42, pId: 14, name: "照相机 " },
        ];

        var code;

        function showCode(str) {
            if (!code) code = $("#code");
            code.empty();
            code.append("<li>" + str + "</li>");
        }
        $(document).ready(function () {
            var t = $("#treeDemo");
            t = $.fn.zTree.init(t, setting, zNodes);
            demoIframe = $("#testIframe");
            //demoIframe.bind("load", loadReady);
            var zTree = $.fn.zTree.getZTreeObj("tree");
            //zTree.selectNode(zTree.getNodeByParam("id",'11'));
        });
    </script>

</body>

</html>

