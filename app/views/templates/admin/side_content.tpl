<div id="side">
  <ul>
    <li class="sidemenu"> <a  href="javascript:;">分类管理</a></li>
    <ul class="submenu">
      <li class="selected"><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/category');">栏目列表</a></li>
          {foreach $category_model as $cm}
      <li><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/categorymodel/{$cm.id}');">{$cm.name}</a></li>
      {/foreach}
    </ul>
    <li class="sidemenu"> <a  href="javascript:;">内容管理</a></li>
    <ul class="submenu">
      {foreach $side_data as $side}
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/model/{$side.id}');">{$side.name}</a></li>
      {/foreach}
    </ul>
    	
       <li class="sidemenu"> <a  href="javascript:;">数据管理</a></li>
    <ul class="submenu">
    {foreach $data_model as $dm}
      <li><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/datamodel/{$dm.id}');">{$dm.name}</a></li>
      {/foreach}
    </ul> 
    <li class="sidemenu"> <a  href="javascript:;">模型管理</a></li>
    <ul class="submenu">
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/modelmanager');">内容模型管理</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/categorymanager');">分类模型管理</a></li>
      <li ><a   href="javascript:;"  onClick="javascript:CC(this,'{$base_url}admin/datamanager');">数据模型管理</a></li>
    </ul>
  </ul>
</div>
