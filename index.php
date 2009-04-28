<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>jPolaroid</title>
   <link rel="stylesheet" href="_css/yui.css" type="text/css">
   <link rel="stylesheet" href="_css/main.css" type="text/css">
   <link rel="stylesheet" href="_css/jpolaroid.minified.css" type="text/css">
   <script type = "text/javascript" src = "_js/jquery-1.3.2.min.js"></script>
   <script type = "text/javascript" src = "_js/jquery.jpolaroid.minified.js"></script>
   <script type = "text/javascript" src = "_js/jquery.chili-2.2.js"></script>
   <script type = "text/javascript" src = "_js/effects.js"></script>
   <script type="text/javascript"> 
    ChiliBook.recipeFolder = "_js/";  
	</script>  
</head>
<body>
<div id="doc3" class="yui-t7">
   <div id="hd">
   	<div class="center">
   	<center>
	<div id = "title">
		<img id = "logo" src = "_images/logo.png"></img>
		<br/>
		<small style = "margin-bottom:10px">Turn your images into fancy customizable Polaroids!</small>
	</div>
	</center>
   </div>
   	<div id = "tagline">developed by <a target="_blank" href="http://www.steveram.info">Steven Ramkumar</a> under the <a target="_blank" href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>, using <a target="_blank" href="http://www.jquery.com">jQuery</a>, last updated on 25/04/2009</div>	
   </div>
   <div id="bd">
	<div class="yui-g">
		<div class="center">
		<div class="example">
          <h2>What is it?</h2>
          <p style = "line-height:2em">jPolaroid is a jQuery plugin, which turns your boring images into fun, customizable Polaroid style images! It is simple to use and very clean. Download the tarball, or zip/rar, view the examples, then start adding some retro style to your webpages.</p>
		</div>
		<div class="example">
          <h2>Download</h2>
		  <p>Requires <a target = "_blank" href = "http://code.google.com/p/jqueryjs/downloads/detail?name=jquery-1.3.2.min.js&downloadBtn=">jQuery 1.3.x</a>.</p>
		  <p style = "font-weight:bold"><a href = "/jpolaroid/jpolaroid.rar">Download jPolaroid 1.1</a></p>
		  <p>The development code is kept at GitHub at <a target = "_blank" href = "http://github.com/steveram/jpolaroid">http://github.com/steveram/jpolaroid</a></p>
		</div>
		<div class="example">
          <h2>Support</h2>
		  <p>Join our <a target = "_blank" href ="http://groups.google.com/group/jpolaroid/">Google Groups mailing list</a>.</p>
		</div>
		<div class="example">
 		 <h2>Installation</h2>
		 <p>Include the css and js file, along with the jQuery library.<b> Don't forget to change the paths to your image directory in the css file.</b></p>
		 <div class =  "code">
<pre style="margin:30px; line-height:1.3em"><code class="html">
&lt;script type=&quot;text/javascript&quot; src=&quot;path_to_js/jquery.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javaScript&quot; src=&quot;path_to_js/jquery.jpolaroid.js&quot;&gt;&lt;/script&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;path_to_css/jpolaroid.css&quot; type=&quot;text/css&quot;/&gt;
</code></pre>
		 </div>
		</div>
		<div class="example">
 		 <h2>Usage</h2>
		 <br/>
		 <p>1. The simplest way to use jPolaroid is to call polaroid() on any image element: </p>
		 <div class =  "code">
		 <h3>HTML</h3>
		 <pre style="margin:30px; line-height:1.3em"><code class="html">
&lt;img id = &quot;jquery&quot; src = &quot;_images/jquery-logo.gif&quot;&gt;&lt;/img&gt;
		</code></pre>
		 <h3>JavaScript</h3>
		 <pre style="margin:30px; line-height:1.3em"><code class="js">
$(document).ready(function(){
	$('#jquery').polaroid();
});
		</code></pre>
		 </div>
		 <h3 style = "font-size:11px; padding-top:10px; padding-left:10px; font-weight:bold; text-decoration:underline">Result:</h3>
		 <img id = "jquery" src = "_images/jquery-logo.gif"></img>	 
		 <br/>
		 <div style = "clear:both"></div>
		 <p>2. You can also pass in options into the polaroid function: </p>
		 <div class =  "code">
		 <h3>HTML</h3>
		 <pre style="margin:30px; line-height:1.3em"><code class="html">
&lt;img id = &quot;sanfran&quot; src = &quot;_images/san-francisco.jpg&quot;&gt;&lt;/img&gt;
</code></pre>
		 <h3>JavaScript</h3>
		 <pre style="margin:30px; line-height:1.3em"><code class="js">
$(document).ready(function(){
	$('#sanfran').polaroid({
		tape:true,
		shadowPos: "top-left",
		bottom: "50px",
		top: "22px",
		left: "24px",
		right: "24px",
		shadowColor: "#CCCCCC",
		backgroundColor: "#FDFDFD"
	});
});
</code></pre>
		 </div>
		 <h3 style = "font-size:11px;  padding-top:10px; padding-left:10px;  font-weight:bold; text-decoration:underline">Result:</h3>
		 <img id = "sanfran" src = "_images/san-francisco.jpg"></img>	 
		 <br/>
		 <div style = "clear:both"></div>
		 <p>3. Here is a list of all possible options you can pass: </p>
		 <br/>
		 <table>
<col/>
<col id="middle"/>
<col/>
<thead>
	<tr><th>Option</th><th>Parameters</th><th>Default</th></tr>
</thead>
<tbody>
		<tr><td>tape</td><td>true | false</td><td>true</td></tr>
		<tr class="odd"><td>shadowPos</td><td>"top-left" | "top-right" | "bottom-left" | "bottom-right" </td><td>"bottom-right"</td></tr>
		<tr><td>top</td><td>[pixel value]</td><td>"22px"</td></tr>
		<tr class="odd"><td>bottom</td><td>[pixel value]</td><td>"33px"</td></tr>
		<tr><td>right</td><td>[pixel value]</td><td>"27px"</td></tr>
		<tr class="odd"><td>left</td><td>[pixel value]</td><td>"27px"</td></tr>
		<tr><td>shadowColor</td><td>[hex value]</td><td>"#CCCCCC"</td></tr>
		<tr class="odd"><td>backgroundColor</td><td>[hex value]</td><td>"#FDFDFD"</td></tr>
</tbody>
</table>
		</div>
		</div>
	</div>
</div>
   <div id="ft"><div class="center"><p>Code &copy;2009&nbsp;Steven&nbsp;Ramkumar&nbsp;MIT License</p></div></div>
</div>
</body>
</html>
