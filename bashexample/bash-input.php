<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Different ways in which we may supply data to a Bash script. Section 3 of an 8 section introduction to Bash scripting.">
    <meta name="keywords" content="scripting tutorial, bash tutorial, bash scripting tutorial, bash, scripting, input, read, STDIN">
    <meta name="author" content="Ryan Chadwick">

    <title>User Input - Bash Scripting Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    
    <link rel='icon' type='image/png' href='/favicons/favicon_bash.png'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document" data-spy='scroll' data-target='#sidebox' data-offset='90'> 
	<header id='ryansheader'>
	<div class='container'>
		<div class='col-sm-12'>
			<a id='ryantitle' href='/' title='A collection of Technology Tutorials'>Ryans Tutorials</a>
			
			<div class='btn-toolbar pull-right'>
				<div class='btn-group mega-dropdown'>
					<button class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown' >More Tutorials <span class='caret'></span></button>
					<ul class='dropdown-menu pull-right mega-dropdown-menu row'>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>Linux</li>
								<li><a href='/linuxtutorial/'><span><img src='/img/round/tux_48.png' alt='Tux' /><p>Linux Tutorial</p></span></a></li>
								<li><a href='/bash-scripting-tutorial/'><span><img src='/img/round/hammer_48.png' alt='Hammer' /><p>Bash Scripting Tutorial</p></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>Web</li>
								<li><a href='/html-tutorial/'><span><img src='/img/round/html_48.png' alt='HTML' /><p>HTML Tutorial</p></span></a></li>
								<li><a href='/css-tutorial/'><span><img src='/img/round/css_48.png' alt='CSS' /><p>CSS Tutorial</p></span></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>General</li>
								<li><a href='/binary-tutorial/'><span><img src='/img/round/abacus_48.png' alt='Abacus' /><p>Binary Tutorial</p></span></a></li>
								<li><a href='/regular-expressions-tutorial/'><span><img src='/img/round/search_48.png' alt='Search' /><p>Regular Expressions Tutorial</p></span></a></li>
								<li><a href='/boolean-algebra-tutorial/'><span><img src='/img/round/config_48.png' alt='Switches' /><p>Boolean Algebra Tutorial</p></span></a></li>
								<li><a href='/rubiks-cube-tutorial/'><span><img src='/img/round/cube_48.png' alt='Rubiks Cube' /><p>Solve the Cube</p></span></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>&nbsp;</li>
								<li><a href='/problem-solving-skills/'><span><img src='/img/round/map_48.png' alt='Map' /><p>Problem Solving Skills</p></span></a></li>
								<li><a href='/graphic-design-tutorial/'><span><img src='/img/round/brush_48.png' alt='Brush' /><p>Basic Graphic Design</p></span></a></li>
								<li><a href='/programming-challenges/'><span><img src='/img/round/rocket_48.png' alt='Rocket' /><p>Programming Challenges</p></span></a></li>
								<li><a href='/software-design-and-development/'><span><img src='/img/round/browser_48.png' alt='Software' /><p>Software Design and Development</p></span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header> 
	
	<!-- Fixed navbar -->
	<div id='tutorialheader' class="navbar navbar-inverse navbar-static" role="navigation" data-spy='affix' data-offset-top='40'>
		<div class="container">
			<h1>Bash Scripting Tutorial - 3. User Input</h1>
			
			<div class='btn-toolbar pull-right'>
								<div class='btn-group'>
					<button class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown' >Tutorial Sections <span class='caret'></span></button>
					<ul class='dropdown-menu pull-right'>
					<li><a href='./'>Introduction</a></li><li><a href='./bash-script.php'>1. What is a Bash Script?</a></li><li><a href='./bash-variables.php'>2. Variables</a></li><li class='active'><a href='./bash-input.php'>3. Input</a></li><li><a href='./bash-arithmetic.php'>4. Arithmetic</a></li><li><a href='./bash-if-statements.php'>5. If Statements</a></li><li><a href='./bash-loops.php'>6. Loops</a></li><li><a href='./bash-functions.php'>7. Functions</a></li><li><a href='./bash-user-interface.php'>8. User Interface</a></li>					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container'>
		<div class='row'>
			<div class='col-md-9'>
				<div class='jumbotron'>
					<h2>User Input!</h2>
					<p>Let's make our scripts interactive.</p>
				</div>
				
				<h2 id='introduction' class='introduction'>Introduction</h2>
				
				<div class='pull-right'>
					<style>
					.ryanstutorials-bash-scripting-top { width: 300px; height: 250px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-top { width: 336px; height: 280px; } }
					@media(min-width: 800px) { .ryanstutorials-bash-scripting-top { width: 336px; height: 280px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Top -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-top"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="7812598475"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<p>We looked at one form of user input (<a href='bash-variables.php#arguments'>command line arguments</a>) in the previous section.  Now we would like to introduce other ways the user may provide input to the Bash script. Following this we'll have a discussion on when and where is best to use each method.</p> 
				
				<p>After the mammoth previous section this one is much easier to get through.</p>
				
				
				<h2 id='read'>Ask the User for Input</h2>
				
				<p>If we would like to ask the user for input then we use a command called <b>read</b>. This command takes the input and will save it into a variable.</p>
				
				<p class='commandoutline'>read var1</p>
				
				<p>Let's look at a simple example:</p>
				
				<div class='page'>
					<h4>introduction.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Ask the user for their name</span></li>
						<li></li>
						<li>echo Hello, who am I talking to?</li>
						<li></li>
						<li>read varname</li>
						<li></li>
						<li>echo It\'s nice to meet you $varname</li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Line 4</b> - Print a message asking the user for input.</li>
					<li><b>Line 6</b> - Run the command <b>read</b> and save the users response into the variable <b>varname</b></li>
					<li><b>Line 8</b> - <b>echo</b> another message just to verify the read command worked. Note: I had to put a backslash ( \ ) in front of the ' so that it was escaped.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>./introduction.sh</li>
						<li>Hello, who am I talking to?</li>
						<li><i>Ryan</i></li>
						<li>It's nice to meet you Ryan</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				<ul>
					<li>Note:  Ryan above is in italics just to show that it was something I typed in.  On your terminal input will show up normally.</li>
				</ul>
				
				
				<h3>More with Read</h3>
				
				<p>You are able to alter the behaviour of <b>read</b> with a variety of command line options.  (See the man page for read to see all of them.)  Two commonly used options however are <b>-p</b> which allows you to specify a prompt and <b>-s</b> which makes the input silent.  This can make it easy to ask for a username and password combination like the example below:</p>
				
				<div class='page'>
					<h4>login.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Ask the user for login details</span></li>
						<li></li>
						<li>read -p 'Username: ' uservar</li>
						<li>read -sp 'Password: ' passvar</li>
						<li>echo</li>
						<li>echo Thankyou $uservar we now have your login details</li>
					</ol>
				</div>
				
				<ul>
					<li>On lines 4 and 5 above we include the prompt within quotes so we can have a space included with it.  Otherwise the user input will start straight after the last character of the prompt which isn't ideal from a readability point of view.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>./login.sh</li>
						<li>Username: <i>ryan</i></li>
						<li>Password:</li>
						<li>Thankyou ryan we now have your login details</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				
				<h3>More variables</h3>
				
				<p>So far we have looked at a single word as input.  We can do more than that however.</p>
				
				<div class='page'>
					<h4>cars.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Demonstrate how read actually works</span></li>
						<li></li>
						<li>echo What cars do you like?</li>
						<li></li>
						<li>read car1 car2 car3</li>
						<li></li>
						<li>echo Your first car was: $car1</li>
						<li>echo Your second car was: $car2</li>
						<li>echo Your third car was: $car3</li>
					</ol>
				</div>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>./cars.sh</li>
						<li>What cars do you like?</li>
						<li><i>Jaguar Maserati Bentley</i></li>
						<li>Your first car was: Jaguar</li>
						<li>Your second car was: Maserati</li>
						<li>Your third car was: Bentley</li>
						<li><span class='prompt'></span></li>
						<li><span class='prompt'></span>./cars.sh</li>
						<li>What cars do you like?</li>
						<li><i>Jaguar Maserati Bentley Lotus</i></li>
						<li>Your first car was: Jaguar</li>
						<li>Your second car was: Maserati</li>
						<li>Your third car was: Bentley Lotus</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				<p>The general mechanism is that you can supply several variable names to <b>read</b>.  Read will then take your input and split it on whitespace.  The first item will then be assigned to the first variable name, the second item to the second variable name and so on.  If there are more items than variable names then the remaining items will all be added to the last variable name.  If there are less items than variable names then the remaining variable names will be set to blank or null.</p>
				
				
				<h2 id='stdin'>Reading from STDIN</h2>
				
				<p>It's common in Linux to <a href='/linuxtutorial/piping.php#piping'>pipe</a> a series of simple, single purpose commands together to create a larger solution tailored to our exact needs.  The ability to do this is one of the real strenghs of Linux.  It turns out that we can easily accommodate this mechanism with our scripts also.  By doing so we can create scripts that act as filters to modify data in specific ways for us.</p>
				
				<p>Bash accomodates piping and redirection by way of special files.  Each process gets it's own set of files (one for STDIN, STDOUT and STDERR respectively) and they are linked when piping or redirection is invoked.  Each process gets the following files:</p>
				
				<ul>
					<li><b>STDIN</b> - /proc/&lt;processID&gt;/fd/0</li>
					<li><b>STDOUT</b> - /proc/&lt;processID&gt;/fd/1</li>
					<li><b>STDERR</b> - /proc/&lt;processID&gt;/fd/2</li>
				</ul>
				
				<p>To make life more convenient the system creates some shortcuts for us:</p>
				
				<ul>
					<li><b>STDIN</b> - /dev/stdin or /proc/self/fd/0</li>
					<li><b>STDOUT</b> - /dev/stdout or /proc/self/fd/1</li>
					<li><b>STDERR</b> - /dev/stderr or /proc/self/fd/2</li>
				</ul>
				
				<p><b>fd</b> in the paths above stands for file descriptor.</p>
				
				<div class='block-center'>
					<style>
					.ryanstutorials-bash-scripting-middle { width: 320px; height: 50px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-middle { width: 468px; height: 60px; } }
					@media(min-width: 750px) { .ryanstutorials-bash-scripting-middle { width: 728px; height: 90px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Middle -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-middle"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="9289331675"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<p>So if we would like to make our script able to process data that is piped to it all we need to do is read the relevant file.  All of the files mentioned above behave like normal files.</p>
				
				<div class='page'>
					<h4>summary</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># A basic summary of my sales report</span></li>
						<li></li>
						<li>echo Here is a summary of the sales data:</li>
						<li>echo ====================================</li>
						<li>echo</li>
						<li></li>
						<li>cat /dev/stdin | cut -d' ' -f 2,3 | sort</li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Lines 4, 5, 6</b> - Print a title for the output</li>
					<li><b>Line 8</b> - <b>cat</b> the file representing STDIN, <b>cut</b> setting the delimiter to a space, fields 2 and 3 then sort the output.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>cat salesdata.txt</li>
						<li>Fred apples 20 July 4</li>
						<li>Susy oranges 5 July 7</li>
						<li>Mark watermelons 12 July 10</li>
						<li>Terry peaches 7 July 15</li>
						<li><span class='prompt'></span></li>
						<li><span class='prompt'></span>cat salesdata.txt | ./summary</li>
						<li>Here is a summary of the sales data:</li>
						<li>====================================</li>
						<li></li>
						<li>apples 20</li>
						<li>oranges 5</li>
						<li>peaches 7</li>
						<li>watermelons 12</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				
				
				<h2 id='which'>So which should I use?</h2>
				
				<p>So we now have 3 methods for getting input from the user:</p>
				
				<ul>
					<li>Command line arguments</li>
					<li>Read input during script execution</li>
					<li>Accept data that has been redirected into the Bash script via STDIN</li>
				</ul>
				
				<p>Which method is best depends on the situation.</p>
				
				<p>You should normally favor command line arguments wherever possible.  They are the most convenient for users as the data will be stored in their command history so they can easily return to it.  It is also the best approach if your script may be called by other scripts or processes (eg. maybe you want it to run periodically using CRON).</p>
				
				<p>Sometimes the nature of the data is such that it would not be ideal for it to be stored in peoples command histories etc.  A good example of this is login credentials (username and password). In these circumstances it is best to <b>read</b> the data during script execution.</p>
				
				<p>If all the script is doing is processing data in a certain way then it is probably best to work with STDIN.  This way it can easily be added into a pipeline.</p>
				
				<p>Sometimes you may find that a combination is ideal.  The user may supply a filename as a command line argument and if not then the script will process what it finds on STDIN (when we look at If statements we'll see how this may be achieved).  Or maybe command line arguments define certain behaviour but <b>read</b> is also used to ask for more information if required.</p>
				
				<p>Ultimatately you should think about 3 factors when deciding how users will supply data to your Bash script:</p>
				
				<ul>
					<li><b>Ease of use</b> - which of these methods will make it easiest for users to use my script?</li>
					<li><b>Security</b> - Is there sensitive data which I should handle appropriately?</li>
					<li><b>Robustness</b> - Can I make it so that my scripts operation is intuitive and flexible and also make it harder to make simple mistakes?</li>
				</ul>
				
				<h2 id='summary'>Summary</h2>
				
				<div class='stuffwelearnt'>
					<dl>
						<dt>read varName</dt>
						<dd>Read input from the user and store it in the variable varName.</dd>
						
						<dt>/dev/stdin</dt>
						<dd>A file you can read to get the STDIN for the Bash script</dd>
					</dl>
				</div>
				
				<div class='importantconcepts'>
					<dl>
						<dt>Usability</dt>
						<dd>Your choice of input methods will have an impact on how useable your script is.</dd>
					</dl>
				</div>
				
				<h2 id='activities'>Activities</h2>
				
				<p>Let's dabble with input.</p>
				
				<ul class='activities'>
					<li>Create a simple script which will ask the user for a few pieces of information then combine this into a message which is echo'd to the screen.</li>
					<li>Add to the previous script to add in some data coming from command line arguments and maybe some of the other system variables.</li>
					<li>Create a script which will take data from STDIN and print the 3rd line only.</li>
					<li>Now play about with creating a script which will behave as a filter.  Create a script which will rearrange the output of the command <b>ls -l</b> in a useful way (eg maybe you only print the filename, size and owner) (Hint: <a href='/linuxtutorial/bonus.php#awk'>awk</a> can be useful here).</li>
				</ul>
				
				<div class='block-center'>
					<style>
					.ryanstutorials-bash-scripting-bottom { width: 320px; height: 50px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-bottom { width: 468px; height: 60px; } }
					@media(min-width: 750px) { .ryanstutorials-bash-scripting-bottom { width: 728px; height: 90px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Bottom -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-bottom"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="1766064874"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				
				<div id='bottomnavigation'>
					<div class='pull-left'><a href='./bash-variables.php'><span class='glyphicon glyphicon-chevron-left'></span> Variables</a></div>
					<div class='pull-right'><a href='./bash-arithmetic.php'>Arithmetic <span class='glyphicon glyphicon-chevron-right'></span></a></div>
				</div>
				
			</div>
			<div class='col-md-3 ' id='sideboxcol'>
				<div class="well sidebar-nav hidden-xs hidden-sm"  id='sidebox' data-spy='affix' data-offset-top='40'>
					<ul class="nav nav-list">
						<li class="nav-header">Section Breakdown</li>
						<li><a href="#introduction">Introduction</a></li>
						<li><a href="#read">Ask User for Input</a></li>
						<li><a href="#stdin">Reading from STDIN</a></li>
						<li><a href="#which">So Which Should I Use?</a></li>
						<li><a href='#summary'>Summary</a></li>
						<li><a href='#activities'>Activities</a></li>
						<li class="nav-header">Next Section</li>
						<li><a href="./bash-arithmetic.php">Arithmetic</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container-fluid footer-background margin-top'>
	<div class='row-fluid'>
		<div class='col-md-12'>
			<div class='container'>
				<footer>
					<p>By <a href="https://plus.google.com/105636787773904848687" rel='author'>Ryan Chadwick</a> &copy; 2018 <span style='margin-left:30px;'><a href="https://twitter.com/funcreativity" class="twitter-follow-button" data-show-count="false" >Follow @funcreativity</a></span><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
				</footer>
					
				<div id='footerbar'></div> 

				<div class='row'>
					<div class="col-sm-3 tutorial-outline">
						<a href='/' title='Kindle the flame'>
							<img src='/img/round/fire_64.png' alt='Flame' />
							<h4>Home</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/linuxtutorial/'>
							<img src='/img/round/tux_64.png' alt='Tux' />
							<h4>Linux Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/html-tutorial/'>
							<img src='/img/round/html_64.png' alt='HTML' />
							<h4>HTML Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/binary-tutorial/'>
							<img src='/img/round/abacus_64.png' alt='Abacus' />
							<h4>Binary Tutorial</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-3">
						<p>Education is the kindling of a flame, <br />not the filling of a vessel.<br />
						<i>- Socrates</i></p>
						
						<p><a href='/contact.php'>Contact</a> | <a href='/disclaimer.php' title='Privacy Policy, Terms of Use and Disclaimer'>Disclaimer</a></p>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/bash-scripting-tutorial/'>
							<img src='/img/round/hammer_64.png' alt='Hammer' />
							<h4>Bash Scripting Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/css-tutorial/'>
							<img src='/img/round/css_64.png' alt='CSS' />
							<h4>CSS Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/regular-expressions-tutorial/'>
							<img src='/img/round/search_64.png' alt='Search' />
							<h4>Regular Expressions</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-offset-3 col-sm-3 tutorial-outline">
						<a href='/programming-challenges/'>
							<img src='/img/round/rocket_64.png' alt='Rocket' />
							<h4>Programming Challenges</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/problem-solving-skills/'>
							<img src='/img/round/map_64.png' alt='Map' />
							<h4>Problem Solving</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/boolean-algebra-tutorial/'>
							<img src='/img/round/config_64.png' alt='Switches' />
							<h4>Boolean Algebra Tutorial</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-offset-3 col-sm-3 tutorial-outline">
						<a href='/graphic-design-tutorial/'>
							<img src='/img/round/brush_64.png' alt='Paint Brush' />
							<h4>Basic Design Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/rubiks-cube-tutorial/'>
							<img src='/img/round/cube_64.png' alt='Rubiks Cube' />
							<h4>Solve the Cube</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/software-design-and-development/'>
							<img src='/img/round/browser_64.png' alt='Software' />
							<h4>Software Design and Development</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-20188827-12', 'ryanstutorials.net');
	ga('send', 'pageview');

</script>

	<!--<div id='rhythm'></div>-->
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src='../js/base.js'></script>
</body>

</html> 
 
 
 
