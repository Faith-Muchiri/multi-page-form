<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/form.css') }} ">
    <title>Document</title>
</head>
<body>
    <form id="signup" action="somewhere" method="POST">
        <ul id="section-tabs">
          <li class="current active"><span>1.</span> Creds</li>
          <li><span>2.</span> Deets</li>
          <li><span>3.</span> Settings</li>
          <li><span>4.</span> Last Words</li>
        </ul>
      <div id="fieldsets">
      <fieldset class="current">
        <label for="email">Email:</label>
        <input name="email" type="email" class="required email" />
        <label name="password" for="password">Password:</label>
        <input type="password" minlength="10" class="required">
      </fieldset>
      <fieldset class="next">
        <label for="username">Username:</label>
        <input name="username" type="text">
        <label for="bio">Short Bio:</label>
        <textarea name="bio" class="required"></textarea>
      </fieldset>
      <fieldset class="next">
        <label for="interests">Basic Interests:</label>
        <textarea name="bio"></textarea>
        <p>Receive newsletter?<br>
          <input type="radio" name="newsletter" value="yes"><label for="newsletter">yes</label>
          <input type="radio" name="newsletter" value="no"><label for="newsletter">no</label>
        </p>
      </fieldset>
      <fieldset class="next">
        <label for="referrer">Referred by:</label>
        <input type="text" name="referrer">
        <label for="phone">Daytime Phone:</label>
        <input type="tel" name="phone">
      </fieldset>
      <a class="btn" id="next">Next Section ▷</a>
      <input type="submit" class="btn">
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('js/form.js')}}"></script>
</body>
</html>