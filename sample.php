<html>
    <body>
        <?php 
            if(isset($_POST, $_POST['test_display'])){
                echo "Testing Value: {$_POST['test_display']}";
            }
        ?>
        <form method="post">
            <input type="text" name="test_display" />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
