
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="David B. Montecillo">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() . 'css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() . 'css/justified-nav.css'; ?>" rel="stylesheet">


    <script src="<?php echo base_url() . 'js/jquery-1.9.1.js'; ?>" ></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js'; ?>" ></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <STYLE TYPE="text/css">
  <!--
    @page { margin: 0.5in }
    P { margin-bottom: 0.08in; direction: ltr; color: #000000; widows: 2; orphans: 2 }
    H1 { margin-top: 0.33in; margin-bottom: 0in; direction: ltr; color: #365f91; page-break-inside: avoid; widows: 2; orphans: 2 }
    H1.western { font-family: "Cambria", serif; font-size: 14pt }
    H1.cjk { font-family: "Liberation Sans"; font-size: 14pt }
    H1.ctl { font-family: ; font-size: 14pt }
    H2 { margin-top: 0.14in; margin-bottom: 0in; direction: ltr; color: #4f81bd; page-break-inside: avoid; widows: 2; orphans: 2 }
    H2.western { font-family: "Cambria", serif; font-size: 13pt }
    H2.cjk { font-family: "Liberation Sans"; font-size: 13pt }
    H2.ctl { font-family: ; font-size: 13pt }
    A:link { color: #0000ff; so-language: zxx }
    tbody tr td img{
      margin-left:.7em;
      margin-top:.5em;
    }
  -->
  </STYLE>
  </head>

  <body>




    <div class="container">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
              <a class="navbar-brand" href="#"><span> <img src="<?php echo base_url(). 'images/logo.png'; ?>" style="width:25px;height:25px;"/></span>CreateConvert</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><?php echo $this->session->userdata('fullname'); ?> </a></li>
                    <li class="divider"></li>
                    <li><a href="home/logout">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


      <div class="masthead" style="display:none;">
        <h3 class="text-muted">Project name</h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><?php echo $video['title']; ?></h1>
        <p class="lead"><?php echo $video['sub_title']; ?></p>
        <p> <video  controls style="width:640px;height:480px;">
               <source src="<?php echo base_url() . 'videos/' . $video['video_path'] ;?>" type="video/mp4" />
            </video> 
        </p>
      </div>

      <!-- Example row of columns -->
      <div class="row" style="display:none;">
        <div class="col-lg-4">
          <h2>Safari bug warning!</h2>
          <p class="text-danger">As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer" style="display:none;">
        <p>&copy; Company 2014</p>
      </div>


      <!-- start here -->
<H1 CLASS="western" ALIGN=CENTER><A NAME="_Toc384952111"></A><A NAME="_Toc384952109"></A>
<IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_44b5d827.png" ALIGN=BOTTOM WIDTH=81 HEIGHT=104 BORDER=0></H1>
<H1 CLASS="western" ALIGN=CENTER>RPS <BR> 15.04.2014</H1>
<H1 CLASS="western">What we are doing:</H1>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>Founded in 2012,
CreateConvert Media Ltd facilitates the creation and a large scale
&ldquo;Rock, Paper, Scissor&rdquo; game for points titled
&ldquo;RPSMasters.net&rdquo; and for money (gambling) titled
&ldquo;RockThePaper.net&rdquo;</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>We aim to leverage
entertainment and engagement for social good. To further grow the
field, convenes multiple stakeholders, highlights best practices,
incubates games, and helps create and direct investment into new
projects.  </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><I>It is for this reason
we have shifted into a new direction for RPSMasters and
Rockthepaper.net</I></FONT></P>
<H1 CLASS="western">RPS &amp; Gamification</H1>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Gamification</B></FONT><FONT SIZE=4>
is a buzzword that gets tossed around all the time, but the basic
idea is simple: if you turn your life into a game, with digital
rewards for real life achievements, you'll be more motivated to do
something, or so the theory goes. Gameification only works when it
motivates you to do something, which is why it's good to have a basic
understanding of where our motivation comes from.  We can break it
down into three basic elements:</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Autonomy:</B></FONT><FONT SIZE=4>
You gain motivation when you're in charge. When you feel like you're
in charge, you tend to stick to your goals for a longer period of
time.  Since RPS is a game of chance with very little control other
than the choice of Rock Paper or Scissors, our objective is to add
gameification in such a way that the players feel strategic and in
the drivers seat.</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Value:</B></FONT><FONT SIZE=4>
You're more motivated when you value a subject. If you think a goal
is important there's a better chance you'll complete it.  In the case
of RPS there is the chance to win up to 50,000 europs per day.  Or
whatever the jackpot is for the particular tournament. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Competence:</B></FONT><FONT SIZE=4>
The better you get at something, the more likely it is you'll
continue doing it. Likewise, when you know that something takes hard
work as opposed to some innate talent, you're more likely to keep
trying at it.  RPS is easy nearly everyone has played it as a child. 
Our gamification cannot be too complex and hard to master.</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT COLOR="#365f91"><FONT FACE="Cambria, serif"><FONT SIZE=4><B>Technology
Used<BR><BR></B></FONT></FONT></FONT><FONT COLOR="#4f81bd"><FONT FACE="Cambria, serif"><FONT SIZE=3 STYLE="font-size: 13pt"><B><FONT SIZE=4>What
is Unity?</FONT></B></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>Unity is a development
engine for the creation of 2D and 3D games and interactive content.</FONT></P>
<P STYLE="margin-bottom: 0in"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m1a8d7a47.png" ALIGN=BOTTOM WIDTH=583 HEIGHT=288 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><FONT COLOR="#365f91"><FONT FACE="Cambria, serif"><FONT SIZE=4><B>Why
should we use it?</B></FONT></FONT></FONT><FONT SIZE=4><BR><BR>Unity
makes multiplatform deployment smooth and efficient</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>We can make our RPS and
interactive content in Unity and then seamlessly deploy to Facebook,
) iOS, Android, Windows Phone 8, Windows Store, BlackBerry 10, PC,
Mac, Linux desktop, the Web (via the Unity Web Player without having
to develop the entire game again.  This allows us to build it once
and be compatible on all devices.</FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_3b91faf4.png" ALIGN=BOTTOM WIDTH=597 HEIGHT=124 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT COLOR="#365f91"><FONT FACE="Cambria, serif"><FONT SIZE=4><B>RPS
Game Flow</B></FONT></FONT></FONT><FONT SIZE=4><BR><BR>The game now
has a launching process.  We start off with an animated CreateConvert
company logo taking credit for the game build.  We then show an
animated RPS logo coming together with sound effects.  Lastly, we
have the login page for the game It self.  Two things to take note
of:<BR><BR>1.  Please keep in mind all graphics used are not ours and
used as a reference.<BR>2.  Yes, there will be a squeeze page /
landing page.  This work flow will only showcase the game it self. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=643 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=198>
  <COL WIDTH=199>
  <COL WIDTH=202>
  <TR VALIGN=TOP>
    <TD WIDTH=198>
      <P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Company
      Branding</B></FONT></P>
      <P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=4>Animation<BR>CreateConvert
      Media Ltd</FONT></P>
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=199>
      <P ALIGN=CENTER><FONT SIZE=4><B>Game Branding</B></FONT><FONT SIZE=4>
      Animation<BR>(Sample image, Not Real)</FONT></P>
    </TD>
    <TD WIDTH=202>
      <P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Login
      Page</B></FONT></P>
      <P ALIGN=CENTER><FONT SIZE=4>(Sample Image, Not actual User
      Interface)</FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=198>
      <P><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_fa00cdc.jpg" ALIGN=BOTTOM WIDTH=195 HEIGHT=178 BORDER=0></P>
    </TD>
    <TD WIDTH=199>
      <P><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_780c599.jpg" ALIGN=BOTTOM WIDTH=199 HEIGHT=164 BORDER=0></P>
    </TD>
    <TD WIDTH=202>
      <P><IMG SRC="<?php echo base_url() . 'images/' ;?>login.png" ALIGN=BOTTOM WIDTH=202 HEIGHT=164 BORDER=0></P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><BR></FONT><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952112"></A><FONT SIZE=4>Login</FONT></H2>
<UL>
  <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Automatically the
  game will detect if the device is online or offline.</FONT></P>
  <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>If offline,
  multiplayer is deactivated but can still play the game in single
  player.</FONT></P>
  <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>If you have played
  the game in offline and gain points, this will be automatically
  updated when the device is online.</FONT></P>
</UL>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952113"></A><FONT SIZE=4>Detailed
RPS Game Flow</FONT></H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=4><B><BR></B></FONT><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952114"></A></H2>
<H2 CLASS="western"><FONT SIZE=4>Main Menu</FONT></H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The Main Menu will feature
the players avatar of choice.  You&rsquo;ll notice at the far right
there is a sliding bar icon.  All characters and the game will be
built in 3d.  When the player initially logs into the game, the
avatar will be animated, moving his arms, legs, smile and wave hello.
 The very far right sliding bar will come into picture within 5
seconds of game launch.  (</FONT><I>see next image</I><FONT SIZE=4>)</FONT></P>
<P STYLE="margin-bottom: 0in"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m2c523cc4.png" ALIGN=BOTTOM WIDTH=720 HEIGHT=364 BORDER=0><FONT SIZE=4><BR></FONT><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952115"></A><FONT SIZE=4>Profile<BR></FONT><BR>
</H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The user has a chance to
upgrade their weapons, use a shield and enhance the amount of power
used per RPS throw.   <BR><BR>The player can clearly see their avatar
and preform upgrades to their character.  How these upgrades will
benefit the player will become clear at the &ldquo;Game Play&rdquo;
section.  The left hand side allows a place to see how many coins
they&rsquo;ve earned, how many awards won and percentage of
experience points.</FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_2d993863.jpg" ALIGN=BOTTOM WIDTH=720 HEIGHT=416 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<TABLE WIDTH=734 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=352>
  <COL WIDTH=352>
  <TR VALIGN=TOP>
    <TD WIDTH=352>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Profile Pic</B></FONT><FONT SIZE=4>
      &ndash; picture of the user</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Name</B></FONT><FONT SIZE=4>
      &ndash; the name of the player</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Coin</B></FONT><FONT SIZE=4>
      &ndash; Player&rsquo;s Digital Money</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Age</B></FONT><FONT SIZE=4>
      &ndash; Players Age</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Sex</B></FONT><FONT SIZE=4>
      &ndash; Players Gender</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>XP</B></FONT><FONT SIZE=4>
      &ndash; Players Experience, every 1000 experience player will be
      ascended to another level.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Level</B></FONT><FONT SIZE=4>
      &ndash; the expertise of the player. Player who fights with a
      lower level player will have more deduction of points if loses,
      and lesser additional points if wins.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Trophy</B></FONT><FONT SIZE=4>
      &ndash; number of wins.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>X</B></FONT><FONT SIZE=4>
      &ndash; number of loses.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>%</B></FONT><FONT SIZE=4>
      - average between the numbers of wins and losses. </FONT>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Character</B></FONT><FONT SIZE=4>
      &ndash; the character chosen by the player to represent the player
      in the game. Clicking the character will open another window for a
      player to choose.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Character&rsquo;s
      name</B></FONT><FONT SIZE=4> &ndash; the name you input for your
      character</FONT></P>
      <P><BR>
      </P>
    </TD>
    <TD WIDTH=352>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 1</B></FONT><FONT SIZE=4>
      &ndash; default weapon in game play, 10 pts damage without return
      damage.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 2</B></FONT><FONT SIZE=4>
      &ndash; 20 pts damage with return damage of 20 as well.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 3</B></FONT><FONT SIZE=4>
      &ndash; 30 pts damage with 30 pts return damage as well.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 4</B></FONT><FONT SIZE=4>
      &ndash; 40 pts damage with 40 pts return damage as well.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 5</B></FONT><FONT SIZE=4>
      &ndash; 50 pts damage with 40 pts return damage as well.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Weapon 6</B></FONT><FONT SIZE=4>
      &ndash; can only be use in final blow if the player wins the game,
      this some sort like a bonus pts combo. You have to press rapidly
      the screen to have more bonus points.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Life</B></FONT><FONT SIZE=4>
      &ndash; Additional life of the Player.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Vest</B></FONT><FONT SIZE=4>
      &ndash; prevent greater damage to the player.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Buy coins</B></FONT><FONT SIZE=4>
      &ndash; adds more coins for more upgrades.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Upgrade</B></FONT><FONT SIZE=4>
      &ndash; Buying more powerful weapons and other accessories for
      greater damage less return damage greater life and prevent greater
      damage.</FONT></P>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<H2 CLASS="western">Character Upgrade</H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The traditional game
dynamic of RPS is still the same.  (Rock still beats scissors, Paper
still beats rock).  However, the amount of damage or reduction to the
life now plays a role in the winning and losing process.  means if
your opponent draws Scissors and you have paper, you will still lose
the round, but the amount of damage received on your life bar will
vary on several factors such as:  Shields, Weapons, Power &amp;
Experience.<BR>  </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_42eca5fd.jpg" ALIGN=BOTTOM WIDTH=640 HEIGHT=370 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>The
player can buy another character for fighting performance and better
chances of winning.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>HP</B></FONT><FONT SIZE=4>
&ndash; (Health Points) additional player&rsquo;s life</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Def</B></FONT><FONT SIZE=4>
&ndash; (Defence) additional damage prevention</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Pow</B></FONT><FONT SIZE=4>
&ndash; (Power) additional damage points</FONT></P>
<H2 CLASS="western">Weapon Upgrade</H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>The
player can upgrade their weapons to throw more damage and receiving
less return damage when loses the clash.  They will require coins and
experience to upgrade their weapons.  They can earn coins by winning
games or purchasing coins.  RPSMasters is monetized in this way. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_4ee9a314.jpg" ALIGN=BOTTOM WIDTH=720 HEIGHT=416 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><FONT SIZE=4>Networking
And LIVE Multiplayer Games<BR></FONT><BR>
</H2>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>We are
thrilled to report that we have successfully coded our multiplayer
and networking function.  This was our first priority.  For
RPSMasters, we will be using the Photon realtime features.<BR><BR></FONT><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_1c61160e.png" ALIGN=BOTTOM WIDTH=581 HEIGHT=284 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#4f81bd"><FONT FACE="Cambria, serif"><FONT SIZE=3 STYLE="font-size: 13pt"><B>Multiplayer
Dash Board</B></FONT></FONT></FONT><FONT SIZE=4><BR></FONT><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_793f7e52.jpg" ALIGN=BOTTOM WIDTH=623 HEIGHT=351 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><BR>This
dashboard is where players can locate available games to join.  The
server list is located on the left, and within our available servers,
we have games being hosted by users.  The users can clearly see how
many players are in the pending game and what the potential jackpot
is if they should win the game.  </FONT>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>Left
side are the servers </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Rooms</B></FONT><FONT SIZE=4>
&ndash; it is where the player able to see available slots for them
to join</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>  Name
of the room</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>  Number
of players</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>  Available
slots</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>  Pot
price for the winner</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>  Coins
needed to enter the tournament</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Create</B></FONT><FONT SIZE=4>
&ndash; hosting a room for players</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Join
</B></FONT><FONT SIZE=4>&ndash; Joining the room to play</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Search</B></FONT><FONT SIZE=4>
&ndash; searching the name of the room</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H1 CLASS="western">Chat With Others</H1>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>A way
to communicate with friends and players and to invite players in a
specific room created by host as well as to do some small talk, trash
talks your opponents and more.<BR></FONT><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Visitors</B></FONT><FONT SIZE=4>
&ndash;list of all people in a specific server you have joined</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Friends</B></FONT><FONT SIZE=4>
&ndash; list of friends in a specific server you have joined</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_4e5d1cc9.jpg" ALIGN=BOTTOM WIDTH=623 HEIGHT=351 BORDER=0></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><FONT SIZE=4>Character
Selection  </FONT>
</H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>Note: 
</FONT><FONT SIZE=3><I>Characters shown below is not the actual
characters and only used for demonstration purposes ONLY</I></FONT><FONT SIZE=4>.<BR><BR>When
a player buys a character this will be stored in Character Selection
section. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>So they
can choose the old character or the new one. Each of the character
will give a default level amount of additional life, defence and
power to the total player&rsquo;s avatar.</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_2a223a4a.jpg" ALIGN=BOTTOM WIDTH=720 HEIGHT=416 BORDER=0></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><FONT SIZE=4>Player
Hosted Games (Create Game)</FONT></H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>Before
a player can host their own game, they must first qualify to become a
team leader.  This requires a combination of a few things:<BR><BR>1. 
Must invite at least 10 people from their facebook profile<BR>2. 
Like our facebook fan page<BR>3.  Create their own unique affiliate
link<BR>4.  Enrollee a minimum of 5 registered users.<BR></FONT><FONT SIZE=4><I>When
these requirements are me the user can then host a game.  </I></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Why
do we have these requirements in place?</B></FONT><FONT SIZE=4> 
<BR><BR>Well, for the gambling version we share 5% of the pot size
with the game host.  We need leaders who can actively recruit players
into their game.  It also forces us to organically spread the word
through our existing players sphere of influence.  <BR><BR></FONT><FONT SIZE=4><B>Stage
Selection</B></FONT><FONT SIZE=4> &ndash; a player who created or
hosted a game can chose a stage for battle.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Hierarchy
Selection</B></FONT><FONT SIZE=4> &ndash; a player can choose how
much player in the competition, the more players in the hierarchy the
bigger the pot money.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Room
Name</B></FONT><FONT SIZE=4> &ndash; A Player host can create their
own unique name for the room for some to locate it easily. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Wager</B></FONT><FONT SIZE=4>
&ndash; A player host can now type how much wager each player pays
when joining the game then this will be multiplied base on the slots
in the hierarchy.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Pot
</B></FONT><FONT SIZE=4>&ndash; the amount of money the player can
have if he wins the game. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Rounds
</B></FONT><FONT SIZE=4>&ndash; determines how many times a player
fights before one will be considered as a winner.</FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m2a22d18b.png" ALIGN=BOTTOM WIDTH=542 HEIGHT=305 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<H2 CLASS="western"><FONT SIZE=4>Multiplayer Flow Chart</FONT></H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<H2 CLASS="western"><FONT SIZE=4>Game waiting room<BR></FONT><BR>
</H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>This is when you have
clicked &ldquo;join&rdquo; for an available game, you can now see:</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Display
Chart</B></FONT><FONT SIZE=4> &ndash; the display of the chart,
players can select an empty slot to join </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Slot
</B></FONT><FONT SIZE=4>&ndash; the number of the player slot</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Team</B></FONT><FONT SIZE=4>
&ndash; Player&rsquo;s team either Blue or Red. When one of the
players team wins the top 5 player of that team will also has a share
of the pot price.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Chat
Box</B></FONT><FONT SIZE=4> &ndash; Players who joins the room can
chat each other.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Start
</B></FONT><FONT SIZE=4>&ndash; when all players are ready the host
can start the game</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Cancel</B></FONT><FONT SIZE=4>
&ndash; the host will cancel the game. (Further improvements will let
other player to replace the host in case the host cancels the game).</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Counter</B></FONT><FONT SIZE=4>
&ndash; 10 seconds count down for the game to start</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m1bc08092.png" ALIGN=BOTTOM WIDTH=683 HEIGHT=399 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><A NAME="_GoBack"></A>
<BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<H2 CLASS="western">Versus Intro Animation</H2>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>Before
the RPS battle starts, a ranking chart will appear telling who is
going to fight and who wins the fight.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>Chat is
still activated for the last word..</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_574e14c4.jpg" ALIGN=BOTTOM WIDTH=623 HEIGHT=351 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><FONT SIZE=4>Game
Play<BR></FONT><BR>
</H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>This is the main page
where players battle for RPS victory.  Like our last RPS version, we
have a 10 second count down with three buttons to click for Rock
Paper or Scissors.  From here players can choose your weapon of
choice which will inflict more or less damage should the player win.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Rock
Paper Scissors Button</B></FONT><FONT SIZE=4> &ndash; selection
button to cast your sign. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Counter</B></FONT><FONT SIZE=4>
&ndash; within 10 seconds counter the player can choose the damage
type and the sign to cast. Within 7 seconds countdown the opponent
can still see the signs a player chooses but after it within the 3
seconds countdown the opponent could not see the final sign a player
chooses. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Life
</B></FONT><FONT SIZE=4>&ndash; the life of the player, this also
depends on the experience of the player and the upgrades. </FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Power
gauge</B></FONT><FONT SIZE=4> &ndash; a gauge to show how much power
a player is throwing to the opponent during the casting phase.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Message
Box</B></FONT><FONT SIZE=4> &ndash; a message on what a player is
going to tell to its opponent.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Weapons</B></FONT><FONT SIZE=4>
&ndash; the damage a player is going to select to throw it to the
opponent. Bigger damage means bigger return damage when looses the
cast.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Chat
buttons</B></FONT><FONT SIZE=4> &ndash; it is where the player store
a chat template to appear in the message box when press.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Pot</B></FONT><FONT SIZE=4>
&ndash; The price of the overall winner of the game.</FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4><B>Wins
</B></FONT><FONT SIZE=4>&ndash; The times a player wins in overall
round.</FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_5ff13099.png" ALIGN=BOTTOM WIDTH=710 HEIGHT=393 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western">Loser/Win Cinematic</H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>After the battle is
finished, another animation will be presented with either &ldquo;Winner&rdquo;
 or &ldquo;Loser&rdquo; animation.  </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m2988eb8b.jpg" ALIGN=BOTTOM WIDTH=623 HEIGHT=351 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><FONT SIZE=4>Awarding</FONT></H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>We then show an animated
page with points, coins, experience and awards growing.  Even if you
lose, this page comes up and the loser is awarded experience points
for playing the game.  <BR></FONT><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_m6a827522.jpg" ALIGN=BOTTOM WIDTH=523 HEIGHT=295 BORDER=0></P>
<H1 CLASS="western">Monetization &amp; Purchase Coins</H1>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>When a
player is out of coins or lacking coins for upgrade, the player can
Purchase more coins to suit their needs. </FONT>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_43066e80.jpg" ALIGN=BOTTOM WIDTH=582 HEIGHT=328 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc384952116"></A>
Tutorial How To Play</H1>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT SIZE=4>We will
be providing players with a detailed tutorial that illustrates
exactly how to play the game.  This will highlight different parts of
the screen and explain what each and every function does within the
game.</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4><I>Here is a sample
graphic:</I></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="<?php echo base_url() . 'images/' ;?>0128860001399755821_rps%2015.04.2014_html_ef10bf8.jpg" ALIGN=BOTTOM WIDTH=623 HEIGHT=351 BORDER=0></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<H1 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc384952117"></A>
Game Mechanics vs: 1.0</H1>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The Game mechanics will
start with the </FONT><FONT SIZE=4><B>Flash Screen</B></FONT><FONT SIZE=4>
of company&rsquo;s name then the </FONT><FONT SIZE=4><B>Introduction</B></FONT><FONT SIZE=4>
of the game and next to the </FONT><FONT SIZE=4><B>Login</B></FONT><FONT SIZE=4>
section. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952118"></A><FONT SIZE=4>Login
Phase </FONT>
</H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>If a player is already
register writing his/her user name and password is necessary to enter
into the game. If not, a player should register in the </FONT><FONT SIZE=4><B>Registration</B></FONT><FONT SIZE=4>
section to fill up his/her name, gender, user name and a password,
and the rest of the information can be edited in the </FONT><FONT SIZE=4><B>Edit
Profile</B></FONT><FONT SIZE=4> section including the adding up of
their profile picture. When the player tries to Login to the game the
game will try to connect to the server to look for the player&rsquo;s
game account. If ever the game could able to connect to the server,
it will try to search your account in the local data base if your
account is stored in the local data base the game will prompt up a
message that </FONT><FONT SIZE=4><B>&ldquo;Your device cannot access
to the network, you can only play Single Player mode</B></FONT><FONT SIZE=4>.&rdquo;
However, if the game could not locate your account in the local data
base, a message will prompt up saying, </FONT><FONT SIZE=4><B>&ldquo;Sorry
we cannot access your account, please try connecting it to the
network.&rdquo;</B></FONT><FONT SIZE=4>  Once the game is able to log
you in, you will then be brought into the </FONT><FONT SIZE=4><B>Main
Menu</B></FONT><FONT SIZE=4> section.</FONT></P>
<H2 CLASS="western"><A NAME="_Toc384952119"></A><FONT SIZE=4>Main
Menu Phase</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>Once the player is in the
</FONT><FONT SIZE=4><B>Main Menu</B></FONT><FONT SIZE=4> phase, if
the game is not connected to the network, the </FONT><FONT SIZE=4><B>Menu</B></FONT><FONT SIZE=4>
will try to deactivate the Multiplayer game, if ever the game is
connected to the network, the player can choose to play either
</FONT><FONT SIZE=4><B>Single-player</B></FONT><FONT SIZE=4> or
</FONT><FONT SIZE=4><B>Multiplayer</B></FONT><FONT SIZE=4> game.  The
top left corner of the </FONT><FONT SIZE=4><B>Main Menu</B></FONT><FONT SIZE=4>
is the player&rsquo;s </FONT><FONT SIZE=4><B>Profile </B></FONT><FONT SIZE=4>button,
if press the player is brought into the </FONT><FONT SIZE=4><B>Profile</B></FONT><FONT SIZE=4>
section of the game. Below the Profile button is the </FONT><FONT SIZE=4><B>Single
Player</B></FONT><FONT SIZE=4> button, a good way to start playing
the game. Then below the </FONT><FONT SIZE=4><B>Single Player</B></FONT><FONT SIZE=4>
button is the </FONT><FONT SIZE=4><B>Multiplayer</B></FONT><FONT SIZE=4>
button to create a competition with other players in different
countries. Just in case a player is not able to understand the game a
step by step tutorial is provided by clicking the </FONT><FONT SIZE=4><B>Tutorial</B></FONT><FONT SIZE=4>
button.</FONT></P>
<H2 CLASS="western"><A NAME="_Toc384952120"></A><FONT SIZE=4>Profile
Phase</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>In this section the player
can edit his/her personal information like name, date of birth, and
gender. The </FONT><FONT SIZE=4><B>Profile</B></FONT><FONT SIZE=4>
section is also where he/she can see his/her </FONT><FONT SIZE=4><B>character
</B></FONT><FONT SIZE=4>and</FONT><FONT SIZE=4><B> Items </B></FONT><FONT SIZE=4>able
to</FONT><FONT SIZE=4><B> Upgrade </B></FONT><FONT SIZE=4>it if
he/she wants to.</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952121"></A><FONT SIZE=4>Early
Game Phase</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>During the early face of
the game, the player can only use the basic weapon the </FONT><FONT SIZE=4><B>Stone
</B></FONT><FONT SIZE=4>which gave a damage of 10. The second weapon
the </FONT><FONT SIZE=4><B>knife </B></FONT><FONT SIZE=4>which gave a
damage of 20 will be activated when the player reach level 5 or by
activating his/her Facebook account and invite at least 5 more people
to play. The third weapon which is the </FONT><FONT SIZE=4><B>Gun</B></FONT><FONT SIZE=4>
will be activated when the player reached his/her level to 10 or at
level 5 and invite 5 more players to play. This is also the same with
the entire remaining Item, so the last item to be activated is the
life. Once the entire item is activated, the player can now upgrades
the items for more damage and less return damage more life and less
damage impact. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>As a start, the player is
given 1,000 coins for him/her to enable to play the Multi-Player
game. But it is recommended that the player should play first the
Single Player game to gain more experience and coins. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952122"></A><FONT SIZE=4>Single
Player Game</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>In the </FONT><FONT SIZE=4><B>Single
Player </B></FONT><FONT SIZE=4>game, the wager is deactivated
purposely to push the player to play the </FONT><FONT SIZE=4><B>Multi-Player
</B></FONT><FONT SIZE=4>game to gain more money. The pot price is
also fixed on the single player game and will increase base on the
level of the Player, to avoid getting more money and losing all the
money in the Single Player game. So if the player loses all his/her
money in the Multi-Player game he/she has a chance of gaining money
in the </FONT><FONT SIZE=4><B>Single Player </B></FONT><FONT SIZE=4>game
although it will take time rather that purchasing coins with real
money (See </FONT><FONT SIZE=4><B>Coins</B></FONT><FONT SIZE=4>
section for more details).  </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>In </FONT><FONT SIZE=4><B>Single
Player </B></FONT><FONT SIZE=4>game the player can choose the stages
he/she wants or choose random to randomize the stage during play.
Next is to choose the ranking type from 1v1 &ndash; 16v16 for now,
default will be 2v2, the chart will also determine how many AI will
play the game. The more the AI will play, the bigger the amount of
Pot (see </FONT><FONT SIZE=4><B>Pot</B></FONT><FONT SIZE=4> section
for more details). Once the selection is now been done, the player is
now then have to click the </FONT><FONT SIZE=4><B>Launch</B></FONT><FONT SIZE=4>
button to launch the game so the AI can enter the game. The player
will then be given a 5 seconds to choose the slot and team he/she
wants to belong, then the AI will fill in the vacant slots. The game
is now ready to start and the player should then click the start
button to start. Once the start button is click the 10 seconds
countdown will begin and then the chart will animate a clashing line
to tell who is going to fight and who wins the game. When the chart
reaches to your turn a clashing line will be animated and then will
prompt to the </FONT><FONT SIZE=4><B>Versus Cinematic</B></FONT><FONT SIZE=4>
next will be the fighting Scene (See </FONT><FONT SIZE=4><B>Fighting
Mechanics</B></FONT><FONT SIZE=4> for more details). After the
fighting scene is done a cinematic of who wins and who loses will
appear, if the player lose the game is over (see </FONT><FONT SIZE=4><B>Fighting
Chart</B></FONT><FONT SIZE=4> for more details).</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952123"></A><FONT SIZE=4>Multiplayer
Game</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The Multiplayer game is
similar to the Single Player game, however the chat is activated and
your opponent will be real persons not AI. When the player clicks the
Multiplayer button, a dash board will swipe across from right and a
server window will swipe across from left. The player is now then to
choose which server he/she will now enter, once inside the serve
there will be a list of Rooms for the player to join, that if there
are also other players created a game. The player can choose to join
the game listed in the Rooms or create his/her new game by pressing
the </FONT><FONT SIZE=4><B>Create</B></FONT><FONT SIZE=4> button.
Once click the process in creating a room is similar in creating a
single player game, that is choosing a stage, the ranking chart as
well how many rounds in a game. After launching the game, the player
host tries to wait for other players to join; while waiting for other
players, the host can do a chat with other players in the server to
invite them to the game the host had created. Once all the slots were
filled in, the host can now press the Start button to start the game
and the fighting scene begins. The fighting scene would be similar to
the Single Player fighting mechanics game. (See </FONT><FONT SIZE=4><B>Fighting
Mechanics</B></FONT><FONT SIZE=4> for more details)</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952124"></A><FONT SIZE=4>Fighting
Mechanics</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>Either in single player
mode or multiplayer mode the Fighting mechanics are the same.  The
players will be place randomly either at the right or left. There
will be a 10 seconds countdown for the player to decide what he/she
is going to cast during the clash; it&rsquo;s either </FONT><FONT SIZE=4><B>Rock</B></FONT><FONT SIZE=4>,
</FONT><FONT SIZE=4><B>Paper</B></FONT><FONT SIZE=4> or </FONT><FONT SIZE=4><B>Scissors,
</B></FONT><FONT SIZE=4>he/she is also going to decide how much
damage he/she is going to throw to the opponent either 10, 20, 30,
40, or 50.  During the 7 seconds countdown phase, the player can
press the Rock, Paper, Scissors button as many times he/she wants and
this will appear to the opponents screen to give a little confusion
to the opponent however the damage the player chooses will at appear
in the opponents screen. Within the 3 seconds countdown, the opponent
will not able to see what the player was able to cast for the final
casting then the clash begins. During the clashing phase, the
characters will shake their right hand for three times and at the
third time, the sign will be cast to see if who&rsquo;s going to win.
During the clashing Phase as well, the damage indicator will rise to
let both players see how much damage they cast to each other. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>Below the screen there are
5 buttons for trash talk templates which they can edit it in the
</FONT><FONT SIZE=4><B>Profile</B></FONT><FONT SIZE=4> section. The
players can press the </FONT><FONT SIZE=4><B>Trash Talks</B></FONT><FONT SIZE=4>
buttons as much as they want while the fighting continues. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The life bar starts at 100
pts but as the player&rsquo;s level becomes higher and higher, life
can be more than 100 pts if the player wishes to upgrade. During the
fighting scene, if the opponent&rsquo;s life riches to zero, the
player can do the last final blow which is to  press the screen as
many time as he/she can to give more bonus points. The bonus points
will be stored and added every time the player fights until riches to
the top 3 level of the game. If the player wins the final much,
he/she receives the entire bonus he/she collected, if looses but rich
the top 3 level of the game   he/she still receives the bonus. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952125"></A><FONT SIZE=4>Chart
and Pot prize mechanics</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>In the Multiplayer game,
the pot prize varies each level of competition. The division of the
pricing is not yet been discuss and finalize, however the game is
divided into two teams, thus to share as well to the members of the
team the price. Since the game is in a ranking base the division of
the price becomes more complex as the ranking goes larger and larger.
 </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952126"></A><FONT SIZE=4>Upgrading
Mechanics</FONT></H2>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>As a start, the Players
life and items are just basic but as the players experience becomes
higher and higher, they can now upgrade their items for better
fighting performance; like instead of having 50 pts damage but will
also have 50 pts return damage the item as it will be upgraded higher
and higher will have more than 50 damage and will have less than 50
return damage (55/45). Buying characters is also necessary for better
fighting performance. </FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952127"></A><FONT SIZE=4>Coins
Mechanics</FONT></H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>There are several ways for
a player to gain coins;  Fighting in single player &ndash; is a
safest way to gain coins without losing any, however it is a bit slow
compare to fighting a real player in multiplayer. Fighting in
Multiplayer &ndash; Fighting in Multiplayer will give you a boost of
gaining more coins however the chances of losing your coins is bigger
as well. Inviting friends from Facebook to play &ndash; by inviting
friends in Facebook, you will gain more coins as well. Sharing your
score in Facebook &ndash; a simple click and share your status in
Facebook will give you extra coins as well.  Buying Coins with real
money &ndash; the best way to gain more coins is buying it with real
money through Master Card and Visa.</FONT></P>
<H1 CLASS="western">Overall Dev Timeline For Everything Listed</H1>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952128"></A>Donald - Graphics : 
Timeline Estimations For Completion</H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=638 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=136>
  <COL WIDTH=154>
  <COL WIDTH=146>
  <COL WIDTH=145>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Main Menu</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=7 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Log In</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Profile</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Weapon Upgrade</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Character Upgrade</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Character Selection</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Game Play</FONT></P>
    </TD>
    <TD WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Create Room</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD ROWSPAN=6 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Ranking Chart</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Chat</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Dash Board</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>UI Room Chart</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Splash Screen</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Tutorial</FONT></P>
    </TD>
    <TD WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=10 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Versus Cinematic</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=136>
      <P><FONT SIZE=4>Lose/Win Cinematic</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=136>
      <P><FONT SIZE=4>Awarding Cinematic</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 7</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 8</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 9</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 10</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 11</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 12</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=136 VALIGN=TOP>
      <P><FONT SIZE=4>Background 2</FONT></P>
    </TD>
    <TD WIDTH=154>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; page-break-before: always">
<BR>
</P>
<H2 CLASS="western"><A NAME="_Toc384952129"></A>John - Graphics : 
Timeline Estimations For Completion</H2>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=638 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=145>
  <COL WIDTH=146>
  <COL WIDTH=146>
  <COL WIDTH=145>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Character Modelling</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=4 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Character Modelling</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Rigging</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Rigging</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 1</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=7 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 2</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 3</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 4</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 5</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Animation 6</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Background 1</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Background 3</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Background 4</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Weapon 1</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=6 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Weapon 2</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Weapon 3</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Weapon 4</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Weapon 5</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Weapon 6</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western" STYLE="page-break-before: always"><A NAME="_Toc384952130"></A>
Jexter &ndash; Lead unity developer :  Timeline Estimations For
Completion</H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=638 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=145>
  <COL WIDTH=146>
  <COL WIDTH=146>
  <COL WIDTH=145>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Intro</FONT></P>
    </TD>
    <TD ROWSPAN=4 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD ROWSPAN=10 WIDTH=146>
      <P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT SIZE=4>1 month</FONT></P>
      <P ALIGN=CENTER><BR>
      </P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Splash Screen</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Log In</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Main Menu</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Profile</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Weapon Upgrade</FONT></P>
    </TD>
    <TD ROWSPAN=3 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Character Upgrade</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Character Selection</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Chat</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Dash Board</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Game Play</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>2 weeks</FONT></P>
    </TD>
    <TD ROWSPAN=7 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 month</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Create Room</FONT></P>
    </TD>
    <TD ROWSPAN=2 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>UI Ranking Chart</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR>
    <TD WIDTH=145 VALIGN=TOP>
      <P><FONT SIZE=4>Tutorial</FONT></P>
    </TD>
    <TD ROWSPAN=4 WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 week</FONT></P>
    </TD>
    <TD WIDTH=145 VALIGN=TOP>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Versus Cinematic</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Lose/Win Cinematic</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Awarding Cinematic</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=145>
      <P><FONT SIZE=4>Networking</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 &frac12; month</FONT></P>
    </TD>
    <TD WIDTH=146>
      <P ALIGN=CENTER><FONT SIZE=4>1 &frac12; month</FONT></P>
    </TD>
    <TD WIDTH=145>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H1 CLASS="western">** Important **Investor info you need to know!</H1>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<H2 CLASS="western">Hong Kong</H2>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT SIZE=4>The company, for several
reasons, has decided to incorporate in Hong Kong.  This allows us to
be tax efficient and protects the company while we launch the game.</FONT></P>
<TABLE WIDTH=734 BORDER=1 BORDERCOLOR="#000001" CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=352>
  <COL WIDTH=352>
  <TR VALIGN=TOP>
    <TD WIDTH=352>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Strategic Location</B></FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>Strategically located
      at the heart of Asia - the gateway to Mainland China.</FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>Travel to and from Hong
      Kong to Beijing, Shanghai and other Asian cities can be within one
      day.</FONT></P>
      <P STYLE="margin-bottom: 0in"> 
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Ease of Doing
      Business</B></FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>A company can be opened
      in one or two week&rsquo;s time in Hong Kong.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>No foreign ownership
      restrictions on Hong Kong company.</FONT></P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>No restriction on
      business scope. </FONT>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4>International
      transportation hub with excellent business infrastructure
      facilities. </FONT>
      </P>
      <P STYLE="margin-bottom: 0in"> <FONT SIZE=4>  </FONT></P>
      <P STYLE="margin-bottom: 0in">  
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Simple and Low Tax
      System</B></FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <UL>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Corporate tax is
        capped at 16.5% of assessable profits.  </FONT></P>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Salaries tax is a
        maximum of 15%.</FONT></P>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Tax is exempted
        for income not sourced in Hong Kong (offshore income).</FONT></P>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>No capital gains
        tax, no withholding tax on dividends and interest.</FONT></P>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>No sales tax or
        VAT in Hong Kong.</FONT></P>
      </UL>
      <P STYLE="margin-left: 0.5in"><BR>
      </P>
    </TD>
    <TD WIDTH=352>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Sound Legal
      Environment</B></FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4> </FONT></P>
      <UL>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Independent legal
        system which is separate from Mainland China&rsquo;s, and adopts
        English common law.</FONT></P>
      </UL>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4> </FONT></P>
      <UL>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Intellectual
        Property protection is enforced, with strict regulations for
        patents, copyrights, trademarks and registered designs.</FONT></P>
      </UL>
      <P STYLE="margin-bottom: 0in"> <FONT SIZE=4>  </FONT></P>
      <P STYLE="margin-bottom: 0in"> 
      </P>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Clean Governance</B></FONT></P>
      <P STYLE="margin-bottom: 0in"><BR>
      </P>
      <UL>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Politically stable
        with pro-business governance and free flow of information.</FONT></P>
      </UL>
      <P STYLE="margin-bottom: 0in"><FONT SIZE=4> </FONT></P>
      <UL>
        <LI><P STYLE="margin-bottom: 0in"><FONT SIZE=4>Strict
        anti-corruption regimen - the Independent Commission Against
        Corruption (ICAC) is set up to combat both public and private
        sector corruption.</FONT></P>
      </UL>
      <P><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"> 
</P>
      <!-- end here -->

    </div> <!-- /container -->





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
