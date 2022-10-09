<?php $__env->startSection('content'); ?>

    <div class="grid_3">
        <div class="container">
            <?php echo $__env->make('profile.memberdetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="profile">
                <div class="col-md-12 profile_left">
                    
                    <div class="col_3">
                        <div class="col-md-4 row_2">
                            
                            <img src="<?php echo e(asset('userImage/'. Auth::user()->userprofile->imagePath)); ?>"
                               alt=""
                                style="height:210px; width:235px;">


                        </div>
                        <div class="col-md-4 row_1">
                            <table class="table_working_hours">
                                <tbody>
                                    <tr class="opened_1">
                                        <td class="day_label">Name :</td>
                                        <td class="day_value">
                                            <?php echo e(Auth::user()->name); ?>

                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Gender :</td>
                                        <td class="day_value">
                                            <?php if(Auth::user()->userprofile->gender != 'NULL'): ?>
                                                <?php echo e(Auth::user()->userprofile->gender); ?>

                                            <?php else: ?>
                                                Not Specified
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Religion :</td>
                                        <td class="day_value">
                                            <?php if(Auth::user()->userprofile->religion != 'NULL'): ?>
                                                <?php echo e(Auth::user()->userprofile->religion); ?>


                                            <?php else: ?>
                                                Not Specified
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Marital Status :</td>
                                        <td class="day_value">
                                            <?php if(Auth::user()->userprofile->status != 'NULL'): ?>
                                                <?php echo e(Auth::user()->userprofile->status); ?>

                                            <?php else: ?>
                                                Not Specified
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="opened_1">
                                        <td class="day_label">Country</td>
                                        <td class="day_value">
                                            <?php if(Auth::user()->userprofile->country != 'NULL'): ?>
                                                <?php echo e(Auth::user()->userprofile->country); ?>

                                            <?php else: ?>
                                                Not Specified
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="opened">
                                        <td class="day_label">State/City</td>
                                        <td class="day_value">
                                            <?php if(Auth::user()->userprofile->state != 'NULL'): ?>
                                                <?php echo e(Auth::user()->userprofile->state); ?>

                                            <?php else: ?>
                                                Not Specified
                                            <?php endif; ?>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                            
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col_4">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                        data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                        aria-controls="profile">Family Details</a></li>
                                <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab"
                                        aria-controls="profile1">Partner Preference</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    
                                    <div class="basic_1">
                                        <h3>Basics & Lifestyle</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Name :</td>
                                                        <td class="day_value"><?php echo e(Auth::user()->name); ?></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->status != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->status); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->age != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->age); ?> years
                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Height :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->height != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->height); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    



                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 basic_1-left" style="padding-right: 130px;">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Weight :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->weight != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->weight); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Blood Group :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->blood_group != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->blood_group); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Drink :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->drink != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->drink); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>

                                                    <tr class="closed">
                                                        <td class="day_label">Smoke :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->smoke != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->smoke); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1">
                                        <h3>Religious / Social & Astro Background</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>


                                                    <tr class="opened">
                                                        <td class="day_label">Date of Birth :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->b_date != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->b_date); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Place of Birth :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->place_of_birth != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->place_of_birth); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </span></td>

                                                    </tr>
                                                    <tr class="opened_1">
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->religion != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->religion); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="basic_1 basic_2">
                                        <h3>Education & Career</h3>
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>

                                                    <tr class="opened">
                                                        <td class="day_label">Highest Education :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->h_edu != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->h_edu); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">School :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->school != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->school); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">College :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->college != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->college); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">University :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->university != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->university); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Subject :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->subject != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->subject); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->profession != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->profession); ?>

                                                            <?php else: ?>
                                                                Not Specified
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Annual Income :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->annual_income != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->annual_income); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                    <div class="basic_3">
                                        <h4>Family Details</h4>
                                        <div class="basic_1 basic_2">
                                            <h3>Basics</h3>
                                            <div class="col-md-6 basic_1-left">
                                                <table class="table_working_hours">
                                                    <tbody>
                                                        <tr class="opened">
                                                            <td class="day_label">Father's Occupation :</td>
                                                            <td class="day_value">

                                                                <?php if(Auth::user()->userprofile->fathers_occupation != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->fathers_occupation); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">Mother's Occupation :</td>
                                                            <td class="day_value">
                                                                <?php if(Auth::user()->userprofile->mothers_occupation != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->mothers_occupation); ?>

                                                                <?php else: ?>
                                                                    Not Specified
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Brothers :</td>
                                                            <td class="day_value closed"><span>
                                                                    <?php if(Auth::user()->userprofile->no_of_brother != 'NULL'): ?>
                                                                        <?php echo e(Auth::user()->userprofile->no_of_brother); ?>

                                                                    <?php else: ?>
                                                                        Not Specified
                                                                    <?php endif; ?>
                                                                </span></td>
                                                        </tr>
                                                        <tr class="opened">
                                                            <td class="day_label">No. of Sisters :</td>
                                                            <td class="day_value closed"><span>
                                                                    <?php if(Auth::user()->userprofile->no_of_sister != 'NULL'): ?>
                                                                        <?php echo e(Auth::user()->userprofile->no_of_sister); ?>

                                                                    <?php else: ?>
                                                                        Not Specified
                                                                    <?php endif; ?>
                                                                </span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                    <div class="basic_1 basic_2">
                                        <div class="basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Age :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->from_age != 'NULL' && Auth::user()->userprofile->to_age != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->from_age); ?> to
                                                                <?php echo e(Auth::user()->userprofile->to_age); ?>

                                                            <?php else: ?>
                                                                Doesn't matter
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Marital Status :</td>
                                                        <td class="day_value">
                                                            <?php if(Auth::user()->userprofile->p_status != 'NULL'): ?>
                                                                <?php echo e(Auth::user()->userprofile->p_status); ?>

                                                            <?php else: ?>
                                                                Doesn't matter
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="day_label">Religion :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->p_religion != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->p_religion); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Country :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->p_country != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->p_country); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">State/District :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->p_state != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->p_state); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>


                                                    <tr class="opened">
                                                        <td class="day_label">Profession :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->p_profession != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->p_profession); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Gender :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->p_gender != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->p_gender); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>

                                                    <tr class="opened">
                                                        <td class="day_label">Comment about Partner :</td>
                                                        <td class="day_value closed"><span>
                                                                <?php if(Auth::user()->userprofile->comment != 'NULL'): ?>
                                                                    <?php echo e(Auth::user()->userprofile->comment); ?>

                                                                <?php else: ?>
                                                                    Doesn't matter
                                                                <?php endif; ?>
                                                            </span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wed\resources\views/profile/information.blade.php ENDPATH**/ ?>