<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cntc.css" type="text/css">
   
</head>
<body>
 
  <div class="container">
      <h1  style="color:white;  font-family: sans-serif;font-weight:lighter;">CONNECT WITH US</h1>
      <p style="color: white;">We would  love to respond to your quaies and help you succeed<br>feel free to get in touch with us</p>
      <div class="contact-box">
        <div class="contact-left">
          <H3>SEND YOUR REQUEST</H3>
          <form action="connect.php"method="POST" onsubmit="alert('hi');">
            <div class="input-row">
              <div class="input-group">
                <label >NAME</label>     
                <input type="text"   placeholder="eg:john" name="name" >   
                </div>
                <div class="input-group">
                <label >PHONE</label>     
                <input type="text"   placeholder="eg:+91 8732563900"name="number">   
                </div> 
              </div>
              <div class="input-row">
                <div class="input-group">
                  <label >EMAIL</label>     
                  <input type="email"   placeholder="eg:john@gmail.com" name="email">   
                  </div>
                  
           </div>
           <label>MESSAGES</label>
           <textarea rows="5"placeholder="your message" name="messages"></textarea>
           <button type="submit" >SEND</button>
          </form>

        </div>
        <div class="contact-right">
          <H3>
           REACH US
          </H3>
          <table>
            <tr>
              <td>EMAIL</td>
            <td> <a href="mailto:hello@namastewayanad.com"style="text-decoration:none;color:white;">hello@namastewayanad.com</a> </td>

            </tr>
            <tr>
              <td>PHONE</td>
              <td>+91 70126 36219</td>
            </tr>
            <tr>
              <td>ADDRESS</td>
              <td>Valappil complex, Gudalai road, Kalpetta Wayanad, Kerala, India 673122</td>
            </tr>
            <tr>
              <td>INSTAGRAM</td>
            <td> <a href="https://www.instagram.com/namastewayanad/"style="text-decoration:none;color:white;">namasthewayanad</a> </td>

            </tr>
            <tr>
              <td>FACEBOOK</td>
            <td> <a href="https://www.facebook.com/namastewayanad/"style="text-decoration:none;color:white;">Namsthe Wayanad</a> </td>

            </tr>
          </table>


        </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
