<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Flattern - Flat and trendy bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1>Flat and trendy bootstrap template</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="index.html">Home <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="index-alt2.html">Homepage 2</a></li>
                        <li><a href="index-alt3.html">Homepage 3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#">Features <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="table.html">Table</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="animations.html">56 Animations</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="icon-variations.html">Icon variations</a></li>
                        <li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index.html">Nivo slider</a></li>
                            <li><a href="index-alt2.html">Slit slider</a></li>
                            <li><a href="index-alt3.html">Parallax slider</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.html">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Components</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Features</a><i class="icon-angle-right"></i></li>
              <li class="active">Components</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row demobtn">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <h4>Button types</h4>
                <a href="#" class="btn">btn default</a>
                <a href="#" class="btn btn-dark">btn dark</a>
                <a href="#" class="btn btn-theme">btn theme</a>
                <a href="#" class="btn btn-primary">btn-primary</a>
                <a href="#" class="btn btn-warning">btn-warning</a>
                <a href="#" class="btn btn-danger">btn-danger</a>
                <a href="#" class="btn btn-info">btn-info</a>
                <a href="#" class="btn btn-success">btn-success</a>
                <a href="#" class="btn btn-inverse">btn-inverse</a>
                <a href="#" class="btn btn-blue">btn-blue</a>
                <a href="#" class="btn btn-yellow">btn-yellow</a>
                <a href="#" class="btn btn-red">btn-red</a>
                <a href="#" class="btn btn-orange">btn-orange</a>
                <a href="#" class="btn btn-purple">btn-purple</a>
                <a href="#" class="btn btn-green">btn-green</a>
                <a href="#" class="btn btn-brown">btn-brown</a>
                <a href="#" class="btn btn-pink">btn-pink</a>
                <a class="btn btn-large btn-theme btn-rounded" href="#">Call action button</a>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4>Button with icon</h4>
                <p>
                  You can add icon from about 249 available icons to any choosen buttons. See some example below:
                </p>
                <a href="#" class="btn btn-primary"><i class="icon-cog"></i> button icon cog</a>
                <a href="#" class="btn btn-success"><i class="icon-heart"></i> button icon heart</a>
                <a href="#" class="btn btn-red"><i class="icon-cog"></i> button icon camera</a>
                <a href="#" class="btn btn-inverse btn-rounded"><i class="icon-briefcase"></i> button icon briefcase</a>
                <pre class="prettyprint linenums">
							 &lt;a href="your link" class="btn |button type|"&gt;&lt;i class="icon-|icon name|"&gt;&lt;/i&gt; Your button text&lt;/a&gt;
						</pre>
              </div>
              <div class="span6">
                <h4>More variations</h4>
                <p>
                  Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>
                </p>
                <div class="bs-docs-example">
                  <div class="btn-group">
                    <button class="btn btn-primary">primary</button>
                    <button class="btn btn-success">success</button>
                    <button class="btn btn-warning">warning</button>
                  </div>
                </div>
                <pre class="prettyprint linenums">
							 &lt;div class="btn-group"&gt; &lt;button class="btn btn-primary"&gt;primary&lt;/button&gt; &lt;button class="btn btn-success"&gt;success&lt;/button&gt; &lt;button class="btn btn-inverse"&gt;warning&lt;/button&gt; &lt;/div&gt;
						</pre>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4>Button sizes</h4>
                <p>
                  There are 5 button sizes: mini, small, normal, medium and large
                </p>
                <a href="#" class="btn btn-mini btn-primary">mini size</a>
                <a href="#" class="btn btn-small btn-warning">small size</a>
                <a href="#" class="btn btn-danger">normal size</a>
                <a href="#" class="btn btn-medium btn-danger">Medium size</a>
                <a href="#" class="btn btn-large btn-info">Large size</a>
              </div>
              <div class="span6">
                <h4>Button edge</h4>
                <p>
                  There are 3 button edge variations: normal, rounded and flat. Simply adding <code>btn-rounded</code> or <code>btn-flat</code> class and you'll get different button edge
                </p>
                <a href="#" class="btn btn-primary">normal primary</a>
                <a href="#" class="btn btn-warning btn-rounded">rounded button</a>
                <a href="#" class="btn btn-danger btn-flat">flat button</a>
                <a href="#" class="btn btn-primary btn-large btn-rounded">normal button</a>
                <a href="#" class="btn btn-warning btn-mini btn-rounded">rounded button</a>
                <a href="#" class="btn btn-danger btn-medium btn-rounded">flat button</a>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4>Tab <strong>top</strong></h4>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> One</a></li>
                  <li><a href="#two" data-toggle="tab">Two</a></li>
                  <li><a href="#three" data-toggle="tab">Three</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="one">
                    <p>
                      <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                    </p>
                    <p>
                      No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                    </p>
                  </div>
                  <div class="tab-pane" id="two">
                    <p>
                      Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                    </p>
                  </div>
                  <div class="tab-pane" id="three">
                    <p>
                      Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
                    </p>
                  </div>
                </div>
              </div>
              <div class="span6">
                <h4>Tabs <strong>left</strong></h4>
                <div class="tabbable tabs-left">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#topone" data-toggle="tab"> One</a></li>
                    <li><a href="#toptwo" data-toggle="tab">Two</a></li>
                    <li><a href="#topthree" data-toggle="tab">Three</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="topone">
                      <p>
                        <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                      </p>
                      <p>
                        No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                      </p>
                    </div>
                    <div class="tab-pane" id="toptwo">
                      <p>
                        Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                      </p>
                    </div>
                    <div class="tab-pane" id="topthree">
                      <p>
                        Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
                      </p>
                      <p>
                        Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end tab -->
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4>Tabs <strong>right</strong></h4>
                <div class="tabbable tabs-right">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#first" data-toggle="tab"><i class="icon-briefcase"></i> One</a></li>
                    <li><a href="#second" data-toggle="tab">Two</a></li>
                    <li><a href="#third" data-toggle="tab">Three</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="first">
                      <p>
                        <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                      </p>
                      <p>
                        No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                      </p>
                    </div>
                    <div class="tab-pane" id="second">
                      <p>
                        Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                      </p>
                    </div>
                    <div class="tab-pane" id="third">
                      <p>
                        Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
                      </p>
                      <p>
                        Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end tab -->
              </div>
              <div class="span6">
                <h4>Accordion</h4>
                <!-- start: Accordion -->
                <div class="accordion" id="accordion2">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									<i class="icon-minus"></i> Collapsible Group Item #1 </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
									<i class="icon-plus"></i> Collapsible Group Item #2 </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
									<i class="icon-plus"></i> Collapsible Group Item #3 </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <!--end: Accordion -->
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4>Progress bars</h4>
                <div class="progress">
                  <div class="bar bar-success bar80">
                  </div>
                </div>
                <div class="progress progress-striped">
                  <div class="bar bar20">
                  </div>
                </div>
                <div class="progress progress-striped active">
                  <div class="bar bar-success bar40">
                  </div>
                </div>
                <div class="progress">
                  <div class="bar bar-info bar35">
                  </div>
                  <div class="bar bar-success bar30">
                  </div>
                  <div class="bar bar-warning bar15">
                  </div>
                  <div class="bar bar-danger bar10">
                  </div>
                </div>
              </div>
              <div class="span6">
                <h4>Pagination</h4>
                <p>
                  Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.
                </p>
                <div class="bs-docs-example">
                  <div class="pagination">
                    <ul>
                      <li class="disabled"><a href="#">Prev</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">Next</a></li>
                    </ul>
                  </div>
                </div>
                <pre class="prettyprint linenums">
							 &lt;div class="pagination"&gt; &lt;ul&gt; &lt;li class="disabled"&gt;&lt;a href="#"&gt;Prev&lt;/a&gt;&lt;/li&gt; &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li&gt; &lt;/ul&gt; &lt;/div&gt;
						</pre>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
            <div class="row">
              <div class="span6">
                <h4 class="heading">Testimonial<span></span></h4>
                <div class="wrapper">
                  <div class="testimonial">
                    <p class="text">
                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                    </p>
                    <div class="author">
                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                      <p class="name">
                        Tom Shaun Dealova
                      </p>
                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <h4>Alerts</h4>
                <div class="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Well done!</strong> Change a few things up and try submitting again.
                </div>
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Heads up!</strong> Change a few things up and try submitting again.
                </div>
              </div>
            </div>
            <!-- divider -->
            <div class="row">
              <div class="span12">
                <div class="solidline">
                </div>
              </div>
            </div>
            <!-- end divider -->
          </div>
          <!-- end span12 -->
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<strong>Flattern studio, Pte Ltd</strong><br>
								 Springville center X264, Park Ave S.01<br>
								 Semarang 16425 Indonesia
					 		</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>
