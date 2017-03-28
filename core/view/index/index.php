<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/13
 * Time: 10:27
 */

/**
 * @var $this indexController
 */


?>


    <style>
        .box {margin-top: 10px;}
        .box p {text-indent: 2em;}
    </style>


    <div class="box">
        <?php foreach ($this->assign as $v): ?>

            <p>
                <?php echo  nl2p($v['content']);?>
            </p>
            <br>


        <?php endforeach; ?>

    </div>



