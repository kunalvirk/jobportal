<h1><?= $title; ?></h1>
<div class="jobBox mt-5">
    <ul>
        <?php foreach($jobs as $job) { ?>
            <li>
                <h3><?php echo $job['job_title']; ?> <small><?php echo date('d-M-Y', strtotime($job['posted_on'])); ?></small></h3>

                <div class="jobExper">
                    <span><i class="fa fa-briefcase" aria-hidden="true"></i> 3 - 6 yrs</span>
                    <span class="location"><i class="fa fa-map-marker"></i> Gurugram</span>
                </div>
                <p><?php echo $job['job_short_description']; ?></p>

                <a class="jobLink btn btn-success" href="<?php echo site_url('/jobs/'. $job['slug']); ?>">APPLY NOW</a>

            </li>
        <?php } ?>
    </ul>
</div>