<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Insert New Student Information</h3>
<div>
  <form form method="post" action="{{route('StudentInfo.update', ['student' => $student])}}">
    @csrf 
    @method('put')
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="name.." value = '{{$student->name}}'>

    <label for="email">e-mail</label>
    <input type="text" id="email" name="email" placeholder="E-Mail.." value = '{{$student->email}}'>

    <label for="class">Class</label>
    <input type="text" id="class" name="class" placeholder="Class" value = '{{$student->class}}'>

    <label for="marks">Marks</label>
    <input type="text" id="marks" name="marks" placeholder="Marks" value = '{{$student->marks}}'>



    <input type="submit" value="Update">
  </form>
</div>

</body>
</html>


