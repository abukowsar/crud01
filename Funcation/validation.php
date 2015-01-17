
    <form action="form6.php" method="post">
        Your Answer:<br><input type="integer" name="answer">

        <input type="hidden" name="solution" value="<?php echo $solution; ?>">
        <input type="Submit" value="Submit!">
    </form>

<?php
if(isset($_POST['answer']) && isset($_POST['solution'])) {
    if ($_POST["answer"] == $_POST['solution']) {
        // Valid
    } else {
        // Incorrect
    }
}
?>