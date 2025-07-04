<!DOCTYPE html>
<html lang="en" style="font-family:'sans-serif'">
    <head>
        <meta  charset="UTF-8">
        <title>Webpage</title>
    </head>
    <body>
        <a href="/index">
            <button type="button" style="width:80px; height:40px; font-size:20px; text-align:center" >Back</button>
        </a>
        <h1>Varun's Validator</h1>
        <section>
            <form action="<?php echo e(url('/validate')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="name">Name: </label>
                <input required style="border: 1px solid black;padding:5px" type="text" id="name" name="name" 
                        size="26px"placeholder="Ex. Xyz(only alphabets and spaces)" pattern="^[A-Za-z\s]+$" title="Only letters and spaces allowed">
                <br><br>
                <label for="mobno">Mobile number: </label>
                <input required style="border: 1px solid black;padding:5px" type="text" id="mobno" name="mobno" pattern="\d{10}" placeholder="Mobile(10 digits)" title="only 10 digits(integers)">
                <br><br>
                <label for="email">Email: </label>
                <input required style="border: 1px solid black;padding:5px" type="email" id="email" name="email" placeholder="xyz@email.com" title="should be a valid email-id">
                <br><br>
                <fieldset style="border: 1px solid black; height:50px; width:300px" >
                    <legend>Gender: </legend>
                    <label for="gen-male">Male: </label>
                    <input style="border: 1px solid black" type="radio" id="gen-male" name="gender" value="Male">
                    <label for="gen-female">Female: </label>
                    <input style="border: 1px solid black" type="radio" id="gen-female" name="gender" value="Female">
                    <label for="gen-other">Other: </label>
                    <input style="border: 1px solid black" type="radio" id="gen-other" name="gender" value="Other">
                </fieldset>
                <br>
                <label for="age">Age: </label>
                <input style="border: 1px solid black;padding:5px" type="number" id="age" name="age" min="1" max="999">
                <br><br>
                <label for="hobbies">Enter your hobbies - </label>
                <textarea style="border: 1px solid black;padding:5px" id="hobbies" name="hobbies[]" rows="5" cols="50" placeholder="Ex. Swimming, Chess,etc,."></textarea>
                <br><br>
                <button type="submit" style="width:100px; height:50px; font-size:20px">Submit</button>
            </form>
        </section>
    </body>
</html>
<?php /**PATH /home/administrator/workspace/first/resources/views/exams/create.blade.php ENDPATH**/ ?>