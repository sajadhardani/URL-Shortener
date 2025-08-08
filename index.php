<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کوتاه کننده لینک</title>
    <style>
        *{
          font-family: IRANSansX !important;  
        }
        body {
            /* font-family: vazir; */
            text-align: center;
            margin: 50px;
        }

        #short-form {
            max-width: 400px;
            margin: auto;
        }

        #short-input {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #short-buttom {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        #short-result {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
        <h2>کوتاه کننده لینک</h2>
    <form id="shorten-form">
        <input type="url" style="text-align: right;" id="short-input" placeholder="لینک خود را وارد کنید" required />
        <button type="button" id="short-buttom" onclick="shortenLink()">کوتاه کن</button>

    </form>

        <div id="short-result"></div>

</body>

</html>