<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}
</style>
</head>
<body>

<p>In this example, we use the :focus selector to add a black border color to the text field when it gets focused (clicked on):</p>
<p>Note that we have added the CSS3 transition property to animate the border color (takes 0.5 seconds to change the color on focus).</p>

<form>
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="fname" value="John">
  <label for="fname">Last Name</label>
  <input type="text" id="lname" name="lname" value="Doe">
</form>

</body>
</html>