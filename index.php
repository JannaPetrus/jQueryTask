<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="English" />
	<meta name="Description" content="Internet Jobs" />
	<link rel="stylesheet" type="text/css" href="css/styledefault.css" />
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="css/jquery-ui.css" media="screen">
	<title>Internet News</title>

    </head>
    <body>
	<div id="header">
	    <div id="logo">
			<p class="slogan"><b>Connecting Online people</b><br />Sharing IT trends</p>
			<div style="float: left;">
			    <h1><a href="#">Internet News</a></h1>
			</div>
	    </div>
	    <div id="hmenu">
			<a href="#">Home</a><a href="#">Browse News</a><a href="#">Submit News</a>
	    </div>
	    <div id="hlogin">
			<p>Hi,  You can <a href="#" id="create-user">Login</a> here.</p>
			 
			<div id="dialog-form" title="Login or register here">
			 	<form>
			 		<!--Login/Register form append here by click on "login"-->    
			 	</form>  
            </div>

              <div id="users-contain" class="ui-widget">
              <table id="users" class="ui-widget ui-widget-content">
                <thead>
                  <tr class="ui-widget-header ">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>johndoe1</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
	    </div>
	</div>

	<div class="content">



	    <div id="articles">
		<div id="left">

		    <div id="newsbox">
			<h1>New posts</h1>
				<div id="newsitem">
				    <h2><a href="#">Lorem Ipsum</a></h2>
				    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent lupt...</p>
				    <p class="date">
					<span id="author">Posted by: <i>John Doe</i></span>
					<span>
					    <img src="images/more.gif" alt="" /> <a href="#">Read more</a> 
					</span>
					<span>
					    <img src="images/comment.gif" alt="" /> <a href="#">Comments(7)</a> 
					</span>
					<span>
					    <img src="images/timeicon.gif" alt="" /> 10th Jan, 2006
					</span>
				    </p>
				</div>


				<h2><a href="#">Lorem Ipsum</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent lupt...</p>
				<p class="date"><img src="images/more.gif" alt="" /> <a href="#">Read more</a> <img src="images/comment.gif" alt="" /> <a href="#">Comments(12)</a> <img src="images/timeicon.gif" alt="" /> 29th Dec, 2005</p>

				<h2><a href="#">Lorem Ipsum</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent lupt...</p>
				<p class="date"><img src="images/more.gif" alt="" /> <a href="#">Read more</a> <img src="images/comment.gif" alt="" /> <a href="#">Comments(34)</a> <img src="images/timeicon.gif" alt="" /> 24th Dec, 2005</p>

				<div id="pagination">
				    <div id="prev">
					<button>Prev</button>
				    </div>
				    <div id="pagenum">
					<span>Page 1</span>
				    </div>
				    <div id="next">
					<button>Next</button>
				    </div>
				</div>

		    </div>


		</div>

		<div id="right">

		    <div id="searchform">
			<form method="post" class="search" action="/post-form.php">
			    <p>
				<input name="search" class="text" id="search" type="text" />
				<input name="search" id="searchButton" class="button" value="Search" type="submit" />
			    </p>
			</form>
		    </div>

		    <div id="rightmenu">
				 <!--accordion start-->
				<div id="navaccordion">
			          
				</div>
		        <!--accordion end-->
		    </div>

		    <div class="rightarticle">
			<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing elit</a>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci</a>.</p>
		    </div>					

		    <div class="rightarticle_ad">
			<a href="#">Featured Posts</a>
		    </div>
		    <div class="rightarticle_ad">
			<a href="#">Top 10 News</a>
		    </div>
		</div>
	    </div>
	    <div id="links">
		<p></p>		
	    </div>
	</div>

	<div id="additional">
	    <p><b>Lovely Quote: </b><span id="loveluquot">There may be no 'I' in team, but there's a 'ME' if you look hard enough. - David Brent</span></p>
	</div>

	<div id="whiteline"></div>

	<div id="footer">
	    <p style="float: left;"><a href="#">Archive</a><img src="images/separator.gif" alt="" /><a href="#">RSS Feed</a>
		<br /><a href="#">CSS</a> and <a href="#">XHTML</a><img src="images/separator.gif" alt="" /><a href="#">Accessibility</a></p>
	    <p style="float: right; text-align: right;"><a href="#">Contact Us</a><br />
		&copy; 2011, <a href="#" title="Internet Jobs">Internet Jobs</a></p>
	</div>

	<div id="datasearch">
		
	</div>

	<script src="js/jquery/jquery.js"></script>
    <script src="js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.total-storage.js"></script>
    <script src="js/callScripts.js"></script>

    </body>	
</html>

<!-- <h3>Section 1</h3>
			          <div>
			            <p>
			            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
			            </p>
			          </div>
			          <h3>Section 2</h3>
			          <div>
			            <p>
			            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			            suscipit faucibus urna.
			            </p>
			          </div>
			          <h3>Section 3</h3>
			          <div>
			            <p>
			            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
			            </p>
			            <ul>
			              <li>List item one</li>
			              <li>List item two</li>
			              <li>List item three</li>
			            </ul>
			          </div> -->