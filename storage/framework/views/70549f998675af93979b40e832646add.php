<?php
$i=0;
?>
<div>
    <div>
        <div style="text-align:center">
            <?php echo e(session('message')); ?>

        </div>
        <div style="width:100%;text-align:right">
            <a href="/create">
            <button type="button" style="width:100px; height:50px; font-size:20px">Create</button>
            </a>
        </div>
        <h1 style="width:100%;text-align:center">
            ENTRIES
        </h1>
    </div>
    <div>
        <table width="100%" style="border: 3px solid black; border-collapse">
            <thead>
                <tr style="border: 3px solid black; border-collapse: collapse;text-align:center">
                    <th style="border: 3px solid black; border-collapse: collapse" width="10px">No.</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Name</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Mobile No.</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Email</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Age</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Gender</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Hobbies</th>
                    <th style="border: 3px solid black; border-collapse: collapse" width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if(!empty($exam['name'])): ?>
                <tr style="border: 3px solid yellow; border-collapse: collapse;text-align:center">

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="10px"><?php echo e(++$i); ?></td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px"><?php echo e($exam->name); ?></td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px"><?php echo e($exam->mobno); ?></td>

                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px"><?php echo e($exam->email); ?></td>

                    <?php if($exam->age): ?> 
                        <?php if($exam->age < 18): ?>
                        <td style="border: 3px solid yellow; border-collapse: collapse" width="100px"><?php echo e($exam->age); ?></td>
                        <?php elseif($exam->age < 24): ?>
                        <td style="border: 3px solid green; border-collapse: collapse" width="100px"><?php echo e($exam->age); ?></td>
                        <?php else: ?>
                        <td style="border: 3px solid black; border-collapse: collapse" width="100px"><?php echo e($exam->age); ?></td>
                        <?php endif; ?>
                    <?php else: ?>
                        <td style="border: 3px solid red ; border-collapse: collapse" width="100px"><?php echo e($exam->age); ?></td>
                    <?php endif; ?>

                    <?php if($exam->gender): ?>
                        <?php if($exam->gender =='male'): ?>
                        <td style="border: 3px solid orange; border-collapse: collapse" width="100px"><?php echo e($exam->gender); ?></td>
                        <?php elseif($exam->gender =='female'): ?>
                        <td style="border: 3px solid cyan; border-collapse: collapse" width="100px"><?php echo e($exam->gender); ?></td>
                        <?php else: ?>
                        <td style="border: 3px solid ; 
                                    border-image: linear-gradient(to right,violet,indigo,blue,green,yellow,orange,red);
                                    border-image-slice:1" width="100px"><?php echo e($exam->gender); ?></td>
                        <?php endif; ?>
                    <?php else: ?>
                        <td style="border: 3px solid red; border-collapse: collapse" width="100px"><?php echo e($exam->gender); ?></td>
                    <?php endif; ?>

                    <?php if($exam->hobbies): ?>
                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">
                        <?php if(is_array($exam->hobbies)): ?>
                            <?php echo e(implode(',',$exam->hobbies)); ?>

                        <?php else: ?>
                            <?php echo e($exam->hobbies); ?>

                        <?php endif; ?>
                    </td>
                    <?php else: ?>
                    <td style="border: 3px solid red; border-collapse: collapse" width="100px">
                        <?php if(is_array($exam->hobbies)): ?>
                            <?php echo e(implode(',',$exam->hobbies)); ?>

                        <?php else: ?>
                            <?php echo e($exam->hobbies); ?>

                        <?php endif; ?>
                    </td>
                    <?php endif; ?>
                    <td style="border: 3px solid yellow; border-collapse: collapse" width="100px">
                        <a href="<?php echo e(route('exams.edit', $exam->id)); ?>">
                            <button type="button">Edit</button>
                        </a>

                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="8">No Entries found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            
        </table>
    </div>
</div><?php /**PATH /home/administrator/workspace/first/resources/views/exams/index.blade.php ENDPATH**/ ?>