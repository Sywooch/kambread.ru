<?php
if(Yii::$app->user->isGuest) {
    echo \frontend\widgets\Login::widget();
}
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html" >About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.html" >Agents</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.html" >Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/main/main/contact" >Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>
                <?php echo \frontend\widgets\SubscribeWidget::widget() ?>
            </div>
            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="facebook.com/kambread"><img src="/images/facebook.png"  alt="Facebook"></a>
                <a href="ok.ru/group/52685470564514"><img src="/images/ok.png"  alt="Одноклассники"></a>
                <a href="#"><img src="/images/linkedin.png"  alt="linkedin"></a>
                <a href="vk.com/kam.hleb"><img src="/images/vk.png"  alt="ВКонтакте"></a>
            </div>
            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>Bootstrap Realestate Inc.</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                    <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
        <p class="copyright">Copyright 2016. All rights reserved.	</p>
    </div>
</div>
