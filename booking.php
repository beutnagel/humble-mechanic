<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <form action="" class="bookingForm">
      <input type="text" name="firstName" class="bookingForm__inputSmall" placeholder="First name">
      <input type="text" name="lastName" class="bookingForm__inputSmall" placeholder="Last name">
      <input type="tel" name="phone" class="bookingForm__inputSmall" placeholder="Phone number">
      <input type="text" name="email" class="bookingForm__inputSmall" placeholder="Email">
      <article class="licensePlate">
        <input type="text" name="licensePlate" class="licensePlate__input" placeholder="License plate">
        <p class="licensePlate__text">Year:</p>
        <p class="licensePlate__text">Model:</p>
        <p class="licensePlate__text">Color:</p>
      </article>
      <input type="text" name="date" class="bookingForm__inputSmall bookingForm__date" placeholder="Date">
      <input type="text" name="date" class="bookingForm__inputSmall" placeholder="Time">
      <label class="bookingForm__checkbox"><input type="checkbox" name="terms" >I agree with the terms and conditions</label>
      <button type="submit" class="bookingForm__submit">Submit</button>
    </form>
  </body>
</html>
