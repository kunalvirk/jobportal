<div class="row">
    <div class="col-md-12">
        <div class="jobDetailsLeft">

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url(); ?>jobs" class="btn btn-default">Back to Jobs</a>
            </div>
        </div>

        <div class="applyingFor">
            <h2><?php echo $job['job_title']; ?></h2>
            <span class="fl-right">Posted On: <?php echo $job['posted_on']; ?></span>

            <div class="jobExper">
                <span><i class="fa fa-briefcase" aria-hidden="true"></i> 3 - 6 yrs</span>
                <span class="location"><i class="fa fa-map-marker"></i> Gurugram</span>
            </div>

            <div class="applyBtnBox">
                <div class="cl"></div>
            </div>
        </div>

        <div class="postDetails">
            <p><?php echo $job['job_description']; ?></p>
        </div>

        </div>
    </div>
</div>

<hr class="d-block" />


<div class="row">
    <a href="<?php echo base_url(); ?>jobs/edit/<?php echo $job['slug']; ?>" class="btn btn-primary">Edit <?php echo $job['job_title']; ?></a>
    <?php echo form_open('jobs/delete/' . $job['id']); ?>
        <input type="submit" value="Delete this job" class="btn btn-danger">
    </form>
</div>