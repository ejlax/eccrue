<?php
include_once('header.php');
?>
    <div id="contact">
        <div class="container">
            <div class="section_header">
                <h3>Get in touch</h3>
            </div>
            <div class="row contact">
                <p>
                    We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.</p>

                <form>
                    <div class="row form">
                        <div class="span6 box">
                            <input class="name" type="text" placeholder="Name">
                            <input class="mail" type="text" placeholder="Email">
                            <input class="phone" type="text" placeholder="Phone">
                        </div>
                        <div class="span6 box box_r">
                            <textarea placeholder="Type a message here..."></textarea>
                        </div>
                    </div>

                    <div class="row submit">
                        <div class="span5 box">
                            <label class="checkbox">
                                <input type="checkbox"> Sign up for newsletter
                            </label>
                        </div>
                        <div class="span3 right">
                            <input type="submit" value="Send your message">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row map">
            <div class="container">
                <div class="span5 box_wrapp">
                    <div class="box_cont">
                        <div class="head">
                            <h6>Contact</h6>
                        </div>
                        <ul class="street">
                            <li>123 Main St.</li>
                            <li>City, Salt Lake City, United States,</li>
                            <li>Zip Code, UT 84112</li>
                            <li class="icon icontop">
                                <span class="contacticos ico1"></span>
                                <span class="text">1 801 888 8888</span>
                            </li>
                            <li class="icon">
                                <span class="contacticos ico2"></span>
                                <a class="text" href="#">info@eccrue.com</a>
                            </li>
                        </ul>

                        <div class="head headbottom">
                            <h6>Work with us</h6>
                        </div>
                        <p>We’ve prepared a simple expense tracker to improve your life</p>

                        <a href="#" class="btn">Let's get started</a>
                    </div>
                </div>
            </div>
            <!-- <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;ll=64.089157,-21.816616&amp;spn=0.045157,0.15398&amp;t=m&amp;z=13&amp;output=embed"></iframe> -->
<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Salt+Lake+City,+UT&amp;aq=0&amp;oq=salt&amp;sll=39.499761,-111.547028&amp;sspn=4.179034,9.876709&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Salt+Lake+City,+Salt+Lake,+Utah&amp;z=11&amp;ll=40.760779,-111.891047&amp;output=embed"></iframe>
        </div>
    </div>

    <!-- starts footer -->
    <?php
    include_once('footer.php');
	?>
    <footer id="footer" style="margin-top:0;">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li>123 Main Street</li>
                        <li>United States, Zip Code UT 84112.</li>
                    </ul>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li><strong>P.</strong> 1 801 554 5496</li>
                        <li><strong>E.</strong><a href="#"> info@eccrue.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Eccrue
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>