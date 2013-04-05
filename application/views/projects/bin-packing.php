<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css" />

<div id="content">   
    
    <h2>Bin Packing for School Pictures - Demo</h2>
    
    <p>Bin packing algorithm derived from 
    <a href="https://github.com/jakesgordon/bin-packing">github.com/jakesgordon/bin-packing</a>
    and adapted to pack to multiple growing bins with a fixed maximum size. Full 
    source code available at <a href="https://github.com/pdizz/Packager">github.com/pdizz/Packager</a>.</p>
    <p>This algorithm will pack multiple images to fit on variable-length sheets
    printed on roll-paper. It is used in printing school picture packages such as 
    a sheet of wallets, or two 5x7 pictures on a single 10x7 sheet. Because the 
    length of the sheets varies the size of the "bin" or sheet must grow to fit 
    the images as they're added without wasting extra space or requiring the paper 
    to be cut by hand.</p>
    <p>This prototype algorithm was translated into C# and used in our production 
    software with great success.</p>
    
    <img src="<?php echo base_url(); ?>images/bin-demo1.jpg" alt="Sample image 5x7 with two 3x5" />
    <img src="<?php echo base_url(); ?>images/bin-demo2.jpg" alt="Sample image 4 wallets and 8 mini-wallets" />
    
    <h2>Demo</h2>
    
    <div class='blocks'>
        <label for='blocks'>Blocks: W x H [x N] - </br>
            <pre>
    For best results, sizes must be entered from largest to smallest.
    This will be taken care of using a sort algorithm or through the UI eventually.</br>
    Maximum sheet size is 100x80</br>
    8x10       = '100x80'
    5x7        = '50x70'
    3x5        = '50x35'
    wallet     = '25x35'
    miniwallet = '25x17.5'
            </pre>
        </label>
        <textarea id='blocks' rows=12>
100x80
50x70
50x35x2
25x35x8
25x17.5x8
        </textarea>
    </div>
    <div id="nofit">

    </div>
    <div id="preview">
    </div>

    <script src="<?php echo base_url(); ?>js/packagizer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/demo.js" type="text/javascript"></script>
</div>