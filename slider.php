<section class="slid-sec with-bg-wide" >
    <!-- Main Slider Start -->
    <div class="tp-banner-container">
        <div class="tp-banner-full">
            <ul>
                <?php
                $sliders = $home->getSliders();
                if ($sliders != null){
                    foreach ($sliders as $slider){?>

                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                            <!-- MAIN IMAGE -->
                            <img src="images/trans-bg.png"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sft tp-resizeme"
                                 data-x="left" data-hoffset="780"
                                 data-y="center" data-voffset="-90"
                                 data-speed="800"
                                 data-start="800"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.03"
                                 data-endelementdelay="0.4"
                                 data-endspeed="300"
                                 style="z-index: 5; font-size:24px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;">  <?php echo $slider->sub_title;?> </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr tp-resizeme"
                                 data-x="left" data-hoffset="780"
                                 data-y="center" data-voffset="-40"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-elementdelay="0.03"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 6; font-size:36px; color:#f74b16; font-weight:800; white-space: nowrap;"><?php echo $slider->title;?> </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfr tp-resizeme"
                                 data-x="left" data-hoffset="780"
                                 data-y="center" data-voffset="10"
                                 data-speed="800"
                                 data-start="1300"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-elementdelay="0.03"
                                 data-endelementdelay="0.4"
                                 data-endspeed="300"
                                 style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;">
                                $ <?php echo $slider->price;?></div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfl tp-resizeme"
                                 data-x="left" data-hoffset="320"
                                 data-y="center" data-voffset="0"
                                 data-speed="800"
                                 data-start="1300"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 data-scrolloffset="0"
                                 style="z-index: 1;"><img src="admin/<?php echo $slider->image; ?>" alt="" > </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme"
                                 data-x="left" data-hoffset="780"
                                 data-y="center" data-voffset="90"
                                 data-speed="800"
                                 data-start="1300"
                                 data-easing="Power3.easeInOut"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 data-scrolloffset="0"
                                 style="z-index: 10;"><a href="index-3.html#." class="btn-round">Shop Now</a> </div>
                        </li>

                    <?php      }
                }
                ?>
                <!-- SLIDE  -->

            </ul>
        </div>
    </div>
</section>