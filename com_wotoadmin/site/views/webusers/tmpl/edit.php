<?php
defined('_JEXEC') or die('Restricted access');
?>

<H2>User Admin - Edit</H2>

<?php echo $this->htmlMsg; ?>

<div class="first-fieldset">
    <form name="formname">
        <fieldset class="adminform">
            <legend>Web User Fields:</legend>
            <?php foreach ($this->form->getFieldset('primary_fieldset') as $field): ?>
               <div><?php echo $field->label; ?>
                <?php echo $field->input; ?></div> <br/>
            <?php endforeach; ?>
        </fieldset>
    </form>
</div>
