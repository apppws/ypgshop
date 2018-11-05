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
    <title>修改商品</title>
</head>

<body>
    <div class="clearfix" id="add_picture">
        {{-- <div id="scrollsidebar" class="left_Treeview">
            <div class="show_btn" id="rightArrow"><span></span></div>
            <div class="widget-box side_content">
                <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
                <div class="side_list">
                    <div class="widget-header header-color-green2">
                        <h4 class="lighter smaller">选择产品类型</h4>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div id="treeDemo" class="ztree"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="page_right_style" style="width:1192px">
            <div class="type_title">修改商品</div>
            <form action="{{ route('goods_doedit',['id'=>$data->id]) }}" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
                @csrf
                <div class=" clearfix cl">
                    <label class="form-label col-2">商品名称：</label>
                    <div class="formControls col-10"><input type="text" class="input-text" value="{{ $data->goods_name }}" placeholder="" id=""
                            name="goods_name"></div>
                </div>
                <div class=" clearfix cl">
                    <div class="Add_p_s">
                        <label class="form-label col-2">产品重量：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->weigth }}" placeholder=""
                                id="" name="weight">kg</div>
                    </div>
                    <div class="Add_p_s">
                            <label class="form-label col-2">产品长</label>
                            <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->length }}" placeholder=""
                                        id="" name="length">cm</div>
                            </div>
                    <div class="Add_p_s">
                            <label class="form-label col-2">产品宽</label>
                            <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->width }}" placeholder=""
                                        id="" name="width">cm</div>
                    </div>
                     <div class="Add_p_s">
                        <label class="form-label col-2">产品高：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->height }}" placeholder=""
                                        id="" name="height">cm</div>
                    </div>
                    <div class="Add_p_s">
                        <label class="form-label col-2">是否上架：</label>
                        <div class="formControls col-2">
                                <input @if($data->is_on_sale=='y') checked @endif id="btn-onsale" type="radio" name="is_on_sale" value="y"> 上架
                                <input @if($data->is_on_sale=='n') checked @endif id="btn-offsale" type="radio" name="is_on_sale" value="n"> 下架
                        </div>
                    </div>
                    <div class="Add_p_s">
                        <label class="form-label col-2">展示价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->shprice }}" placeholder=""
                                id="" name="shprice">元</div>
                    </div>
                    <div class="Add_p_s">
                        <label class="form-label col-2">市场价格：</label>
                        <div class="formControls col-2"><input type="text" class="input-text" value="{{ $data->maprice }}" placeholder=""
                                id="" name="maprice">元</div>
                    </div>
                </div>
                <div class="clearfix cl">
                        <label class="form-label col-2">商品分类：</label>
                        <div class="formControls col-10">
                            <select name="cat_id1" size="10">
                                <option value="" selected="selected">==一级分类==</option>
                                @foreach($topCat as $v)
                                <option @if($data->cat_id1==$v->id) selected="selected" @endif value="{{$v->id}}">
                                    {{$v->name}}
                                </option>
                                @endforeach
                            </select>
                            <select name="cat_id2" size="10">
                                <option value="" selected="selected">==二级分类==</option>
                                @foreach($secCat1 as $v)
                                    <option @if($data->cat_id2==$v->id) selected="selected" @endif value="{{$v->id}}">
                                        {{$v->name}}
                                    </option>
                                @endforeach
                            </select>
                            <select name="cat_id3" size="10">
                                <option value="" selected="selected">==三级分类==</option>
                                @foreach($secCat2 as $v)
                                    <option @if($data->cat_id3==$v->id) selected="selected" @endif value="{{$v->id}}">
                                        {{$v->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="clearfix cl">
                        <label class="form-label col-2">品牌：</label>
                        <div class="formControls col-10">

                            <select name="brand_id">
                                <option value="0" selected="selected">==选择品牌==</option>
                                @foreach($brandData as $v)
                                    <option @if($data->brand_id==$v->brands->id) selected="selected" @endif value="{{$v->brands->id}}">{{$v->brands->name}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="clearfix cl">
                    <label class="form-label col-2">商品描述：</label>
                    <div class="formControls col-10">
                        <textarea id="editor" value="{{ $data->goodDesc }}" autofocus style="width:100%;height:400px;">{{ $data->goodDesc }}</textarea>
                    </div>
                </div>
                <div class="clearfix cl">
                    <div class="Button_operation">
                        <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存并提交审核</button>
                        <button onClick="article_save();" class="btn btn-secondary  btn-warning" type="button"><i class="icon-save"></i>保存草稿</button>
                        <button  onclick="history.go(-1)" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
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
    </script>
    <script>
        var editor = new Simditor({
            textarea: $('#editor'),
            toolbar:[
                'title',
                'bold',
                'italic',
                'underline',
                'strikethrough',
                'fontScale',
                'color',
                'ol'    ,
                'ul'         ,
                'blockquote',
                'code'       ,
                'table',
                'link',
                'image',
                'hr'          ,
                'indent',
                'outdent',
                'alignment'
                ]
            });


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
                $(".page_right_style").width($(window).width() - 180);
            });
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

