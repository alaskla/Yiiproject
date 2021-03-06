<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       <?php if (!Yii::$app->user->isGuest) { ?>
<!--        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->
<hr>
        <?php  if(Yii::$app->user->identity->role == dektrium\user\models\User::ROLE_ADMIN) {?>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> ตั้งค่าระบบ</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
               
                <ul class="treeview-menu">
                    <li><a href="<?php echo yii\helpers\Url::to(['groups/index'])?>"> 
                            <span><i class="fa fa-circle text-red"></i> กลุ่มงาน</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['departments/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> แผนก</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['positions/index'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> ตำแหน่ง</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['customers/index'])?>"> 
                            <span><i class="fa fa-circle text-yellow"></i> พนักงาน</span>                        
                        </a>                        
                    </li>                    
                </ul>
               </li>    
            </ul>
        <?php }?> 
         <?php }?>
        <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> แจ้งซ่อม</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['repairs/indexuser'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ส่งซ่อม</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['repairs/index'])?>"> 
                            <span><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i> รับซ่อม</span>                        
                        </a>                        
                    </li>
                     <li><a href="<?php echo yii\helpers\Url::to(['repairs/indexok'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> ซ่อมได้</span>                        
                        </a>                        
                    </li>
                </ul>
               </li>    
            </ul>
        <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> ตั้งค่าระบบความเสี่ยง</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/clinics/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ประเภทคลินิก</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/levels/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ระดับความรุนแรง</span>                        
                        </a>                        
                    </li>
                     <li><a href="<?php echo yii\helpers\Url::to(['/risk/programes/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> โปรแกรม</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/risktypes/index'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> รายการ</span>                        
                        </a>                        
                    </li>
                </ul>
               </li>    
            </ul>
        <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> รายงานความเสี่ยง</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/riskreports/indexuser'])?>"> 
                            <span><i class="fa fa-circle text-green"></i> รายงานความเสี่ยง</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/riskreports/indexuserrisk'])?>"> 
                            <span><i class="fa fa-circle text-red"></i> ความเสี่ยงเกิดที่ฝ่ายเรา</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/risk/riskreports/indexadmin'])?>"> 
                            <small class="badge pull-right bg-green-gradient">
                            <?php echo app\modules\risk\models\Riskreports::find()->where(['approve'=>0])
                                   // ->andWhere([''=>''])
                                    //->orWhere([''=>''])
                                    ->count()?>
                            </small>    
                            <span><i class="fa fa-circle text-green"></i> รับรายงานความเสี่ยง</span>                        
                        </a>                        
                    </li>
                     
                </ul>
               </li>    
            </ul>
        
        <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"><span> รายงาน HOSxP</span></i>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>               
                <ul class="treeview-menu">                    
                    <li><a href="<?php echo yii\helpers\Url::to(['/report/hosxpreport/personpttype'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> จำนวนผู้ป่วยตามสิทธิ์</span>                        
                        </a>                        
                    </li>
                    <li><a href="<?php echo yii\helpers\Url::to(['/report/hosxpreport/opddiag'])?>"> 
                            <span><i class="fa fa-circle text-blue"></i> ๑๐ อันดับโรค</span>                        
                        </a>                        
                    </li>
                </ul>
               </li>    
            </ul>
        
        
<?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    //['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'บันทึกข้อมูลข้ามตาราง',
                        'icon' => 'glyphicon glyphicon-cog',
                        'url' =>  '#',
                        'items' => [
                            //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'คิวรีข้อมูล',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'คิวรีข้อมูล 1ตาราง', 'icon' => 'fa fa-circle-o', 'url' => ['/report/hosxpreport/ptname'],],
                                    ['label' => 'คิวรีข้อมูล joinตาราง', 'icon' => 'fa fa-circle-o', 'url' => ['/report/hosxpreport/sqljoin'],],
                                    [
                                        'label' => 'ดูข้อมูลที่บันทึก',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'ดูข้อมูล 1ตาราง', 'icon' => 'fa fa-circle-o', 'url' => ['/patient/index'],],
                                            ['label' => 'ดูข้อมูล joinตาราง', 'icon' => 'fa fa-circle-o', 'url' => ['/report/sqljoin/index'],],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>
</aside>
