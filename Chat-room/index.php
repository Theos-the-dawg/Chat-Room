
<!DOCTYPE html>
<html>
<head>
  <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <!--<script type='text/javascript' src='http://0.0.0.0:8080/scaledrone.js'></script>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 13px;
      display: flex;
      flex-direction: column;
      max-height: 100vh;
      font-family: -apple-systeBm, BlinkMacSystemFont, sans-serif;
   background-image: url(Soul.jpg);
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: 50% 50%;
  
    

    }

    .members-count,
    .members-list,
    .messages {
      border: 7.5px solid black;
      padding: 20px;
      margin-bottom: 15px;
      border-radius: 15px 50px 30px;
  width: 450px;
  height: 175px; 
  background: linear-gradient(to right, red, purple, darkblue );
    }

    .messages {
      flex-shrink: 1;
      overflow: auto;
     
    }

    .message {
      padding: 5px 0;
    
    }
    .message .member {
      display: inline-block;
      
    }

    .member {
      padding-right: 10px;
      position: relative;
    
    }

    .message-form {
      display: flex;
      flex-shrink: 0;
     
    }
    .message-form__input {
      flex-grow: 1;
      border: 8px solid black;
      padding: 10px 15px;
      font-size: 16px;
      background: linear-gradient(to right, red, purple);
    }
    .message-form__button {
      border-radius: 12px solid;
      padding: 10px 15px;
      font-size: 16px;
    background-image: linear-gradient(to right darkgreen, darkred );
    }
    

  </style>
</head>
<body>
  <div class="members-count">-</div>
  <div class="members-list">-</div>
  <div class="messages"></div>
 
  <form class="message-form" onsubmit="return false;">
    <input class="message-form__input" placeholder="Say Hi" type="text"/>
    <input class="message-form__button" value="Send" type="submit"/>
  </form>
  <script src="./script.js"></script>
</body>
</html>
