<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | 定义所有topapi api接口路由
    |--------------------------------------------------------------------------
    | v1 表示API版本号
    | theme.modules API调用方法
    | topapi_api_v1_theme_modules API实现类默认调用handle方法
     */
    'routes' => array(
        'v1' => [
            'region.json' => ['uses'=>'topapi_api_v1_regionJson'],
            //物流模块
            //
            'logistics.list.get' => ['uses' => 'topapi_api_v1_logistics_list', 'auth' => true],
            'logistics.send'     => ['uses' => 'topapi_api_v1_logistics_send', 'auth' => true],
            'logistics.get'      => ['uses' => 'topapi_api_v1_logistics_get',  'auth' => true],
            'logistics.ziti.list'=> ['uses' => 'topapi_api_v1_logistics_ziti_list', 'auth' => true],

            // 模板模块
            'theme.modules'         => ['uses'=>'topapi_api_v1_theme_modules'],

            // 类目
            'category.itemCategory' => ['uses'=>'topapi_api_v1_category_itemCategory'],

            //用户登录注册
            'user.login'                => ['uses' => 'topapi_api_v1_user_login'],
            'user.logout'               => ['uses' => 'topapi_api_v1_user_logout', 'auth'  => true],
            'user.create'               => ['uses' => 'topapi_api_v1_user_create'],
            'user.signup'               => ['uses' => 'topapi_api_v1_user_signup'],
            'user.license'              => ['uses' => 'topapi_api_v1_user_license'],
            'user.protocol'             => ['uses' => 'topapi_api_v1_user_useProtocol'],
            'user.verifyAccount'        => ['uses' => 'topapi_api_v1_user_verifyAccount'],
            'user.sendSms'              => ['uses' => 'topapi_api_v1_user_sendSms'],
            'user.verifySms'            => ['uses' => 'topapi_api_v1_user_verifySms'],
            'user.vcode'                => ['uses' => 'topapi_api_v1_user_vcode'],
            'user.forgot.resetpassword' => ['uses' => 'topapi_api_v1_user_resetPassword'],
            'user.trust.dcloudlogin'    => ['uses' => 'topapi_api_v1_user_dcloudtrustlogin'],//dcloud上面的微信等信任登录
            'user.trust.bindUser' => ['uses' => 'topapi_api_v1_user_bindUser'],//信任登录绑定老用户

            //会员中心
            'member.index'         => ['uses' => 'topapi_api_v1_member_index',        'auth' => true],
            'member.basics.update' => ['uses' => 'topapi_api_v1_member_updateBasics', 'auth' => true],
            'member.basics.get'    => ['uses' => 'topapi_api_v1_member_getBasics',    'auth' => true],
            'member.setAccount'    => ['uses' => 'topapi_api_v1_member_setAccount',   'auth' => true],

            //收货地址
            'member.address.list'       => ['uses' => 'topapi_api_v1_member_address_list',       'auth' => true],
            'member.address.get'        => ['uses' => 'topapi_api_v1_member_address_get',        'auth' => true],
            'member.address.create'     => ['uses' => 'topapi_api_v1_member_address_create',     'auth' => true],
            'member.address.update'     => ['uses' => 'topapi_api_v1_member_address_update',     'auth' => true],
            'member.address.delete'     => ['uses' => 'topapi_api_v1_member_address_delete',     'auth' => true],
            'member.address.setDefault' => ['uses' => 'topapi_api_v1_member_address_setDefault', 'auth' => true],

            //优惠券列表
            'member.coupon.list' => ['uses'=>'topapi_api_v1_member_coupon_list', 'auth'=>true],
            //积分明细
            'member.point.detail' => ['uses'=>'topapi_api_v1_member_point_detail', 'auth'=>true],

            'member.aftersales.list'          => ['uses' => 'topapi_api_v1_member_aftersales_list',         'auth' => true],
            'member.aftersales.get'           => ['uses' => 'topapi_api_v1_member_aftersales_get',          'auth' => true],
            'member.aftersales.applyInfo.get' => ['uses' => 'topapi_api_v1_member_aftersales_getApplyInfo', 'auth' => true],
            //'member.aftersales.apply'         => ['uses' => 'topapi_api_v1_member_aftersales_apply',        'auth' => true],

            'member.favorite.all'             => ['uses' => 'topapi_api_v1_member_favorite_all',        'auth' => true],
            'member.favorite.item.list'       => ['uses' => 'topapi_api_v1_member_favorite_item',       'auth' => true],
            'member.favorite.item.status'       => ['uses' => 'topapi_api_v1_member_favorite_itemStatus',       'auth' => true],
            'member.favorite.item.remove'     => ['uses' => 'topapi_api_v1_member_favorite_removeItem', 'auth' => true],
            'member.favorite.item.add'        => ['uses' => 'topapi_api_v1_member_favorite_addItem',    'auth' => true],
            'member.favorite.shop.list'       => ['uses' => 'topapi_api_v1_member_favorite_shop',       'auth' => true],
            'member.favorite.shop.remove'     => ['uses' => 'topapi_api_v1_member_favorite_removeShop', 'auth' => true],
            'member.favorite.shop.add'        => ['uses' => 'topapi_api_v1_member_favorite_addShop',    'auth' => true],

            'member.rate.list' => ['uses'=>'topapi_api_v1_member_rate_list', 'auth'=>true],
            'member.rate.add' => ['uses'=>'topapi_api_v1_member_rate_add', 'auth'=>true],
            'member.ratetrade.get' => ['uses'=>'topapi_api_v1_member_rate_rateTrade', 'auth'=>true],
            'member.rate.append' => ['uses'=>'topapi_api_v1_member_rate_append', 'auth'=>true],

            'member.complaints.create' => ['uses'=>'topapi_api_v1_member_complaints_create', 'auth'=>true],
            'member.complaints.close' => ['uses'=>'topapi_api_v1_member_complaints_close', 'auth'=>true],
            'member.complaints.list' => ['uses'=>'topapi_api_v1_member_complaints_list', 'auth'=>true],
            'member.complaints.get' => ['uses'=>'topapi_api_v1_member_complaints_get', 'auth'=>true],

            'member.fund.list' => ['uses'=>'topapi_api_v1_member_fund_list', 'auth'=>true],
            'member.fund.get' => ['uses'=>'topapi_api_v1_member_fund_get', 'auth'=>true],
            'member.fund.create' => ['uses'=>'topapi_api_v1_member_fund_create', 'auth'=>true],
            'member.fund.update' => ['uses'=>'topapi_api_v1_member_fund_update', 'auth'=>true],

            //安全中心
            'member.security.checkLoginPassword' => ['uses'=>'topapi_api_v1_member_security_checkLoginPassword', 'auth'=>true],
            'member.security.updateLoginPassword' => ['uses'=>'topapi_api_v1_member_security_upLoginPassword', 'auth'=>true],
            'member.security.setPayPassword' => ['uses'=>'topapi_api_v1_member_security_setPayPassword', 'auth'=>true],
            'member.security.setPayPasswordByMoblie' => ['uses'=>'topapi_api_v1_member_security_setPayPasswordByMobile', 'auth'=>true],
            'member.security.checkPayPassword' => ['uses'=>'topapi_api_v1_member_security_checkPayPassword', 'auth'=>true],
            'member.security.updatePayPassword' => ['uses'=>'topapi_api_v1_member_security_updatePayPassword', 'auth'=>true],
            'member.security.updateMobile' => ['uses'=>'topapi_api_v1_member_security_updateMobile', 'auth'=>true],
            'member.security.saveMobile' => ['uses'=>'topapi_api_v1_member_security_saveMobile', 'auth'=>true],
            'member.security.userConf' => ['uses'=>'topapi_api_v1_member_security_getUserSecurityConf', 'auth'=>true],
            'member.security.validatePayPassword' => ['uses'=>'topapi_api_v1_member_security_validatePayPassword', 'auth'=>true],

            'member.feedback' => ['uses'=>'topapi_api_v1_member_feedback'],

            //订单
            'trade.list' => ['uses'=>'topapi_api_v1_trade_list', 'auth'=>true],
            'trade.order.get' => ['uses'=>'topapi_api_v1_trade_orderGet', 'auth'=>true],
            'trade.get' => ['uses'=>'topapi_api_v1_trade_get', 'auth'=>true],
            'trade.cancel.list' => ['uses'=>'topapi_api_v1_trade_cancel_list', 'auth'=>true],
            'trade.cancel.get' => ['uses'=>'topapi_api_v1_trade_cancel_get', 'auth'=>true],
            'trade.cancel.reason.get' => ['uses'=>'topapi_api_v1_trade_cancel_getCancelReason', 'auth'=>true],
            'trade.cancel.create' => ['uses'=>'topapi_api_v1_trade_cancel_create', 'auth'=>true],
            'trade.confirm' => ['uses'=>'topapi_api_v1_trade_confirm', 'auth'=>true],
            'trade.create' => ['uses'=>'topapi_api_v1_trade_create', 'auth'=>true],

            // 商品
            'item.search' => ['uses'=>'topapi_api_v1_item_itemSearch'],
            'item.detail' => ['uses'=>'topapi_api_v1_item_itemDetail'],
            'item.sku' => ['uses'=>'topapi_api_v1_item_itemSku'],
            'item.desc' => ['uses'=>'topapi_api_v1_item_itemDesc'],
            'item.packageInfo' => ['uses'=>'topapi_api_v1_item_packageInfo'],
            'item.rate.list' => ['uses'=>'topapi_api_v1_item_itemRateList'],

            //购物车
            'cart.get' => ['uses'=>'topapi_api_v1_cart_getCart', 'auth'=>true],
            'cart.get.basic' => ['uses'=>'topapi_api_v1_cart_getBasicCart', 'auth'=>true],
            'cart.add' => ['uses'=>'topapi_api_v1_cart_addCart', 'auth'=>true],
            'cart.del' => ['uses'=>'topapi_api_v1_cart_delCart', 'auth'=>true],
            'cart.update' => ['uses'=>'topapi_api_v1_cart_updateCart', 'auth'=>true],
            'cart.count' => ['uses'=>'topapi_api_v1_cart_countCart', 'auth'=>true],
            'cart.checkout' => ['uses'=>'topapi_api_v1_cart_checkoutCart', 'auth'=>true],
            'cart.total' => ['uses'=>'topapi_api_v1_cart_totalCart', 'auth'=>true],
            'cart.user.point' => ['uses'=>'topapi_api_v1_cart_userPoint', 'auth'=>true],

            // 促销
            'promotion.activity.list' => ['uses'=>'topapi_api_v1_promotion_activityList'],
            'promotion.activity.detail' => ['uses'=>'topapi_api_v1_promotion_activityDetail'],
            'promotion.activity.itemdetail' => ['uses'=>'topapi_api_v1_promotion_activityItemDetail'],
            'promotion.activity.remindinfo' => ['uses'=>'topapi_api_v1_promotion_activityRemind', 'auth'=>true],
            'promotion.activity.remindsubmit' => ['uses'=>'topapi_api_v1_promotion_activityRemindSubmit', 'auth'=>true],
            'promotion.shop.cartpromotion.detail' => ['uses'=>'topapi_api_v1_promotion_promotionDetail'],
            'promotion.shop.coupon.detail' => ['uses'=>'topapi_api_v1_promotion_couponDetail'],

            'promotion.coupon.use' => ['uses'=>'topapi_api_v1_promotion_useCoupon', 'auth'=>true],
            'promotion.coupon.cancel' => ['uses'=>'topapi_api_v1_promotion_cancelCoupon', 'auth'=>true],
            'promotion.coupon.code.get' => ['uses'=>'topapi_api_v1_promotion_getCouponCode', 'auth'=>true],
            'promotion.coupon.list.get' => ['uses'=>'topapi_api_v1_promotion_shopCouponList'],
            //促销的红包接口
            'promotion.hongbao.list' => ['uses'=>'topapi_api_v1_promotion_hongbaoList', 'auth'=>true],
            'promotion.page.info' => ['uses'=>'topapi_api_v1_promotion_pageInfo'],

            //支付
            'payment.pay.paycenter' => ['uses'=>'topapi_api_v1_payment_paymentList', 'auth'=>true],
            'payment.pay.getPayment' => ['uses'=>'topapi_api_v1_payment_paymentBill', 'auth'=>true],
            'payment.pay.create' => ['uses'=>'topapi_api_v1_payment_createPayment', 'auth'=>true],
            'payment.pay.do' => ['uses'=>'topapi_api_v1_payment_dopay', 'auth'=>true],

            // 店铺
            'shop.index' => ['uses'=>'topapi_api_v1_shop_indexmodule'],
            'shop.basic' => ['uses'=>'topapi_api_v1_shop_basic'],
            'shop.list' => ['uses'=>'topapi_api_v1_shop_list'],

            //文章
            'content.info' => ['uses'=>'topapi_api_v1_content_getContentInfo'],
            'content.list' => ['uses'=>'topapi_api_v1_content_getContentList'],
            'content.node.list' =>['uses'=>'topapi_api_v1_content_getNodeList'],
            'content.lxlist' => ['uses'=>'topapi_api_v1_content_getContentlxList'],
            'content.lxinfo' => ['uses'=>'topapi_api_v1_content_getContentlxInfo'],
            //商家文章
            'content.shop.info' => ['uses'=>'topapi_api_v1_content_shopArticleInfo'],

            //图片
            'image.upload' =>['uses'=>'topapi_api_v1_image_upload', 'auth'=>true],
            'image.searchCloth' =>['uses'=>'topapi_api_v1_image_searchCloth'],
            'image.searchUpload' =>['uses'=>'topapi_api_v1_image_searchUpload'],
            'image.modelRender' =>['uses'=>'topapi_api_v1_image_modelRender'],
            'image.modelList' =>['uses'=>'topapi_api_v1_image_modelList'],

            'appdownload' =>['uses'=>'topapi_api_v1_appDownload'],

                        // 卖家端
            //发布商品
            'shop.item.addItem' => ['uses'=>'topapi_api_v1_shop_item_addItem', 'auth'=>true],
            // 编辑商品
            'shop.item.editItem' => ['uses'=>'topapi_api_v1_shop_item_editItem', 'auth'=>true],
            'shop.sku.getNatureProps' => ['uses'=>'topapi_api_v1_shop_sku_getNatureProps', 'auth'=>true],
            'shop.sku.getParams' => ['uses'=>'topapi_api_v1_shop_sku_getParams', 'auth'=>true],
            'shop.sku.getSpecProps' => ['uses'=>'topapi_api_v1_shop_sku_getSpecProps', 'auth'=>true],
            'shop.sku.setSpecIndex' => ['uses'=>'topapi_api_v1_shop_sku_setSpecIndex', 'auth'=>true],
            'shop.item.ajaxGetBrand' => ['uses'=>'topapi_api_v1_shop_item_ajaxGetBrand', 'auth'=>true],
            'shop.item.storeItem' => ['uses'=>'topapi_api_v1_shop_item_storeItem', 'auth'=>true],
            'shop.item.itemList' => ['uses'=>'topapi_api_v1_shop_item_itemList', 'auth'=>true],
            'shop.item.setItemStatus' => ['uses'=>'topapi_api_v1_shop_item_setItemStatus', 'auth'=>true],
            'shop.item.deleteItem' => ['uses'=>'topapi_api_v1_shop_item_deleteItem', 'auth'=>true],
            'shop.item.searchAppItem' => ['uses'=>'topapi_api_v1_shop_item_searchAppItem', 'auth'=>true],
            'shop.trade.modifyPrice' => ['uses'=>'topapi_api_v1_shop_trade_modifyPrice', 'auth'=>true],
            'shop.trade.updatePrice' => ['uses'=>'topapi_api_v1_shop_trade_updatePrice', 'auth'=>true],
            'shop.trade.detail' => ['uses'=>'topapi_api_v1_shop_trade_detail', 'auth'=>true],
            'shop.trade.list' => ['uses'=>'topapi_api_v1_shop_trade_list', 'auth'=>true],
            'shop.trade.closeReasonList' => ['uses'=>'topapi_api_v1_shop_trade_closeReasonList', 'auth'=>true],
            'shop.trade.closeTrade' => ['uses'=>'topapi_api_v1_shop_trade_closeTrade', 'auth'=>true],
            'shop.trade.getTrack' => ['uses'=>'topapi_api_v1_shop_trade_getTrack', 'auth'=>true],
            'shop.shop.status' => ['uses'=>'topapi_api_v1_shop_shop_status', 'auth'=>true],
            'shop.shop.signupSeller' => ['uses'=>'topapi_api_v1_shop_shop_signupSeller', 'auth'=>true],
            'shop.shop.index' => ['uses'=>'topapi_api_v1_shop_shop_index', 'auth'=>true],
            'shop.shop.enterapply' => ['uses'=>'topapi_api_v1_shop_shop_enterapply', 'auth'=>true],
            'shop.shop.checkPlan' => ['uses'=>'topapi_api_v1_shop_shop_checkPlan', 'auth'=>true],
            'shop.shop.saveApply' => ['uses'=>'topapi_api_v1_shop_shop_saveApply', 'auth'=>true],
            'shop.shop.cat' => ['uses'=>'topapi_api_v1_shop_shop_cat', 'auth'=>true],
            'shop.shop.removeShopCat' => ['uses'=>'topapi_api_v1_shop_shop_removeShopCat', 'auth'=>true],
            'shop.shop.addShopCat' => ['uses'=>'topapi_api_v1_shop_shop_addShopCat', 'auth'=>true],
            'shop.shop.updateShopCat' => ['uses'=>'topapi_api_v1_shop_shop_updateShopCat', 'auth'=>true],
            'shop.shop.navlist' => ['uses'=>'topapi_api_v1_shop_shop_navlist', 'auth'=>true],
            'shop.shop.navcatlist' => ['uses'=>'topapi_api_v1_shop_shop_navcatlist', 'auth'=>true],
            'shop.shop.navadd' => ['uses'=>'topapi_api_v1_shop_shop_navadd', 'auth'=>true],
            'shop.shop.navsave' => ['uses'=>'topapi_api_v1_shop_shop_navsave', 'auth'=>true],
            'shop.shop.zhuangxiu' => ['uses'=>'topapi_api_v1_shop_shop_zhuangxiu'],
            'shop.shop.zhuangxiusave' => ['uses'=>'topapi_api_v1_shop_shop_zhuangxiusave'],
            // 采购
            'shop.caigou.list' => ['uses'=>'topapi_api_v1_shop_caigou_list'],
            'shop.caigou.shoplist' => ['uses'=>'topapi_api_v1_shop_caigou_shoplist'],
            'shop.caigou.searchlist' => ['uses'=>'topapi_api_v1_shop_caigou_searchlist'],
            'shop.caigou.xiangqing' => ['uses'=>'topapi_api_v1_shop_caigou_xiangqing'],
            'shop.caigou.shopxiangqing' => ['uses'=>'topapi_api_v1_shop_caigou_shopxiangqing'],
            'shop.caigou.shuaixuan' => ['uses'=>'topapi_api_v1_shop_caigou_shuaixuan'],
            'shop.caigou.jiedan' => ['uses'=>'topapi_api_v1_shop_caigou_jiedan'],

            'shop.item.leimu' => ['uses'=>'topapi_api_v1_shop_item_leimu','auth'=>true],
            'image.appupload' => ['uses'=>'topapi_api_v1_image_appupload'],
            'image.itemdesc' => ['uses'=>'topapi_api_v1_image_itemdesc'],

            'shop.trade.godelivery' => ['uses'=>'topapi_api_v1_shop_trade_godelivery'],
            'shop.trade.delivery' => ['uses'=>'topapi_api_v1_shop_trade_delivery'],

            'shop.baobiao.index' => ['uses'=>'topapi_api_v1_shop_baobiao_index'],
            'shop.feedback' => ['uses'=>'topapi_api_v1_shop_feedback'],

        ],
        'v2' => [
            'item.detail' => ['uses'=>'topapi_api_v2_item_itemDetail'],
        ],
    ),
);
