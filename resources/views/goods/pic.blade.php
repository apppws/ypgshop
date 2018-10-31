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
                    <form action="" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
                        @csrf
                        <div class=" clearfix cl">
                            <label class="form-label col-2">商品图片：</label>
                            <div id="goods-stock-container">
                                    <input id="btn-upload" type="button" value="上传图片">
                                    {{-- <img src="" alt=""> --}}
                                    <ul id="pic-list" goods_id="{{$goods_id}}" csrf_token="{{csrf_token()}}">
                                        @foreach($data as $v)
                                        <li>
                                            <img src="{{'/upload/'.$v->mid_pic}}" alt="" width="150px" height="150px">
                                            <a href="javascript:" onclick="del(this,{{$v->id}})">删除</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div style="clear: both;"></div>
                            </div>
                        </div>
                        <div class="clearfix cl">
                            <div class="Button_operation">
                                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存并提交审核</button>
                                <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i class="icon-save"></i>保存草稿</button>
                                <button onclick="history.go(-1)" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                            </div>
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
    <script>
    $('#btn-upload').on('click', function(){
        layer.open({
        type: 2,
        title: '上传新图片',
        area: ['850px', '650px'],
        content: '/goods/uploader'
        });
    });
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

