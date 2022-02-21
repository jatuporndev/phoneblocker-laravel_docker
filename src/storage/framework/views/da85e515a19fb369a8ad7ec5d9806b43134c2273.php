<!--<div class="form-group <?php echo e($errors->has('id') ? 'has-error' : ''); ?>">
    <label for="id" class="control-label"><?php echo e('Id'); ?></label>
    <input class="form-control" name="id" type="number" id="id" value="<?php echo e(isset($reportnumber->id) ? $reportnumber->id : ''); ?>" >
    <?php echo $errors->first('id', '<p class="help-block">:message</p>'); ?>

</div>
-->
<div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
    <label for="address" class="control-label"><?php echo e('Address'); ?></label>
    <input class="form-control" name="address" type="text" id="address" value="<?php echo e(isset($reportnumber->address) ? $reportnumber->address : ''); ?>" >
    <?php echo $errors->first('address', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('detail') ? 'has-error' : ''); ?>">
    <label for="detail" class="control-label"><?php echo e('Detail'); ?></label>
    <input class="form-control" name="detail" type="text" id="detail" value="<?php echo e(isset($reportnumber->detail) ? $reportnumber->detail : ''); ?>" >
    <?php echo $errors->first('detail', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
    <label for="status" class="control-label"><?php echo e('Status'); ?></label>
    <input class="form-control" name="status" type="number" id="status" value="<?php echo e(isset($reportnumber->status) ? $reportnumber->status : ''); ?>" >
    <?php echo $errors->first('status', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
<?php /**PATH /var/www/html/resources/views/admin/reportnumber/form.blade.php ENDPATH**/ ?>