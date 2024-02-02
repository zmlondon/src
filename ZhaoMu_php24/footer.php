<footer class="row text-center">
            
    <p>&copy; 2024 All rights reserved.</p>

    <?php
    // Path to the file you want to check the modification time
    $filePath = 'ex1.php';
    $filePath = 'ex2.php';
    $filePath = 'ex3.php';
    $filePath = 'ex4.php';


    // Get the last modification time of the file
    $modificationTime = filemtime($filePath);

    // Format the timestamp into a readable date and time
    $formattedTime = date('F j, Y, g:i a', $modificationTime);

    echo "<p>Last modified: $formattedTime</p>";
    ?>
    </footer>
    </div> <!--container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>