<!--?php print render($page['page_top']);?-->

<!--div id="login"-->
    <?php print render($page['header']);?>
<!--/div-->

<div id="overlay">
    <img class="background" src="sites/all/themes/Assessment/assets/images/slideshow/slide-1.jpg"/>
    <div class="text">
        <div class="header">
            <!--?php print render($page['header']);?-->
            <div id="logo">
                <?php if($logo):?>
                <a href="<?php print $base_path;?>">
                <img src="sites/all/themes/Assessment/assets/images/logo.png" alt="<?php print t('Home');?>"/></a>
                <?php endif;?>
            </div>
            <div id="right-menu">
                <ul>
                    <li><a href="#">ABOUT OPEN CHARITY</a></li>
                    <li><a href="#">THE BLOG</a></li>
                    <li><a href="#"><button id="join-btn">JOIN US</button></a></li>
                </ul>
            </div>
        </div>

        <div class="infotext">
            <?php print render($page['jumbotron']);?>
        </div>
    </div>
</div>
    
<div id="nextEvent">
    <div class="left">
        <?php print render($page['next_event']);?>
    </div>
    <div class="right">
        <button href="#">REGISTER</button>
    </div>
</div>
    
<div id="join"> 
    <?php print render($page['join']);?>
    <div class="threeColumn">
        <div class="oneOfThree">
            <img src="sites/all/themes/Assessment/assets/images/join/img1.png">
            <h3>WE DO MEETINGS</h3>
            <p>We organise our meetings through the OpenCharity MeetUp group</p>
            <button href="#">MEETUP GROUP</button>
        </div>

        <div class="oneOfThree">
            <img src="sites/all/themes/Assessment/assets/images/join/img2.png">
            <h3>WE COLLABORATE</h3>
            <p>OpenCharity have a slack group for daily collaboration</p>
            <button href="#">SLACK GROUP</button>
        </div>

        <div class="oneOfThree">
            <img src="sites/all/themes/Assessment/assets/images/join/img3.png">
            <h3>WE SHARE</h3>
            <p>We have a Google Group set up to share tools and documents</p>
            <button href="#">GOOGLE GROUP</button>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="mission" onload="startTimer()">
    <div id="mission1">
        <?php print render($page['mission']);?>
    </div>
    <div class="clear"></div>

    <div id="mission2">
        <div id="shape" class="first">
            <img class="shapeImage" src="sites/all/themes/Assessment/assets/images/mission/mission-bulb.png"/>
            <div class="shapeText">
                <h3>We help charities</h3>
                <p>share knowledge and working practice to make the best technology choices.</p>
            </div>
        </div>

        <div id="shape">
            <img class="shapeImage" src="sites/all/themes/Assessment/assets/images/mission/mission-people.png"/>
            <div class="shapeText">
                <h3>We bring together</h3>
                <p>charities and suppliers to the charity sector to share best practices.</p>
            </div>
        </div>

        <div id="shape">
            <img class="shapeImage" src="sites/all/themes/Assessment/assets/images/mission/mission-thumb.png"/>
            <div class="shapeText">
                <h3>We encourage</h3>
                <p>collaboration and innovation for the good of the charity sector</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <hr class="missionDivider"/>
</div>

<div id="members"> 
    <?php print render($page['members']);?>
    <div class="fiveColumn">
        <div class="oneOfFive">
            <img id="member1" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-1.png"/>
        </div>
        <div class="oneOfFive">
            <img id="member2" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-2.png"/>
        </div>
        <div class="oneOfFive">
            <img id="member3" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-3.png"/>
        </div>
        <div class="oneOfFive">
            <img id="member4" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-4.png"/>
        </div>
        <div class="oneOfFive">
            <img id="member5" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-5.png"/>
        </div>
        <img style="display: none" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-6.png"/>
        <img style="display: none" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-7.png"/>
        <img style="display: none" name="memberImg" class="fade" src="sites/all/themes/Assessment/assets/images/members/members-8.png"/>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<article id="blog">
    <div id="blogbody">
        <div id="prev" onclick="prevBlog()">
        <img src="sites/all/themes/Assessment/assets/images/prev.png">
        </div>
        <div class="fourColumn">
            <?php print render($page['blog']);?> 
            <div class="clear"></div>
        </div>
        <div id="next" onclick="nextBlog()">
            <img src="sites/all/themes/Assessment/assets/images/next.png">
        </div>
        <div class="clear"></div>
    </div>
</article>

<footer> 
    <?php print render($page['social']);?>
    <hr id="footerDivider">
    <?php print render($page['footer']);?> 
</footer>

<?php print render($page['page_bottom']);?>
