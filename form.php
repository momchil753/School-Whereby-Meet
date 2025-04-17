<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>


    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        }

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: aliceblue;
        height: 100vh;
        }

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: fit-content;
        }

        .container {
        display: flex;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        flex-wrap: wrap;
        }

        .image-section {
        width: 30vw;
        text-align: center;
        margin-top: 10vh;
        margin-right: 2vw;
        }

        .form-section {
        margin: 13vh 2vw;
        }

        h1 {
        font-size: 1.6em;
        margin-bottom: 2vh;
        color: rgb(67, 131, 104);
        }

        p {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
        }

        .form-group {
        display: flex;
        flex-wrap: wrap;
        }

        #name{
            margin-bottom: 2vh;
        }

        #email{
            margin-bottom: 2vh;
        }

        input, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        font-size: 14px;
        }

        textarea {
        height: 100px;
        margin-bottom: 15px;
        }

        button {
        background-color: rgb(67, 131, 104);
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        width: 100%;
        transition: 0.5s;
        }

        button:hover {
        background-color: rgb(25, 140, 103);
        transition: 0.5s;
        }

    </style>
</head>
<body>
        <div class="section">
            <div class="container">
                <div class="image-section">
                    <img src="flat-design-illustration-customer-support_23-2148887720.avif" alt="">
                </div>

                <div class="form-section">
                    <h1>Говорете с нас: </h1>
                    <form action="form_func.php" method="POST">
                        <div class="form-group">
                            <label for="name">Вашето име: </label>
                            <input type="text" id="name" name="name" required><br><br>

                            <label for="email">Вашият имейл: </label>
                            <input type="email" id="email" name="email" required><br><br>
                        </div>

                        <label for="subject">Тема: </label>
                        <input type="text" id="subject" name="subject" required><br><br>

                        <label for="message">Съобщение: </label><br>
                        <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

                        <button type="submit">Изпрати</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

