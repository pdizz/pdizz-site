<div id="content">
    <h1>Contact Me</h1>
    <?php echo form_open('contact', 'id="contact_form"'); ?>
    
    <label for="sender_name">Name:</label>
    <?php echo form_input('sender_name'); ?>
    <span class="error"><?php echo form_error('sender_name'); ?></span>
    
    <label for="sender_email">Email:</label>
    <?php echo form_input('sender_email'); ?>
    <span class="error"><?php echo form_error('sender_email'); ?></span>
    
    <label for="subject">Subject:</label>
    <?php echo form_input('subject'); ?>
    <span class="error"><?php echo form_error('subject'); ?></span>
    
    <label for="message">Message:</label>
    <?php echo form_textarea('message'); ?>
    <span class="error"><?php echo form_error('message'); ?></span>
    
    <?php echo form_submit('submit', 'Send'); ?>   
</div>
