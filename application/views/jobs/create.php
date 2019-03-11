<h1 class="mb-5">Post new job!</h1>

<div class="jobCreate mb-5">

<?php echo validation_errors(); ?>    

<?php if (!empty($formSuccess)) { ?>
    <div class="error"><?php echo $formSuccess; ?></div>
<?php } ?>

<?php echo form_open('jobs/create'); ?>
    <div class="form-group">
        <label for="jobTitle">Job Title</label>
        <input type="text" name="jobTitle" id="jobTitle" class="form-control">
    </div>
    <div class="form-group">
        <label for="jobShortDescription">Job Short Description</label>
        <textarea name="jobShortDescription" id="jobShortDescription" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="minExperience">Min. Experience</label>
                <input type="number" name="minExperience" id="minExperience" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="maxExperience">Max. Experience</label>
                <input type="number" name="maxExperience" id="maxExperience" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="jobDescription">Job Description</label>
        <textarea id="jobDescription" name="jobDescription"></textarea>
    </div>
    <div class="form-group">
        <label for="location">Job Location</label>
        <input type="text" name="location" id="location" class="form-control">
    </div>
    <input type="submit" value="Create Job" class="btn btn-primary" style="padding: 0.375rem 0.75rem; color: #fff;">
</form>
</div>