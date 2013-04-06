<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css" />

<div id="content">   
    
    <h2>Bin Packing for School Pictures - Demo</h2>
    <p><a href="https://github.com/pdizz/Packager">github.com/pdizz/Packager</a></p>
    
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