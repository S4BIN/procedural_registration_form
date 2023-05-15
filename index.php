<?php 
include_once 'header.php';
?>

<div class="content">
    <section class="introduction">
        <?php 
            if (isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        ?>
        <h1>This Is An Introduction</h1>
        <p>Here is an important pharagraph before the signup/login</p>
    </section>

    <section>
        <h3>Some Basic Categories</h3>
        <div>
            <p>Fun Stuff</p>
            <p>Serious Stuff</p>
            <p>Exciting Stuff</p>
            <p>Boring Stuff</p>
        </div>
    </section>
</div>

<?php 
include_once 'footer.php';
?>