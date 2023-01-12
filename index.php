<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Page</title>
    <link href="website/css/portalstyles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h1>
        <a href="index.php">
            JHW's Portal Page
        </a>
    </h1>

    <h2>
        The navigation below represents our big assignments
    </h2>

    <div id="wrapper">

        <nav>

            <ul>

                <li>
                    <a href="">
                        Switch
                    </a>
                </li>

                <li>
                    <a href="">
                        Troubleshoot
                    </a>
                </li>

                <li>
                    <a href="">
                        Calendar
                    </a>
                </li>

                <li>
                    <a href="">
                        Email
                    </a>
                </li>

                <li>
                    <a href="">
                        Database
                    </a>
                </li>

                <li>
                    <a href="">
                        Gallery
                    </a>
                </li>

            </ul>
        </nav>

        <main>
            <h2>
                About JHW
            </h2>

            <img class="right" src="website/images/thisisme.jpg" alt="funny picture of a cat">

            <p>
                I like collecting stuffed animals.
                Ask me for a recommendation,
                feel free to add criteria like "must look like it regrets being born"
                or "have it be a moth."
                You are also more than welcome to tell me about your strange
                not-well-known stuffed animals, and tell me where I can buy them.
                My very coveted recommendations at the moment are any of
                the moths from squishables and the entire plush catalog of tiny headed kingdom.
                I also like the shark from the roomies party collection.
            </p>

        </main>

        <aside>
            
            <h3>
                Weekly Class Exercizes
            </h3>

            <h4> Week 2 </h4>
            <ul>
                <li>
                    <a href="">var.php</a>
                </li>

                <li>
                    <a href="">vars2.php</a>
                </li>

                <li>
                    <a href="">currency-logic.php</a>
                </li>

                <li>
                    <a href="">currency.php</a>
                </li>
                
                <li>
                    <a href="">heredoc.php</a>
                </li>
            </ul>

        </aside>
    </div>
    <!-- close wrapper -->


    <div id="photos">
        <h4>Photos for Week 1</h4>
        <img src="website/images/code_01082023_1.png" alt="My MAMP localhost showing my website">
        <img src="website/images/code_01082023_2.png" alt="MAMP showing an error">
    </div>
    <!-- end photos -->


    <footer>
        <ul>
            <li>Copyright &copy;
                2022
            </li>
            <li>All Rights Reserved</li>
            <li><a href="index.php">Web Design by JHW</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
    </footer>

</body>
</html>