     
          <div class="head">
       <div class="top1"> {if isset($auth)}欢迎您！　<a href="{$base_url}admin">{$auth}</a> | <a href="{$base_url}logout">退出</a>  {else}<a href="{$base_url}login">登录</a> | <a href="{$base_url}register">注册</a> | <a href="http://58.246.62.13:7001/">网上自助</a>  {/if}</div>
       <div class="logo"><img src="{$base_url}changan/images/logo.png" alt="" /></div>
       <div class="clear"></div>
     </div>
     
     <div class="nav">
      <ul>
      <li><a href="{$base_url}">网站首页</a></li>
		{foreach $category as $c}
        {if $c.parentid eq 0}

      <li class="fcd"><a href="{$base_url}{$c.dir}">{$c.title}</a>
      
      
      {foreach $category as $sub}
      {if $c.id eq $sub.parentid}
            
<ul id="xlzcd">
{foreach $category as $submenu}
{if $c.id eq $submenu.parentid}
          <li><a href="{$base_url}{$c.dir}/{$submenu.dir}">{$submenu.title}</a></li>
          {/if}
{/foreach}
 </ul>
        {break}
      {/if}
     
      {/foreach}</li>
 
        
        {/if}
        {/foreach}
        </ul>
     </div>