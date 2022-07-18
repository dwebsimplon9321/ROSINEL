
<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>How To Send Email Using phpMailer From Localhost</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: verdana;  
           }  
           .outer{  
                width: 100%;  
                min-height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                background: #ccc;  
           }  
           .inner{  
                max-width: 500px;  
                width: 100%;  
                border: 1px solid #fff;  
                background: #fff;  
           }  
           .inner form{  
                padding: 3rem;  
           }  
           .inner form input[type=email]{  
                width: 100%;  
                height: 40px;  
                padding-left: 5px;  
           }  
           .inner form input[type=submit]{  
                max-width: 100;  
                padding: 1rem 2rem;  
                background: green;  
                color: #fff;  
                font-size: 1rem;  
                border: none;  
                margin-top: 10px;  
                cursor: pointer;  
           }  
           h3{  
                font-size: 1rem;  
                text-align: center;  
                padding-top: 10px;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="outer">  
      <div class="inner">  
           <h3>How To Send Email Using phpMailer From Localhost</h3>  
           <form method="POST" action="bruh.php">  
                <input type="email" name="email" placeholder="Enter your email" autocomplete="off">  
                <input type="submit" name="submit" value="send">  
           </form>  
      </div>  
 </div>  
 </body>  
 </html>  