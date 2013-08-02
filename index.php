<!DOCTYPE html>
<!--
       _     _ _          _       _    _
 _ __ | |__ (_) |_      _(_)_ __ | | _| | ___
| '_ \| '_ \| | \ \ /\ / / | '_ \| |/ / |/ _ \
| |_) | | | | | |\ V  V /| | | | |   <| |  __/
| .__/|_| |_|_|_| \_/\_/ |_|_| |_|_|\_\_|\___|
|_|
      _       _
   __| | ___ | |_
  / _` |/ _ \| __|
 | (_| | (_) | |_
  \__,_|\___/ \__|


  ___ ___  _ __ ___
 / __/ _ \| '_ ` _ \
| (_| (_) | | | | | |
 \___\___/|_| |_| |_|

-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <style>
    </style>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
    		<div class="container">
    			<a class="brand jetstrap-highlighted jetstrap-selected" href="http://twitter.com/philwinkle">@philwinkle</a>
    		</div>
    	</div>
    </div>
    <div class="container">
        <img src="http://www.gravatar.com/avatar/341518c6f0ba9e0bbb97a793cd9800c3.png" class="bighair pull-left"/>
    	<h1>
    		Phillip Jackson
    	</h1>
    	<p>
    		Father, Musician, Coder // <a href="http://www.magentocommerce.com/certification/directory/dev/182675/">Magento Certified Developer</a>
    	</p>
    	<div>
    		<br>
    	</div>
    	<div>
    		Christ-follower.
    	</div>
    	<div>
    		<br>
    	</div>
    	<p>
    	</p>
    	<div class="btn-group">
    		<a href="http://github.com/philwinkle" class="btn">Github<i class="icon-github pull-left"></i></a>
    		<a href="http://www.linkedin.com/in/philwinkle" class="btn">LinkedIn<i class="icon-linkedin pull-left"></i></a>
    		<a href="http://stackexchange.com/users/284197/philwinkle" class="btn">StackExchange<i class="icon-stackexchange pull-left"></i></a>
    	</div>
    	<div>
    		<br>
    		<a class="twitter-timeline" href="https://twitter.com/philwinkle" data-widget-id="349577471189975041">Tweets by @philwinkle</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    	</div>
    </div>
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <sub>&copy; <?php $date = new DateTime('now'); echo $date->format('Y'); ?> Phillip Jackson</sub>
            </div>
        </div>
    </div>
    <!-- /container -->

    <style>
        img.bighair { 
            padding-right: 20px;
            -webkit-clip-path: circle(40px, 40px, 40px);
            clip-path: circle(40px, 40px, 40px);
        }
        img.bighair:hover {
            -webkit-clip-path: circle(40px, 40px, 80px);
            clip-path: circle(40px, 40px, 80px);
            -webkit-transition: all .25s ease-in-out;
            transition: all .25s ease-in-out;
        }
        /* fontawesome icons line-height in buttons */
        [class^="icon-"].pull-left {
            line-height: 20px;
        }
        .footer {
            padding: 20px 0;
        }
      
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <script src="assets/js/bootstrap.js">
    </script>
    <script>
    var konami_keys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
    var konami_index = 0;
    $(document).keydown(function(e){
        if(e.keyCode === konami_keys[konami_index++]){
            if(konami_index === konami_keys.length){
                $(document).unbind('keydown', arguments.callee);
                $.getScript('http://www.cornify.com/js/cornify.js',function(){
                  cornify_add();
                  $(document).keydown(cornify_add);
                });
            }
        }else{
            konami_index = 0;
        }
    });
    </script>

    <script>
    // I'm in ur webs trackin ur movements
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-947676-14', 'philwinkle.com');
    ga('send', 'pageview');

    </script>
  </body>
</html>