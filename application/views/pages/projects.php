<h1>Projects</h1>
<h2><a href="https://github.com/pdizz/JotDown">Jot-down - Code Igniter application for rapid 
note-taking using Markdown</a></h2>
<p>I conceived of this project while taking an algorithms class as an application 
to allow computer science and math students (or anyone) to take notes quickly using 
<a href="http://daringfireball.net/projects/markdown/">Markdown</a> syntax for formatting, 
code blocks, and mathematical notation.</p>
<ul>Current features:
    <li>User authentication with Ion-Auth</li>
    <li>Type notes in plaintext with Markdown syntax and view them in formatted HTML</li>
    <li>Save notes to database and edit them later.</li>
</ul>
<ul>Planned features:
    <li>Export notes to html, pdf, other formats.</li>
    <li>LaTeX support for mathematical notation.</li>
    <li>Sharing notes between "study groups".</li>
</ul>
<h2><a href="<?php echo base_url(); ?>projects/bin-packing">Bin-packing for School Pictures</a></h2>
<p>Bin packing algorithm derived from 
<a href="https://github.com/jakesgordon/bin-packing">github.com/jakesgordon/bin-packing</a>
and adapted to pack to multiple growing bins with a fixed maximum size. Full 
source code available at <a href="https://github.com/pdizz/Packager">github.com/pdizz/Packager</a>.</p>
<p>This algorithm will pack multiple images to fit on variable-length sheets
printed on roll-paper. It is used in printing school picture packages e.g. a 
sheet of wallets. Because the length of the sheets varies the size of the "bin" 
or sheet must grow to fit the images as they're added without wasting extra space 
or requiring the paper to be cut by hand.</p>
<p>This prototype algorithm was translated into C# and used in our production 
software with great success.</p>

<img src="<?php echo base_url(); ?>images/bin-demo1.jpg" alt="Sample image 5x7 with two 3x5" />
<img src="<?php echo base_url(); ?>images/bin-demo2.jpg" alt="Sample image 4 wallets and 8 mini-wallets" />


<h2><a href="https://github.com/pdizz/reddit.php">Reddit API client in PHP</a></h2>
<p>An API client in object-oriented PHP. Interfaces with <a href="http://www.reddit.com/">reddit.com</a>
API and parses JSON data structure into easy to use PHP classes. </p>

<!--
<h2><a href="https://github.com/pdizz/Alchemy">Elder Scrolls Alchemy Workshop</a></h2>
<p></p>
-->
