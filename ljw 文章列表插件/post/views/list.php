<?php
/**
*文章列表
*/
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="panel">
    <div class="panel-title box-title">
        <span>全部文章</span>
    </div>
    <div class="new-list">
    <?php foreach ($data['body'] as $list):?>
        <div class="panel-body border-bottom">      
            <div class="row">
                <div class="col-lg-10 btn-group">
                    <h1><a href="<?=Url::to(['post/detail','p_id'=>$list['p_id']])?>"><?=$list['title']?></a></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><a href="<?=Url::to(['member/index','id'=>$list['user_id']])?>"></a>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?=date('Y-m-d',$list['p_time'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?=isset($list['extend']['browser'])?$list['extend']['browser']:0?>&nbsp;
                        <span class="glyphicon glyphicon-comment"></span><a href="<?=Url::to(['post/detail','p_id'=>$list['p_id']])?>"><?=isset($list['extend']['comment'])?$list['extend']['comment']:0?></a>
                    </span>
                    <p class="post-content"><?=$list['content']?></p>
                    <a href="<?=Url::to(['post/detail','id'=>$list['p_id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">进入评论</button></a>
                </div>
            </div>
            <div class="tags">
                <?php if(!empty($list['tags'])):?>
                <span class="fa fa-tags"></span>
                <?php endif;?>
            </div>
        </div>
        <?php endforeach;?>            
    </div>
    <?php if($this->context->page):?>
    <div class="page"><?=LinkPager::widget(['pagination' => $data['page']]);?></div>
    <?php endif;?>
</div>