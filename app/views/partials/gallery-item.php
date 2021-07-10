            <?php
            $hasLink = false;
            if (isset($project['overlay']['links'])) {
               if (isset($project['overlay']['links']['visit']['url'])) {
                  $link = $project['overlay']['links']['visit']['url'];
                  $linkText = 'Visit';
                  $hasLink = true;
               } elseif (isset($project['overlay']['links']['github']['url'])) {
                  $link = $project['overlay']['links']['github']['url'];
                  $linkText = 'Code';
                  $hasLink = true;
               }
            }

            $anim = "-webkit-animation-delay: {$delay}s;";
            $anim .= "animation-delay: {$delay}s;";

            ?>
            <div class="column pure-u-1-1 pure-u-sm-1-2 pure-u-lg-1-3 gallery-item" style="<?php echo $anim; ?>">

               <div class="gallery-cover">
                  <img width="750" height="480" src="<?php echo $project['banner'];?>" class="pure-img-responsive" alt="" srcset="">
                  <div class="gallery-info">
                     <ul class="gallery-meta">
                        <li class="details-link"><a data-gallery-id="<?php echo $project['alias'];?>" href="javascript:void(0);">Details</a></li>
                        <?php if ($hasLink): ?>
                        <li class="visit-link">
                           <a href="<?php echo $link; ?>" target="_blank">
                              <?php echo $linkText; ?>&nbsp;
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 24 24">
                                 <path fill="#0a0a0a" d="M13,15v6.4L23.4,11L13,0.6V7C8.4,7.2,0,9.1,0,20v3.7l1.9-3.2C4.3,16.4,6.7,15.1,13,15z"></path>
                              </svg>
                           </a>
                        </li>
                        <?php endif; ?>
                     </ul>
                  </div>
               </div>
               <h5 class="details-link">
                  <a data-gallery-id="<?php echo $project['alias'];?>" href="javascript:void(0);"><?php echo $project['title'];?></a>
                  <span class="fav-wrap">
                  <?php
                  $icon  = (in_array('web', $project['categories'])) ? 'desktop' : '';
                  $icon  = (in_array('mobile', $project['categories'])) ? 'mobile' : $icon;
                  ?>
                  <i class="fa fa-<?php echo $icon;?> w3-margin-right"></i>
                  </span>
               </h5>
               <p><?php echo $project['description'];?></p>
               <p class="gallery-skills"><?php echo implode(', ', $project['skills']);?></p>
            </div>
