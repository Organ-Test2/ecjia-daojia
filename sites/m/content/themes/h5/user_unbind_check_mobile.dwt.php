<?php
/*
Name: 绑定手机号码
Description: 绑定手机号码
Libraries: page_menu,page_header
*/
defined('IN_ECJIA') or header("HTTP/1.0 404 Not Found");exit('404 Not Found');
?>
<!-- {nocache} -->
<!-- {extends file="ecjia-touch.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.touch.user.init();
</script>
<!-- {/block} -->

<!-- {block name="main-content"} -->
<form class="ecjia-user ecjia-form ecjia-user-no-border-b" name="accountBind" action="{$form_url}" method="post">
    <div class="ecjia-input">
        <div class="input-li b_b b_t">
            {if $user.mobile_phone}
            <span class="input-fl">{t domain="h5"}手机号码{/t}</span>
            <span class="mobile_phone">{$user.mobile_phone}</span>
            <input class="get_code" type="button" id="get_code" value='{t domain="h5"}获取验证码{/t}' data-url="{url path='user/profile/get_code'}&type={$unbind_type}" />
            <input type="hidden" name="mobile" value="{$user.mobile_phone}" />
            {else}
            <span class="input-fl">{t domain="h5"}手机号码{/t}</span>
            <span class="mobile_phone">{t domain="h5"}请先去绑定手机号{/t}</span>
            <div class="bind_notice"><a class="external nopjax" href="{RC_Uri::url('user/profile/account_bind')}&type=mobile">{t domain="h5"}去绑定{/t}</a></div>
            {/if}
        </div>

        <div class="input-li">
            <span class="input-fl">{t domain="h5"}验证码{/t}</span>
            <input class="text_left" type="text" name="smscode" placeholder='{t domain="h5"}请输入手机验证码{/t}' value=""/>
        </div>
    </div>

    <div class="ecjia-button-top-list">
        <input type="hidden" name="id" value="{$id}">
        <input type="hidden" name="type" value="{$type}">
        <input class="btn btn-info" name="submit" type="submit" value='{t domain="h5"}确定{/t}'>
    </div>
</form>
<!-- {/block} -->
<!-- {/nocache} -->