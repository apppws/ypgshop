<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css"/>
        <link href="/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
			<script src="assets/js/jquery.min.js"></script>
		<!-- <![endif]-->
		<!--[if IE]>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script src="/assets/js/ace-elements.min.js"></script>
		<script src="/assets/js/ace.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/typeahead-bs2.min.js"></script>
        <script type="text/javascript" src="/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script>
        <script src="/js/lrtk.js" type="text/javascript" ></script>
<title>分类管理</title>
</head>

<body>
<div class=" clearfix">
 <div id="category">
    <div id="scrollsidebar" class="left_Treeview">
    <div class="show_btn" id="rightArrow"><span></span></div>
    <div class="widget-box side_content" w >
    <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
     <div class="side_list">
      <div class="widget-header header-color-green2">
          <h4 class="lighter smaller">产品类型列表</h4>
      </div>
      <div class="widget-body" style="width:300px">
              <table cellpadding='3' style="width:100%;">
                  <tr>
                      <th width='25'></th>
                      <th width='35'>编号</th>
                      <th>分类名称</th>
                      <th width='80'>操作</th>
                  </tr>
                  @foreach ( $data as $v)
                  <tr class="sub">
                    <td>
                      <a onclick="return subcat(this,{{$v->id}});" href="#">[+]</a>
                    </td>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->name }}</td>
                    <td>

                        <a href="/category/edit/{{ $v->id }}">修改</a>
                        <a onclick="return confirm('确定要删除吗?');" href="/category/delete?id={{$v->id}}">删除</a>
                    </td>
                </tr>
                  @endforeach

              </table>
  </div>
  </div>
  </div>
  </div>
<!---->
 <iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="{{ route('categoryadd') }}" class="page_right_style"></iframe>
 </div>
</div>
</body>
</html>
<script type="text/javascript">
$(function() {
	$("#category").fix({
		float : 'left',
		//minStatue : true,
		skin : 'green',
		durationTime :false
	});
});
</script>
<script>
    function subcat(a,cid){
        // 判断如果是[+]  就展开显示
        if($(a).html()=="[+]"){
            if($(a).attr('cached')){
                $(a).parent().parent().nextUntil('.sub').show();
            }else{
            // 获取这个tr 并进行显示
                var tr = $(a).parent().parent();
                console.log(tr);
                $.ajax({
                    type:'GET',
                    url:"/subcat/"+cid,
                    success:function(data){
                        // console.log(1);
                        var html='';
                        $(data).each(function(k,v){
                            html+='<tr class="sub1"> <td></td> <td>'+v.id+'</td> <td>------- <a class="a" onclick="return subcat1(this,'+v.id+');" href="#">[+]</a> '+v.name+'</td> <td> <a href="/category/edit/'+v.id+'">编辑</a> <a onclick="return confirm(\'确定要删除吗?\');" href="/category/delete/'+v.id+'">删除</a> </td> </tr>'; ;
                            tr.after(html);
                            $(a).attr('cached',1);
                        });
                    }
                })
                $(a).html('[-]');
            }
        }else{
            $(a).parent().parent().nextUntil('.sub').filter('sub1').find('.a').html('[+]');
            $(a).parent().parent().nextUntil('.sub').hide();
            $(a).html('[+]');
            return false;
        }

    }


    function subcat1(a,cid)
{
    if($(a).html()=='[+]')
    {
        if($(a).attr('cached'))
        {
            $(a).parent().parent().nextUntil('.sub1').show();
        }
        else
        {
            var tr = $(a).parent().parent();
            $.ajax({
                type:'GET',
                url:"/subcat1/"+cid,
                success:function(data)
                {
                    var h='';
                    $(data).each(function(k,v){
                        h+='<tr class="sub2"> <td></td> <td>'+v.id+'</td> <td>------------------'+v.name+'</td> <td> <a href="/category/edit/'+v.id+'">编辑</a> <a onclick="return confirm(\'确定要删除吗?\');" href="/category/delete/'+v.id+'">删除</a> </td> </tr>';
                    });
                    tr.after(h);
                    $(a).attr('cached',1);
                }
            });
        }
        $(a).html('[-]');
    }
    else
    {
        var tr = $(a).parent().parent();
        // 如果有子分类就隐藏
        if(tr.next('.sub2').length>0)
            tr.nextUntil('.sub1').hide();

        $(a).html('[+]');
    }
    return false;
}


</script>
<script type="text/javascript">
//初始化宽度、高度
 $(".widget-box").height($(window).height());
 $(".page_right_style").width($(window).width()-220);
  //当文档窗口发生改变时 触发
    $(window).resize(function(){
	$(".widget-box").height($(window).height());
	 $(".page_right_style").width($(window).width()-220);
	})

/**************/
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pId",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("tree");
			if (treeNode.isParent) {
				zTree.expandNode(treeNode);
				return false;
			} else {
				demoIframe.attr("src",treeNode.file + ".html");
				return true;
			}
		}
	}
};

var code;

function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}

</script>
