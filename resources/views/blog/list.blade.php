<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/font/css/font-awesome.min.css" />
    <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/typeahead-bs2.min.js"></script>
    <script src="/js/lrtk.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="/assets/layer/layer.js" type="text/javascript"></script>
    <script src="/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="/js/H-ui.js" type="text/javascript"></script>
    <script src="/js/displayPart.js" type="text/javascript"></script>
    <title>文章管理</title>
</head>

<body>
    <div class="clearfix">
        <div class="article_style" id="article_style">
            <!--文章列表-->
            <div class="Ads_list">
                <div class="border clearfix">
                    <span class="l_f">
                        <a href="{{ route('blog_add') }}" title="添加文章" id="add_page" class="btn btn-warning"><i class="fa fa-plus"></i>
                            添加文章</a>
                        <a href="javascript:ovid()" onclick="del()" class="btn btn-danger"><i class="fa fa-trash"></i> 批量删除</a>
                    </span>
                    <span class="r_f">共：<b>45</b>条文章</span>
                </div>
                <div class="article_list">
                    <table class="table table-striped table-bordered table-hover" id="sample-table">
                        <thead>
                            <tr>
                                <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                                <th width="50px">ID</th>
                                <th width="50px">标题</th>
                                <th width="100">所属分类</th>
                                <th width="150px">图片</th>
                                <th width="150px">是否显示</th>
                                <th width="150px">添加时间</th>
                                <th width="150px">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as  $v)
                            <tr>
                                <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->title }}</td>
                                <td>
                                    @foreach ($blogcat as $v1 )
                                        @if( $v->cat_id == $v1->id)
                                        @php echo $v1['cat_name']; @endphp
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if($v->img)
                                    <img src="{{$v->img}}" width="130">
                                     @endif
                                </td>
                                <td class="displayPart" displayLength="60">{{ $v->is_show=='y'?'显示':'不显示'}}</td>
                                <td>{{ $v->created_at }}</td>
                                <td class="td-manage">
                                    <a title="编辑" href="{{ route('blog_edit',['id'=>$v->id]) }}" class="btn btn-xs btn-info">
                                        <i class="fa fa-edit bigger-120"></i>
                                    </a>
                                    <a title="删除" href="{{ route('blog_delete',['id'=>$v->id]) }}" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash  bigger-120"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{-- <script>
    $(function () {
        $(".displayPart").displayPart();
    });
    //面包屑返回值
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.iframeAuto(index);
    $('#add_page').on('click', function () {
        var cname = $(this).attr("title");
        var chref = $(this).attr("href");
        var cnames = parent.$('.Current_page').html();
        var herf = parent.$("#iframe").attr("src");
        parent.$('#parentIframe').html(cname);
        parent.$('#iframe').attr("src", chref).ready();;
        parent.$('#parentIframe').css("display", "inline-block");
        parent.$('.Current_page').attr({ "name": herf, "href": "javascript:void(0)" }).css({ "color": "#4c8fbd", "cursor": "pointer" });
        //parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+" class='iframeurl'>" + cnames + "</a>");
        parent.layer.close(index);

    });
    $(function () {
        var oTable1 = $('#sample-table').dataTable({
            "aaSorting": [[1, "desc"]],//默认第几个排序
            "bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                { "orderable": false, "aTargets": [0, 2, 3, 4, 5, 7,] }// 制定列不参与排序
            ]
        });
        $('table th input:checkbox').on('click', function () {
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function () {
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });
    })

    // $(function () {
    //     $("#article_style").fix({
    //         float: 'left',
    //         //minStatue : true,
    //         skin: 'green',
    //         durationTime: false,
    //         stylewidth: '220',
    //         spacingw: 30,//设置隐藏时的距离
    //         spacingh: 250,//设置显示时间距
    //         set_scrollsidebar: '.Ads_style',
    //         table_menu: '.Ads_list'
    //     });
    // });
    //初始化宽度、高度
    $(".widget-box").height($(window).height());
    $(".Ads_list").width($(window).width() - 20);
    //当文档窗口发生改变时 触发
    $(window).resize(function () {
        $(".widget-box").height($(window).height());
        $(".Ads_list").width($(window).width() - 20);
    });

    /*文章-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', { icon: 0, }, function (index) {
            $(obj).parents("tr").remove();
            layer.msg('已删除!', { icon: 1, time: 1000 });
        });
    }

</script> --}}
<script>
// 批量删除
function del()
{
    var checked = [];
    $('input:checkbox:checked').each(function(){
        checked.push($(this).val());
    });
    if(checked.length>=1)
    {
        for(let i=0;i<checked.length;i++)
        {
            $.ajax("/admin/artsort_delete?id="+checked[i]);
        }

        $('input:checkbox:checked').parents("tr").remove();

    }
    else
    {
        alert("请选择要删除的分类 ");
    }
}

</script>