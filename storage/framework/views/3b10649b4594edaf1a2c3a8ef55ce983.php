<!DOCTYPE html>
<html lang="en" style="font-family:'sans-serif'">
<head>
    <meta charset="UTF-8">
    <title> Webpage</title>
</head>
<body>
    <h1>Varun's Editor</h1>

    <form action="<?php echo e(route('exams.update', $exam->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Name: </label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name', $exam->name)); ?>" 
            pattern="^[A-Za-z\s]+$" title="Only letters and spaces allowed" required>
        <br><br>
        <label for="mobno">Mobile Number: </label>
        <input type="text" id="mobno" name="mobno" value="<?php echo e(old('mobno', $exam->mobno)); ?>" title="only 10 digits(integers)" required pattern="\d{10}">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="<?php echo e(old('email', $exam->email)); ?>" title="should be a valid email-id" required>
        <br><br>
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" value="<?php echo e(old('age', $exam->age)); ?>" min="1" max="999">
        <br><br>
        <fieldset>
            <legend>Gender</legend>
            <label>
                <input type="radio" name="gender" value="Male"<?php echo e(old('gender', $exam->gender) == 'Male' ? 'checked' : ''); ?>>
                Male
            </label>
            <label>
                <input type="radio" name="gender" value="Female"<?php echo e(old('gender', $exam->gender) == 'Female' ? 'checked' : ''); ?>>
                Female
            </label>
            <label>
                <input type="radio" name="gender" value="Other"<?php echo e(old('gender', $exam->gender) == 'Other' ? 'checked' : ''); ?>>
                Other
            </label>
        </fieldset>
        <br><br>
        <label for="hobbies">Hobbies: </label>
        <textarea id="hobbies" name="hobbies[]"><?php echo e(is_array($exam->hobbies) ? implode(',', $exam->hobbies) : $exam->hobbies); ?></textarea>
        <br>
        <br><br>
        <button type="submit" style="width:100px; height:50px; font-size:20px">Update</button>
    </form>
</body>
</html>
<?php /**PATH /home/administrator/workspace/first/resources/views/exams/edit.blade.php ENDPATH**/ ?>