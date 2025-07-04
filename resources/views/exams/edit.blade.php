<!DOCTYPE html>
<html lang="en" style="font-family:'sans-serif'">
<head>
    <meta charset="UTF-8">
    <title> Webpage</title>
</head>
<body>
    <h1>Varun's Editor</h1>

    <form action="{{ route('exams.update', $exam->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name: </label>
        <input type="text" id="name" name="name" value="{{ old('name', $exam->name) }}" 
            pattern="^[A-Za-z\s]+$" title="Only letters and spaces allowed" required>
        <br><br>
        <label for="mobno">Mobile Number: </label>
        <input type="text" id="mobno" name="mobno" value="{{ old('mobno', $exam->mobno) }}" title="only 10 digits(integers)" required pattern="\d{10}">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{ old('email', $exam->email) }}" title="should be a valid email-id" required>
        <br><br>
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" value="{{ old('age', $exam->age) }}" min="1" max="999">
        <br><br>
        <fieldset>
            <legend>Gender</legend>
            <label>
                <input type="radio" name="gender" value="Male"{{ old('gender', $exam->gender) == 'Male' ? 'checked' : '' }}>
                Male
            </label>
            <label>
                <input type="radio" name="gender" value="Female"{{ old('gender', $exam->gender) == 'Female' ? 'checked' : '' }}>
                Female
            </label>
            <label>
                <input type="radio" name="gender" value="Other"{{ old('gender', $exam->gender) == 'Other' ? 'checked' : '' }}>
                Other
            </label>
        </fieldset>
        <br><br>
        <label for="hobbies">Hobbies: </label>
        <textarea id="hobbies" name="hobbies[]">{{ is_array($exam->hobbies) ? implode(',', $exam->hobbies) : $exam->hobbies }}</textarea>
        <br>
        <br><br>
        <button type="submit" style="width:100px; height:50px; font-size:20px">Update</button>
    </form>
</body>
</html>
